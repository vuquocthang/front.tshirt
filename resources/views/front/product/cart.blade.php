@if( Cart::count() > 0 )
<div class="row">
    <div id="main-content" class="main-page col-xs-12 clearfix">
        <div id="main" class="site-main clearfix" role="main">
            <div class="woocommerce">
                <div class="row">
                    <div class="col-xs-12 col-lg-8 col-md-9 col-sm-12">
                        <form class="woocommerce-cart-form" action="{{ route('update-cart') }}" method="post" style="position: static; zoom: 1;">
                            @csrf
                            <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                                <thead>
                                    <tr>
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

                                            <input type="submit" class="button" name="update_cart" value="Cập Nhật Giỏ Hàng">
                                            <input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce" value="3adc28cbbb">
                                            <input type="hidden" name="_wp_http_referer" value="">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
                <div class="cart-collaterals">
                </div>
            </div>
        </div>
    </div>
</div>
@endif