@extends('layouts.admin')

@section('style')
    <link rel="stylesheet"
          href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

    @include('partials.consultants.topNav')
    <!-- Left side column. contains the logo and sidebar -->
    @include('partials.consultants.sidebar')

    <!-- Content Wrapper. Contains page content -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    User Profile
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Examples</a></li>
                    <li class="active">User profile</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="box box-primary">
                            <div class="box-body box-profile">
                                @if($user->profile_pic == 'default.png')<img
                                        class="profile-user-img img-responsive img-circle"
                                        src="{{asset('../storage/uploads/avatar/default.png')}}"
                                        alt="{{ $user->name }}">  @else <img
                                        class="profile-user-img img-responsive img-circle"
                                        src="{{ $user->profile_pic }}" alt="{{ $user->name }}">@endif

                                <h3 class="profile-username text-center">{{ $user->name }}</h3>

                                <p class="text-muted text-center">{{ $user->email }}</p>

                                <ul class="list-group list-group-unbordered">
                                    <li class="list-group-item">
                                        <b>Profle Created</b> <a
                                                class="pull-right">{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Gender</b> <a class="pull-right">{{ $user->genderRelation['gender'] }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Age</b> <a
                                                class="pull-right">{{ \Carbon\Carbon::parse($user->dob)->diff(\Carbon\Carbon::now())->format('%y years')}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Martial Status</b> <a
                                                class="pull-right">{{ $user->martialStat['martial_status'] }}</a>
                                    </li>
                                </ul>

                                <a href="#" class="btn btn-danger btn-block"><b>Delete Account</b></a>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->

                        <!-- About Me Box -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">About Me</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

                                <p class="text-muted">
                                    {{ $user->educationRelation['education'] }}
                                </p>

                                <hr>

                                <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                                <p class="text-muted"> {{ $user->cityy['city_name'] }}, {{ $user->state['name'] }}
                                    , {{ $user->countryy['country_name'] }}</p>

                                <hr>

                                <strong><i class="fa fa-file-text-o margin-r-5"></i> About</strong>

                                <p>{{ $user->about }}</p>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#activity" data-toggle="tab">Profile</a></li>
                                <li><a href="#timeline" data-toggle="tab"> Interests </a></li>
                                <li><a href="#settings" data-toggle="tab">Settings</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <h3> Basic Info </h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5 class="text-primary"> Full Name </h5>
                                            <p class="text-capitalize"> {{ $user->name }} </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 class="text-primary"> Gender </h5>
                                            <p> {{ $user->genderRelation['gender']  }} </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 class="text-primary"> Date of Birth </h5>
                                            <p> {{ \Carbon\Carbon::parse($user->dob)->toFormattedDateString()}} </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 class="text-primary"> Mother Language </h5>
                                            <p> {{ $user->MotherLanguageRelation['mother_language'] }} </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 class="text-primary"> Religion, Cast & Sect </h5>
                                            <p> {{ $user->religionRelation['religion'] }} </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 class="text-primary"> Cast & Sect </h5>
                                            <p> {{ $user->castRelation['cast'] }}
                                                , {{ $user->sectRelation['sect'] }} </p>
                                        </div>
                                        <div class="col-md-12">
                                            <h5 class="text-primary"> About </h5>
                                            <p>
                                                {{ $user->about  }}
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <h3> Location Info </h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6> Country </h6>
                                            <p> {{ $user->countryy['country_name'] }} </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h6> State </h6>
                                            <p> {{ $user->state['name'] }}  </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h6> City </h6>
                                            <p> {{ $user->cityy['city_name'] }}  </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <h3> Education & Career </h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6> Highest Education </h6>
                                            <p> {{ $user->educationRelation['education'] }} </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h6> Occupation </h6>
                                            <p> {{ $user->occupationRelation['occupation'] }} </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h6> Income </h6>
                                            <p> {{ $user->incomeRelation['income'] }} </p>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">
                                    <!-- The timeline -->

                                    <div class="table-responsive">
                                        <table class="table no-margin table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Interested Profiles</th>
                                                <th>Item</th>
                                                <th>Status</th>
                                                <th>Phone</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>


                                            @foreach($receivedInterests as $int)
                                            <tr>
                                                <td>
                                                    @if($int->profile_pic == "default.png")
                                                        <div class="user-block">
                                                            <img class="img-circle" src="{{URL::asset('../storage/uploads/avatar/')}}/{{ $int->foll['profile_pic']}}" alt="User Image">
                                                            <span class="username"><a href="{{ url('consultant/profile', $int->id) }}">{{ $int->user->name}}</a></span>
                                                            <span class="description">Interest Sent - {{ \Carbon\Carbon::parse($int->user->created_at)->diffForHumans()}}</span>
                                                        </div>


                                                    @else
                                                        <div class="user-block">
                                                            <img class="img-circle" src="{{$int->user->profile_pic}}" alt="User Image">
                                                            <span class="username"><a href="{{ url('consultant/profile', $int->user->id) }}">{{ $int->user->name}}</a></span>
                                                            <span class="description">Interest Sent - {{ \Carbon\Carbon::parse($int->user->created_at)->diffForHumans()}}</span>
                                                        </div>
                                                    @endif
                                                </td>

                                                <td>{{ $int->user->name}}</td>
                                                <td><span class="label label-success">Shipped</span></td>

                                                <td>
                                                    @if($int->status)
                                                    {{ $int->user->contact->phone_one }}
                                                    @else
                                                        Accept the interest to see the number
                                                    @endif
                                                </td>

                                                <td>
                                                    @if($int->status)
                                                        <a class="btn btn-dark btn-success btn-sm disabled" disabled> Accepted</a>
                                                        <a href="{{ url('consultant/profile',$int->user->id) }}" class="btn btn-primary btn-sm"> View Profile</a>
                                                    @elseif(!$int->status)
                                                        <form action="{{ url('reject-interest',$int->user_id) }}" method="post" class="d-inline" style="display: inline;">
                                                            @csrf
                                                            <button class="btn btn-warning btn-sm"> Reject ({{ $int->user_id }})({{ $int->interested_id }})</button>
                                                        </form>
                                                        <a href=""> Google </a>
                                                        <form action="{{url('consultant/accept-interest'.'/'. $int->user_id .'/'. $int->interested_id )}}" method="post" class="d-inline" style="display: inline;">
                                                            @csrf
                                                            <button class="btn btn-success btn-sm"> Accept</button>
                                                        </form>
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="settings">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-2 control-label">Name</label>

                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputName"
                                                       placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail"
                                                       placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-2 control-label">Name</label>

                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName"
                                                       placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputExperience"
                                                   class="col-sm-2 control-label">Experience</label>

                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="inputExperience"
                                                          placeholder="Experience"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputSkills"
                                                       placeholder="Skills">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> I agree to the <a href="#">terms and
                                                            conditions</a>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- /.nav-tabs-custom -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

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
    @include('partials.admin.control')
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