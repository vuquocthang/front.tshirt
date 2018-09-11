@extends('front.base')

@section('title')
Giỏ Hàng
@endsection

@section('main')

<style>
	.design-img{
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		text-align: center;
	}
	
	.design-img img{
		user-select: none;
		width: 42.1687%;
		height: auto;
		margin: auto;
		margin-top: calc(20.2703% + 15px) !important;
	}
	
	@media (min-width: 481px) and (max-width: 767px) {
		.swatch-color{
			float: right
		}
	}

	@media (min-width: 320px) and (max-width: 480px) {
		.swatch-color{
			float: right
		}
	}
</style>

<div id="apus-main-content">
	<section id="apus-breadscrumb" class="apus-breadscrumb woo-breadcrumb no-title  woo-detail ">
			<div class="container">
				<div class="wrapper-breads ">
					<div class="wrapper-breads-inner">
						<ol class="breadcrumb" itemprop="breadcrumb">
							<li><a href="http://fb88.ga"><i class="fa fa-home" aria-hidden="true"></i>Trang Chủ</a></li>
							<li>Giỏ Hàng</li>
						</ol>
					</div>
				</div>
			</div>
	</section>
    
    <section id="main-container" class="container inner">
        <div class="row">
            <div id="main-content" class="main-page col-xs-12 clearfix">
                <div id="main" class="site-main clearfix" role="main">
                    
					@if( Cart::count() > 0 )
					<div class="woocommerce">
                        <div class="row">
                            <div class="col-xs-12 col-lg-8 col-md-9 col-sm-12">
                                <form class="woocommerce-cart-form" action="{{ route('update-cart') }}" method="post" style="position: static; zoom: 1;">
                                    @csrf
									
									<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">Sản Phẩm</th>
                                                <th class="product-name">Tên Sản Phẩm</th>
												<th class="product-size">Size</th>
												<th class="product-color">Màu</th>
                                                <th class="product-price">Giá</th>
                                                <th class="product-quantity">Số Lượng</th>
                                                <th class="product-subtotal">Tổng</th>
                                                <th class="product-remove"><span class="remove"></span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
											@foreach( Cart::content() as $item )
                                            <tr class="woocommerce-cart-form__cart-item cart_item">
                                                <td class="product-thumbnail">
                                                    <a href="#" style="display: inline-block; position: relative">
														<img style="background-color: #{{ $item->options->color_code }}" width="540" height="690" src="{{ config('services.design_url') }}/uploads/product/unisex-cotton-tee-front.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="">
														
														<div class="design-img">
															<img src="{{ config('services.design_url') }}/design/{{ $item->options->img_front }}" alt="" class="modelImage">
														</div>
													</a>
												</td>
                                                <td class="product-name" data-title="Tên Sản Phẩm">
                                                    <a href="#">{{ $item->name }}</a> 
												</td>
												
												<td class="product-size" data-title="Size">
													<b>{{ strtoupper($item->options->size) }}</b>
												</td>
												
												<td class="product-color" data-title="Màu">
													<span class="swatch swatch-color swatch-den " style="background-color: #{{ $item->options->color_code }};width:  15px;height:  15px;display:  block;border-radius: 50%;" title="Đen" data-value="den" data-code="#{{ $item->options->color_code }}" ></span>
												</td>
												
                                                <td class="product-price" data-title="Giá">
                                                    <span class="woocommerce-Price-amount amount">{{ number_format($item->price) }} <span class="woocommerce-Price-currencySymbol">₫</span></span>
                                                </td>
                                                <td class="product-quantity" data-title="Số Lượng">
                                                    <div class="quantity">
                                                        <label class="screen-reader-text" >Số Lượng</label>
                                                        <input type="number" class="input-text qty text" step="1" min="1" max="100" name="{{ $item->rowId }}_qty" value="{{ $item->qty }}" title="Số Lượng" pattern="[0-9]*" inputmode="numeric" aria-labelledby="">
                                                    </div>
                                                </td>
                                                <td class="product-subtotal" data-title="Tổng">
                                                    <span class="woocommerce-Price-amount amount">{{ number_format($item->price * $item->qty) }} <span class="woocommerce-Price-currencySymbol">₫</span></span>
                                                </td>
                                                <td class="product-remove">
                                                    <a href="{{ route('removeItemInCart', $item->rowId) }}" class="remove" aria-label="Xóa sản phẩm khỏi giỏ hàng" data-product_id="625" data-product_sku=""><i class="ti-close"></i></a> 
												</td>
                                            </tr>
											@endforeach
                                            
											<tr>
                                                <td colspan="6" class="actions">
                                                    <div class="coupon">
                                                        <label for="coupon_code">Mã Giảm Giá :</label>
                                                        <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code">
                                                        <input type="submit" class="btn btn-dark" name="apply_coupon" value="Nhập">
                                                    </div>
                                                    <input type="submit" class="button" name="update_cart" value="Cập Nhật Giỏ Hàng">
                                                    <input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce" value="3adc28cbbb">
                                                    <input type="hidden" name="_wp_http_referer" value=""> 
												</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                            <div class="col-lg-1 visible-lg">
                            </div>
                            <div class="col-xs-12 col-lg-3 col-md-3 col-sm-12">
                                <div class="cart-collaterals-totals">
                                    <div class="cart_totals" style="position: static; zoom: 1;">
                                        <h2>Tổng</h2>
                                        <table cellspacing="0" class="shop_table shop_table_responsive">
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Tổng Đơn</th>
                                                    <td data-title="Subtotal"><span class="woocommerce-Price-amount amount">{{ str_replace(".00", "", Cart::subtotal() )  }} <span class="woocommerce-Price-currencySymbol">₫</span></span>
                                                    </td>
                                                </tr>
												
												{{--
                                                <tr class="shipping">
                                                    <th>Shipping</th>
                                                    <td data-title="Shipping">
                                                        <ul id="shipping_method">
                                                            <li>
                                                                <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate1" value="flat_rate:1" class="shipping_method" checked="checked">
                                                                <label for="shipping_method_0_flat_rate1">Flat rate: <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>0.00</span>
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_free_shipping2" value="free_shipping:2" class="shipping_method">
                                                                <label for="shipping_method_0_free_shipping2">Free shipping</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_local_pickup3" value="local_pickup:3" class="shipping_method">
                                                                <label for="shipping_method_0_local_pickup3">Local pickup: <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>0.00</span>
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
												--}}
												
                                                <tr class="order-total">
                                                    <th>Tổng</th>
                                                    <td data-title="Total">
														<strong>
															<span class="woocommerce-Price-amount amount">{{ str_replace(".00", "", Cart::subtotal() ) }}<span class="woocommerce-Price-currencySymbol"> ₫</span>
															</span>
														</strong> 
													</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            <a href="{{ route('checkout') }}" class="btn btn-theme btn-block alt wc-forward">Tiến Hành Thanh Toán</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart-collaterals">
                        </div>
                    </div>
					@else
					<div class="woocommerce">	
						<p class="cart-empty">Giỏ Hàng Trống.</p>
						<p class="return-to-shop">
						<a class="button wc-backward" href="{{ route('shop') }}">
						Tiếp Tục Mua Hàng</a>
						</p>
					</div>
					@endif
                </div>
            </div>
        </div>
    </section>
</div>

@endsection