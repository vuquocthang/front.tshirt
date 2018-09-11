@extends('front.base')


@section('main')
<section id="apus-breadscrumb" class="breadcrumb-page apus-breadscrumb ">
    <div class="container">
        <div class="wrapper-breads  ">
            <div class="wrapper-breads-inner">
                <div class="breadscrumb-inner">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i>Trang Chủ</a> </li>
                        <li><span class="active">404</span></li>
                    </ol>
                </div>
                <h3 class="bread-title">404</h3>
			</div>
        </div>
    </div>
</section>
<div id="main-container" class="inner">
    <div id="main-content" class="main-page">
        <section class="error-404 not-found text-center clearfix">
            <div class="container">
                <img src="{{ asset('') }}/front.assets/wp-content/themes/famita/images/error.jpg" alt="Famita">
                <div class="slogan">
                    <h4 class="title-big"> Không tìm thấy đường dẫn này</h4>
                </div>
                <div class="page-content">
                    
                    <div class="return text-center">
                        <a class="btn btn-theme radius-50" href="{{ route('home') }}">Về Trang Chủ</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection