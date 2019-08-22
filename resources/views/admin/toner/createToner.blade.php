@extends('admin/layouts/default')
@section('title')
    Daftar Toner
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
        <h1>Daftar Toner</h1>
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
            <li class="active">Kod Toner</li>
        </ol>
    </section>

    <section class="content pl-3 pr-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-body border">
                        <form action="{{ route('toner:storeToner',[$model]) }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
                            @csrf
                            {{ method_field('post') }}
                            <div class="form-group">
                                <div class="row">
                                    <input type="hidden" id="form-text-input"
                                           name="aset_model_id"
                                           class="form-control" value="{{ $model }}">

                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Model Toner</label>
                                    <div class="col-md-3">
                                        <input type="text" id="form-text-input"
                                               name="model"
                                               class="form-control" placeholder="Masukkan Model Toner">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Kod Toner / SKU NO</label>
                                    <div class="col-md-3">
                                        <input type="text" id="form-text-input"
                                               name="code"
                                               class="form-control" placeholder="Masukkan SKU NO">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-actions">
                                <div class="row">
                                    <div class="col-md-9 col-md-offset-3 ml-auto">
                                        <button type="submit" class="btn btn-effect-ripple btn-primary">
                                            Simpan
                                        </button>
                                        <span class="btn btn-effect-ripple btn-light"><a href="{{ route('toner:list',[$model]) }}">Kembali</a> </span>

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


@stop
