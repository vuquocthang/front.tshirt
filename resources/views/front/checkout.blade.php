<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="anyflexbox boxshadow display-table">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="E Centre - Thanh toán đơn hàng" />

    <title>Thanh toán đơn hàng</title>

    
    <script src='{{ asset('checkout') }}/assets/themes_support/jquery-2.1.3.mina87f.js?4' type='text/javascript'></script>
    <link href='{{ asset('checkout') }}/assets/themes_support/bootstrap.min7c7e.css?20171025' rel='stylesheet' type='text/css' />
    <link href='{{ asset('checkout') }}/assets/themes_support/nprogress7c7e.css?20171025' rel='stylesheet' type='text/css' />
    <link href='{{ asset('checkout') }}/assets/themes_support/font-awesome.min7c7e.css?20171025' rel='stylesheet' type='text/css' />

    <!--<link href="https://bizweb.dktcdn.net/100/005/238/themes/500284/assets/checkout_zp_dev.css?1528358961111" rel="stylesheet" type="text/css">-->
    <link href="{{ asset('checkout') }}/100/000/062/themes/500304/assets/checkout_dev_2fc57.css?1528713553995" rel="stylesheet" type="text/css">

    <link href='{{ asset('checkout') }}/100/119/255/checkout_stylesheet/155960/checkoute5a6.css?1524278376633' rel='stylesheet' type='text/css' />

    

    <script>
        var Bizweb = Bizweb || {};
        Bizweb.store = 'e-centre.bizwebvietnam.net';
        Bizweb.theme = {
            "id": 155960,
            "role": "main",
            "name": "ECentre 20180421"
        };
        Bizweb.template = '';
    </script>

    <script type="text/javascript">
        if (typeof Bizweb == 'undefined') {
            Bizweb = {};
        }
        Bizweb.Checkout = {};
        Bizweb.Checkout.token = "d5c759d717cc4427ba7e0af1e5b0b9f4";
        Bizweb.Checkout.apiHost = "e-centre.bizwebvietnam.net";
    </script>

</head>

