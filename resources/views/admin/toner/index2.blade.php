@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Senarai Aset
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/buttons.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/colReorder.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/rowReorder.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/scroller.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/tables.css') }}" />

    <link href="{{ asset('css/pages/advmodals.css') }}" rel="stylesheet"/>

    <style>

        #table1_filter{
            margin-bottom: 10px;
        }

    </style>
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">

        <!--section starts-->
        <h1>Senarai Aset Pencetak</h1>
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
        </ol>
    </section>
    <!--section ends-->
    <section class="content pl-3 pr-3">@extends('admin/layouts/default')

        {{-- Page title --}}
        @section('title')
            Senarai Aset
            @parent
        @stop

        {{-- page level styles --}}
        @section('header_styles')
            <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/buttons.bootstrap4.css') }}"/>
            <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/colReorder.bootstrap4.css') }}"/>
            <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.bootstrap4.css') }}"/>
            <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/rowReorder.bootstrap4.css') }}"/>
            <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/scroller.bootstrap4.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/tables.css') }}" />

            <link href="{{ asset('css/pages/advmodals.css') }}" rel="stylesheet"/>

            <style>

                #table1_filter{
                    margin-bottom: 10px;
                }

            </style>
        @stop

        {{-- Page content --}}
        @section('content')

            <section class="content-header">

                <!--section starts-->
                <h1>Senarai Aset Pencetak</h1>
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
                </ol>
            </section>
            <!--section ends-->
            <section class="content pl-3 pr-3">

                <div class="row">

                    <div class="col-lg-12 my-3">
                        <div class="card filterable">
                            <div class="card-header bg-primary text-white clearfix  ">
                                <div class="float-right">

                                    <a href="{{ URL::to('admin/registerPrinter') }}" class="btn btn-sm btn-success"><h5>Daftar Pencetak</h5></a>
                                </div>
                                <div class="float-left">

                                    <div class="caption">
                                        <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                        TableTools
                                    </div>
                                </div>
                            </div>
                            <div class="card-body table-responsive-lg table-responsive-sm table-responsive-md">

                                <table class="table table-striped table-bordered" id="table1" width="100%">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Brand</th>
                                        <th>Model</th>
                                        <th>No. Siri</th>
                                        <th>No. Daftar Aset</th>
                                        <th>Tarikh Terima</th>
                                        <th>&nbsp;</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $num=1; @endphp
                                    @foreach($asets as $data)
                                        <tr>
                                            <td>{{ $num }}</td>
                                            <td>{{ $data->Brands->name }}</td>
                                            <td>{{ $data->Models->name }}</td>
                                            <td>{{ $data->serial_no }}</td>
                                            <td>{{ $data->registration_no }}</td>
                                            <td>{{ $data->receive_date }}</td>
                                            <td>
                                                <a href="{{ route('aset:detailsPrinter',$data->id) }}" ><i class="livicon" data-name="list-ul" data-size="18" data-toggle="tooltip" data-original-title="Lihat Maklumat Terperinci" ></i></a>
                                            </td>
                                            <td>
                                                <a href="#" ><i class="livicon" data-name="users" data-size="18" data-toggle="tooltip" data-original-title="Kemaskini Penempatan" ></i></a>
                                            </td>
                                        </tr>
                                        @php $num++; @endphp
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!--moddal dialog -->
                <div class="modal fade modal-fadeIn"  id="modal-1" role="dialog"
                     aria-labelledby="modalLabelfade" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            sini
                            <div class="modal-footer">
                                <button class="btn  btn-primary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.modal ends here -->
            </section>
            <!-- content -->

        @stop

        {{-- page level scripts --}}
        @section('footer_scripts')

            <script type="text/javascript" src="{{ asset('vendors/datatables/js/jquery.dataTables.js') }}" ></script>
            <script type="text/javascript" src="{{ asset('vendors/jeditable/js/jquery.jeditable.js') }}" ></script>
            <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>
            <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.buttons.js') }}" ></script>
            <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.colReorder.js') }}" ></script>
            <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.responsive.js') }}" ></script>
            <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.rowReorder.js') }}" ></script>
            <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.colVis.js') }}" ></script>
            <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.html5.js') }}" ></script>
            <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.print.js') }}" ></script>
            <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.bootstrap4.js') }}" ></script>
            <script type="text/javascript" src="{{ asset('vendors/datatables/js/pdfmake.js') }}" ></script>
            <script type="text/javascript" src="{{ asset('vendors/datatables/js/vfs_fonts.js') }}" ></script>
            <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.scroller.js') }}" ></script>
            <script type="text/javascript" src="{{ asset('js/pages/table-advanced.js') }}" ></script>


            <script>
                $("#stack2,#stack3").on('hidden.bs.modal', function (e) {
                    $('body').addClass('modal-open');
                });
            </script>

        @stop


        <div class="row">
            <div class="col-lg-12 my-3">
                <div class="card filterable" style="overflow:auto;">

                    <div class="card-header bg-primary text-white">
                        <div class="float-right">

                            <a href="{{ URL::to('admin/registerPrinter') }}" class="btn btn-sm btn-success"><h5>Daftar Pencetak</h5></a>
                        </div>
                                <span>
                                     <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Senarai Pencetak Berdaftar
                                </span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-lg table-responsive-sm table-responsive-md">
                            <table class="table table-striped table-bordered" id="table2"
                                   width="100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Brand</th>
                                    <th>Model</th>
                                    <th>No. Siri</th>
                                    <th>No. Daftar Aset</th>
                                    <th>Tarikh Terima</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $num=1; @endphp
                                @foreach($asets as $data)
                                    <tr>
                                        <td>{{ $num }}</td>
                                        <td>{{ $data->Brands->name }}</td>
                                        <td>{{ $data->Models->name }}</td>
                                        <td>{{ $data->serial_no }}</td>
                                        <td>{{ $data->registration_no }}</td>
                                        <td>{{ $data->receive_date }}</td>
                                        <td>
                                            <a href="{{ route('aset:detailsPrinter',$data->id) }}" ><i class="livicon" data-name="list-ul" data-size="18" data-toggle="tooltip" data-original-title="Lihat Maklumat Terperinci" ></i></a>
                                        </td>
                                        <td>
                                            <a href="#" ><i class="livicon" data-name="users" data-size="18" data-toggle="tooltip" data-original-title="Kemaskini Penempatan" ></i></a>
                                        </td>
                                    </tr>
                                    @php $num++; @endphp
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            </section>
    <!-- content -->

@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript" src="{{ asset('vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/jeditable/js/jquery.jeditable.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.buttons.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.colReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.responsive.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.rowReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.colVis.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.html5.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.print.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.bootstrap4.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/pdfmake.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/vfs_fonts.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.scroller.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('js/pages/table-advanced.js') }}" ></script>




@stop
