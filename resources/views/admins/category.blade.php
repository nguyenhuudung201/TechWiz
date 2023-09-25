@extends('admins.layouts.app')
@section('content')
<div class="container-xl px-4 mt-n10">

    <div class="row">
        <div class="col-xl-4">
            <div class="card mb-4">
                <div class="card-header">Add Category</div>

                <div class="card-body">
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                        <p style="color:red;">{{ $error }}</p>
                        @endforeach
                    @endif

                    <form  action="{{ route('storeCategory') }} " method="POST">
                        @csrf
                        @method('post')
                    <div class="form-group">
                        <input  class="form-control" type="text" name="name" placeholder="Enter Name">
                        <br>
                        <input  type="submit" class="btn btn-primary" value="Add ">
                    </div>
                    </form>

                    @if(Session::has('success'))
                        <p style="color:green;">{{ Session::get('success') }}</p>
                    @endif
            </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Category List</div>
                <div class="card-body">
                    {{-- <a href="{{ route('createCategory') }}">Add Category</a> --}}
                    <h4>Total Category: {{$categoryCount}}</h4>

                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Acction</th>
                        </tr>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td style="display: flex">
                                    <a class="btn btn-primary btn-sm" style="margin-right: 10px" href="{{ route('editCategory',['category'=>$category]) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <form method="POST" action="{{ route('deleteCategory',['category'=>$category]) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm" value="Delete"> <i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
