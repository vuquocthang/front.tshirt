<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Shop name - Thanh toán đơn hàng" />

    <title>Cảm ơn</title>
    <link href='{{ asset('thankyou') }}/assets/themes_support/bootstrap.min7c7e.css?20171025' rel='stylesheet' type='text/css' />
    <link href='{{ asset('thankyou') }}/assets/themes_support/font-awesome.min7c7e.css?20171025' rel='stylesheet' type='text/css' />
    <link href='{{ asset('thankyou') }}/assets/themes_support/thankyou86cf.css?20180327' rel='stylesheet' type='text/css' />

    <link href='{{ asset('thankyou') }}/100/119/255/checkout_stylesheet/155960/checkoute5a6.css?1524278376633' rel='stylesheet' type='text/css' />

    <script>
        var Bizweb = Bizweb || {};
        Bizweb.store = 'e-centre.bizwebvietnam.net';
        Bizweb.theme = {
            "id": 155960,
            "role": "main",
            "name": "ECentre 20180421"
        };
    </script>
    <script type="text/javascript">
        //<![CDATA[
        Bizweb.checkout = {};
        //]]>
    </script>
    <script>
        (function() {
            function asyncLoad() {
                var urls = ["https://collectionfilter.bizwebapps.vn/genscript/script.js?store=e-centre.bizwebvietnam.net", "../../../productreviews.bizwebapps.vn/assets/js/productreviews.min2fca.js?store=e-centre.bizwebvietnam.net", "https://productsrecommend.bizwebapps.vn/assets/js/script.js?store=e-centre.bizwebvietnam.net"];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = urls[i];
                    s.src = urls[i];
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            }
            window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
        })();
    </script>

</head>

