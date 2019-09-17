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

    <link href="{{ asset('vendors/sweetalert/css/sweetalert2.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('vendors/animate/animate.min.css') }}"/>
    <!--end of page level css-->

    <link rel="stylesheet" href="{{ asset('css/pages/tab.css') }}" />
    <style>
        @media (min-width:320px) and (max-width:425px){
            .popover.left{
                width:100px !important;
            }
        }
        .nav-tabs .nav-link:hover {
            text-decoration: none;
            background-color: #eee ;
        }
        .nav-pills .nav-link:hover {
            text-decoration: none;
            background-color: #eee ;
        }
        .btn-light:hover{
            color: #fff;
        }
        .tab_panel .nav-link:active{
            background-color: rgba(255, 255, 255, .23);
        }
    </style>

@stop


@section('content')
    <!-- Container Section Start -->
    @foreach($staffs as $data)
    <div class="container my-3">

        <h3 class="project">
            {{ $data->name }}
        </h3>
        <h5 class="text-justify">
            {{ $data->Positions->name }}, {{ $data->Units->name }}
        </h5>
        <div class="container advfeatures">
                <div class="col-md-10 my-2">
                    <div class="card-body">
                        <div  id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="card ">
                                <div class="card-header bg-success text-white" role="tab" id="headingOne">
                                    <a data-toggle="collapse"  data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span class=" color1_accordians text-white" data-toggle="tooltip" title="Klik Untuk Buka / Tutup">Borang Permohonan Toner</span>
                                    </a>
                                </div>
                                <div id="collapseOne"  class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <form action="{{ route('hantarpermohonan') }}" role="form" id="form_controls" method="GET">
                                            <div class="card-body">
                                                <h5>1. HP Laserjet Pro M402dn</h5>
                                                <div class="table-scrollable">
                                                    <table class="table table-hover">
                                                        <thead>
                                                        <tr>
                                                            <th class="col-md-6 my-2">Model</th>
                                                            <th>Kuantiti Dimohon</th>
                                                            <th>Baki Semasa</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td><div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="custom-checkbox" value="">&nbsp;HP CF226A (26A)</label>
                                                                </div></td>
                                                            <td><div class="form-group">
                                                                    <input class="form-control" id="qty">
                                                                </div></td>
                                                            <td><div class="form-group">
                                                                    <input class="form-control" id="bal" value="10" disabled>
                                                                </div></td>
                                                        </tr>

                                                        </tbody>
                                                    </table>

                                                </div>


                                                <div class="col-md-12  col-sm-12 col-12  col-lg-12 text-right">
                                                    <button type="submit" class="btn btn-responsive btn-primary btn-sm" id="">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card  my-3">
                                <div class="card-header bg-primary text-white" role="tab" id="headingTwo">
                                    <a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <span class="color1_accordians text-white" data-toggle="tooltip" title="Klik Untuk Buka / Tutup">
                                                    Senarai Aset Berdaftar
                                                </span>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">                                         <div class="card-body">
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
                                                        @php $num=1; @endphp
                                                        @foreach($aset as $data)
                                                            <tbody>
                                                            <tr>
                                                                <td>{{ $num }}</td>
                                                                <td>{{ $data->Models->name }}</td>
                                                                <td>{{ $data->registration_no }}</td>
                                                                <td>
                                                                    @if($data->aset_status_id === 1)
                                                                        <span class="label label-sm bg-success text-white">{{ $data->AsetStatus->name }}</span>
                                                                    @else
                                                                        <span class="label label-sm bg-danger text-white">{{ $data->AsetStatus->name }}</span>
                                                                    @endif


                                                                </td>
                                                            </tr>

                                                            </tbody>
                                                            @php $num++; @endphp
                                                        @endforeach

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- nav-tabs-custom -->
                    </div>

                </div>

    </div>

        <!-- Related Section Start -->
    </div>

    <!-- Related Setion End -->
    @endforeach
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

    <script src="{{ asset('js/pages/tabs_accordions.js') }}" type="text/javascript"></script>
    <!--page level js ends-->
@stop
