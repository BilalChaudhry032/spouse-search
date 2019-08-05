@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

    @include('partials.admin.topNav')
    <!-- Left side column. contains the logo and sidebar -->
    @include('partials.admin.sidebar')

    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

                    <li class="active">View Consultants</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Responsive Hoever Table</h3>


                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table class="table table-bordered table-hover" id="example2">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Consultant</th>
                                        <th>Date</th>
                                        <th>Profiles Created</th>
                                        <th>Phone</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($users as $u)
                                        <tr>
                                            <td>{{ $u->id }}</td>
                                            <td> <img src="{{asset('../storage/uploads/avatar/default.png')}}" alt="{{ $u->name }}" width="50px" style="margin-right: 1rem">  {{ $u->name  }}</td>
                                            <td>{{ \Carbon\Carbon::parse($u->created_at)->diffForHumans()}}</td>

                                            @php
                                                $count = 0;
                                            @endphp

                                            <td>
                                                @foreach($c_users as $k)
                                                    @if($k->consultant_id == $u->id)
                                                        @php
                                                        $count++;
                                                        @endphp                                                    @endif
                                                @endforeach
                                                {{  $count  }}
                                            </td>

                                            <td>{{ $u->phone }}</td>

                                            <td>
                                                <a href="{{ url('admin/consultant-added-profiles',$u->id) }}" class="btn btn-xs btn-primary"> View Profiles </a>
                                                <a href="{{ url('admin/edit-consultant',$u->id) }}" class="btn btn-xs btn-success"> Edit Consultant </a>
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-consultant-{{ $u->id }}">
                                                    Delete Consultant
                                                </button>

                                                <div class="modal fade" id="delete-consultant-{{ $u->id }}">
                                                    <div class="modal-dialog modal-md">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center">

                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span></button>
                                                                <h1 class="font-weight-light text-center text-danger"> <i class="fa fa-close font-weight-light" style="border: 1px solid; padding: 15px;border-radius: 73%;"></i></h1>
                                                                <h1 class="font-weight-light text-center"> Are you  sure? </h1>
                                                                <p>Do you really want to delete <b class="text-red">{{ $u->name }}</b>? This process cannot be undone.</p>

                                                                <div style="margin-top: 2rem; margin-bottom: 4rem">
                                                                    <a class="btn btn-default" data-dismiss="modal" style="margin-right: 1rem">Cancel</a>
                                                                    <a href="{{ url('admin/delete-consultant',$u->id) }}" class="btn btn-danger">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <!-- /.modal -->

                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
                <!-- /.row -->
                <!-- Main row -->

                <!-- /.row (main row) -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.0
            </div>
            <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
    @include('partials.admin.control    ')
    <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('admin/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Morris.js charts -->
    <script src="{{ asset('admin/bower_components/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/morris.js/morris.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
    <!-- jvectormap -->
    <script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('admin/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('admin/bower_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ asset('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <!-- Slimscroll -->
    <script src="{{ asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('admin/bower_components/fastclick/lib/fastclick.js') }}"></script>

    <script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin/dist/js/demo.js') }}"></script>

    <script>
        $(function () {
            $('#example2').DataTable()

        })
    </script>
    </body>
@endsection