@extends('front.base')

@section('main')
<section id="main-container" class="container inner">
    <div class="row">
        <div id="main-content" class="main-page col-xs-12 clearfix">
            <div id="main" class="site-main clearfix" role="main">
                <div class="woocommerce">
                    <div class="user">
                        <div id="customer_login" class="register_login_wrapper active">
                            <h2 class="title">Đăng Nhập</h2>
                            <form method="post" action="{{ url('login') }}" class="login" role="form">
                                @csrf
								
								<p class="form-group form-row form-row-wide">
                                    <label for="username">Email<span class="required">*</span></label>
                                    <input type="email" value="{{ old('email') }}" class="  form-control" name="email" id="username" value="" required/>
                                </p>
                                <p class="form-group form-row form-row-wide">
                                    <label for="password">Password <span class="required">*</span></label>
                                    <input class="  form-control" type="password" name="password" id="password" required/>
                                </p>
                                <div class="form-group form-row">
                                    <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="c02e182e1c" />
                                    <input type="hidden" name="_wp_http_referer" value="" />
                                    <div class="form-group clearfix">
                                        <span class="inline pull-left">
										<input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Nhớ Mật Khẩu </span>
                                        <span class="lost_password pull-right">
											<a href="#">Quên Mật Khẩu ?</a>
										</span>
                                    </div>
                                    <input type="submit" class="btn btn-theme btn-block" name="login" value="sign in" />
                                </div>
                            </form>
							
                            <div class="create text-center">
                                <a class="creat-account register-login-action" href="#customer_register">Tạo Tài Khoản</a>
                            </div>
                        </div>
                        <div id="customer_register" class="content-register register_login_wrapper ">
                            <h2 class="title">Đăng Ký</h2>
                            <form method="post" class="register widget" role="form">
                                <p class="form-group form-row form-row-wide">
                                    <label for="reg_email">Email <span class="required">*</span></label>
                                    <input type="email" class="  form-control" name="email" id="reg_email" value="" />
                                </p>
                                <p class="form-group form-row form-row-wide">
                                    <label for="reg_password">Password <span class="required">*</span></label>
                                    <input type="password" class="  form-control" name="password" id="reg_password" />
                                </p>
                                <div class="woocommerce-privacy-policy-text"></div>
                                <p class="form-group form-row wrapper-submit">
                                    <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="4afa5e30fa" />
                                    <input type="hidden" name="_wp_http_referer" value="" />
                                    <input type="submit" class="btn btn-theme btn-block" name="register" value="Đăng Ký" />
                                </p>
                            </form>
                            <div class="create text-center">
                                <a class="login-account register-login-action" href="#customer_login">Đăng Nhập</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection