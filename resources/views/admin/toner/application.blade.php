@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Senarai Permohonan Baru
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
    <!--end of page level css-->
@stop


@section('content')
    <!-- Container Section Start -->

    <div class="container my-3">
        <h3 class="project">
            Permohonan Stok</h3>

        <div class="container advfeatures">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card ">
                        <div class="card-header bg-primary text-white">
                            <span>Senarai Permohonan Baru</span>
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
                                            <th>Pemohon</th>
                                            <th>Unit</th>
                                            <th>Tarikh Mohon</th>
                                            <th>Proses</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Suhana binti Mohd Bahari</td>
                                            <td>Unit Sumber Manusia</td>
                                            <td>10 Julai 2019</td>
                                            <td><a href="{{ route('processApplication') }}">
                                                    <i class=".align-self-center fa-2x far fa-edit"></i>
                                                </a>
                                                </td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Sazlina binti Abdul Aziz</td>
                                            <td>Unit Kewangan</td>
                                            <td>8 Julai 2019</td>
                                            <td><a href="{{ route('processApplication') }}">
                                                    <i class=".align-self-center fa-2x far fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Zaini bin Samad</td>
                                            <td>Bahagian Pembangunan</td>
                                            <td>8 Julai 2019</td>
                                            <td><a href="{{ route('processApplication') }}">
                                                    <i class=".align-self-center fa-2x far fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
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
            <!--page level js ends-->
@stop