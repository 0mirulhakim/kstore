@extends('admin/layouts/default')
@section('title')
    Kemaskini Aset Pencetak
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('vendors/iCheck/css/all.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/pages/form_layouts.css') }}" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
        <h1>Kemaskini Aset Pencetak</h1>
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
                        <form action="{{ route('aset:editAset') }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
                            @csrf
                            {{ method_field('post') }}
                            @foreach($details as $data)
                            <input type="hidden" id="id" name="id" value="{{$data->id }}">
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Jenama</label>
                                    <div class="col-md-3">
                                        <select name="aset_brand_id" id="aset_brand_id" class="form-control input-lg dynamic" data-dependent="aset_model_id">
                                            <option value="{{ $data->Brands->id }}" readonly>{{ $data->Brands->name }}</option>
                                            @foreach($brands as $key => $value)
                                                <option value="{{ $key }}">{{ $value }}</option>
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
                                        <select name="aset_model_id" id="select25" class="form-control select2">
                                            <option value="{{ $data->Models->id }}" readonly>{{ $data->Models->name }}</option>
                                            
                                            @foreach($models as $a)
                                                <option value="{{ $a->id }}">{{ $a->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('aset_model_id'))
                                            <span class="text-danger">{{ $errors->first('aset_model_id') }}</span>
                                        @endif

                                    </div>
                                    @endforeach
                                </div>
                            </div>


    <!-- Script --><!--
    <script type='text/javascript'>

    $(document).ready(function(){

      // Brand Change
      $('#aset_brand_id').change(function(){

         // Brand id
         var id = $(this).val();

         // Empty the dropdown
         $('#aset_model_id').find('option').not(':first').remove();

         // AJAX request 
         $.ajax({
           url: 'getModel/'+id,
           type: 'get',
           dataType: 'json',
           success: function(response){

             var len = 0;
             if(response['data'] != null){
               len = response['data'].length;
             }

             if(len > 0){
               // Read data and create <option >
               for(var i=0; i<len; i++){

                 var id = response['data'][i].id;
                 var name = response['data'][i].name;

                 var option = "<option value='"+id+"'>"+name+"</option>"; 

                 $("#aset_model_id").append(option); 
               }
             }

           }
        });
      });

    });

    </script>-->
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">No. Siri</label>
                                    <div class="col-md-3">
                                        <input type="text" id="form-text-input"
                                               name="serial_no"
                                               class="form-control" value="{{ $data->serial_no }}">
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
                                        <input type="text" id="registration_no"
                                               name="registration_no"
                                               class="form-control" value="{{ $data->registration_no }}">
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
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <p class="flatpickr input-group" data-wrap="true" data-clickOpens="false">
                                                <input class="form-control" name="receive_date" value=" {{ $data->receive_date }}" data-input id="elements">
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
                                        <select name="aset_stor_supplier_id" id="aset_stor_supplier_id" class="form-control select2">
                                            <option value=" {{ $data->Suppliers->id }}" readonly> {{ $data->Suppliers->name }}</option>
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
                                        <select name="aset_procurement_ty_id" id="aset_procurement_ty_id" class="form-control select2">
                                            <option value="{{ $data->Procurement_types->id }}" readonly>{{ $data->Procurement_types->name }}</option>
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
                                           for="select24">Penempatan</label>
                                    <div class="input-group-append radius_left">

                                        <div class="input-group-append radius_left">
                                            <select id="select24" name="hr_staff_id">
                                                <option value="{{ $data->Staffs->id }}" readonly>{{ $data->Staffs->name }}</option>
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
                                        <input type="text" id="location"
                                               name="location"
                                               class="form-control" value="{{ $data->location }}">
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
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <p class="flatpickr input-group" data-wrap="true" data-clickOpens="false">
                                                <input class="form-control" name="allocate_date" value=" {{ $data->allocate_date }}" data-input id="elements">
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

                                            @if ($errors->has('allocate_date'))
                                                <span class="text-danger">{{ $errors->first('allocate_date') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Catatan</label>
                                           <div class="col-md-5">
                                        <input type="text" id="remarks"
                                               name="remarks"
                                               class="form-control" value="{{ $data->remarks }}">
                                        @if ($errors->has('remarks'))
                                            <span class="text-danger">{{ $errors->first('remarks') }}</span>
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
                                            <span class="btn btn-effect-ripple btn-light"><a href="{{ route('aset:aset') }}">Kembali</a> </span>

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

    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">

    <script type="text/javascript">

        $(document).ready(function() {

            $('select[name="aset_brand_id"]').on('change', function() {

                var brandID = $(this).val();

                if(brandID) {

                    $.ajax({

                        url: 'http://localhost/k-store/public/admin/registerPrinter/ajax/'+brandID,

                        type: "GET",

                        dataType: "json",

                        success:function(data) {




                            $('select[name="aset_model_id"]').empty();

                            $.each(data, function(key, value) {

                                $('select[name="aset_model_id"]').append('<option value="'+ key +'">'+ value +'</option>');

                            });


                        }

                    });

                }else{

                    $('select[name="aset_model_id"]').empty();

                }

            });

        });

    </script>

@stop

