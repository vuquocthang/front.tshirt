@extends('front.base')

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
	
	.my-control a{
		cursor: pointer
	}
	
	.my-control .active{
		font-weight : bold !important
	}
</style>
<section id="apus-breadscrumb" class="apus-breadscrumb woo-breadcrumb no-title  woo-detail ">
					<div class="container">
						<div class="wrapper-breads ">
							<div class="wrapper-breads-inner">
								<ol class="breadcrumb" itemprop="breadcrumb">
									<li><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i>Trang Chủ</a></li>
									<li>Shop</li>
								</ol>
							</div>
						</div>
					</div>
			</section>
<section id="main-container" class="container inner">
    <div class="row">
        <div id="main-content" class="archive-shop col-xs-12 col-md-12 col-sm-12 col-xs-12">
            
			
			<div id="primary" class="content-area">
                <div id="content" class="site-content" role="main">
                    <div id="apus-shop-products-wrapper" class="apus-shop-products-wrapper">

                        <h1 class="page-title">Shop</h1>
                        <div class="top-archive-shop">
                            <div class="before-shop-header-wrapper clearfix">
                                <div class="before-shop-loop-fillter pull-left">
                                    <div class="wrapper-fillter">
                                        <div class="apus-filter">
                                            <p class="woocommerce-result-count">
                                                Hiển thị 10 kết quả</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="apus-shop-header">
                                    <div class="apus-shop-menu">
                                        <div class="row">
                                            <div class="col-xs-12">
												<div class="wrapper-filter clearfix">
													<span class="show-filter pull-right">
														Lọc<i class="fa fa-angle-down" aria-hidden="true"></i>
													</span>
													
													<!--
													<div class="pagination-top pull-right has-fillter">
														<div class="apus-pagination pagination-woo">
															<div class="apus-pagination-inner">
																<ul class="page-numbers">
																	<li>
																		<span aria-current="page" class="page-numbers current">1</span>
																	</li>
																	<li><a class="page-numbers" href="#">2</a></li>
																	<li>
																		<a class="next page-numbers" href="#">
																			<i class="fa fa-angle-right" aria-hidden="true">
																			</i>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div> -->
												</div>
												
												<form style="display: none" id="myfilter" action="{{ route('shop') }}" method="get">
													<select id="myorder" name="order">
														<option value="default" {{ request()->get("order") == 1 || empty(request()->get("order")) ? "selected" : "" }}></option>
														<option value="2" {{ request()->get("order") == 2 ? "selected" : "" }}></option>
														<option value="3" {{ request()->get("order") == 3 ? "selected" : "" }}></option>
														<option value="4" {{ request()->get("order") == 4 ? "selected" : "" }}></option>
													</select>
													
													<select id="myprice" name="price">
														<option value="all" {{ empty(request()->get("price")) ? "selected" : "" }}></option>
														<option value="0-500000" {{ request()->get("price") == "0-500000" ? "selected" : "" }}></option>
														<option value="500000-1000000" {{ request()->get("price") == "500000-1000000" ? "selected" : "" }}></option>
														<option value="1000000-1500000" {{ request()->get("price") == "1000000-1500000" ? "selected" : "" }}></option>
													</select>
													
													<select id="mysize" name="size">
														<option value="all" {{ empty(request()->get("size")) ? "selected" : "" }}></option>
														<option value="s" {{ request()->get("size") == "s" ? "selected" : "" }}></option>
														<option value="m" {{ request()->get("size") == "m" ? "selected" : "" }}></option>
														<option value="l" {{ request()->get("size") == "l" ? "selected" : "" }}></option>
														<option value="xl" {{ request()->get("size") == "xl" ? "selected" : "" }}></option>
														<option value="2xl" {{ request()->get("size") == "2xl" ? "selected" : "" }}></option>
														<option value="3xl" {{ request()->get("size") == "3xl" ? "selected" : "" }}></option>
													</select>
													
													<select id="mycolor" name="color">
														<option value="all" {{ empty(request()->get("color")) ? "selected" : "" }}></option>
														<option value="FFFFFF" {{ request()->get("color") == "FFFFFF" ? "selected" : "" }}></option>
														<option value="000000" {{ request()->get("color") == "000000" ? "selected" : "" }}></option>
														<option value="C0C0C0" {{ request()->get("color") == "C0C0C0" ? "selected" : "" }}></option>
														<option value="FFC0CB" {{ request()->get("color") == "FFC0CB" ? "selected" : "" }}></option>
														<option value="D1EAFF" {{ request()->get("color") == "D1EAFF" ? "selected" : "" }}></option>
														<option value="CCFF00" {{ request()->get("color") == "CCFF00" ? "selected" : "" }}></option>
														<option value="DA70D6" {{ request()->get("color") == "DA70D6" ? "selected" : "" }}></option>
														<option value="FFFF00" {{ request()->get("color") == "FFFF00" ? "selected" : "" }}></option>
														<option value="FFD700" {{ request()->get("color") == "FFD700" ? "selected" : "" }}></option>
													</select>
												
													<input type="submit" value="Send"/>
												</form>
                                                
                                                <div class="shop-top-sidebar-wrapper" style=" {{ $showFilterBar ? '' : 'display: none;' }}">
                                                    <div class="shop-top-sidebar-wrapper-inner">
                                                        <aside class="widget apus_widget apus_widget_product_sorting woocommerce">
                                                            <div class="dropdown"><span>Sắp Xếp</span>
                                                                <div class="wrapper-limit ps-container" data-ps-id="bdcb936e-5611-63af-882e-534ddc2c778b">
                                                                    <ul id="control-order-filter" class="apus-product-sorting my-control">
                                                                        <li><a data-value="default">Mặc Định</a></li>
                                                                        <li><a data-value="2">Mới Nhất</a></li>
                                                                        <li><a data-value="3">Giá: Thấp Tới Cao</a></li>
                                                                        <li><a data-value="4">Giá: Cao Tới Thấp</a></li>
                                                                    </ul>
                                                                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                                                        <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                                                                    </div>
                                                                    <div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;">
                                                                        <div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </aside>
                                                        <aside class="widget apus_widget apus_widget_price_filter woocommerce apus-widget_price_filter">
                                                            <div class="dropdown"><span>Lọc Theo Giá</span>
                                                                <div class="wrapper-limit ps-container" data-ps-id="c4129076-2f3c-d9e7-b87e-9d56567c8131">
                                                                    <ul class="apus-price-filter my-control" id="control-price-filter">
                                                                        <li>
																			<a data-value="all">Tất Cả</a>
																		</li>
                                                                        <li>
																			<a data-value="0-500000">
																				<span class="woocommerce-Price-amount amount">
																					0 ₫
																				</span> - 
																				<span class="woocommerce-Price-amount amount">
																					500.000 ₫
																				</span>
																			</a>
																		</li>
																		
																		<li>
																			<a data-value="500000-1000000">
																				<span class="woocommerce-Price-amount amount">
																					500.000 ₫
																				</span> - 
																				<span class="woocommerce-Price-amount amount">
																					1.000.000 ₫
																				</span>
																			</a>
																		</li>
																		<li>
																			<a data-value="1000000-1500000">
																				<span class="woocommerce-Price-amount amount">
																					1.000.000 ₫
																				</span> - 
																				<span class="woocommerce-Price-amount amount">
																					1.500.000 ₫
																				</span>
																			</a>
																		</li>
                                                                    </ul>
                                                                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                                                        <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                                                                    </div>
                                                                    <div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;">
                                                                        <div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </aside>
                                                        <aside class="widget woocommerce widget_layered_nav apus-woocommerce-widget-layered-nav">
                                                            <div class="dropdown"><span>Sizes</span>
                                                                <div class="wrapper-limit ps-container" data-ps-id="4e558431-8160-e914-7f7f-2ef72f514708">
                                                                    <ul class="my-control woocommerce-widget-layered-nav-list apus-layered-nav-list" id="control-size-filter">
                                                                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term">
                                                                            <a data-value="all">
                                                                                <div class="swatch-preview swatch-label">Tất Cả</div>Tất Cả 
																			</a>
                                                                        </li>
																		
																		<li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term">
                                                                            <a data-value="s">
                                                                                <div class="swatch-preview swatch-label">s</div>S 
																			</a>
                                                                        </li>
																		<li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                                                                            <a data-value="m">
                                                                                <div class="swatch-preview swatch-label">m</div>M 
																			</a>
                                                                        </li>
																		<li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                                                                            <a data-value="l">
                                                                                <div class="swatch-preview swatch-label">l</div>L 
																			</a>
                                                                        </li>
																		<li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                                                                            <a data-value="xl">
                                                                                <div class="swatch-preview swatch-label">xl</div>XL 
																			</a>
                                                                        </li>
                                                                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                                                                            <a data-value="2xl">
                                                                                <div class="swatch-preview swatch-label">2xl</div>2XL
																			</a>
                                                                        </li>
																		
																		<li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                                                                            <a data-value="3xl">
                                                                                <div class="swatch-preview swatch-label">3xl</div>3XL 
																			</a>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                                                        <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                                                                    </div>
                                                                    <div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;">
                                                                        <div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </aside>
														
														
                                                        <aside class="widget woocommerce widget_layered_nav apus-woocommerce-widget-layered-nav">
                                                            <div class="dropdown"><span>Màu Sắc</span>
                                                                <div class="wrapper-limit ps-container" data-ps-id="c6ab3a8f-c56c-1ade-6a0d-8cbe8842ea56">
                                                                    <ul class="my-control woocommerce-widget-layered-nav-list apus-layered-nav-list" id="control-color-filter">
                                                                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                                                                            <a data-value="all">Tất Cả</a>
                                                                        </li>
																		
																		@foreach($colors as $color)
																		<li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                                                                            <a data-value="{{ $color->code }}">
                                                                                <div class="swatch-preview swatch-color" style="background-color:#{{ $color->code }}">
																				</div>{{ $color->name }} 
																			</a>
                                                                        </li>
                                                                        @endforeach
                                                                    </ul>
                                                                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                                                        <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                                                                    </div>
                                                                    <div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;">
                                                                        <div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </aside>
														
                                                        <aside class="widget woocommerce widget_product_tag_cloud">
                                                            <div class="dropdown"><span>Tags</span>
                                                                <div class="tagcloud ps-container" data-ps-id="62cc739b-4e6c-f681-2cd5-e07961cd2685">
																	<a href="#" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="X">X</a>
                                                                    <a href="#" class="tag-cloud-link tag-link-63 tag-link-position-2" style="font-size: 8pt;" aria-label="Nam (4)">Nam</a>
                                                                    <a href="#" class="tag-cloud-link tag-link-60 tag-link-position-3" style="font-size: 8pt;" aria-label="Nữ (4)">Nữ</a>
                                                                    <a href="#" class="tag-cloud-link tag-link-67 tag-link-position-4" style="font-size: 22pt;" aria-label="Troll (16)">Troll</a>
                                                                    <a href="#" class="tag-cloud-link tag-link-68 tag-link-position-5" style="font-size: 22pt;" aria-label="Funny (16)">Funny</a>
                                                                    <a href="#" class="tag-cloud-link tag-link-65 tag-link-position-6" style="font-size: 8pt;" aria-label="Hot (4)">Hot</a>
                                                                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                                                        <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                                                                    </div>
                                                                    <div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;">
                                                                        <div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </aside>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products products-grid clearfix">
                            <div class="products-wrapper-grid">
                                <div class="row row-products-wrapper">
								
									@foreach($products as $product)
                                    <div class="col-md-3 col-sm-4 col-xs-6  post-624 product type-product status-publish has-post-thumbnail product_cat-bags product_tag-dress product_tag-popular product_tag-style instock shipping-taxable purchasable product-type-simple">
                                        <div class="product-block grid" data-product-id="624">
                                            <div class="grid-inner">
                                                <div class="block-inner">
                                                    <figure class="image">
                                                        <a title="{{ $product->name }}" href="{{ url('p/' . $product->slug) }}" class="product-image image-loaded">
                                                            <div style="position: relative">
																<img style="background-color: #{{ $product->color_code }}" width="540" height="690" src="{{ config('services.design_url') }}/uploads/product/unisex-cotton-tee-front.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail unveil-image" alt="{{ $product->name }}" data-src="">
																<div class="design-img">
																	<img src="{{ config('services.design_url') }}/design/{{ $product->img_front }}" alt="" class="modelImage">
																</div>
															</div>
														</a>
                                                    </figure>
                                                </div>
                                                <div class="metas clearfix">
                                                    <div class="title-wrapper">
                                                        <div class="pull-right">
                                                            <span class="price">
																<span class="woocommerce-Price-amount amount"><b>{{ number_format($product->price) }}</b> <span class="woocommerce-Price-currencySymbol">₫</span>
																</span>
                                                            </span>
                                                        </div>
                                                        <div class="left-info">
                                                            <h3 class="name">
																<a href="{{ url('p/' . $product->slug) }}">{{ $product->name }}</a>
															</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									@endforeach
								</div>
                            </div>
                        </div>
                        <div class="apus-after-loop-shop clearfix">
                            <div class="apus-pagination pagination-woo">
                                <div class="apus-pagination-inner">
									{{ $products->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$("#control-order-filter a").click(function(){
		console.log("clicked")
		
		$("#control-order-filter a").each(function(){
			$(this).attr("class", "")
		})
		
		$(this).attr("class", "active")
		
		let thiz = $(this)
		
		$("#myorder option").each(function(){
			$(this).prop("selected", "false")
		})
		
		$("#myorder option").each(function(){
			if( $(this).val() == thiz.attr("data-value") ){
				$(this).prop("selected", "true")
			}
		})
		
		setTimeout(()=>{
			$("#myfilter").submit()
		}, 1000)
		
	})
	
	$("#control-price-filter a").click(function(){
		console.log("clicked")
		
		$("#control-price-filter a").each(function(){
			$(this).attr("class", "")
		})
		
		$(this).attr("class", "active")
		
		let thiz = $(this)
		
		$("#myprice option").each(function(){
			$(this).prop("selected", "false")
		})
		
		$("#myprice option").each(function(){
			if( $(this).val() == thiz.attr("data-value") ){
				$(this).prop("selected", "true")
			}
		})
		
		setTimeout(()=>{
			$("#myfilter").submit()
		}, 1000)
		
	})
	
	$("#control-size-filter a").click(function(){
		console.log("clicked")
		
		$("#control-size-filter a").each(function(){
			$(this).attr("class", "")
		})
		
		$(this).attr("class", "active")
		
		let thiz = $(this)
		
		$("#mysize option").each(function(){
			$(this).prop("selected", "false")
		})
		
		$("#mysize option").each(function(){
			if( $(this).val() == thiz.attr("data-value") ){
				$(this).prop("selected", "true")
			}
		})
		
		setTimeout(()=>{
			$("#myfilter").submit()
		}, 1000)
		
	})
	
	$("#control-color-filter a").click(function(){
		console.log("clicked")
		
		$("#control-color-filter a").each(function(){
			$(this).attr("class", "")
		})
		
		$(this).attr("class", "active")
		
		let thiz = $(this)
		
		$("#mycolor option").each(function(){
			$(this).prop("selected", "false")
		})
		
		$("#mycolor option").each(function(){
			if( $(this).val() == thiz.attr("data-value") ){
				$(this).prop("selected", "true")
			}
		})
		
		setTimeout(()=>{
			$("#myfilter").submit()
		}, 1000)
		
	})
	
	
	$(".my-control a").each(function(){
		if( $(this).attr("data-value") == "{{ request()->get('order') }}" ){
			$(this).attr("class", "active")
		}
		
		if( $(this).attr("data-value") == "{{ request()->get('price') }}" ){
			$(this).attr("class", "active")
		}
		
		if( $(this).attr("data-value") == "{{ request()->get('size') }}" ){
			$(this).attr("class", "active")
		}
		
		if( $(this).attr("data-value") == "{{ request()->get('color') }}" ){
			$(this).attr("class", "active")
		}
	})
</script>

@endsection