@extends('admin/layouts/default')
@section('title')
    Daftar Aset Pencetak
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('vendors/iCheck/css/all.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/pages/form_layouts.css') }}" rel="stylesheet" type="text/css"/>

    <link href="{{ asset('vendors/daterangepicker/css/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendors/clockface/css/clockface.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet" type="text/css" />

    <link type="text/css" href="{{ asset('vendors/bootstrap-multiselect/css/bootstrap-multiselect.css') }}" rel="stylesheet"/>
    <link href="{{ asset('vendors/select2/css/select2.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet"/>
    <link href="{{ asset('vendors/selectize/css/selectize.css') }}" rel="stylesheet"/>
    <link href="{{ asset('vendors/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet"/>
@stop
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>Daftar Pencetak</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">Daftar</a>
            </li>
            <li class="active">Aset Pencetak</li>
        </ol>
    </section>

    <section class="content pl-3 pr-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-body border">
                        <form action="{{ route('aset:registerPrinter') }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
                            @csrf
                            {{ method_field('post') }}
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Jenama</label>
                                    <div class="col-md-3">
                                        <select name="aset_brand_id" id="aset_brand_id" class="form-control input-lg dynamic" data-dependent="aset_model_id">
                                            <option value="" readonly>Sila Pilih Jenama</option>
                                            @foreach($brands as $a)
                                                <option value="{{ $a->id }}">{{ $a->name }}</option>
                                            @endforeach

                                        </select>
                                        @if ($errors->has('aset_brand_id'))
                                            <span class="text-danger">{{ $errors->first('aset_brand_id') }}</span>
                                        @endif

                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Model</label>
                                    <div class="col-md-3">
                                        <select name="aset_model_id" id="aset_model_id" class="form-control select2">
                                            <option value="" readonly>Sila Pilih Model</option>
                                            @foreach($models as $a)
                                                <option value="{{ $a->id }}">{{ $a->name }}</option>
                                            @endforeach

                                        </select>
                                        @if ($errors->has('aset_model_id'))
                                            <span class="text-danger">{{ $errors->first('aset_model_id') }}</span>
                                        @endif

                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">No. Siri</label>
                                    <div class="col-md-3">
                                        <input type="text" id="form-text-input"
                                               name="serial_no"
                                               class="form-control" placeholder="Masukkan No. Siri">
                                        @if ($errors->has('serial_no'))
                                            <span class="text-danger">{{ $errors->first('serial_no') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">No. Daftar Aset</label>
                                    <div class="col-md-5">
                                        <input type="text" id="form-text-input"
                                               name="registration_no"
                                               class="form-control" placeholder="Masukkan No. Daftar Aset">
                                        @if ($errors->has('registration_no'))
                                            <span class="text-danger">{{ $errors->first('registration_no') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Tarikh Terima</label>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <div class="input-group-append">
                                      <span class="input-group-text"> <i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                                                         data-hc="#555555" data-loop="true"></i></span>
                                            </div>
                                            <input type="text" name="receive_date" class="form-control" id="rangepicker1"/>

                                        </div>

                                        @if ($errors->has('receive_date'))
                                            <span class="text-danger">{{ $errors->first('receive_date') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Pembekal</label>
                                    <div class="col-md-3">
                                        <select name="aset_stor_supplier_id" id="aset_model_id" class="form-control select2">
                                            <option value="" readonly>Sila Pilih Pembekal</option>
                                            @foreach($suppliers as $a)
                                                <option value="{{ $a->id }}">{{ $a->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('aset_stor_supplier_id'))
                                            <span class="text-danger">{{ $errors->first('aset_stor_supplier_id') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Jenis Perolehan</label>
                                    <div class="col-md-3">
                                        <select name="aset_procurement_ty_id" id="aset_model_id" class="form-control select2">
                                            <option value="" readonly>Sila Pilih Jenis Perolehan</option>
                                            @foreach($proc_types as $a)
                                                <option value="{{ $a->id }}">{{ $a->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('aset_procurement_ty_id'))
                                            <span class="text-danger">{{ $errors->first('aset_procurement_ty_id') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Status Pencetak</label>
                                    <div class="col-md-3">
                                        <select name="aset_status_id" id="aset_status_id" class="form-control select2">
                                            <option value="" readonly>Status Pencetak</option>
                                            @foreach($asetStatus as $b)
                                                <option value="{{ $b->id }}">{{ $b->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('aset_status_id'))
                                            <span class="text-danger">{{ $errors->first('aset_status_id') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>




                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="select24">Penempatan</label>
                                    <div class="input-group-append radius_left">

                                        <div class="input-group-append radius_left">
                                            <select id="select24" name="hr_staff_id">
                                                <option value="" readonly>Pegawai / Kakitangan</option>
                                                @foreach($staffs as $s)
                                                    <option value="{{ $s->id }}">{{ $s->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        @if ($errors->has('hr_staff_id'))
                                            <span class="text-danger">{{ $errors->first('hr_staff_id') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" id="form-text-input"
                                               name="location"
                                               class="form-control" placeholder="Masukkan Lokasi Penempatan">
                                        @if ($errors->has('location'))
                                            <span class="text-danger">{{ $errors->first('location') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Tarikh Penempatan</label>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <div class="input-group-append">
                                      <span class="input-group-text"> <i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                                                         data-hc="#555555" data-loop="true"></i></span>
                                            </div>
                                            <input type="text" name="allocate_date" class="form-control" id="rangepicker2"/>
                                        </div>

                                        @if ($errors->has('allocate_date'))
                                            <span class="text-danger">{{ $errors->first('allocate_date') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-actions">
                                <div class="row">
                                    <div class="col-md-9 col-md-offset-3 ml-auto">
                                        <button type="submit" class="btn btn-effect-ripple btn-primary">
                                            Simpan
                                        </button>
                                        <span class="btn btn-effect-ripple btn-light"><a href="">Kembali</a> </span>

                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>

            </div>
        </div>


    </section>



@stop


@section('footer_scripts')


    <script src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('js/pages/form_layouts.js') }}" type="text/javascript"></script>

    <script src="{{ asset('vendors/moment/js/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/daterangepicker/js/daterangepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>

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




