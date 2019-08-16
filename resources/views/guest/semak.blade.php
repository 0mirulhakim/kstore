@extends('guest/layouts/default')

{{-- Page title --}}
@section('title')
    Status Permohonan
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/portfolio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/animate/animate.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/owl_carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/owl_carousel/css/owl.theme.css') }}">

    <link href="{{ asset('vendors/iCheck/css/all.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/buttons.css') }}"/>
    <!--end of page level css-->
@stop

{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container my-3">
        <h2 id="single_portfolio_title"><label> Semak Status Permohonan Toner</label></h2>
        <div class="row details">
            <!-- Slider Section Start -->
            <div class="col-md-12  col-lg-6 col-12 wow bounceInLeft" data-wow-duration="1.5s">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12 slider">
                        <div id="owl-demo" class="owl-carousel owl-theme">
                            <div class="item"><img src="{{ asset('images/clipart_toners.jpg') }}" alt="slider-image" class="img-fluid"></div>
                            <div class="item"><img src="{{ asset('images/save-toner.png') }}" alt="slider-image" class="img-fluid"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Slider Section End -->
            <!-- Project Description Section Start -->
            <div class="col-md-12 col-lg-6 col-12 wow bounceInRight" data-wow-duration="1.5s">
                <h3 class="project">Permohonan Toner Hendaklah Dibuat 3 Hari sebelum Pengeluaran</h3>
                <p class="text-justify">
                <form action="{{ route('semak') }}" role="form" id="form_controls" method="GET">
                    <div class="form-group">
                        <label for="nokp">Id Permohonan</label>
                        <input class="form-control" placeholder="Sila Masukkan Nombor ID Permohonan"></div>

                    <div class="input-group-append">
                        <input type="submit" class="btn btn-3d btn-info " value="Hantar">
                    </div>


                </form>
                </p>

            </div>
            <!-- //Project Description Section End -->
        </div>
        <!-- Related Section Start -->
    </div>
    <!-- Related Setion End -->

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/wow/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/countUp.js/js/countUp.js') }}"></script>
    <script src="{{ asset('js/pages/custom_buttons.js') }}"></script>
    <!--page level js ends-->
@stop
