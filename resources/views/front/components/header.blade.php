<div id="apus-mobile-menu" class="apus-offcanvas hidden-lg hidden-md">
    <div class="apus-offcanvas-body">
        <div class="offcanvas-head bg-primary">
            <a class="btn-toggle-canvas" data-toggle="offcanvas">
                <i class="ti-close"></i> <span>Close</span>
            </a>
        </div>
        <nav class="navbar navbar-offcanvas navbar-static" role="navigation">
            <div class="navbar-collapse navbar-offcanvas-collapse">
                <ul id="menu-main-menu" class="nav navbar-nav main-mobile-menu">
                    <li id="menu-item-55" class="has-submenu menu-item-55">
						<a href="#">Trang Chủ</a>
                    </li>
                    <li id="menu-item-429" class="has-submenu menu-item-429">
						<a href="{{ url('shop') }}">Shop</a>
                    </li>
                    <li id="menu-item-393" class="has-submenu menu-item-393">
						<a href="">Thiết Kế</a>
                    </li>
                    <li id="menu-item-43" class="menu-item-43">
						<a href="#">Bán Áo Thun</a>
					</li>
                    <li id="menu-item-513" class="has-submenu menu-item-513">
						<a href="#">Theo Dõi Đơn Hàng</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="top-menu-mobile">
            <div class="navbar-collapse navbar-offcanvas-collapse">
                <h4 class="title">Tài Khoản</h4>
                <nav class="navbar navbar-offcanvas navbar-static" role="navigation">
                    <ul class="nav navbar-nav main-mobile-menu">
                        <li><a class="login register-login-action" data-action="#customer_login" href="{{ url('login') }}" title="Sign in">Đăng Nhập</a></li>
                        <li><a class="register register-login-action" data-action="#customer_register" href="{{ url('login') }}" title="Register">Đăng Ký</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="over-dark"></div>
<div id="apus-header-mobile" class="header-mobile hidden-lg hidden-md clearfix">
    <div class="container">
        <div class="row">
            <div class="table-visiable">
                <div class="col-xs-3">
                    <div class="box-left">
                        <button data-toggle="offcanvas" class="btn btn-offcanvas btn-toggle-canvas offcanvas pull-left" type="button">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                </div>
                <div class="col-xs-6 text-center">
                    <div class="logo logo-theme">
                        <a href="{{ url('') }}">
                            <img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/251/1054374251_18817353-6b15-45f3-86d1-4e03f5eea377.png?cb=1533471411" alt="Famita">
                        </a>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="box-right pull-right">
						<div class="top-cart">
                            <div class="apus-topcart">
                                <div class="cart">
                                    <a class="dropdown-toggle mini-cart" href="{{ route('cart') }}">
                                        <i class="icon_cart_alt"></i>
                                        <span class="count">{{ Cart::count() }}</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="widget_shopping_cart_content">
                                            <div class="shopping_cart_content">
                                                <div class="cart_list ">
                                                    <p class="total text-theme empty"><strong>Currently Empty:</strong> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>0.00</span>
                                                    </p>
                                                    <p class="buttons clearfix">
                                                        <a href="shop/index.html" class="btn btn-block btn-primary wc-forward">Continue shopping</a>
                                                    </p>
                                                </div>
                                                <div class="cart-bottom">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper-top-cart">
    <div class="overlay-dropdown-menu-right"></div>
    <div class="dropdown-menu-right">
        <div class="widget_shopping_cart_heading">
            <h3><i class="icon-arrow-left"></i> Giỏ Hàng</h3>
        </div>
        <div class="widget_shopping_cart_content_wrapper">
            <div class="widget_shopping_cart_content">
                <div class="shopping_cart_content">
                    <div class="cart_list ">
                        <p class="total text-theme empty"><strong>Currently Empty:</strong> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>0.00</span>
                        </p>
                        <p class="buttons clearfix">
                            <a href="#" class="btn btn-block btn-primary wc-forward">Continue shopping</a>
                        </p>
                    </div>
                    <div class="cart-bottom">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header id="apus-header" class="apus-header header-v1 hidden-sm hidden-xs" role="banner">
    <div class="main-sticky-header-wrapper">
        <div class="main-sticky-header">
            <div class="header-full header-bottom container-fluid p-relative">
                <div class="table-visiable">
                    <div class="col-lg-2 col-md-3 w-1730-15">
                        <div class="logo-in-theme ">
                            <div class="logo logo-theme">
                                <a href="{{ url('') }}">
                                    <img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/251/1054374251_18817353-6b15-45f3-86d1-4e03f5eea377.png?cb=1533471411" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 p-static w-1730-70">
                        <div class="main-menu">
                            <nav data-duration="400" class="hidden-xs hidden-sm apus-megamenu slide animate navbar p-static" role="navigation">
                                <div class="collapse navbar-collapse no-padding">
                                    <ul id="primary-menu" class="nav navbar-nav megamenu">
                                        <li class="menu-item-55 aligned-left">
											<a href="{{ url('') }}" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Trang Chủ</a>
										</li>
                                        <li class="menu-item-429 aligned-left">
											<a href="{{ url('shop') }}" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Shop</a>
										</li>

                                        <li class="dropdown menu-item-393 aligned-left">
                                            <a href="{{ config('services.design_url') }}" target="_blank" >Thiết Kế</a>
                                        </li>

                                        <li class="dropdown menu-item-393 aligned-left">
                                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Bán Áo Thun</a>
                                        </li>

                                        <li class="dropdown menu-item-393 aligned-left">
                                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Theo Dõi Đơn Hàng</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 w-1730-15">
                        <div class="header-right clearfix">
                            <div class="pull-right">
                                <div class="top-wrapper-menu">
                                    @if( ! session('ck') )
                                    <a class="drop-dow" href="{{ config('services.dashboard_url') }}/login"><i class="icon_lock_alt"></i></a>
                                    @else
                                    <a class="drop-dow" href="{{ config('services.dashboard_url') }}"><i class="fa fa-user"></i></a>
                                    @endif
                                </div>
                            </div>
                            <div class="pull-right">
                                <div class="apus-topcart">
                                    <div class="cart">
                                        <a class="dropdown-toggle mini-cart" href="{{ route('cart') }}"  href="{{ route('cart') }}" >
                                            <i class="icon_cart_alt"></i>
                                            <span class="count">{{ Cart::count() }}</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="widget_shopping_cart_content">
                                                <div class="shopping_cart_content">
                                                    <div class="cart_list ">
                                                        <p class="total text-theme empty"><strong>Currently Empty:</strong> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>0.00</span>
                                                        </p>
                                                        <p class="buttons clearfix">
                                                            <a href="shop/index.html" class="btn btn-block btn-primary wc-forward">Continue shopping</a>
                                                        </p>
                                                    </div>
                                                    <div class="cart-bottom">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           

                            <div class="pull-right">
                                <a class="btn-search-top"><i class="icon_search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="search-header">
    <div class="apus-search-form search-fix clearfix">
        <div class="inner-search">
            <div class="heading-search clearfix">
                <div class="pull-left title-top-search">Tìm Kiếm</div>
                <div class="pull-right">
                    <span class="close-search-fix"> <i class="ti-close"></i></span>
                </div>
            </div>
            <form action="#" method="get">
                <div class="main-search">
                    <div class="twitter-typeahead">
                        <input type="text" placeholder="Tìm kiếm sản phẩm" name="s" class="apus-search form-control  apus-autocompleate-input" />
                    </div>
                </div>
                <input type="hidden" name="post_type" value="product" class="post_type" />
            </form>
        </div>
    </div>
</div>