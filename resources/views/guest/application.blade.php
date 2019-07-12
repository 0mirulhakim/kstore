@extends('guest/layouts/default')

{{-- Page title --}}
@section('title')
    Permohonan Toner
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


@section('content')
    <!-- Container Section Start -->
    <div class="container my-3">
        <h3 class="project">Nama Pemohon</h3>
        <p class="text-justify">
            Jawatan, Unit
        </p>

        <div class="row details">
            <div class="col-md-12 col-lg-6 col-12">
                <h3 class="project">Senarai Pencetak Berdaftar</h3>
                <p class="text-justify">
                <form action="{{ route('application') }}" role="form" id="form_controls" >
                    <div class="form-group">
                        <label for="nokp">Nombor Kad Pengenalan</label>
                        <input class="form-control" placeholder="Sila Masukkan Nombor Kad Pengenalan 12 Digit Tanpa '-'" id="nokp"></div>

                    <div class="input-group-append">
                        <input type="submit" class="btn btn-3d btn-info " value="Hantar">
                    </div>


                </form>
                </p>

            </div>

            <div class="col-md-12 col-lg-6 col-12">
                <h3 class="project">Borang Permohonan</h3>
                <p class="text-justify">
                <form action="{{ route('application') }}" role="form" id="form_controls" >
                    <div class="form-group">
                        <label for="nokp">Nombor Kad Pengenalan</label>
                        <input class="form-control" placeholder="Sila Masukkan Nombor Kad Pengenalan 12 Digit Tanpa '-'" id="nokp"></div>

                    <div class="input-group-append">
                        <input type="submit" class="btn btn-3d btn-info " value="Hantar">
                    </div>


                </form>
                </p>

            </div>

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