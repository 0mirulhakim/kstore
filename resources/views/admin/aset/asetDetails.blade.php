@extends('admin/layouts/default')
@section('title')
    Keterangan Pencetak
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('vendors/iCheck/css/all.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/pages/form_layouts.css') }}" rel="stylesheet" type="text/css"/>


@stop
@section('content')

    <section class="content-header">

        <!--section starts-->
        <h1>Keterangan Aset Pencetak</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">Aset</a>
            </li>
            <li class="active">Senarai Pencetak</li>
            <li class="active">Keterangan Pencetak</li>
        </ol>
    </section>

    <section class="content pl-3 pr-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-body border">
                        <form enctype="multipart/form-data" class="form-horizontal form-bordered">


                            @foreach($details as $data)
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Jenama</label>
                                    <div class="row-offcanvas-left">
                                        {{ $data->Brands->name }}
                                    </div>
                                </div>
                            </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-3 control-label"
                                               for="form-text-input">Model</label>
                                        <div class="row-offcanvas-left">
                                            {{ $data->Models->name }}
                                        </div>
                                    </div>
                             </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">No. Siri</label>
                                    <div class="row-offcanvas-left">
                                        {{ $data->serial_no }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">No. Daftar Aset</label>
                                    <div class="row-offcanvas-left">
                                        {{ $data->registration_no }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Tarikh Terima</label>
                                    <div class="row-offcanvas-left">
                                        {{ $data->receive_date }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Pembekal</label>
                                    <div class="row-offcanvas-left">
                                        {{ $data->Suppliers->name }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-3 control-label"
                                               for="form-text-input">Perolehan</label>
                                        <div class="row-offcanvas-left">
                                            {{ $data->Procurement_types->name }}
                                        </div>
                                    </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Penempatan</label>
                                    <div class="row-offcanvas-left">
                                        {{ $data->Staffs->name }}
                                    </div>
                                    <div class="row-offcanvas-left">
                                        {{ $data->location }}
                                    </div>
                                    <div class="row-offcanvas-left">
                                        {{ $data->allocate_date }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Status</label>
                                    <div class="row-offcanvas-left">
                                        {{ $data->AsetStatus->name }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Catatan</label>
                                    <div class="row-offcanvas-left">
                                        {{ $data->remarks }}
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            </form>
                        <div class="form-group form-actions">
                            <div class="row">
                                <div class="col-md-9 col-md-offset-3 ml-auto">

                                    <span class="btn btn-effect-ripple btn-light"><a href="{{ route('aset:aset') }}">Kembali</a> </span>

                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>


    </section>



@stop


@section('footer_scripts')


    <script src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('js/pages/form_layouts.js') }}" type="text/javascript"></script>

    <script src="{{ asset('vendors/pickadate/js/picker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/pickadate/js/picker.date.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/pickadate/js/picker.time.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/flatpickr/js/flatpickr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/airDatepicker/js/datepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/airDatepicker/js/datepicker.en.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/custom_datepicker.js') }}" type="text/javascript"></script>

    <script src="{{ asset('vendors/clockface/js/clockface.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" type="text/javascript"></script>

    <script src="{{ asset('js/pages/datepicker.js') }}" type="text/javascript"></script>

    <script language="javascript" type="text/javascript" src="{{ asset('vendors/select2/js/select2.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('vendors/select2/js/select2.js') }}"></script>

    <script language="javascript" type="text/javascript" src="{{ asset('vendors/bootstrap-multiselect/js/bootstrap-multiselect.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('vendors/sifter/sifter.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('vendors/microplugin/microplugin.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('vendors/selectize/js/selectize.min.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('vendors/bootstrap-switch/js/bootstrap-switch.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('vendors/switchery/js/switchery.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('vendors/bootstrap-maxlength/js/bootstrap-maxlength.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('vendors/card/js/jquery.card.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('js/pages/custom_elements.js') }}"></script>


@stop




