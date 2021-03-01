@extends('frontend.layouts.layout')
@section('content')

<div class="main_content">
    <!-- START SECTION BANNER -->
    <div class="section pb_20">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <div class="single_banner">
                      <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80" alt="shop_banner_img1">
                      <div class="single_banner_info">
                          <h5 class="single_bn_title1">Super Sale</h5>
                          <h3 class="single_bn_title">New Collection</h3>
                          <a href="shop-left-sidebar.html" class="single_bn_link">Shop Now</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="single_banner">
                      <img src="https://images.unsplash.com/photo-1496886757622-f486fd7607e7?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="shop_banner_img2">
                      <div class="single_banner_info">
                          <h3 class="single_bn_title">New Season</h3>
                          <h4 class="single_bn_title1">Sale 40% Off</h4>
                          <a href="shop-left-sidebar.html" class="single_bn_link">Shop Now</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- END SECTION BANNER -->

  <!-- START SECTION SHOP -->

  @include('frontend.pages.product.partials.all_products')


</div>
  <!-- End Sidebar + Content -->
@endsection
