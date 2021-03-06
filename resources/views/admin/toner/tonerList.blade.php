@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Senarai Model Toner
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
    <section class="content-header">
        <!--section starts-->
        <h1>Senarai Model Toner</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">Daftar Kod</a>
            </li>
            <li class="bg-active">Toner</li>
        </ol>
    </section>


    <div class="container my-3">

        <div class="container advfeatures">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card ">

                        <div class="card-header bg-primary text-white">
                            <i class="livicon" data-name="desktop" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> {{ $models->name }}
                            <span class="float-right btn btn-sm btn-warning"><a href="{{ route('toner:createToner',[$models->id]) }}">Daftar Model Toner</a> </span>
                            <span class="float-right clickable">
                            </span>
                        </div>

                        <div class="card-body">
                            <div class="portlet-body bg-white p-2">
@if($tonerCnt > 0)
                                <div class="table-scrollable">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Kod Toner / SKU No</th>
                                            <th>Model Toner</th>
                                            <th>Edit</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @php $num=1; @endphp
                                        @foreach($toners as $data)
                                            <tr>
                                                <td>{{ $num }}</td>
                                                <td>{{ $data->code }}</td>
                                                <td>{{ $data->model }}</td>
                                                <td><a href="">
                                                        <i class=".align-self-center fa-2x far fa-edit"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                            @php $num++; @endphp
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
    @else
                                Tiada Toner Didaftar
    @endif

                            </div>
                            <span class="btn btn-effect-ripple btn-light"><a href="{{ route('model:asetModel') }}">Kembali</a> </span>
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
