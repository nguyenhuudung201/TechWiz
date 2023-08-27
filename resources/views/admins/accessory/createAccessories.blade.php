@extends('admins.layouts.app')
@section('content')
<div class="container-xl px-4 mt-n10">

    <div class="row">
        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Create Products</div>
                <div class="card-body">

                @if($errors->any())
                @foreach($errors->all() as $error)
                <p style="color:red;">{{ $error }}</p>
                @endforeach
                @endif
                    <div class="sbp-preview-content">
                        <form action="{{route('storeAccessories')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <div class="row pb-3">
                                    <div class="col-6">
                                        <label class="pb-1" for="type_id">Name:</label>
                                        <input  class="form-control form-control-solid" type="text" name="name" placeholder="Enter Name" >
                                    </div>
                                    <div class="col-6">
                                        <label class="pb-1" for="type_id">Use:</label>

                                         <input  class="form-control form-control-solid" type="text" name="use" placeholder="Enter Use" >
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col-6">
                                        <label class="pb-1" for="type_id">Price:</label>
                                <input  class="form-control form-control-solid" type="text" name="price" placeholder="Enter Price" >
                                    </div>
                                    <div class="col-6">
                                        <label class="pb-1" for="type_id">Choose a Type:</label>

                                        <select class="form-control form-control-solid" name="type_id" id="type_id">
                                            @foreach ($category as $categories)
                                                <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                </div>



                                {{-- <input  class="form-control form-control-solid" type="text" name="type_id" placeholder="Enter Type Id" > --}}


                                <label>Image:</label>
                                <input  class="form-control form-control-solid" type="file" name="image"  >
                                <input  type="submit" class="btn btn-primary mt-3" value="Create">
                            </div>
                            </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
