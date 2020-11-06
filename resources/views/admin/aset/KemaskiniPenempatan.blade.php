@extends('admin/layouts/default')
@section('title')
    Kemaskini Penempatan Pencetak
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('vendors/iCheck/css/all.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/pages/form_layouts.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendors/iCheck/css/all.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/pages/form_layouts.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendors/pickadate/css/default.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendors/pickadate/css/default.date.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendors/pickadate/css/default.time.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendors/airDatepicker/css/datepicker.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendors/flatpickr/css/flatpickr.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('css/pages/adv_date_pickers.css') }}" rel="stylesheet" type="text/css"/>

    <link type="text/css" href="{{ asset('vendors/bootstrap-multiselect/css/bootstrap-multiselect.css') }}" rel="stylesheet"/>
    <link href="{{ asset('vendors/select2/css/select2.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet"/>
    <link href="{{ asset('vendors/selectize/css/selectize.css') }}" rel="stylesheet"/>
    <link href="{{ asset('vendors/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet"/>

@stop
@section('content')

    <section class="content-header">

        <!--section starts-->
        <h1>Kemaskini Penempatan Aset Pencetak</h1>
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
                        
                        <form action="{{ route('aset:editPenempatan') }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
                            @csrf
                            {{ method_field('post') }}

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
                                        <select id="select24" name="hr_staff_id">
                                                <option value="{{ $data->Staffs->id }}" readonly>{{ $data->Staffs->name }}</option>
                                                @foreach($staffs as $s)
                                                    <option value="{{ $s->id }}">{{ $s->name }}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                    <div class="row-offcanvas-left">
                                    <input type="text" name="location" value="{{ $data->location }}"size="30">
                                    </div>
                                    <div class="row-offcanvas-left">
                                    
                                        {{ $data->allocate_date }}
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="hr_staff_id_1" name="hr_staff_id_1" value="{{$data->hr_staff_id}}">
                            <input type="hidden" id="location_1" name="location_1" value="{{$data->location}}">
                            <input type="hidden" id="remarks_1" name="remarks_1" value="{{$data->remarks}}">
                            <input type="hidden" id="hr_unit_id" name="hr_unit_id" value="{{$data->Staffs->hr_unit_id}}">
                            <input type="hidden" id="id" name="id" value="{{$data->id }}">
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Status</label>
                                    <div class="row-offcanvas-left">
                                    <select name="aset_status_id" id="aset_status_id" class="form-control select2">
                                            <option value="{{ $data->AsetStatus->id }}" readonly>{{ $data->AsetStatus->name }}</option>
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
                                           for="form-text-input">Tarikh Penempatan </label>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <p class="flatpickr input-group" data-wrap="true" data-clickOpens="false">
                                                <input class="form-control" name="allocate_date_end" value="{{ date('Y-m-d') }}" data-input id="elements">
                                                <span class="input-group-append add-on">
                                            <a class="input-btn" data-toggle>
                                                <span class="input-group-text remove_radius"> <i class="livicon" data-name="calendar" data-size="23"
                                                                                                 data-c="#555555" data-hc="#555555" data-loop="true"></i></span>
                                            </a>
                                        </span>
                                                <span class="input-group-append add-on">
                                            <a class="input-btn" data-clear>
                                                 <span class="input-group-text"><i class="livicon" data-name="remove" data-size="23"
                                                                                   data-c="#555555" data-hc="#555555" data-loop="true"></i></span>
                                            </a>
                                        </span>
                                            </p>
                                        </div>

                                       
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Catatan</label>
                                    <div class="row-offcanvas-left">
                                    <div class="row-offcanvas-left">
                                    <input type="text" id="remarks" name="remarks" value="{{$data->remarks }}" >
                                    <!--<textarea name="remarks" value="{{ $data->remarks }}" rows="4" cols="50"></textarea> -->
                                    </div>
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            
                        <div class="form-group form-actions">
                            <div class="row">
                                <div class="col-md-9 col-md-offset-3 ml-auto">
                                <button type="submit" class="btn btn-effect-ripple btn-primary">
                                                Simpan
                                            </button>
                                    <span class="btn btn-effect-ripple btn-light"><a href="{{ route('aset:aset') }}">Kembali</a> </span>

                         </form>       </div>
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




