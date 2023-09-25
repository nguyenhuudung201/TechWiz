@extends('admins.layouts.app')
@section('content')
<div class="container-xl px-4 mt-n10">
    <div class="row">
        <div class="col-xl-12">
            <!-- Account details card-->
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
                        <input  type="submit" class="btn btn-primary" value="Save ">
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
