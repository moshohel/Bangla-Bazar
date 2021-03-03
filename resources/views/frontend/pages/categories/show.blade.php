@extends('frontend.layouts.layout')

@section('content')

<div class="breadcrumb_section bg_gray page-title-mini">
  <div class="container"><!-- STRART CONTAINER -->
      <div class="row align-items-center">
        <div class="col-md-6">
              <div class="page-title">
              <h1>All Products in <span class="badge badge-info">{{ $category->name }} Category</span></h1>
              </div>
          </div>
          <div class="col-md-6">
              <ol class="breadcrumb justify-content-md-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Pages</a></li>
                  <li class="breadcrumb-item active">Shop Left Sidebar</li>
              </ol>
          </div>
      </div>
  </div><!-- END CONTAINER-->
</div>

  <!-- START MAIN CONTENT -->
<div class="main_content">

  <!-- START SECTION SHOP -->
  <div class="section">
    <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <div class="row align-items-center mb-4 pb-1">
              <div class="col-12">
                <div class="product_header">
                  <div class="product_header_left">
                      <div class="custom_select">
                          <select class="form-control form-control-sm">
                              <option value="order">Default sorting</option>
                              <option value="popularity">Sort by popularity</option>
                              <option value="date">Sort by newness</option>
                              <option value="price">Sort by price: low to high</option>
                              <option value="price-desc">Sort by price: high to low</option>
                          </select>
                      </div>
                  </div>
                  <div class="product_header_right">
                    <div class="products_view">
                          <a href="javascript:Void(0);" class="shorting_icon grid active"><i class="ti-view-grid"></i></a>
                          <a href="javascript:Void(0);" class="shorting_icon list"><i class="ti-layout-list-thumb"></i></a>
                      </div>
                      <div class="custom_select">
                          <select class="form-control form-control-sm">
                              <option value="">Showing</option>
                              <option value="9">9</option>
                              <option value="12">12</option>
                              <option value="18">18</option>
                          </select>
                      </div>
                  </div>
                </div>
              </div>
            </div>


            @php
              $products = $category->products()->paginate(3);
            @endphp

            @if ($products->count() > 0)
              @include('frontend.pages.product.partials.all_products')
            @else
              <div class="alert alert-warning">
                No Products has added yet in this category !!
              </div>
            @endif


          </div>

            <!-- Start Sidebar -->

            @include('frontend.partials.product-sidebar')
            {{-- @include('frontend.partials.product-left-sidebar') --}}

            <!-- End Sidebar -->

    </div>
  </div>
</div>
  <!-- END SECTION SHOP -->

@endsection