<body class="body--custom-background-color ">

    <div context="checkout" define="{checkout: new Bizweb.Checkout(this,{})}" class="container">
        <div class="header">
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
        <div class="main">
            <div class="wrap clearfix">
                <div class="row thankyou-infos">
					@if( session('email') )
					<div class="col-md-7 thankyou-message">
                        <div class="thankyou-message-icon unprint">
                            <div class="icon icon--order-success svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
                                    <g fill="none" stroke="#8EC343" stroke-width="2">
                                        <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                                        <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="thankyou-message-text">
                            <h3>Cảm ơn bạn đã đặt hàng</h3>
                            <p>
                                
                                Một email xác nhận đã được gửi tới {{ session('email') }}. Xin vui lòng kiểm tra email của bạn
                                
                            </p>
                            <div style="font-style: italic;">
                                
                            </div>
                        </div>
                    </div>
					@endif
					
                    
                    <div class="col-md-5 col-sm-12 order-info" define="{order_expand: false}">
                        <div class="order-summary order-summary--custom-background-color ">
                            <div class="order-summary-header summary-header--thin summary-header--border">
                                <h2>
                                    <label class="control-label">Đơn hàng</label>
                                    <label class="control-label unprint">(1)</label>
                                </h2>
                                <a class="underline-none expandable expandable--pull-right mobile unprint" bind-event-click="toggle(this, '.order-items')" bind-class="{open: order_expand}" href="javascript:void(0)">
                                    Xem chi tiết
                                </a>
                            </div>
                            <div class="order-items mobile--is-collapsed" bind-class="{'mobile--is-collapsed': !order_expand}">
                                <div class="summary-body summary-section summary-product">
                                    <div class="summary-product-list">
                                        <ul class="product-list">
											@foreach($order->details()->get() as $detail )
                                            <li class="product product-has-image clearfix">
                                                <div class="product-thumbnail pull-left">
                                                    <div class="product-thumbnail__wrapper">
														<img style="background-color: #{{ $detail->product()->first()->color_code }}" src="{{ config('services.design_url') }}/uploads/product/unisex-cotton-tee-front.png" alt='' class='product-thumbnail__image' />
													</div>
                                                    <span class="product-thumbnail__quantity unprint" aria-hidden="true">{{ $detail->product_quantity }}</span>
                                                </div>
                                                <div class="product-info pull-left">
                                                    <span class="product-info-name">
                                                        <strong>{{ $detail->product()->first()->name }}</strong>
                                                        <label class="print">x1</label>
                                                    </span>

                                                </div>
                                                <strong class="product-price pull-right">
													@if( $detail->campaign_id  )
													{{ number_format( $detail->campaign()->first()->price * $detail->product_quantity ) }} ₫
													@else
													{{ number_format( \App\Product::find($detail->product_id)->price * $detail->product_quantity ) }} ₫	
													@endif
                                                </strong>
                                            </li>
											@endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="summary-section  border-top-none--mobile ">
                                <div class="total-line total-line-subtotal clearfix">
                                    <span class="total-line-name pull-left">
                                        Tạm tính
                                    </span>
                                    <span class="total-line-subprice pull-right">
										{{ number_format($order->total()) }} ₫
                                    </span>
                                </div>
                            </div>
                            <div class="summary-section">
                                <div class="total-line total-line-total clearfix">
                                    <span class="total-line-name total-line-name--bold pull-left">
                                        Tổng cộng
                                    </span>
                                    <span class="total-line-price pull-right">
                                        {{ number_format($order->total()) }} ₫
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
					<div class="col-md-7 col-sm-12 customer-info">
                        <div class="shipping-info">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="order-summary order-summary--white no-border no-padding-top">
                                        <div class="order-summary-header">
                                            <h2>
                                                <label class="control-label">Thông tin nhận hàng</label>
                                            </h2>
                                        </div>
                                        <div class="summary-section no-border no-padding-top">
                                            <p class="address-name">
                                                Mã Đơn Hàng : #{{ $order->id }}
                                            </p>
											<p class="address-name">
                                                Họ Tên : {{ $order->cus_name }}
                                            </p>
                                            <p class="address-address">
                                                Địa Chỉ : {{ $order->cus_address }}
                                            </p>
                                            <p class="address-phone">
                                                Số Điện Thoại : {{ $order->cus_phone }}
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                
								<div class="col-md-6 col-sm-6">
                                    <div class="order-summary order-summary--white no-border">
                                        <div class="order-summary-header">
                                            <h2>
                                                <label class="control-label">Hình thức thanh toán</label>
                                            </h2>
                                        </div>
                                        <div class="summary-section no-border no-padding-top">
                                            <span>{{ $order->paymentMethod() }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="order-summary order-summary--white no-border">
                                        <div class="order-summary-header">
                                            <h2>
                                                <label class="control-label">Cách thanh toán</label>
                                            </h2>
                                        </div>

                                        @if( $order->cus_payment_method == 1 )
                                        <div class="summary-section no-border no-padding-top">
                                            <div class="blank-slate">
                                                <p><b>Chuyển khoản với nội dung : {{ $order->id }}</b></p>

                                                <p> - Số Tài Khoản :  <b>0451000435903</b></p>
                                                <p> - Tên Người Nhận : <b>Vu Quoc Thang</b></p>
                                                <p> - Ngân Hàng : <b>Vietcombank Chi Nhánh Thành Công</b></p>

                                            </div>
                                        </div>
                                        @elseif( $order->cus_payment_method == 3 )
                                        <div class="summary-section no-border no-padding-top">
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
                                        @endif

                                    </div>
                                </div>
								
								<div class="col-md-6 col-sm-6">
                                    <div class="order-summary order-summary--white no-border">
                                        <div class="order-summary-header">
                                            <h2>
                                                <label class="control-label">Hình thức vận chuyển</label>
                                            </h2>
                                        </div>
                                        <div class="summary-section no-border no-padding-top">
                                            
                                            
                                            <span>Giao hàng tận nơi - 40.000₫</span>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
								
								<div class="col-md-6 col-sm-6">
                                    <div class="order-summary order-summary--white no-border">
                                        <div class="order-summary-header">
                                            <h2>
                                                <label class="control-label">Trạng Thái Đơn Hàng</label>
                                            </h2>
                                        </div>
                                        <div class="summary-section no-border no-padding-top">
                                            <span>{{ $order->currentStatus() }}</span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
						
                        <div class="order-success unprint">
                            <a href="{{ route('home') }}" class="btn btn-primary">
                                Tiếp tục mua hàng
                            </a>
                            <a onclick="window.print()" class="nounderline print-link" href="javascript:void(0)">
								<div class="print-link__block clearfix">
									<i class="fa fa-print icon-print" aria-hidden="true"></i>
									In 
								</div>
                            </a>
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

    <style>
        #map {
            width: 100%;
            height: 245px;
        }
        
        .hidden-map {
            display: none;
        }
    </style>

    <script src='{{ asset('thankyou') }}/assets/themes_support/jquery-2.1.3.min7c7e.js?20171025' type='text/javascript'></script>
    <script src='{{ asset('thankyou') }}/assets/themes_support/bootstrap.min7c7e.js?20171025' type='text/javascript'></script>
    <script src='{{ asset('thankyou') }}/assets/themes_support/twine.min7c7e.js?20171025' type='text/javascript'></script>
    <script src='{{ asset('thankyou') }}/assets/themes_support/checkout86cf.js?20180327' type='text/javascript'></script>
    <!--<script src="https://bizweb.dktcdn.net/100/000/001/themes/544642/assets/checkout.js?15168730444422222" type='text/javascript'></script>-->
    <script src='{{ asset('thankyou') }}/assets/themes_support/thankyou7c7e.js?20171025' type='text/javascript'></script>

    <script type="text/javascript">
        context = {}

        $(function() {
            Twine.reset(context).bind().refresh();
        });

        window.Bizweb || (window.Bizweb = {});
        Bizweb.Checkout = function() {
            function Checkout(e, options) {
                if (!options)
                    options = {};

                this.ele = e;
                this.invalidEmail = false;
            };

            Checkout.prototype.handleClick = function(element) {
                $(element).closest(".field__input-wrapper").find(".field__input").focus();
            }

            Checkout.prototype.handleFocus = function(element) {
                $(element).closest(".field__input-wrapper").addClass("js-is-focused")
            }

            Checkout.prototype.handleFieldBlur = function(element) {
                $(element).closest(".field__input-wrapper").removeClass("js-is-focused")
            }

            Checkout.prototype.changeEmail = function() {}

            return Checkout;
        }();
    </script>

   
</body>
</html>