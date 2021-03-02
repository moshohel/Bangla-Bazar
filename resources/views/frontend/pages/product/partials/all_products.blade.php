<div class="section small_pt pb_70">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-6">
              <div class="heading_s1 text-center">
                <h2><p>All Products</p></h2>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-12">

              <div class="tab-content">

                      <div class="row shop_container">
                            @foreach ( $products as $product)

                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product">

                                        {{-- show product image --}}
                                        @php $i = 1; @endphp
                                        @foreach ($product->images as $image)
                                            @if ($i > 0)
                                                <div class="product_img">
                                                    <a href="{{ route('products.show', $product->slug) }}">
                                                        <img src="{{  '/images/'. $image->image  }}" alt="{{ $product->title }}">
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
                                            @endif
                                        @php $i--; @endphp
                                        @endforeach


                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <a href="{{ route('products.show', $product->slug) }}">{{ $product->title }}</a>
                                            </h6>
                                            <div class="product_price">
                                                <span class="price">${{ $product->price }}</span>
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
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                      </div>
              </div>
          </div>
      </div>
  </div>
</div>

  {{-- <div class="p-4 pagination pagination-lg justify-content-center">
    {{ $products->links() }}
  </div> --}}
  <div class="mt-4 mb-4">
    <nav aria-label="...">
        <ul class="m-6 pagination justify-content-center">
            {{ $products->links() }}
        </ul>
        </nav>
  </div>


