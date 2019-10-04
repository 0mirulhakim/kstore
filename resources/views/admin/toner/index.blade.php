@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Senarai Model Toner
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
            <li class="bg-active">Senarai Toner</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content pl-3 pr-3">

        <div class="row">
            <div class="col-lg-12 my-3">
                <div class="card filterable" style="overflow:auto;">
                    <div class="card-header bg-primary text-white">
                                <span>
                                     <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Senarai Toner
                                </span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-lg table-responsive-sm table-responsive-md">
                            <table class="table table-striped table-bordered" id="table2"
                                   width="100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Model Pencetak</th>
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
                                        <td>{{ $data->asetModel->name }}</td>
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
