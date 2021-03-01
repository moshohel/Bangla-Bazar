@extends('frontend.layouts.layout')
@section('content')

<!-- START preloader Animation -->
@include('frontend.partials.preloader')
<!-- END  -->

<!-- Home Popup Section -->
@include('frontend.partials.popup')
<!-- End Screen Load Popup Section -->

<!-- START Slider -->
@include('frontend.partials.slider')
<!-- END Slider -->

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
    @include('frontend.pages.product.partials.exclusive_products')
    <!-- END SECTION SHOP -->

    <!-- START SECTION SINGLE BANNER -->
    <div class="section bg_light_blue2 pb-0 pt-md-0">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-6 offset-md-1">
                    <div class="medium_divider d-none d-md-block clearfix"></div>
                    <div class="trand_banner_text text-center text-md-left">
                        <div class="heading_s1 mb-3">
                            <span class="sub_heading">New season trends!</span>
                            <h2>Best Summer Collection</h2>
                        </div>
                        <h5 class="mb-4">Sale Get up to 50% Off</h5>
                        <a href="shop-left-sidebar.html" class="btn btn-fill-out rounded-0">Shop Now</a>
                    </div>
                    <div class="medium_divider clearfix"></div>
                </div>
                <div class="col-md-5">
                    <div class="text-center trading_img">
                        <img src="/images/f9.jpg" alt="tranding_img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SINGLE BANNER -->

    <!-- START SECTION SHOP -->
    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="heading_s1 text-center">
                        <h2>Featured Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="product_slider carousel_slider owl-carousel owl-theme nav_style1 owl-loaded owl-drag" data-loop="true" data-dots="false" data-nav="true" data-margin="20" data-responsive="{&quot;0&quot;:{&quot;items&quot;: &quot;1&quot;}, &quot;481&quot;:{&quot;items&quot;: &quot;2&quot;}, &quot;768&quot;:{&quot;items&quot;: &quot;3&quot;}, &quot;1199&quot;:{&quot;items&quot;: &quot;4&quot;}}">





                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1130px, 0px, 0px); transition: all 0s ease 0s; width: 3673px;"><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="/images/product_img2.jpg" alt="product_img2">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                            <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">Lether Gray Tuxedo</a></h6>
                                    <div class="product_price">
                                        <span class="price">$55.00</span>
                                        <del>$95.00</del>
                                        <div class="on_sale">
                                            <span>25% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:68%"></div>
                                        </div>
                                        <span class="rating_num">(15)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#847764" style="background-color: rgb(132, 119, 100);"></span>
                                            <span data-color="#0393B5" style="background-color: rgb(3, 147, 181);"></span>
                                            <span data-color="#DA323F" style="background-color: rgb(218, 50, 63);"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="item">
                            <div class="product">
                                <span class="pr_flash">New</span>
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="/images/product_img3.jpg" alt="product_img3">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                            <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">woman full sliv dress</a></h6>
                                    <div class="product_price">
                                        <span class="price">$68.00</span>
                                        <del>$99.00</del>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:87%"></div>
                                        </div>
                                        <span class="rating_num">(25)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#333333" style="background-color: rgb(51, 51, 51);"></span>
                                            <span data-color="#7C502F" style="background-color: rgb(124, 80, 47);"></span>
                                            <span data-color="#2F366C" style="background-color: rgb(47, 54, 108);"></span>
                                            <span data-color="#874A3D" style="background-color: rgb(135, 74, 61);"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="/images/product_img4.jpg" alt="product_img4">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                            <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">light blue Shirt</a></h6>
                                    <div class="product_price">
                                        <span class="price">$69.00</span>
                                        <del>$89.00</del>
                                        <div class="on_sale">
                                            <span>20% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:70%"></div>
                                        </div>
                                        <span class="rating_num">(22)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#333333" style="background-color: rgb(51, 51, 51);"></span>
                                            <span data-color="#A92534" style="background-color: rgb(169, 37, 52);"></span>
                                            <span data-color="#B9C2DF" style="background-color: rgb(185, 194, 223);"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="/images/product_img5.jpg" alt="product_img5">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                            <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">blue dress for woman</a></h6>
                                    <div class="product_price">
                                        <span class="price">$45.00</span>
                                        <del>$55.25</del>
                                        <div class="on_sale">
                                            <span>35% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:80%"></div>
                                        </div>
                                        <span class="rating_num">(21)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#87554B" style="background-color: rgb(135, 85, 75);"></span>
                                            <span data-color="#333333" style="background-color: rgb(51, 51, 51);"></span>
                                            <span data-color="#5FB7D4" style="background-color: rgb(95, 183, 212);"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div><div class="owl-item active" style="width: 262.5px; margin-right: 20px;"><div class="item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="/images/product_img1.jpg" alt="product_img1">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                            <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">Blue Dress For Woman</a></h6>
                                    <div class="product_price">
                                        <span class="price">$45.00</span>
                                        <del>$55.25</del>
                                        <div class="on_sale">
                                            <span>35% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:80%"></div>
                                        </div>
                                        <span class="rating_num">(21)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#87554B" style="background-color: rgb(135, 85, 75);"></span>
                                            <span data-color="#333333" style="background-color: rgb(51, 51, 51);"></span>
                                            <span data-color="#DA323F" style="background-color: rgb(218, 50, 63);"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div><div class="owl-item active" style="width: 262.5px; margin-right: 20px;"><div class="item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="/images/product_img2.jpg" alt="product_img2">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                            <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">Lether Gray Tuxedo</a></h6>
                                    <div class="product_price">
                                        <span class="price">$55.00</span>
                                        <del>$95.00</del>
                                        <div class="on_sale">
                                            <span>25% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:68%"></div>
                                        </div>
                                        <span class="rating_num">(15)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#847764" style="background-color: rgb(132, 119, 100);"></span>
                                            <span data-color="#0393B5" style="background-color: rgb(3, 147, 181);"></span>
                                            <span data-color="#DA323F" style="background-color: rgb(218, 50, 63);"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div><div class="owl-item active" style="width: 262.5px; margin-right: 20px;"><div class="item">
                            <div class="product">
                                <span class="pr_flash">New</span>
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="/images/product_img3.jpg" alt="product_img3">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                            <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">woman full sliv dress</a></h6>
                                    <div class="product_price">
                                        <span class="price">$68.00</span>
                                        <del>$99.00</del>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:87%"></div>
                                        </div>
                                        <span class="rating_num">(25)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#333333" style="background-color: rgb(51, 51, 51);"></span>
                                            <span data-color="#7C502F" style="background-color: rgb(124, 80, 47);"></span>
                                            <span data-color="#2F366C" style="background-color: rgb(47, 54, 108);"></span>
                                            <span data-color="#874A3D" style="background-color: rgb(135, 74, 61);"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div><div class="owl-item active" style="width: 262.5px; margin-right: 20px;"><div class="item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="/images/product_img4.jpg" alt="product_img4">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                            <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">light blue Shirt</a></h6>
                                    <div class="product_price">
                                        <span class="price">$69.00</span>
                                        <del>$89.00</del>
                                        <div class="on_sale">
                                            <span>20% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:70%"></div>
                                        </div>
                                        <span class="rating_num">(22)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#333333" style="background-color: rgb(51, 51, 51);"></span>
                                            <span data-color="#A92534" style="background-color: rgb(169, 37, 52);"></span>
                                            <span data-color="#B9C2DF" style="background-color: rgb(185, 194, 223);"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div><div class="owl-item" style="width: 262.5px; margin-right: 20px;"><div class="item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="/images/product_img5.jpg" alt="product_img5">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                            <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">blue dress for woman</a></h6>
                                    <div class="product_price">
                                        <span class="price">$45.00</span>
                                        <del>$55.25</del>
                                        <div class="on_sale">
                                            <span>35% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:80%"></div>
                                        </div>
                                        <span class="rating_num">(21)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#87554B" style="background-color: rgb(135, 85, 75);"></span>
                                            <span data-color="#333333" style="background-color: rgb(51, 51, 51);"></span>
                                            <span data-color="#5FB7D4" style="background-color: rgb(95, 183, 212);"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="/images/product_img1.jpg" alt="product_img1">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                            <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">Blue Dress For Woman</a></h6>
                                    <div class="product_price">
                                        <span class="price">$45.00</span>
                                        <del>$55.25</del>
                                        <div class="on_sale">
                                            <span>35% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:80%"></div>
                                        </div>
                                        <span class="rating_num">(21)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#87554B" style="background-color: rgb(135, 85, 75);"></span>
                                            <span data-color="#333333" style="background-color: rgb(51, 51, 51);"></span>
                                            <span data-color="#DA323F" style="background-color: rgb(218, 50, 63);"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="/images/product_img2.jpg" alt="product_img2">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                            <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">Lether Gray Tuxedo</a></h6>
                                    <div class="product_price">
                                        <span class="price">$55.00</span>
                                        <del>$95.00</del>
                                        <div class="on_sale">
                                            <span>25% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:68%"></div>
                                        </div>
                                        <span class="rating_num">(15)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#847764" style="background-color: rgb(132, 119, 100);"></span>
                                            <span data-color="#0393B5" style="background-color: rgb(3, 147, 181);"></span>
                                            <span data-color="#DA323F" style="background-color: rgb(218, 50, 63);"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="item">
                            <div class="product">
                                <span class="pr_flash">New</span>
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="/images/product_img3.jpg" alt="product_img3">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                            <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">woman full sliv dress</a></h6>
                                    <div class="product_price">
                                        <span class="price">$68.00</span>
                                        <del>$99.00</del>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:87%"></div>
                                        </div>
                                        <span class="rating_num">(25)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#333333" style="background-color: rgb(51, 51, 51);"></span>
                                            <span data-color="#7C502F" style="background-color: rgb(124, 80, 47);"></span>
                                            <span data-color="#2F366C" style="background-color: rgb(47, 54, 108);"></span>
                                            <span data-color="#874A3D" style="background-color: rgb(135, 74, 61);"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="/images/product_img4.jpg" alt="product_img4">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                            <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">light blue Shirt</a></h6>
                                    <div class="product_price">
                                        <span class="price">$69.00</span>
                                        <del>$89.00</del>
                                        <div class="on_sale">
                                            <span>20% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:70%"></div>
                                        </div>
                                        <span class="rating_num">(22)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#333333" style="background-color: rgb(51, 51, 51);"></span>
                                            <span data-color="#A92534" style="background-color: rgb(169, 37, 52);"></span>
                                            <span data-color="#B9C2DF" style="background-color: rgb(185, 194, 223);"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="ion-ios-arrow-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="ion-ios-arrow-right"></i></button></div><div class="owl-dots disabled"></div></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->

    <!-- START SECTION TESTIMONIAL -->
    <div class="section bg_redon">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="heading_s1 text-center">
                        <h2>Our Client Say!</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="testimonial_wrap testimonial_style1 carousel_slider owl-carousel owl-theme nav_style2 owl-loaded owl-drag" data-nav="true" data-dots="false" data-center="true" data-loop="true" data-autoplay="true" data-items="1">




                    <div class="owl-stage-outer"><div class="owl-stage" style="transition: all 0.25s ease 0s; width: 5640px; transform: translate3d(-2115px, 0px, 0px);"><div class="owl-item cloned" style="width: 705px;"><div class="testimonial_box">
                            <div class="testimonial_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem.</p>
                            </div>
                            <div class="author_wrap">
                                <div class="author_img">
                                    <img src="/images/user_img3.jpg" alt="user_img3">
                                </div>
                                <div class="author_name">
                                    <h6>Daisy Lana</h6>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 705px;"><div class="testimonial_box">
                            <div class="testimonial_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem.</p>
                            </div>
                            <div class="author_wrap">
                                <div class="author_img">
                                    <img src="/images/user_img4.jpg" alt="user_img4">
                                </div>
                                <div class="author_name">
                                    <h6>John Becker</h6>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div></div><div class="owl-item" style="width: 705px;"><div class="testimonial_box">
                            <div class="testimonial_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem.</p>
                            </div>
                            <div class="author_wrap">
                                <div class="author_img">
                                    <img src="/images/w3.jpg" alt="user_img1">
                                </div>
                                <div class="author_name">
                                    <h6>Lissa Castro</h6>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div></div><div class="owl-item active center" style="width: 705px;"><div class="testimonial_box">
                            <div class="testimonial_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem.</p>
                            </div>
                            <div class="author_wrap">
                                <div class="author_img">
                                    <img src="/images/w2.jpg" alt="user_img2">
                                </div>
                                <div class="author_name">
                                    <h6>Alden Smith</h6>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div></div><div class="owl-item" style="width: 705px;"><div class="testimonial_box">
                            <div class="testimonial_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem.</p>
                            </div>
                            <div class="author_wrap">
                                <div class="author_img">
                                    <img src="/images/w1.jpg" alt="user_img3">
                                </div>
                                <div class="author_name">
                                    <h6>Daisy Lana</h6>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div></div><div class="owl-item" style="width: 705px;"><div class="testimonial_box">
                            <div class="testimonial_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem.</p>
                            </div>
                            <div class="author_wrap">
                                <div class="author_img">
                                    <img src="/images/w4.jpg" alt="user_img4">
                                </div>
                                <div class="author_name">
                                    <h6>John Becker</h6>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 705px;"><div class="testimonial_box">
                            <div class="testimonial_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem.</p>
                            </div>
                            <div class="author_wrap">
                                <div class="author_img">
                                    <img src="/images/user_img1.jpg" alt="user_img1">
                                </div>
                                <div class="author_name">
                                    <h6>Lissa Castro</h6>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 705px;"><div class="testimonial_box">
                            <div class="testimonial_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem.</p>
                            </div>
                            <div class="author_wrap">
                                <div class="author_img">
                                    <img src="/images/user_img2.jpg" alt="user_img2">
                                </div>
                                <div class="author_name">
                                    <h6>Alden Smith</h6>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="ion-ios-arrow-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="ion-ios-arrow-right"></i></button></div><div class="owl-dots disabled"></div></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION TESTIMONIAL -->

    <!-- START SECTION SHOP INFO -->
    <div class="section pb_70">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-4">
                        <div class="icon_box icon_box_style1">
                            <div class="icon">
                                <i class="flaticon-shipped"></i>
                            </div>
                            <div class="icon_box_content">
                                <h5>Free Delivery</h5>
                                <p>If you are going to use of Lorem, you need to be sure there anything</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon_box icon_box_style1">
                            <div class="icon">
                                <i class="flaticon-money-back"></i>
                            </div>
                            <div class="icon_box_content">
                                <h5>30 Day Return</h5>
                                <p>If you are going to use of Lorem, you need to be sure there anything</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon_box icon_box_style1">
                            <div class="icon">
                                <i class="flaticon-support"></i>
                            </div>
                            <div class="icon_box_content">
                                <h5>27/4 Support</h5>
                                <p>If you are going to use of Lorem, you need to be sure there anything</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- END SECTION SHOP INFO -->

    <!-- START SECTION SUBSCRIBE NEWSLETTER -->
    <div class="section bg_default small_pt small_pb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="heading_s1 mb-md-0 heading_light">
                        <h3>Subscribe Our Newsletter</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="newsletter_form">
                        <form>
                            <input type="text" required="" class="form-control rounded-0" placeholder="Enter Email Address">
                            <button type="submit" class="btn btn-dark rounded-0" name="submit" value="Submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- START SECTION SUBSCRIBE NEWSLETTER -->

</div>

@endsection