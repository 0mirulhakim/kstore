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
            Siti Rohaya binti Mat Hasan</h3>
        <p class="text-justify">
            Penolong Pegawai Teknologi Maklumat, Unit ICT
        </p>
        <div class="container advfeatures">
            <div class="row">
                <div class="col-md-6 my-2">
                    <div class="card ">
                        <div class="card-header bg-primary text-white">
                            <span>Senarai Aset Berdaftar</span>
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
                                            <th>No. Daftar Aset</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>HP Laserjet Pro M402dn</td>
                                            <td>PDTK/KP/15/01</td>
                                            <td>
                                                <span class="label label-sm bg-success text-white">Aktif</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>HP Color Laserjet CP5225</td>
                                            <td>DTK/KP/15/07</td>
                                            <td>
                                                <span class="label label-sm bg-danger text-white">Tidak Aktif</span>
                                            </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 my-2">
                    <div class="card ">
                        <div class="card-header bg-success text-white">
                            <span>Borang Permohonan Toner</span>
                            <span class="float-right clickable">
                                <i class="fa fa-chevron-up"></i>
                            </span>
                        </div>
                        <div class="card-body">
                            <h5>HP Laserjet Pro M402dn</h5>
                            <div class="table-scrollable">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="col-md-6 my-2">Model</th>
                                        <th>Kuantiti Dimohon</th>
                                        <th>Baki Semasa</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="custom-checkbox" value="">&nbsp;HP CF226A (26A)</label>
                                            </div></td>
                                        <td><div class="form-group">
                                                 <input class="form-control" id="qty">
                                            </div></td>
                                        <td><div class="form-group">
                                                <input class="form-control" id="bal" value="15" disabled>
                                                        </div></td>
                                    </tr>

                                    </tbody>
                                </table>

                            </div>
                            <div class="col-md-12  col-sm-12 col-12  col-lg-12 text-right">
                                <button type="submit" class="btn btn-responsive btn-primary btn-sm">Submit</button>
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