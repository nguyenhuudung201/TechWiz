@extends('admins.layouts.app')
@section('content')
<div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Update User</div>
                <div class="card-body">

        @if($errors->any())
        @foreach($errors->all() as $error)
        <p style="color:red;">{{ $error }}</p>
        @endforeach
        @endif

            <form action="{{route('updateUser',['user'=>$user])}}" method="post">
            @csrf
            @method('put')

            <div class="form-group">
                <div class="row">
                    <div class="col-6">
                        <label class="pb-1" for="name">Name:</label>
                        <input  class="form-control" type="text" name="name" placeholder="Enter Name" value="{{$user->name}}">
                    </div>
                    <div class="col-6">
                        <label class="pb-1" for="name">Email:</label>
                        <input  class="form-control" type="email" name="email" placeholder="Enter Email"  value="{{$user->email}}">
                    </div>
                </div>

                <div class="row pt-3">
                    <div class="col-6">
                        <label class="pb-1" for="password">Password:</label>
                        <input  class="form-control" type="password" name="password" placeholder="Enter Password"  value="{{$user->password}}">
                    </div>
                    <div class="col-6">
                        <label class="pb-1" for="password">Password Confirmation:</label>
                        <input  class="form-control"  type="password" name="password_confirmation" placeholder="Enter Confirm Password" >
                    </div>
                </div>

                <input class="btn btn-primary mt-3"  type="submit" value="Update">
            </div>


            </form>

        @if(Session::has('success'))
        <p style="color:green;">{{ Session::get('success') }}</p>
        @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
