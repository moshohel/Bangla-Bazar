<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Anil z" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods.">
<meta name="keywords" content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">

<!-- SITE TITLE -->
<title>Shopwise - eCommerce Bootstrap 4 HTML Template</title>
<!-- CSS -->
@include('frontend.partials.styles')

</head>

<body>

{{-- <!-- LOADER ANIMATION-->
@include('frontend.partials.preloader')
<!-- END LOADER --> --}}

{{-- <!-- Home Popup Section -->
@include('frontend.partials.popup')
<!-- End Screen Load Popup Section --> --}}

<!-- START HEADER -->
@include('frontend.partials.header')
<!-- END HEADER -->

{{-- <!-- START Slider -->
@include('frontend.partials.slider')
<!-- END Slider --> --}}

<!-- Main Content -->
@yield('content')
<!-- End Main Content -->

<!-- START FOOTER -->
@include('frontend.partials.footer')
<!-- END FOOTER -->

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

{{-- Scripts --}}
@include('frontend.partials.scripts')

</body>
</html>