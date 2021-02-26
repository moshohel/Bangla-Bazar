@extends('backend.layouts.layout')

@section('content')
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Product Add</h2>
    </div>
    <div class="card-body">
        <form action="{{ route("admin.product.store") }}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- INCULDE Messages Partial --}}
            @include('backend.partials.messages')
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Product Title">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlPassword">Price</label>
                <input type="number" class="form-control" name="price" id="exampleFormControlPassword" placeholder="Product price">
            </div>
            <div class="form-group">
                <label for="exampleFormControlPassword">Quantity</label>
                <input type="number" class="form-control"  name="quantity" id="exampleFormControlPassword" placeholder="Product price">
            </div>
            {{-- <div class="form-group">
                <label for="exampleFormControlSelect12">Quantity</label>
                <select class="form-control" name="quantity" id="exampleFormControlSelect12">
                    <option>10</option>
                    <option>20</option>
                    <option>30</option>
                    <option>40</option>
                    <option>50</option>
                    <option>60</option>
                    <option>70</option>
                    <option>80</option>
                    <option>90</option>
                    <option>100</option>
                </select>
            </div> --}}
            <div class="form-group">
                <label for="exampleFormControlFile1">Product Image</label>
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <input type="file" class="form-control-file" name="product_image[]"  id="product_image">
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
                <button type="submit" class="btn btn-primary btn-default">Add Product</button>
                <button type="submit" class="btn btn-secondary btn-default">Cancel</button>
            </div>
        </form>
    </div>
</div>
@endsection