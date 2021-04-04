<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Mohammad Shohel" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Bangla Bazar eCommerce Website. Bangla Bazar is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods.">
<meta name="keywords" content="ecommerce, electronics store, Fashion store, furniture store, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- SITE TITLE -->
<title>
    @yield('title', 'Bangla Bazar Ecommerce')
</title>
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

@include('frontend.partials.messages')

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

@yield('scripts')

</body>
</html>