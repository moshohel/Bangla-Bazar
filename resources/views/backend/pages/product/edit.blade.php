@extends('backend.layouts.layout')

@section('content')
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Edit Product</h2>
    </div>
    <div class="card-body">
        <form action="{{ route("admin.product.update", $product->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{-- INCULDE Messages Partial --}}
            @include('backend.partials.messages')
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" name="title" class="form-control"  value="{{ $product->title }}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea name="description" rows="4" class="form-control">{{ $product->description }}</textarea>
              </div>
            <div class="form-group">
                <label for="exampleFormControlPassword">Price</label>
                <input type="number" class="form-control" name="price"  value="{{ $product->price }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlPassword">Quantity</label>
                <input type="number" class="form-control"  name="quantity" value="{{ $product->quantity }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Product Image</label>
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <input type="file" class="form-control-file" name="product_image[]" id="product_image">
                    </div>
                    <div class="col-md-4 mb-2">
                        <input type="file" class="form-control-file" name="product_image[]" id="product_image">
                    </div>
                    <div class="col-md-4 mb-2">
                        <input type="file" class="form-control-file" name="product_image[]" id="product_image">
                    </div>
                    <div class="col-md-4 mb-2">
                        <input type="file" class="form-control-file" name="product_image[]" id="product_image">
                    </div>
                    <div class="col-md-4 mb-2">
                        <input type="file" class="form-control-file" name="product_image[]" id="product_image">
                    </div>
                </div>
            </div>
            <div class="form-footer pt-4 pt-5 mt-4 border-top">
                <button type="submit" class="btn btn-primary btn-default">Product Update</button>
                <button type="submit" class="btn btn-secondary btn-default">Cancel</button>
            </div>
        </form>
    </div>
</div>
@endsection