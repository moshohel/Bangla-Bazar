
{{-- <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li> --}}
<form class="form-inline" action="{{ route('carts.store') }}" method="post">
  @csrf
  <input type="hidden" name="product_id" value="{{ $product->id }}">
  <button type="button" class="btn btn-warning" onclick="addToCart({{ $product->id }})"><i class="fa fa-plus"></i> Add to cart</button>
  {{-- <button type="submit" class="btn btn-warning"><i class="fa fa-plus"></i> Add to cart</button> --}}
</form>
