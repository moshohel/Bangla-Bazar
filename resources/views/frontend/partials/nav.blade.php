<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="{{ route('index') }}">
      {{-- <img class="logo_light" src="/images/logo_light.png" alt="logo" />
      <img class="logo_dark" src="/images/logo_dark.png" alt="logo" /> --}}
      <h2 style="font-family: monospace; font-weight: lighter; font-size: 2rem">
        Bangla Bazaar
    </h2>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false">
      <span class="ion-android-menu"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav">
          <li class="dropdown">
              <a class="nav-link" href="{{ route('index') }}">Home</a>
          </li>
          <li class="dropdown dropdown-mega-menu">
              <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Category</a>
              <div class="dropdown-menu">
                  <ul class="mega-menu d-lg-flex">
                    @foreach (App\Models\Category::orderBy('name', 'asc')->where('parent_id', NULL)->get() as $parent)
                    <li class="mega-menu-col col-lg-3">
                        <ul>
                            <li class="dropdown-header">{{ $parent->name }}</li>
                            @foreach (App\Models\Category::orderBy('name', 'asc')->where('parent_id', $parent->id)->get() as $child)
                                <li><a class="dropdown-item nav-link nav_item" href="{{ route('categories.show', $child->id) }}">{{ $child->name }}</a></li>
                            @endforeach

                        </ul>
                    </li>
                    @endforeach


                  </ul>
                  <div class="d-lg-flex menu_banners">
                      <div class="col-sm-4">
                          <div class="header-banner">
                              <img src="/images/menu_banner1.jpg" alt="menu_banner1">
                              <div class="banne_info">
                                  <h6>10% Off</h6>
                                  <h4>New Arrival</h4>
                                  <a href="#">Shop now</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-4">
                          <div class="header-banner">
                              <img src="/images/menu_banner2.jpg" alt="menu_banner2">
                              <div class="banne_info">
                                  <h6>15% Off</h6>
                                  <h4>Men's Fashion</h4>
                                  <a href="#">Shop now</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-4">
                          <div class="header-banner">
                              <img src="/images/menu_banner3.jpg" alt="menu_banner3">
                              <div class="banne_info">
                                  <h6>23% Off</h6>
                                  <h4>Kids Fashion</h4>
                                  <a href="#">Shop now</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </li>
          <li>
              <a class=" nav-link nav_item" href="{{ route('products') }}">Products</a>
          </li>
          <li>
            <a class=" nav-link" href="#">About Us</a>
        </li>
          <li>
              <a class="nav-link nav_item" href="{{ route('contact') }}">Contact Us</a>
          </li>
          <li>
            <a class="nav-link btn-cart-nav" href="{{ route('carts') }}">

              <button class="btn btn-danger" style='padding:0%; width: 13vh; height: 7vh;'>
                <span>Cart</span>
                <span class="badge badge-warning" id="totalItems">
                  {{ App\Models\Cart::totalItems() }}
                </span>
              </button>

            </a>
          </li>
      </ul>
  </div>

  <ul class="navbar-nav attr-nav align-items-center">
      <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
          <div class="search_wrap">
              <span class="close-search"><i class="ion-ios-close-empty"></i></span>
              <form action="{!! route('search') !!}" method="get">
                  <input type="text" placeholder="Search Products" class="form-control" name="search" id="search_input">
                  <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
              </form>
          </div><div class="search_overlay"></div>
      </li>
      <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count">{{ App\Models\Cart::totalItems() }}</span></a>
          <div class="cart_box dropdown-menu dropdown-menu-right">
              <ul class="cart_list">
                  <li>
                      <a href="#" class="item_remove"><i class="ion-close"></i></a>
                      <a href="#"><img src="/images/cart_thamb1.jpg" alt="cart_thumb1">Variable product 001</a>
                      <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>78.00</span>
                  </li>
                  <li>
                      <a href="#" class="item_remove"><i class="ion-close"></i></a>
                      <a href="#"><img src="/images/cart_thamb2.jpg" alt="cart_thumb2">Ornare sed consequat</a>
                      <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>81.00</span>
                  </li>
              </ul>
              <div class="cart_footer">
                  <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">$</span></span>159.00</p>
                  <p class="cart_buttons"><a href="#" class="btn btn-fill-line rounded-0 view-cart">View Cart</a><a href="#" class="btn btn-fill-out rounded-0 checkout">Checkout</a></p>
              </div>
          </div>
      </li>
  </ul>
</nav>