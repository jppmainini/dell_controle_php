@extends('admin.core.base')

@section('title')
    Clientes
@endsection

@section('active_page_clientes')
    "active"
@endsection

@section('title_page')
    Cadastro de Clientes. @section('opcional_page_descriptions')@endsection
@endsection

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Cadastro de Clientes
                <small>Lista de Clientes</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Clientes</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data Table With Full Features</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td> 4</td>
                                    <td>X</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 5.5
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5.5</td>
                                    <td>A</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
    <!-- /.content-wrapper -->

    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src={{asset('static/bower_components/jquery/dist/jquery.min.js')}}></script>
    <!-- Bootstrap 3.3.7 -->
    <script src={{asset('static/bower_components/bootstrap/dist/js/bootstrap.min.js')}}></script>
    <!-- DataTables -->
    <script src={{asset('static/bower_components/datatables.net/js/jquery.dataTables.js')}}></script>
    <script src={{asset('static/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}></script>
    <!-- SlimScroll -->
    <script src={{asset('static/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}></script>
    <!-- FastClick -->
    <script src={{asset('static/bower_components/fastclick/lib/fastclick.js')}}></script>
    <!-- AdminLTE App -->
    <script src={{asset('static/dist/js/adminlte.min.js')}}></script>
    <!-- AdminLTE for demo purposes -->
    <script src={{asset('static/dist/js/demo.js')}}></script>
    <!-- page script -->
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endsection
