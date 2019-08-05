@extends('layouts.admin')

@section('content')
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

    @include('partials.admin.topNav')
    <!-- Left side column. contains the logo and 3sidebar -->
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
                    <li class="active">Dashboard</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container">
                <!-- Small boxes (Stat box) -->


                <!-- left column -->

                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Account Details</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form  method="POST" action="{{ route('admin.update.user',$user->id) }}" >
                        @csrf
                        <div class="box-body">
                            <!-- Full Name -->
                            <div class="form-group">
                                <label for="name">{{ __('Full Name') }} <span class="text-red">*</span></label>

                                <input id="name" type="text"
                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                       name="name" value="{{ $user->name }}" required>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <!-- Date of Birth -->
                            <div class="form-group">
                                <label for="dob"
                                >{{ __('Date of Birth') }} <span class="text-red">*</span></label>

                                <input type="date" name="dob" class="form-control" required
                                       ata-validation="birthdate"
                                       data-validation-help="yyyy-mm-dd" max="2000-01-02" value="{{ $user->dob }}">
                            </div>
                        </div>
                        <div class="box-header with-border">
                            <h3 class="box-title">Personal Information</h3>
                        </div>

                        <div class="box-body">
                            <!-- Mother Language -->
                            <div class="form-group">
                                <label for="profile-for"
                                >{{ __('Mother Language') }} <span class="text-red">*</span></label>

                                <select class="form-control" name="mother_language" required id="mother_language">
                                    <option value="">Select Language</option>
                                    @foreach($motherLanguages as $ml)
                                        <option value="{{ $ml->id  }}" @if( $ml->id == $user->mother_language_id) selected @else @endif>{{ $ml->mother_language  }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Religion Language -->
                            <div class="form-group">
                                <label for="profile-for">{{ __('Religion') }} <span
                                            class="text-red">*</span></label>
                                <select class="form-control" name="religion" required id="religion" >
                                    <option value="">Select Religion</option>
                                    @foreach($religions as $r)
                                        <option value="{{ $r->id  }}" @if( $r->id == $user->religion_id) selected @else @endif>{{ $r->religion  }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Sect -->
                            <div class="form-group">
                                <label for="profile-for">{{ __('Select Sect') }}</label>
                                <select class="form-control" name="sect" required id="sect">
                                    <option value="">Select Sect</option>
                                    @foreach($sects as $sect)
                                        <option value="{{ $sect->id  }}" @if( $sect->id == $user->sect_id) selected @else @endif>{{ $sect->sect  }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Cast -->
                            <div class="form-group">
                                <label for="profile-for">{{ __('Select Cast') }}</label>
                                <select class="form-control" name="cast" required id="cast">
                                    <option value="">Select Cast</option>
                                    @foreach($casts as $cast)
                                        <option value="{{ $cast->id  }}" @if( $cast->id == $user->cast_id) selected @else @endif>{{ $cast->cast  }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Martial Status -->
                            <div class="form-group">
                                <label for="profile-for">{{ __('Martial Status') }} <span
                                            class="text-red">*</span></label>

                                <select class="form-control" name="martial_status" required>
                                    <option value="">Martial Status</option>
                                    @foreach($martial_status as $mt)
                                        <option value="{{ $mt->id  }}" @if( $mt->id == $user->martial_status_id) selected @else @endif>{{ $mt->martial_status  }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Height -->
                            <div class="form-group">
                                <label for="profile-for">{{ __('Height') }} <span
                                            class="text-red">*</span></label>
                                <select class="form-control" name="height" required id="height">
                                    <option value="">Select Height</option>
                                    @foreach($heights as $h)
                                        <option value="{{ $h->id  }}" @if( $h->id == $user->height_id) selected @else @endif>{{ $h->height  }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <!-- Profile For -->
                            <div class="form-group">
                                <label for="profile-for"
                                >{{ __('Create Profile For') }} <span class="text-red">*</span></label>

                                <select class="form-control" name="profile_for" required>
                                    <option value="">Select Profile</option>
                                    @foreach($profilefor as $pro)
                                        <option value="{{ $pro->id  }}" @if( $pro->id == $user->profile_fors_id) selected @else @endif>{{ $pro->user_relation  }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Gender -->
                            <div class="form-group">
                                <label for="profile-for"
                                >{{ __('Select Gender') }} <span class="text-red">*</span></label>

                                <select class="form-control" name="gender" required>
                                    <option value="">Select Gender</option>
                                    @foreach($genders as $g)
                                        <option value="{{ $g->id  }}" @if( $g->id == $user->gender_id) selected @else @endif>{{ $g->gender  }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-header with-border">
                            <h3 class="box-title">Location</h3>
                        </div>

                        <div class="box-body">
                            <!-- Country -->
                            <div class="form-group">
                                <label for="profile-for">{{ __('Country') }} <span
                                            class="text-red">*</span></label>

                                <select class="form-control" id="country" name="country" required>
                                    <option value="">Select Country</option>
                                    @foreach($country as $c)
                                        <option value="{{ $c->id  }}" @if( $c->id == $user->country_id) selected @else @endif>{{ $c->country_name  }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <!-- State -->
                            <div class="form-group">
                                <label for="profile-for">{{ __('Select State') }} <span
                                            class="text-red">*</span></label>

                                <select class="form-control" id="state" name="state" required>
                                    @foreach($state as $c)
                                        <option value="{{ $c->id  }}" @if( $c->id == $user->state_id) selected @else @endif>{{ $c->name  }}</option>
                                    @endforeach

                                </select>

                            </div>

                            <!-- City -->
                            <div class="form-group">
                                <label for="profile-for">{{ __('Select City') }} <span class="text-red">*</span></label>

                                <select class="form-control" id="city" name="city" required>
                                    @foreach($cities as $c)
                                        <option value="{{ $c->id  }}" @if( $c->id == $user->city_id) selected @else @endif>{{ $c->city_name  }}</option>
                                    @endforeach

                                </select>

                            </div>
                        </div>

                        <div class="box-header with-border">
                            <h3 class="box-title">About</h3>
                        </div>

                        <div class="box-body">
                            <!-- Education -->
                            <div class="form-group">
                                <label for="profile-for">{{ __('Highest Degree') }} <span
                                            class="text-red">*</span></label>
                                <select class="form-control" name="education" required id="education">
                                    <option value="">Select Degree</option>
                                    @foreach($education as $e)
                                        <option value="{{ $e->id  }}" @if( $e->id == $user->education_id) selected @else @endif>{{ $e->education  }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Occupation -->
                            <div class="form-group">
                                <label for="profile-for">{{ __('Occupation') }} <span class="text-red">*</span></label>
                                <select class="form-control" name="occupation" required id="occupation">
                                    <option value="">Select Occupation</option>
                                    @foreach($occupations as $o)
                                        <option value="{{ $o->id  }}" @if( $o->id == $user->occupation_id) selected @else @endif>{{ $o->occupation  }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Income -->
                            <div class="form-group">
                                <label for="profile-for">{{ __('Income') }} <span
                                            class="text-red">*</span></label>
                                <select class="form-control" name="income" required>
                                    <option value="">Select Income</option>
                                    @foreach($incomes as $i)
                                        <option value="{{ $i->id  }}" @if( $i->id == $user->income_id) selected @else @endif>{{ $i->income  }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- About -->
                            <div class="form-group">
                                <label for="about">About <small>(Tell us about your self.)</small></label>
                                <textarea class="form-control" id="about" name="about" rows="5" placeholder=" You may consider answering these questions:
 1. How would you describe yourself?
 2. What kind of food/movies/books/music you like?
 3. Do you enjoy activities like traveling, music, sports etc?
 4. Where have you lived most of your life till now?
 5. Where do you wish to settle down in future?"> {{ $user->about }}</textarea>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->



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
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin/dist/js/demo.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            $(document).on('change', '#country', function () {
                console.log("hmm its change");

                var country_id = $(this).val();
                console.log(country_id);
                var div = $(this).parent();

                var op = " ";

                $.ajax({
                    type: 'get',
                    url: '{!!URL::to('/getstatelist')!!}',
                    data: {'id': country_id},
                    success: function (data) {
                        console.log('success');

                        console.log(data);

                        //console.log(data.length);
                        //op+='<option value="0" selected disabled>chose product</option>';
                        for (var i = 0; i < data.length; i++) {
                            op += '<option value="' + data[i].id + '">' + data[i].name + ' ' + '</option>';
                            //alert(data[i].fname);
                        }

                        $('#state').html(" ");
                        $('#state').append(op);
                    },
                    error: function () {

                    }
                });
            });

            $(document).on('change', '#state', function () {
                var state_id = $(this).val();

                var a = $(this).parent();
                console.log(state_id);
                var op = "";
                $.ajax({
                    type: 'get',
                    url: '{!!URL::to('/getcitylist')!!}',
                    data: {'id': state_id},
                    dataType: 'json',//return data will be json
                    success: function (data) {
                        //console.log("price");
                        //console.log(data.price);
                        for (var i = 0; i < data.length; i++) {
                            op += '<option value="' + data[i].id + '">' + data[i].city_name + ' ' + '</option>';
                            //alert(data[i].fname);
                        }

                        $('#city').html(" ");
                        $('#city').append(op);

                    },
                    error: function () {

                    }
                });
            });
        });
    </script>
    </body>
@endsection