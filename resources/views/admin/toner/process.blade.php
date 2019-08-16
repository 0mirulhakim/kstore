@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Proses Permohonan Stok
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/portfolio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/animate/animate.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/owl_carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/owl_carousel/css/owl.theme.css') }}">

    <!--button-->
    <link href="{{ asset('vendors/iCheck/css/all.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/buttons.css') }}"/>

    <!--table-->
    <link href="{{ asset('css/pages/tables.css') }}" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/panel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/features.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/timeline.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/switchery/css/switchery.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/bootstrap-switch/css/bootstrap-switch.css') }}">

    <link href="{{ asset('vendors/iCheck/css/all.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/pages/form_layouts.css') }}" rel="stylesheet" type="text/css"/>

    <link href="{{ asset('vendors/sweetalert/css/sweetalert2.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('vendors/animate/animate.min.css') }}"/>
    <!--end of page level css-->
@stop


@section('content')
    <!-- Container Section Start -->

    <div class="container my-3">
        <h3 class="project">
            Proses Permohonan Stok</h3>

        <div class="container advfeatures">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card ">
                        <div class="card-header bg-primary text-white">
                            <span>Kuantiti Yang Dibenarkan</span>
                            <span class="float-right clickable">
                                <i class="fa fa-chevron-up"></i>
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="portlet-body bg-white p-2">
                                <div class="table-scrollable">
                                    <form class="form-horizontal" action="{{ route('submitpengesahan') }}">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th class="col-md-6 my-2">Model</th>
                                            <th>Kuantiti Dimohon</th>
                                            <th>Kuantiti Diluluskan</th>
                                            <th>Baki Semasa</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>HP CF226A (26A)</td>
                                            <td>1</td>
                                            <td><div class="form-group">
                                                    <input class="form-control" id="qty">
                                                </div></td>
                                            <td>10</td>
                                            <td><button type="submit" class="btn btn-responsive btn-primary btn-sm" id="">Pengesahan</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <!-- Related Section Start -->

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

            <script src="{{ asset('vendors/sweetalert/js/sweetalert2.js') }}" type="text/javascript"></script>
            <script src="{{ asset('js/pages/custom_sweetalert.js') }}" type="text/javascript"></script>
            <!--page level js ends-->
@stop