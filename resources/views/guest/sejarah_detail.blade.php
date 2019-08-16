@extends('guest/layouts/default')

{{-- Page title --}}
@section('title')
    Sejarah Permohonan Toner
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
    <div class="container my-3">
        <h3 class="project">
            Siti Rohaya binti Mat Hasan</h3>
        <p class="text-justify">
            Penolong Pegawai Teknologi Maklumat, Unit ICT
        </p>
    <!-- Container Section Start -->
    <div class="container advfeatures">
        <div class="row">

        <div class="card ">
    <div class="card-header bg-primary text-white">
        <span>Sejarah Permohonan Toner</span>
        <span class="float-right clickable">
                                <i class="fa fa-chevron-up"></i>
                            </span>
    </div>
    <div class="card-body">
        <div class="portlet-body bg-white p-2">
            <div class="table-scrollable">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Model</th>
                        <th>Qty Diluluskan</th>
                        <th>Tarikh Terima</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>HP Laserjet Pro M402dn</td>
                        <td>1</td>
                        <td>10 April 2019</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Related Setion End -->
        </div>

        </div>
    </div>
    </div>
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
