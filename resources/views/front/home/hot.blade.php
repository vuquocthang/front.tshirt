<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <div class="widget widget-products-tabs no-margin  widget-tab-tab-product">
                    <div class="widget-content woocommerce grid item-grid">
                        <div class="widget-inner">
                            <div class="tab-content">
                                <div class="link-readmore text-center clearfix">
                                    <div class="link-inner">
                                        <a class="btn btn-theme btn-outline">Hot</a>
                                    </div>
                                </div>

                                <div id="tab-E7JLZ-0" class="tab-pane active" data-loaded="true" data-settings="{&quot;title&quot;:&quot;&quot;,&quot;tabs&quot;:&quot;%5B%7B%22title%22%3A%22new%20arrivals%20%22%2C%22type%22%3A%22recent_product%22%7D%2C%7B%22title%22%3A%22%20feature%20product%22%2C%22type%22%3A%22featured_product%22%7D%2C%7B%22title%22%3A%22sale%20item%22%2C%22type%22%3A%22on_sale%22%7D%5D&quot;,&quot;number&quot;:&quot;12&quot;,&quot;layout_type&quot;:&quot;grid&quot;,&quot;gutter&quot;:&quot;&quot;,&quot;columns&quot;:&quot;4&quot;,&quot;rows&quot;:1,&quot;show_nav&quot;:&quot;&quot;,&quot;show_pagination&quot;:&quot;&quot;,&quot;link_button&quot;:&quot;http:\/\/demoapus-wp.com\/famita\/famita-fashion\/shop&quot;,&quot;el_class&quot;:&quot;&quot;}" data-tab="{&quot;title&quot;:&quot;new arrivals &quot;,&quot;type&quot;:&quot;recent_product&quot;}">
                                    <div class="tab-content-products">
                                        <div class="products products-grid">
                                            <div class="row row-products">
                                                @for($i=8; $i<12 ; $i++) 
												<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 post-632 product type-product status-publish has-post-thumbnail product_cat-fashion product_tag-dress product_tag-popular product_tag-style pa_brands-brand-1 pa_brands-brand-2 pa_brands-brand-3 pa_brands-brand-4 pa_brands-brand-5 pa_brands-brand-6 pa_size-over-size pa_size-xxl outofstock sale shipping-taxable purchasable product-type-simple">
                                                    <div class="product-block grid" data-product-id="632">
                                                        <div class="grid-inner">
                                                            <div class="block-inner">
                                                                <figure class="image">

                                                                    <a style="position: relative" title="{{ $products[$i]->name }}" href="{{ url('p')  }}/{{ $products[$i]->slug }}" class="product-image">
                                                                                                    <img style="background-color: #{{ $products[$i]->color_code }}" width="540" height="690" src="{{ config('services.design_url') }}/uploads/product/unisex-cotton-tee-front.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail unveil-image" alt=""  />
																									<div class="design-img">
																										<img src="{{ config('services.design_url') }}/design/{{ $products[$i]->img_front }}" alt="" class="modelImage">
																									</div>
																								</a>
                                                                </figure>

                                                            </div>
                                                            <div class="metas clearfix">
                                                                <div class="title-wrapper">
                                                                    <div class="pull-right">
                                                                    </div>
                                                                    <div class="left-info">
                                                                        <h3 class="name"><a href="{{ url('p')  }}/{{ $products[$i]->slug }}">{{ $products[$i]->name }}</a></h3>
                                                                        <span class="price">

																										<ins>
																											<span class="woocommerce-Price-amount amount">
																												<span class="woocommerce-Price-currencySymbol"></span>{{ number_format($products[$i]->price) }} ₫</span>
                                                                        </ins>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            @endfor
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