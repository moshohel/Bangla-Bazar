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
                <label for="exampleInputEmail1">Select Category</label>
                <select class="form-control" name="category_id">
                  <option value="">Please select a category for the product</option>
                  @foreach (App\Models\Category::orderBy('name', 'asc')->where('parent_id', NULL)->get() as $parent)

                  {{-- <option value="{{ $parent->id }}" {{ $parent->id == $product->category->id ? 'selected': '' }}>{{ $parent->name }}</option>

                    @foreach (App\Models\Category::orderBy('name', 'asc')->where('parent_id', $parent->id)->get() as $child)
                      <option value="{{ $child->id }}"  {{ $child->id == $product->category->id ? 'selected': '' }}> ------> {{ $child->name }}</option>

                    @endforeach --}}
                    <script>
                        console.log(<?= json_encode($parent->id); ?>);
                    </script>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Select Brand</label>
                <select class="form-control" name="brand_id">
                  <option value="">Please select a brand for the product</option>
                  @foreach (App\Models\Brand::orderBy('name', 'asc')->get() as $br)
                  <script>
                        console.log(<?= json_encode($br->id); ?>);
                    </script>
                    <option value="" {{ $br->id == $product->brand->id ? 'selected' : '' }}>{{ $br->name }}</option>
                  @endforeach
                </select>
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