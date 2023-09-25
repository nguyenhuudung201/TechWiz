<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{


    public function dashboard()
    {
        $title='Dashboard';
        $say='Hello Admin ! Good Luck';
        $totalBill=0;
        $orders= DB::table('orders')->get();
        $totalUser= DB::table('users')->count();
        $totalProduct= DB::table('accessories')->count();
        foreach($orders as $order){
            $totalBill+= $order->bill;
        };

        return view('admins.dashboard',compact('totalBill','title','say','totalUser','totalProduct'));
    }

    public function users()
    {
        $userCount = DB::table('users')->where('role', '!=', 1)->count();
        // $users = User::where('role', '!=', 1)->get();
        $users = User::all();
        return view('admins.account', compact(['users', 'userCount']));
    }

    public function createUser()
    {
        return view('admins.create_user');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'string|required|min:2',
            'email' => 'string|email|required|max:100|unique:users',
            'password' => 'string|required|confirmed|min:6'
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect(route('superAdminUsers'));
    }


    public function editUser(User $user)
    {
        return view('admins.update_user', ['user' => $user]);
    }

    public function updateUser(User $user, Request $request)
    {


        $data = $request->validate([
            'name' => 'string|required|min:2',
            'email' => 'string|email|max:100',
            'password' => 'string|required|confirmed|min:6'
        ]);
        $data['password'] = Hash::make($request->password);
        $user->update($data);

        return redirect(route('superAdminUsers'));
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return redirect(route('superAdminUsers'));
    }

    public function manageRole()
    {
        $users = User::where('role', '!=', 1)->get();
        $roles = Role::all();
        return view('admins.manage-role', compact(['users', 'roles']));
    }

    public function updateRole(Request $request)
    {
        User::where('id', $request->user_id)->update([
            'role' => $request->role_id
        ]);
        return redirect()->back();
    }
    public function categories()
    {
        $categoryCount = Category::count();
        $categories = Category::all();
        return view('admins.category', ['categories' => $categories, 'categoryCount' => $categoryCount]);
    }
    public function storeCategory(Request $request)
    {

        $request->validate([
            'name' => 'string|required|min:7',

        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->save();
        return redirect()->back()->with('success','Add Category Success');

    }
    public function createCategory()
    {
        return view('admins.create_category');
    }
    public function editCategory(Category $category)
    {
        return view('admins.edit_category', ['category' => $category]);
    }
    public function updateCategory(Category $category, Request $request)
    {
        $data = $request->validate([
            'name' => 'string|required|min:7',
        ]);
        $category->update($data);

        return redirect(route('superAdminCatgegries'));
    }
    public function deleteCategory(Category $category)
    {
        $category->delete();
        return redirect(route('superAdminCatgegries'));
    }

    public function accountAdmin(){
        $user= User::find(session()->get('id'));
        return view('admins.accountAdmin',compact('user'));
    }

    public function updateAccountAdmin(Request $request){
        // $request->validate([
        //     'name' => 'string|required|min:2',
        //     'email' => 'string|email|max:100',
        //     'password' => 'string|required|confirmed|min:6',
        //     'newPassword' => 'string|required|confirmed|min:6',
        //     'newPassword_confirmation' => 'string|required|confirmed|min:6'
        // ]);
        $user= User::find(session()->get('id'));
        $user->name = $request->input('name');
        $user->email = $request->input('email');


        if(Hash::check($request->input('password'), $user->password)){
            $user->password=Hash::make($request->input('newPassword'));
            $user->save();
            return redirect()->back()->with('success','Updatae Infor Success');


        } else{
            return redirect()->back()->with('errors','Incorrect passsword');

        }
    }

    // public function checkpassword(String )


}
