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
</style>

<div class="row top-content">
    <div class="col-md-6 col-lg-5 col-xs-12 left-detail">
        <div class="image-mains thumbnails-bottom">
            <div class="apus-woocommerce-product-gallery-wrapper">
                <div class="slick-carousel apus-woocommerce-product-gallery" data-carousel="slick" data-items="1" data-smallmedium="1" data-extrasmall="1" data-pagination="false" data-nav="false" data-slickparent="true">
                    <div data-thumb="" style="position: relative" class="woocommerce-product-gallery__image">
                        <a href="">
                            <img class="bgImg" style="background-color: #{{ $product->color_code }}" width="800" height="1017" src="{{ $product->bgImgFront() }}" class="wp-post-image" alt="" title="p4" data-caption="" />
                        </a>
						
						<div class="design-img" >
							<img src="{{ config('services.design_url') }}/design/{{ $product->img_front }}" alt="" class="modelImage">
	                    </div>
                    </div>
                    <div data-thumb="" style="position: relative" class="woocommerce-product-gallery__image">
                        <a href="">
                            <img class="bgImg" style="background-color: #{{ $product->color_code }}" width="800" height="1017" src="{{ $product->bgImgBack() }}" class="wp-post-image" alt="" title="p4" data-caption="" />
                        </a>
						
						<div class="design-img" >
							<img src="{{ config('services.design_url') }}/design/{{ $product->img_back }}" alt="" class="modelImage">
	                    </div>
                    </div>

                </div>
            </div>
            <div class="wrapper-thumbs ">
                <div class="slick-carousel apus-woocommerce-product-gallery-thumbs " data-carousel="slick" data-items="4" data-smallmedium="4" data-extrasmall="4" data-smallest="4" data-pagination="false" data-nav="true" data-asnavfor=".apus-woocommerce-product-gallery" data-slidestoscroll="1" data-focusonselect="true">
                    <div class="woocommerce-product-gallery__image">
                        <div class="thumbs-inner bgImg" style="position: relative; background-color: #{{ $product->color_code }}">
                            <img width="410" height="410" src="{{ config('services.design_url') }}/uploads/product/unisex-cotton-tee-front.png" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail wp-post-image" alt="" sizes="(max-width: 410px) 100vw, 410px" />
						
							<div class="design-img" >
								<img src="{{ config('services.design_url') }}/design/{{ $product->img_front }}" alt="" class="modelImage">
							</div>
						</div>
						

                    </div>
                    <div class="woocommerce-product-gallery__image">
                        <div class="thumbs-inner bgImg" style="position: relative; background-color: #{{ $product->color_code }}">
                            <img width="410" height="410" src="{{ config('services.design_url') }}/uploads/product/unisex-cotton-tee-back.png" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail" alt="" sizes="(max-width: 410px) 100vw, 410px" />
						
							<div class="design-img" >
								<img src="{{ config('services.design_url') }}/design/{{ $product->img_back }}" alt="" class="modelImage">
							</div>
						</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-1 visible-lg"></div>
    <div class="col-md-6 col-lg-6 col-xs-12">
        <div class="information">
            <div class="summary entry-summary ">
                <div class="top-info-detail clearfix">
                    <h1 class="product_title entry-title">{{ $product->name }}</h1>
                    <p class="price">
						<span class="woocommerce-Price-amount amount">
							<span class="woocommerce-Price-currencySymbol"></span>{{ number_format($product->price) }} đ
						</span>
                    </p>
				</div>
				
                <form class="variations_form cart" action="{{ route('addToCart') }}" method="post" data-product_id="629" data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_size&quot;:&quot;l&quot;,&quot;attribute_pa_colors&quot;:&quot;gray&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:20,&quot;display_regular_price&quot;:20,&quot;image&quot;:{&quot;title&quot;:&quot;p41&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p41.jpg&quot;,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p41-800x1030.jpg&quot;,&quot;srcset&quot;:&quot;http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p41.jpg 800w, http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p41-233x300.jpg 233w, http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p41-768x989.jpg 768w, http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p41-795x1024.jpg 795w&quot;,&quot;sizes&quot;:&quot;(max-width: 800px) 100vw, 800px&quot;,&quot;full_src&quot;:&quot;http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p41.jpg&quot;,&quot;full_src_w&quot;:800,&quot;full_src_h&quot;:1030,&quot;gallery_thumbnail_src&quot;:&quot;http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p41-410x410.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:410,&quot;gallery_thumbnail_src_h&quot;:410,&quot;thumb_src&quot;:&quot;http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p41-540x690.jpg&quot;,&quot;thumb_src_w&quot;:540,&quot;thumb_src_h&quot;:690,&quot;src_w&quot;:800,&quot;src_h&quot;:1030},&quot;image_id&quot;:&quot;656&quot;,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&lt;span class=\&quot;price\&quot;&gt;&lt;span class=\&quot;woocommerce-Price-amount amount\&quot;&gt;&lt;span class=\&quot;woocommerce-Price-currencySymbol\&quot;&gt;&amp;#36;&lt;\/span&gt;20.00&lt;\/span&gt;&lt;\/span&gt;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:648,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;},{&quot;attributes&quot;:{&quot;attribute_pa_size&quot;:&quot;m&quot;,&quot;attribute_pa_colors&quot;:&quot;yellow&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:34,&quot;display_regular_price&quot;:34,&quot;image&quot;:{&quot;title&quot;:&quot;p4&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p4-1.jpg&quot;,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p4-1-800x1017.jpg&quot;,&quot;srcset&quot;:&quot;http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p4-1-800x1017.jpg 800w, http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p4-1-236x300.jpg 236w, http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p4-1-768x977.jpg 768w, http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p4-1-805x1024.jpg 805w, http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p4-1.jpg 810w&quot;,&quot;sizes&quot;:&quot;(max-width: 800px) 100vw, 800px&quot;,&quot;full_src&quot;:&quot;http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p4-1.jpg&quot;,&quot;full_src_w&quot;:810,&quot;full_src_h&quot;:1030,&quot;gallery_thumbnail_src&quot;:&quot;http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p4-1-410x410.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:410,&quot;gallery_thumbnail_src_h&quot;:410,&quot;thumb_src&quot;:&quot;http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p4-1-540x690.jpg&quot;,&quot;thumb_src_w&quot;:540,&quot;thumb_src_h&quot;:690,&quot;src_w&quot;:800,&quot;src_h&quot;:1017},&quot;image_id&quot;:&quot;637&quot;,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&lt;span class=\&quot;price\&quot;&gt;&lt;span class=\&quot;woocommerce-Price-amount amount\&quot;&gt;&lt;span class=\&quot;woocommerce-Price-currencySymbol\&quot;&gt;&amp;#36;&lt;\/span&gt;34.00&lt;\/span&gt;&lt;\/span&gt;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:646,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;},{&quot;attributes&quot;:{&quot;attribute_pa_size&quot;:&quot;l&quot;,&quot;attribute_pa_colors&quot;:&quot;green&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:22,&quot;display_regular_price&quot;:22,&quot;image&quot;:{&quot;title&quot;:&quot;p42&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p42.jpg&quot;,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p42-800x1030.jpg&quot;,&quot;srcset&quot;:&quot;http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p42.jpg 800w, http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p42-233x300.jpg 233w, http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p42-768x989.jpg 768w, http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p42-795x1024.jpg 795w&quot;,&quot;sizes&quot;:&quot;(max-width: 800px) 100vw, 800px&quot;,&quot;full_src&quot;:&quot;http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p42.jpg&quot;,&quot;full_src_w&quot;:800,&quot;full_src_h&quot;:1030,&quot;gallery_thumbnail_src&quot;:&quot;http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p42-410x410.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:410,&quot;gallery_thumbnail_src_h&quot;:410,&quot;thumb_src&quot;:&quot;http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p42-540x690.jpg&quot;,&quot;thumb_src_w&quot;:540,&quot;thumb_src_h&quot;:690,&quot;src_w&quot;:800,&quot;src_h&quot;:1030},&quot;image_id&quot;:&quot;657&quot;,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&lt;span class=\&quot;price\&quot;&gt;&lt;span class=\&quot;woocommerce-Price-amount amount\&quot;&gt;&lt;span class=\&quot;woocommerce-Price-currencySymbol\&quot;&gt;&amp;#36;&lt;\/span&gt;22.00&lt;\/span&gt;&lt;\/span&gt;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:647,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;}]">
                    @csrf
					
					<input type="hidden" name="product_id" value="{{ $product->id }}" />
					<input type="hidden" name="campaign_id" value="" />
					<input type="hidden" name="name" value="{{ $product->name }}" />
					<input type="hidden" name="price" value="{{ $product->price }}" />
					<input type="hidden" name="image" value="{!! $product->base64_front !!}" />
					<input type="hidden" name="img_front" value="{{ $product->img_front }}" />
					<input type="hidden" name="color_code" value="{{ $product->color_code }}" />
					<input type="hidden" name="seller_id" id="seller_id" value="" />
					
                    <table class="variations" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="label">
                                    <label for="pa_size">Size</label>
                                </td>
                                <td class="value">
                                    <div class="variation-selector variation-select-label hidden">
                                        <select id="pa_size" class="" name="attribute_pa_size" data-attribute_name="attribute_pa_size" data-show_option_none="yes">
                                            <option value="">Choose an option</option>

                                            <option value="s" selected>S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                            <option value="xl">XL</option>
                                            <option value="2xl">2XL</option>
                                            <option value="3xl">3XL</option>

                                        </select>
                                    </div>
                                    <div class="tawcvs-swatches" data-attribute_name="attribute_pa_size">
                                        <span class="swatch swatch-label swatch-s selected" title="S" data-value="s">S</span>
                                        <span class="swatch swatch-label swatch-m " title="M" data-value="m">M</span>
                                        <span class="swatch swatch-label swatch-l " title="L" data-value="l">L</span>
                                        <span class="swatch swatch-label swatch-xl " title="XL" data-value="xl">XL</span>
                                        <span class="swatch swatch-label swatch-2xl " title="2XL" data-value="2xl">2XL</span>
                                        <span class="swatch swatch-label swatch-3xl " title="3XL" data-value="3xl">3XL</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="label">
                                    <label for="pa_colors">Màu</label>
                                </td>
                                <td class="value">
                                    <div class="variation-selector variation-select-color hidden">
                                        <select id="pa_colors" class="" name="attribute_pa_colors" data-attribute_name="attribute_pa_colors" data-show_option_none="yes">
                                            <option value="">Choose an option</option>
                                            @foreach($colors as $color)
											<option value="{{ $color->data_value }}" data-code="{{ $color->code }}" {{ $product->color_code === $color->code ? "selected" : "" }}>{{ $color->name }}</option>
											@endforeach
										</select>
                                    </div>
                                    <div class="tawcvs-swatches" data-attribute_name="attribute_pa_colors">
										@foreach($colors as $color)
										<span class="swatch swatch-color swatch-{{ $color->data_value }} {{ $product->color_code === $color->code ? 'selected' : '' }}" style="background-color: #{{ $color->code }}" title="{{ $color->name }}" data-value="{{ $color->data_value }}" data-code="{{ $color->code }}" onclick="switchColor(this)" >{{ $color->name }}</span>
										@endforeach
										
									</div>
									<a class="reset_variations" href="#">Clear</a> 
								</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="single_variation_wrap">
                        <div class="woocommerce-variation single_variation"></div>
                        <div class="woocommerce-variation-add-to-cart variations_button">
                            <div class="quantity">
                                <label class="screen-reader-text" for="quantity_5b5f34915f344">Quantity</label>
                                <input type="number" id="quantity_5b5f34915f344" class="input-text qty text" step="1" min="1" max="100" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="" />
                            </div>
                            <button type="submit" class="single_add_to_cart_button button alt">Thêm Vào Giỏ Hàng</button>
                            <input type="hidden" name="add-to-cart" value="629" />
                            <input type="hidden" name="variation_id" class="variation_id" value="0" />
                        </div>
                    </div>
                </form>
                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-629">

                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                        <span class="feedback">Product added!</span>
                        <a href="" rel="nofollow">
                            <i class="icon_heart"></i><span class="sub-title">Wishlisted</span> </a>
                    </div>
                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                        <span class="feedback">The product is already in the wishlist!</span>
                        <a href="" rel="nofollow">
                            <i class="icon_heart"></i><span class="sub-title">Wishlisted</span> </a>
                    </div>
                    <div style="clear:both"></div>
                    <div class="yith-wcwl-wishlistaddresponse"></div>
                </div>
				
				
                <div class="clearfix"></div>
                <div class="product_meta">
                    <span class="sku_wrapper"><span class="sub_title">SKU: </span> <span class="sku">2622465356607</span></span>
                    <span class="posted_in"><span class="sub_title">Danh Mục:</span> <a href="" rel="tag">Funny</a></span>
                    <span class="tagged_as"><span class="sub_title">Tags:</span> <a href="" rel="tag">Funny</a>, <a href="" rel="tag">Nữ</a>, <a href="" rel="tag">Troll</a></span>
                </div>
				
				
                <div class="apus-social-share">
                    <div class="bo-social-icons bo-sicolor social-radius-rounded">
                        <span class="title">Share Link: </span>
                        <a class="bo-social-facebook" data-toggle="tooltip" data-placement="top" data-animation="true" href="" target="_blank" title="Share on facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="bo-social-twitter" data-toggle="tooltip" data-placement="top" data-animation="true" href="" target="_blank" title="Share on Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="bo-social-linkedin" data-toggle="tooltip" data-placement="top" data-animation="true" href="" target="_blank" title="Share on LinkedIn">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a class="bo-social-tumblr" data-toggle="tooltip" data-placement="top" data-animation="true" href="" target="_blank" title="Share on Tumblr">
                            <i class="fa fa-tumblr"></i>
                        </a>
                        <a class="bo-social-google" data-toggle="tooltip" data-placement="top" data-animation="true" href=""  target="_blank" title="Share on Google plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a class="bo-social-pinterest" data-toggle="tooltip" data-placement="top" data-animation="true" href="" target="_blank" title="Share on Pinterest">
                            <i class="fa fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
		
		@include('front.product.cart')
    </div>
</div>