<body class="body--custom-background-color ">
    <div class="banner" data-header="">
        <div class="wrap">
            <div class="shop logo logo--left ">

                <h1 class="shop__name">
            <a href="{{ route('home') }}">
                King Clothes
            </a>
        </h1>

            </div>
        </div>
    </div>
    <button class="order-summary-toggle" bind-event-click="Bizweb.StoreCheckout.toggleOrderSummary(this)">
        <div class="wrap">
            <h2>
                <label class="control-label">Đơn hàng</label>
                <label class="control-label hidden-small-device">
                    (1 sản phẩm)
                </label>
                <label class="control-label visible-small-device inline">
                    (1)
                </label>
            </h2>
            <a class="underline-none expandable pull-right" href="javascript:void(0)">
                Xem chi tiết
            </a>
        </div>
    </button>

    <div context="paymentStatus" define='{ paymentStatus: new Bizweb.PaymentStatus(this,{payment_processing:"",payment_provider_id:"",payment_info:{} }) }'>

    </div>
    <form method="post" action="{{ route('checkout') }}" data-toggle="validator" class="content stateful-form formCheckout">
        @csrf
		
		<div class="wrap" context="checkout" >
            <div class='sidebar '>
                <div class="sidebar_header">
                    <h2>
                        <label class="control-label">Đơn hàng</label>
                        <label class="control-label">({{ Cart::count() }} sản phẩm)</label>
                    </h2>
                    <hr class="full_width" />
                </div>
                <div class="sidebar__content">
                    <div class="order-summary order-summary--product-list order-summary--is-collapsed">
                        <div class="summary-body summary-section summary-product">
                            <div class="summary-product-list">
                                <table class="product-table">
                                    <tbody>
										
										@foreach( Cart::content() as $item )
                                        <tr class="product product-has-image clearfix">
                                            <td>
                                                <div class="product-thumbnail">
                                                    <div class="product-thumbnail__wrapper">

                                                        <img style="background-color: #{{ $item->options->color_code }}" src="{{ config('services.design_url') }}/uploads/product/unisex-cotton-tee-front.png" class='product-thumbnail__image' />

                                                    </div>
                                                    <span class="product-thumbnail__quantity" aria-hidden="true">{{ $item->qty }}</span>
                                                </div>
                                            </td>
                                            <td class="product-info">
                                                <span class="product-info-name">{{ $item->name }}</span>
											</td>
                                            <td class="product-price text-right">
                                                {{ number_format($item->price) }} ₫
                                            </td>
                                        </tr>
										@endforeach

                                    </tbody>
                                </table>
                                <div class="order-summary__scroll-indicator">
                                    Cuộn chuột để xem thêm
                                    <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <hr class="m0" />
                    </div>
                    
                    <div class="order-summary order-summary--total-lines">
                        <div class="summary-section border-top-none--mobile">
                            <div class="total-line total-line-subtotal clearfix">
                                <span class="total-line-name pull-left">
                                    Tạm tính
                                </span>
                                <span  class="total-line-subprice pull-right">
                                    {{ str_replace(".00", "", Cart::subtotal() )  }} ₫
                                </span>
                            </div>
							
                            <div class="total-line total-line-total clearfix">
                                <span class="total-line-name pull-left">
                                    Tổng cộng
                                </span>
                                <span  class="total-line-price pull-right">
                                    {{ str_replace(".00", "", Cart::subtotal() )  }} ₫
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group clearfix hidden-sm hidden-xs">
                        <div class="field__input-btn-wrapper mt10">
                            <a class="previous-link" href="{{ route('cart') }}">
                                <i class="fa fa-angle-left fa-lg" aria-hidden="true"></i>
                                <span>Quay về giỏ hàng</span>
                            </a>
                            <input class="btn btn-primary btn-checkout" data-loading-text="Đang xử lý" type="submit" value="ĐẶT HÀNG" />
                        </div>
                    </div>
                    <div class="form-group has-error">
                        <div class="help-block ">
                            <ul class="list-unstyled">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main" role="main">
                <div class="main_header">
                    <div class="shop logo logo--left ">

                        <h1 class="shop__name">
							<a href="{{ route('home') }}">
								King Clothes
							</a>
						</h1>

                    </div>
                </div>
                <div class="main_content">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="section" define="{billing_address: {}}">
                                <div class="section__header">
                                    <div class="layout-flex layout-flex--wrap">
                                        <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                            <i class="fa fa-id-card-o fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                                            <label class="control-label">Thông tin mua hàng</label>
                                        </h2>

										@auth("web")
                                        <a class="layout-flex__item section__title--link" >
                                            <i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i> {{ Auth::user()->email }}
                                        </a>
										@endauth
										
										@guest
                                        <a class="layout-flex__item section__title--link" href="{{ route('login') }}" >
                                            <i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i> Đăng Nhập
                                        </a>
										@endguest

                                    </div>
                                </div>
                                <div class="section__content">

                                    <div class="form-group" >
                                        <div>
                                            <label class="field__input-wrapper js-is-focused" bind-class="{ 'js-is-filled': email }">
                                                <span class="field__label " >Email</span>
                                                
												@auth("web")
												<input name="cus_email" type="email" class="field__input form-control" id="_email" data-error="Vui lòng nhập email đúng định dạng" required value="{{ Auth::user()->email }}"  @auth("web") disabled @endauth />
												@endauth
												
												@guest
												<input name="cus_email" type="email" class="field__input form-control" id="_email" data-error="Vui lòng nhập email đúng định dạng" required   />
												@endguest
											
											</label>
                                        </div>
                                        <div class="help-block with-errors">
                                        </div>
                                    </div>

                                    <div class="billing">
                                        <div>
                                            <div class="form-group">
                                                <div class="field__input-wrapper js-is-focused" bind-class="{ 'js-is-filled': billing_address.full_name }">
                                                    <span class="field__label" bind-event-click="handleClick(this)">
                                                        Họ và tên
                                                    </span>
                                                    <input name="cus_name" type="text" bind-event-change="saveAbandoned()" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_billing_address_last_name" data-error="Vui lòng nhập họ tên" required bind="billing_address.full_name" />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <div class="field__input-wrapper js-is-focused" bind-class="{ 'js-is-filled': billing_address.phone }">
                                                    <span class="field__label" bind-event-click="handleClick(this)">
                                                            Số điện thoại
                                                        </span>
                                                    <input name="cus_phone" bind-event-change="saveAbandoned()" type="text" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_billing_address_phone" pattern="^([0-9,\+,\-,\(,\),\.]{8,20})$" bind="billing_address.phone" />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <div class="field__input-wrapper js-is-focused" bind-class="{ 'js-is-filled': billing_address.address1 }">
                                                    <span class="field__label" bind-event-click="handleClick(this)">
                                                            Địa chỉ
                                                        </span>
                                                    <input name="cus_address" bind-event-change="saveAbandoned()" type="text" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_billing_address_address1" bind="billing_address.address1" />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <div class="field__input-wrapper field__input-wrapper--select">
                                                    <label class="field__label" for="BillingProvinceId">
                                                        Tỉnh thành
                                                    </label>
                                                    <select class="field__input field__input--select form-control" name="BillingProvinceId" id="billingProvince" required data-error="Bạn chưa chọn tỉnh thành" bind-event-change="billingProviceChange('')" bind="BillingProvinceId">
                                                        <option value=''>--- Chọn tỉnh thành ---</option>

                                                        <option value="1">Hà Nội</option>

                                                        <option value="2">TP Hồ Chí Minh</option>

                                                        <option value="3">An Giang</option>

                                                        <option value="4">Bà Rịa-Vũng Tàu</option>

                                                        <option value="5">Bắc Giang</option>

                                                        <option value="6">Bắc Kạn</option>

                                                        <option value="7">Bạc Liêu</option>

                                                        <option value="8">Bắc Ninh</option>

                                                        <option value="9">Bến Tre</option>

                                                        <option value="10">Bình Định</option>

                                                        <option value="11">Bình Dương</option>

                                                        <option value="12">Bình Phước</option>

                                                        <option value="13">Bình Thuận</option>

                                                        <option value="14">Cà Mau</option>

                                                        <option value="15">Cần Thơ</option>

                                                        <option value="16">Cao Bằng</option>

                                                        <option value="17">Đà Nẵng</option>

                                                        <option value="18">Đắk Lắk</option>

                                                        <option value="19">Đắk Nông</option>

                                                        <option value="20">Điện Biên</option>

                                                        <option value="21">Đồng Nai</option>

                                                        <option value="22">Đồng Tháp</option>

                                                        <option value="23">Gia Lai</option>

                                                        <option value="24">Hà Giang</option>

                                                        <option value="25">Hà Nam</option>

                                                        <option value="26">Hà Tĩnh</option>

                                                        <option value="27">Hải Dương</option>

                                                        <option value="28">Hải Phòng</option>

                                                        <option value="29">Hậu Giang</option>

                                                        <option value="30">Hòa Bình</option>

                                                        <option value="31">Hưng Yên</option>

                                                        <option value="32">Khánh Hòa</option>

                                                        <option value="33">Kiên Giang</option>

                                                        <option value="34">Kon Tum</option>

                                                        <option value="35">Lai Châu</option>

                                                        <option value="36">Lâm Đồng</option>

                                                        <option value="37">Lạng Sơn</option>

                                                        <option value="38">Lào Cai</option>

                                                        <option value="39">Long An</option>

                                                        <option value="40">Nam Định</option>

                                                        <option value="41">Nghệ An</option>

                                                        <option value="42">Ninh Bình</option>

                                                        <option value="43">Ninh Thuận</option>

                                                        <option value="44">Phú Thọ</option>

                                                        <option value="45">Phú Yên</option>

                                                        <option value="46">Quảng Bình</option>

                                                        <option value="47">Quảng Nam</option>

                                                        <option value="48">Quảng Ngãi</option>

                                                        <option value="49">Quảng Ninh</option>

                                                        <option value="50">Quảng Trị</option>

                                                        <option value="51">Sóc Trăng</option>

                                                        <option value="52">Sơn La</option>

                                                        <option value="53">Tây Ninh</option>

                                                        <option value="54">Thái Bình</option>

                                                        <option value="55">Thái Nguyên</option>

                                                        <option value="56">Thanh Hóa</option>

                                                        <option value="57">Thừa Thiên Huế</option>

                                                        <option value="58">Tiền Giang</option>

                                                        <option value="59">Trà Vinh</option>

                                                        <option value="60">Tuyên Quang</option>

                                                        <option value="61">Vĩnh Long</option>

                                                        <option value="62">Vĩnh Phúc</option>

                                                        <option value="63">Yên Bái</option>

                                                    </select>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

											{{--
                                            <div bind-show="!otherAddress" class="form-group">
                                                <div class="field__input-wrapper field__input-wrapper--select">
                                                    <label class="field__label" for="BillingDistrictId">
                                                        Quận huyện
                                                    </label>
                                                    <select class="field__input field__input--select form-control" name="BillingDistrictId" id="billingDistrict" bind-event-change="billingDistrictChange('')" bind="BillingDistrictId">
                                                        <option value="">--- Chọn quận huyện ---</option>

                                                    </select>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div> --}}

                                            <div bind-show="!otherAddress" class="form-group">
                                                <div class="error hide" bind-show="requiresShipping && loadedShippingMethods && shippingMethods.length == 0  && BillingProvinceId  ">
                                                    <label>Khu vực này không hỗ trợ vận chuyển</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
							
                            <div class="section pt10" bind-show="otherAddress">
                                <div class="section__header">
                                    <h2 class="section__title">
                                        <i class="fa fa-id-card-o fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                                        <label class="control-label">
                                            Thông tin nhận hàng
                                        </label>
                                    </h2>
                                </div>
                                <div class="section__content">
                                    <div bind-show="otherAddress" define="{shipping_address: {}, shipping_expand:true,show_district:  true ,show_country:  false }" class="shipping  hide ">
                                        <div bind-show="shipping_expand || !otherAddress">
                                            <div class="form-group">
                                                <div class="field__input-wrapper" bind-class="{ 'js-is-filled': shipping_address.full_name }">
                                                    <span class="field__label" bind-event-click="handleClick(this)">
                                                        Họ và tên
                                                    </span>
                                                    <input name="ShippingAddress.LastName" bind-event-change="saveAbandoned()" type="text" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_shipping_address_last_name" data-error="Vui lòng nhập họ tên" bind="shipping_address.full_name" required />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <div class="field__input-wrapper" bind-class="{ 'js-is-filled': shipping_address.phone }">
                                                    <span class="field__label" bind-event-click="handleClick(this)">
                                                            Số điện thoại
                                                        </span>
                                                    <input name="ShippingAddress.Phone" bind-event-change="saveAbandoned()" type="text" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_shipping_address_phone" pattern="^([0-9,\+,\-,\(,\),\.]{8,20})$" bind="shipping_address.phone" />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <div class="field__input-wrapper" bind-class="{ 'js-is-filled': shipping_address.address1 }">
                                                    <span class="field__label" bind-event-click="handleClick(this)">
                                                            Địa chỉ
                                                        </span>
                                                    <input name="ShippingAddress.Address1" bind-event-change="saveAbandoned()" type="text" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_shipping_address_address1" bind="shipping_address.address1" />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <div class="field__input-wrapper field__input-wrapper--select">
                                                    <label class="field__label" for="BillingProvinceId">
                                                        Tỉnh thành
                                                    </label>
                                                    <select class="field__input field__input--select form-control" name="ShippingProvinceId" id="shippingProvince" data-error="Bạn chưa chọn tỉnh thành" bind-event-change="shippingProviceChange('')" bind="ShippingProvinceId">
                                                        <option value=''>--- Chọn tỉnh thành ---</option>

                                                        <option value="1">Hà Nội</option>

                                                        <option value="2">TP Hồ Chí Minh</option>

                                                        <option value="3">An Giang</option>

                                                        <option value="4">Bà Rịa-Vũng Tàu</option>

                                                        <option value="5">Bắc Giang</option>

                                                        <option value="6">Bắc Kạn</option>

                                                        <option value="7">Bạc Liêu</option>

                                                        <option value="8">Bắc Ninh</option>

                                                        <option value="9">Bến Tre</option>

                                                        <option value="10">Bình Định</option>

                                                        <option value="11">Bình Dương</option>

                                                        <option value="12">Bình Phước</option>

                                                        <option value="13">Bình Thuận</option>

                                                        <option value="14">Cà Mau</option>

                                                        <option value="15">Cần Thơ</option>

                                                        <option value="16">Cao Bằng</option>

                                                        <option value="17">Đà Nẵng</option>

                                                        <option value="18">Đắk Lắk</option>

                                                        <option value="19">Đắk Nông</option>

                                                        <option value="20">Điện Biên</option>

                                                        <option value="21">Đồng Nai</option>

                                                        <option value="22">Đồng Tháp</option>

                                                        <option value="23">Gia Lai</option>

                                                        <option value="24">Hà Giang</option>

                                                        <option value="25">Hà Nam</option>

                                                        <option value="26">Hà Tĩnh</option>

                                                        <option value="27">Hải Dương</option>

                                                        <option value="28">Hải Phòng</option>

                                                        <option value="29">Hậu Giang</option>

                                                        <option value="30">Hòa Bình</option>

                                                        <option value="31">Hưng Yên</option>

                                                        <option value="32">Khánh Hòa</option>

                                                        <option value="33">Kiên Giang</option>

                                                        <option value="34">Kon Tum</option>

                                                        <option value="35">Lai Châu</option>

                                                        <option value="36">Lâm Đồng</option>

                                                        <option value="37">Lạng Sơn</option>

                                                        <option value="38">Lào Cai</option>

                                                        <option value="39">Long An</option>

                                                        <option value="40">Nam Định</option>

                                                        <option value="41">Nghệ An</option>

                                                        <option value="42">Ninh Bình</option>

                                                        <option value="43">Ninh Thuận</option>

                                                        <option value="44">Phú Thọ</option>

                                                        <option value="45">Phú Yên</option>

                                                        <option value="46">Quảng Bình</option>

                                                        <option value="47">Quảng Nam</option>

                                                        <option value="48">Quảng Ngãi</option>

                                                        <option value="49">Quảng Ninh</option>

                                                        <option value="50">Quảng Trị</option>

                                                        <option value="51">Sóc Trăng</option>

                                                        <option value="52">Sơn La</option>

                                                        <option value="53">Tây Ninh</option>

                                                        <option value="54">Thái Bình</option>

                                                        <option value="55">Thái Nguyên</option>

                                                        <option value="56">Thanh Hóa</option>

                                                        <option value="57">Thừa Thiên Huế</option>

                                                        <option value="58">Tiền Giang</option>

                                                        <option value="59">Trà Vinh</option>

                                                        <option value="60">Tuyên Quang</option>

                                                        <option value="61">Vĩnh Long</option>

                                                        <option value="62">Vĩnh Phúc</option>

                                                        <option value="63">Yên Bái</option>

                                                    </select>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <div class="field__input-wrapper field__input-wrapper--select">
                                                    <label class="field__label" for="BillingDistrictId">
                                                        Quận huyện
                                                    </label>
                                                    <select class="field__input field__input--select form-control" name="ShippingDistrictId" id="shippingDistrict" bind-event-change="shippingDistrictChange('')" bind="ShippingDistrictId">
                                                        <option value="">--- Chọn quận huyện ---</option>

                                                    </select>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <div class="error hide" bind-show="requiresShipping && shippingMethods.length == 0 && ShippingProvinceId ">
                                                    <label>Khu vực này không hỗ trợ vận chuyển</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section" bind-class="{ 'pt0': otherAddress, 'pt10': !otherAddress}">
                                <div class="section__content">
                                    <div class="form-group m0">
                                        <textarea name="cus_note" bind-event-change="saveAbandoned()" value="" class="field__input form-control m0" placeholder="Ghi chú"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            
                            <div class="section payment-methods" bind-class="{'p0--desktop': shippingMethods.length == 0}">
                                <div class="section__header">
                                    <h2 class="section__title">
                                        <i class="fa fa-credit-card fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                                        <label class="control-label">Thanh toán</label>
                                    </h2>
                                </div>
                                <div class="section__content">
                                    <div class="content-box">
                                        <div class="content-box__row">
                                            <div class="radio-wrapper">
                                                <div class="radio__input">
                                                    <input class="input-radio" type="radio" value="1" name="cus_payment_method" id="payment_method_122413" data-check-id="4" bind="payment_method_id" checked>
                                                </div>
                                                <label class="radio__label" for="payment_method_122413">
                                                    <span class="radio__label__primary">I-banking</span>
                                                    <span class="radio__label__accessory">
														<ul>
															<li class="payment-icon-v2 payment-icon--4">

																	<i class="fa fa-mobile payment-icon-fa" aria-hidden="true"></i>

															</li>
														</ul>
													</span>
                                                </label>
                                            </div>
                                        </div>
									</div>
									
									<div class="content-box">
                                        <div class="content-box__row">
                                            <div class="radio-wrapper">
                                                <div class="radio__input">
                                                    <input class="input-radio" type="radio" value="2" name="cus_payment_method" id="payment_method_122413" data-check-id="4" bind="payment_method_id" checked>
                                                </div>
                                                <label class="radio__label" for="payment_method_122413">
                                                    <span class="radio__label__primary">Credit Card / Master Card</span>
                                                    <span class="radio__label__accessory">
														<ul>
															<li class="payment-icon-v2 payment-icon--4">

																	<i class="fa fa-cc payment-icon-fa" aria-hidden="true"></i>

															</li>
														</ul>
													</span>
                                                </label>
                                            </div>
                                        </div>
									</div>
									
									
									
									<div class="content-box">

                                        <div class="content-box__row">
                                            <div class="radio-wrapper">
                                                <div class="radio__input">
                                                    <input class="input-radio" type="radio" value="3" name="cus_payment_method" id="payment_method_122413" data-check-id="4" bind="payment_method_id" checked>
                                                </div>
                                                <label class="radio__label" for="payment_method_122413">
                                                    <span class="radio__label__primary">Đại Lý Thu Hộ</span>
                                                    <span class="radio__label__accessory">
														<ul>
															<li class="payment-icon-v2 payment-icon--4">

																	<i class="fa fa-money payment-icon-fa" aria-hidden="true"></i>

															</li>
														</ul>
													</span>
                                                </label>
                                            </div>
                                            <!-- /radio-wrapper-->

                                        </div>

                                        <div class="radio-wrapper content-box__row content-box__row--secondary" id="payment-gateway-subfields-122413" bind-show="payment_method_id == 122413">
                                            <div class="blank-slate">
                                                <p><b>Hà Nội : </b></p>
												
												<p> - Địa chỉ : Số 1 Lương Yên, Q.Hai Bà Trưng, Hà Nội </p>
												<p> - Số điện thoại: 0934 323 882</p>
												<p> - Email: partner1@kingclothes.com</p>


												
												<p><b>TP Hồ Chí Minh</b></p>
												
												<p> - Địa chỉ : Số 1 Lương Yên, Q.1, TP HCM </p>
												<p> - Số điện thoại: 0934 323 882</p>
												<p> - Email: partner2@kingclothes.com</p>

                                            </div>
                                        </div>

                                        
									</div>
                                </div>
								
								
                            </div>
                            <div class="section hidden-md hidden-lg">
                                <div class="form-group clearfix m0">
                                    <input class="btn btn-primary btn-checkout" data-loading-text="Đang xử lý" type="button" bind-event-click="paymentCheckout('AIzaSyDWReBlPxFt-i145Gsd502wOqRS0KXFHW4;AIzaSyAbtwApDToQWn7snVio3Y9PWFbcpdnOWdk;AIzaSyA5rJOu8wci0li24bnZ1WogMEH93p-DGlM')" value="ĐẶT HÀNG" />
                                </div>
                                <div class="text-center mt20">
                                    <a class="previous-link" href="https://e-centre.bizwebvietnam.net/cart">
                                        <i class="fa fa-angle-left fa-lg" aria-hidden="true"></i>
                                        <span>Quay về giỏ hàng</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main_footer footer unprint">

                    <div class="mt10"></div>
                </div>
                <div class="modal fade" id="refund-policy" data-width="" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 class="modal-title">Chính sách hoàn trả</h4>
                            </div>
                            <div class="modal-body">
                                <pre></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="privacy-policy" data-width="" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 class="modal-title">Chính sách bảo mật</h4>
                            </div>
                            <div class="modal-body">
                                <pre></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="terms-of-service" data-width="" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 class="modal-title">Điều khoản sử dụng</h4>
                            </div>
                            <div class="modal-body">
                                <pre></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- <script src='{{ asset('checkout') }}/assets/themes_support/jquery-2.1.3.min7c7e.js?20171025' type='text/javascript'></script> -->
    <script src='{{ asset('checkout') }}/assets/themes_support/bootstrap.min7c7e.js?20171025' type='text/javascript'></script>
    <script src='{{ asset('checkout') }}/assets/themes_support/twine.min7c7e.js?20171025' type='text/javascript'></script>
    <script src='{{ asset('checkout') }}/assets/themes_support/validator.min7c7e.js?20171025' type='text/javascript'></script>
    <script src='{{ asset('checkout') }}/assets/themes_support/nprogress7c7e.js?20171025' type='text/javascript'></script>
    <script src='{{ asset('checkout') }}/assets/themes_support/money-helper7c7e.js?20171025' type='text/javascript'></script>

    <script src="{{ asset('checkout') }}/assets/scripts/ua-parser.pack8464.js?20180611" type='text/javascript'></script>
    <!--<script src="https://bizweb.dktcdn.net/100/005/238/themes/500284/assets/checkout_zp_dev.js?1528620767395" type='text/javascript'></script>-->
    <script src="{{ asset('checkout') }}/100/000/062/themes/500304/assets/checkout_dev_2f619.js?1528713803364" type='text/javascript'></script>

    <script type="text/javascript">
        $(document).ajaxStart(function() {
            NProgress.start();
        });
        $(document).ajaxComplete(function() {
            NProgress.done();
        });

        context = {}

        $(function() {
            Twine.reset(context).bind().refresh();
        });

        $(document).ready(function() {
            setTimeout(function() {

            }, 50);

        });
    </script>

</body>
</html>