@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Senarai Pegawai dan Kakitangan
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
        <h1>Senarai Pegawai dan Kakitangan</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">Sumber Manusia</a>
            </li>
            <li class="active">Senarai Pegawai dan Kakitangan</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content pl-3 pr-3">

        <div class="row">

            <div class="col-lg-12 my-3">
                <div class="card filterable">
                    <div class="card-header bg-primary text-white clearfix  ">
                        <div class="float-right">

                            <a href="{{ route('hr:createStaff') }}" class="btn btn-sm btn-success"><h5>Daftar Baru</h5></a>
                        </div>

                    </div>
                    <div class="card-body table-responsive-lg table-responsive-sm table-responsive-md">

                        <table class="table table-striped table-bordered" id="table1" width="100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>No. Kad Pengenalan</th>
                                <th>Jawatan</th>
                                <th>Bahagian</th>
                                <th>Unit</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $num=1; @endphp
                            @foreach($staffs as $data)
                                <tr>
                                    <td>{{ $num }}</td>
                                    <td>{{ $data->identification_card }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->Positions->name }}</td>
                                    <td>{{ $data->Departments->name }}</td>
                                    <td>{{ $data->Units->name }}</td>
                                    <td>
                                        <a href="{{ route('hr:editStaff',$data->id) }}" ><i class="livicon" data-name="pen" data-size="18" data-toggle="tooltip" data-original-title="Kemaskini Maklumat Staff" ></i></a>
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
