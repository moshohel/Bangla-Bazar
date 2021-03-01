<div class="section small_pt pb_70">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-6">
              <div class="heading_s1 text-center">
                <h2><p>Exclusive Products</p></h2>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-12">
              <div class="tab-style1">
                  <ul class="nav nav-tabs justify-content-center" role="tablist">
                      <li class="nav-item">
                          <a class="nav-link active" id="arrival-tab" data-toggle="tab" href="#arrival" role="tab" aria-controls="arrival" aria-selected="true">New Arrival</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" id="sellers-tab" data-toggle="tab" href="#sellers" role="tab" aria-controls="sellers" aria-selected="false">Best Sellers</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" id="featured-tab" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="false">Featured</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" id="special-tab" data-toggle="tab" href="#special" role="tab" aria-controls="special" aria-selected="false">Special Offer</a>
                      </li>
                  </ul>
              </div>

              <div class="tab-content">
                  <div class="tab-pane fade show active" id="arrival" role="tabpanel" aria-labelledby="arrival-tab">
                      <div class="row shop_container">
                            @foreach ( $data['newProducts'] as $product)

                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product">

                                        {{-- showing one image from productImage table --}}
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



                  <div class="tab-pane fade " id="sellers" role="tabpanel" aria-labelledby="sellers-tab">
                    <div class="row shop_container">
                          @foreach ( $data['bestSellProducts'] as $product)

                              <div class="col-lg-3 col-md-4 col-6">
                                  <div class="product">

                                      {{-- showing one image from productImage table --}}
                                      @php $i = 1; @endphp
                                      @foreach ($product->images as $image)
                                          @if ($i > 0)
                                              <div class="product_img">
                                                  <a href="shop-product-detail.html">
                                                      <img src="{{  '/images/'. $image->image  }}" alt="product_img1">
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
                                          <h6 class="product_title"><a href="shop-product-detail.html">{{ $product->title }}</a></h6>
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
</div>
