@extends('admin/layouts/default')
@section('title')
    Daftar Kod Pembekal
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('vendors/iCheck/css/all.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/pages/form_layouts.css') }}" rel="stylesheet" type="text/css"/>

    <link href="{{ asset('vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet" type="text/css" />
@stop
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>Daftar Kod Pembekal</h1>
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
            <li class="active">Kod Pembekal</li>
        </ol>
    </section>

    <section class="content pl-3 pr-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-body border">
                        <form action="{{ route('supplier:storeSupplier') }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
                            @csrf
                            {{ method_field('post') }}
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 col-lg-3 col-12 control-label" for="form-text-input">Nama</label>
                                    <div class="col-md-9 col-lg-8 col-12">
                                        <input type="text" id="form-text-input"
                                               name="name"
                                               class="form-control" placeholder="Masukkan Nama Pembekal">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 col-lg-3 col-12 control-label" for="address">Alamat</label>
                                    <div class="col-md-9 col-lg-8 col-12">
                                        <textarea class="form-control resize_vertical" id="form-text-input" name="address" placeholder="Sila Masukkan Alamat Pembekal" rows="5"></textarea>
                                        @if ($errors->has('address'))
                                            <span class="text-danger">{{ $errors->first('address') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 col-lg-3 col-12 control-label" for="email">E-mail</label>
                                    <div class="col-md-9 col-lg-8 col-12">
                                        <input id="form-text-input" name="email" type="text" placeholder="Sila Masukkan Email Pembekal" class="form-control"></div>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 col-lg-3 col-12 control-label" for="email">No. Telefon</label>
                                    <div class="col-md-9 col-lg-8 col-12">
                                     <input id="phone_mask" name="phone" type="text" data-mask="(999)999-9999" placeholder="(999)999-9999" class="form-control"></div>
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-actions">
                                <div class="row">
                                    <div class="col-md-9 col-md-offset-3 ml-auto">
                                        <button type="submit" class="btn btn-effect-ripple btn-primary">
                                            Simpan
                                        </button>
                                        <span class="btn btn-effect-ripple btn-light"><a href="{{ route('supplier:supplier') }}">Kembali</a> </span>

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

    <script src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" type="text/javascript"></script>


@stop
