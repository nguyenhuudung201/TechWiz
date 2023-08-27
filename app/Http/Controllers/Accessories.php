<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Accessory;
use App\Models\Type;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Dd;

class Accessories extends Controller
{


    public function index(Request $request)
    {

        $tile = 'Accessories';
        $types = Type::all();
        $query = Accessory::query();
        if (isset($request->title) && ($request->title != null)) {
            $query->where('name', 'like',  '%' . $request->title . '%');
        }


        if (isset($request->type) && ($request->type != null)) {
            $query->whereHas('type', function ($q) use ($request) {
                $q->whereIn('id', $request->type);
            });
        }
        if (isset($request->min) && ($request->min != null)) {
            $query->where('price', '>=', $request->min);
        }
        if (isset($request->max) && ($request->max != null)) {
            $query->where('price', '<=', $request->max);
        }
        $accessories = $query->get();
        return view('admins.accessory.index', compact('accessories', 'types', 'tile'));
    }
    public function updateAccessories(Accessory $accessory, Request $request)
    {
        // return $request;
        $accessory = Accessory::find($accessory->id);
        $request->validate([
            'name' => 'string|required|',
            'use' => 'string|required|',
            'price' => 'required|',

            'type_id' => 'int|required|'
        ]);



        $image = time() . '.' . $request->image->extension();
        $request->image->move(public_path('/images/product/'), $image);
        $accessory->image = $image;

        if ($accessory->save()) {
            return redirect(route('adminAccessories'));
        }
    }
    public function editAccessories(Accessory $accessory)
    {
        return view('admins.accessory.editAccessories', ['accessory' => $accessory]);
    }
    public function deleteAccessories(Accessory $accessory)
    {
        $accessory->delete();
        return redirect(route('adminAccessories'));
    }
    public function userAccessory(Request $request)
    {
        $types = Category::all();

        $query = Accessory::latest();
        if (isset($request->title) && ($request->title != null)) {
            $query->where('name', 'like', '%' . $request->title . '%');
        }
        if (isset($request->type) && ($request->type != null)) {
            $query->where('type_id', '=', $request->type);
        }
        if (isset($request->min) && ($request->min != null)) {
            $query->where('price', '>=', $request->min);
        }
        if (isset($request->max) && ($request->max != null)) {
            $query->where('price', '<=', $request->max);
        }
        $accessories = $query->paginate(7);
        $counts= Accessory::count();
        return view('clients.shop', compact('accessories', 'types', 'counts'));
    }

   

    public function singleAccessory($id)
    {

        $accessory = Accessory::Join('categories', 'accessories.type_id', '=', 'categories.id')
            ->select('accessories.*', 'categories.name as name_type')
            ->where('accessories.id', '=', $id)
            ->get();
        $accessory = $accessory[0];
        // return  $accessory['0'];
        $accessories = Accessory::all();
        return view('clients.detail_product', compact('accessory', 'accessories'));
    }

    public function ListOrder()
    {
        $title = 'Dashboard';
        $say = 'Hello Admin ! Good Luck';
        $orders = Order::all();
        $countorders = Order::count();
        return view('admins.listOrder', compact('orders', 'countorders', 'title', 'say'));
    }

    public function createAccessories()
    {

        $category = Category::all();
        return view('admins.accessory.createAccessories', compact('category'));
    }


    public function storeAccessories(Request $request)
    {
        $accessory = new Accessory;
        $request->validate([
            'name' => 'string|required|',
            'use' => 'string|required|',
            'price' => 'required|',
            'type_id' => 'int|required|'
        ]);

        $accessory->name = $request->input('name');

        $accessory->price = $request->input('price');
        $accessory->use = $request->input('use');
        $accessory->type_id = $request->input('type_id');
        $image = time() . '.' . $request->image->extension();
        $request->image->move(public_path('/images/product/'), $image);
        $accessory->image = $image;

        $accessory->save();
        return redirect(route('adminAccessories'));
    }
}
