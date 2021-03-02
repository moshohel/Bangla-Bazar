@extends('frontend.layouts.layout')
@section('content')

<div class="main_content">

  <div class="row mt-4 pt-4 justify-content-center">
    <div class="col-md-6">
        <div class="heading_s1 text-center">
          <h2><p> Searched For - <span class="badge badge-primary">{{ $search }}</span></p></h2>
        </div>
    </div>
</div>

  @include('frontend.pages.product.partials.all_products')

</div>

@endsection
