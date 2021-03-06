@extends('admin/layouts/default')
@section('title')
    Daftar Kakitangan Baru
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

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
        <h1>Daftar Kakitangan Baru</h1>
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
            <li class="active">Kakitangan Baru</li>
        </ol>
    </section>

    <section class="content pl-3 pr-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-body border">
                        <form action="{{ route('hr:storeStaff') }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
                            @csrf
                            {{ method_field('post') }}
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">No. Kad Pengenalan</label>
                                    <div class="col-md-3">
                                        <input type="text" id="identification_card"
                                               name="identification_card"
                                               class="form-control" placeholder="Masukkan No. IC tanpa '-' ">
                                        @if ($errors->has('identification_card'))
                                            <span class="text-danger">{{ $errors->first('identification_card') }}</span>
                                        @endif

                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Nama</label>
                                    <div class="col-md-6">
                                        <input type="text" id="name"
                                               name="name"
                                               class="form-control" placeholder="Masukkan Nama Seperti Dalam Kad Pengenalan ">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Jawatan</label>
                                    <div >
                                        <div class="input-group-append radius_left">
                                            <select id="select24" name="hr_position_id">
                                                <option value="" readonly>Sila Pilih Jawatan</option>
                                                @foreach($positions as $a)
                                                    <option value="{{ $a->id }}">{{ $a->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        @if ($errors->has('hr_position_id'))
                                            <span class="text-danger">{{ $errors->first('hr_position_id') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Bahagian</label>
                                    <div class="col-md-3">
                                        <select name="hr_department_id" id="department" class="form-control select2">
                                            <option value="99" readonly>Sila Pilih Bahagian</option>
                                            @foreach($departments as $key => $value)
                                                <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('department'))
                                            <span class="text-danger">{{ $errors->first('department') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Unit</label>
                                    <div class="col-md-3">
                                        <select name="hr_unit_id" id="unit" class="form-control select2">

                                        </select>
                                        @if ($errors->has('unit'))
                                            <span class="text-danger">{{ $errors->first('unit') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" id="gred" name="gred" value="" class="form-control" >

                            <div class="form-group form-actions">
                                    <div class="row">
                                        <div class="col-md-9 col-md-offset-3 ml-auto">
                                            <button type="submit" class="btn btn-effect-ripple btn-primary">
                                                Simpan
                                            </button>
                                            <span class="btn btn-effect-ripple btn-light"><a href="{{ route('hr:staff') }}">Kembali</a> </span>

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

            $('select[name="hr_department_id"]').on('change', function() {
                var deptID = $(this).val();
                if(deptID) {
                    $.ajax({
                        url: 'http://k-store.pdtk/createStaff/ajax/'+deptID,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {

                            $('select[name="hr_unit_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="hr_unit_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });
                        }
                    });
                }else{
                    $('select[name="hr_unit_id"]').empty();
                }
            });
        });

    </script>

@stop
