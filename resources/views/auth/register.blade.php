@extends('layouts.user')


@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">
    <style>
        .select2{
            height: calc(2.25rem + 2px); !important;
            display: block;
            width: 100% !important;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        .select2-selection__rendered{
            padding: .375rem .75rem;
        }

        .select2-container--default .select2-selection--single {
            height: calc(2.25rem + 2px) !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow b{
            margin-top: 3px !important;
            border-color: #495057 transparent transparent transparent!important;
        }

        .select2-container--default .select2-selection--single{
            border: 1px solid #ced4da !important;
        }
        .select2-container .select2-selection--single .select2-selection__rendered{
            padding-left: 15px !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered{
            line-height: 25px;
            color: #495057 !important;
        }
    </style>
@endsection
@section('content')


    @include('layouts.user.navigation')

    <div class="register-background">
        <div class="container">
            <div class="row font-weight-normal">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form method="POST" action="{{ route('register') }}" id="registration-form" data-parsley-validate>
                        @csrf

                        <h3 class="font-weight-light text-white mb-3"> Register yourself to use our services!</h3>
                        <div class="tab">


                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title font-weight-normal mb-0"><span
                                                class="text-red pr-3">1/4</span> Account Details</h4>
                                </div>
                                <div class="card-body">
                                    <!-- Email -->
                                    <div class="form-group">
                                        <label for="email">{{ __('E-Mail Address') }} <span
                                                    class="text-red">*</span></label>


                                        <input id="email" type="email"
                                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                               name="email" value="{{ old('email') }}" required data-validation="email"
                                               data-parsley-trigger="keyup">

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif

                                    </div>
                                    <!-- Password -->
                                    <div class="form-group">
                                        <label for="password"
                                        >{{ __('Password') }} <span class="text-red">*</span></label>


                                        <input id="password" type="password"
                                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               name="password" data-validation-length="min8" required minlength="8"
                                               data-parsley-minlength="8" data-parsley-trigger="keyup">

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif

                                    </div>
                                    <!-- Confirm Password -->
                                    <div class="form-group">
                                        <label for="password-confirm">{{ __('Confirm Password') }} <span
                                                    class="text-red">*</span></label>
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required data-validation="confirmation"
                                               data-parsley-equalto="#password" data-parsley-trigger="keyup">
                                    </div>
                                    <!-- Full Name -->
                                    <div class="form-group">
                                        <label for="name">{{ __('Full Name') }} <span class="text-red">*</span></label>

                                        <input id="name" type="text"
                                               class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                               name="name" value="{{ old('name') }}" required>

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
                                               data-validation-help="yyyy-mm-dd" max="2000-01-02">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab" v-if="formTwoDisplay">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title font-weight-normal mb-0"><span
                                                class="text-red pr-3">2/4</span> Personal Information </h4>
                                </div>
                                <div class="card-body">
                                    <!-- Mother Language -->
                                    <div class="form-group">
                                        <label for="profile-for"
                                        >{{ __('Mother Language') }} <span class="text-red">*</span></label>

                                        <select class="custom-select" name="mother_language" required id="mother_language">
                                            <option value="">Select Language</option>
                                            @foreach($motherLanguages as $ml)
                                                <option value="{{ $ml->id  }}">{{ $ml->mother_language  }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- Religion Language -->
                                    <div class="form-group">
                                        <label for="profile-for">{{ __('Religion') }} <span
                                                    class="text-red">*</span></label>
                                        <select class="custom-select" name="religion" required id="religion">
                                            <option value="">Select Religion</option>
                                            @foreach($religions as $r)
                                                <option value="{{ $r->id  }}">{{ $r->religion  }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- Sect -->
                                    <div class="form-group">
                                        <label for="profile-for">{{ __('Select Sect') }}</label>
                                        <select class="custom-select" name="sect" required id="sect">
                                            <option value="">Select Sect</option>
                                            @foreach($sects as $sect)
                                                <option value="{{ $sect->id  }}">{{ $sect->sect  }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- Cast -->
                                    <div class="form-group">
                                        <label for="profile-for">{{ __('Select Cast') }}</label>
                                        <select class="custom-select" name="cast" required id="cast">
                                            <option value="">Select Cast</option>
                                            @foreach($casts as $cast)
                                                <option value="{{ $cast->id  }}">{{ $cast->cast  }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- Martial Status -->
                                    <div class="form-group">
                                        <label for="profile-for">{{ __('Martial Status') }} <span
                                                    class="text-red">*</span></label>

                                        <select class="custom-select" name="martial_status" required>
                                            <option value="">Martial Status</option>
                                            @foreach($martial_status as $mt)
                                                <option value="{{ $mt->id  }}">{{ $mt->martial_status  }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- Height -->
                                    <div class="form-group">
                                        <label for="profile-for">{{ __('Height') }} <span
                                                    class="text-red">*</span></label>
                                        <select class="custom-select" name="height" required id="height">
                                            <option value="">Select Height</option>
                                            @foreach($heights as $h)
                                                <option value="{{ $h->id  }}">{{ $h->height  }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <!-- Profile For -->
                                    <div class="form-group">
                                        <label for="profile-for"
                                        >{{ __('Create Profile For') }} <span class="text-red">*</span></label>

                                        <select class="custom-select" name="profile_for" required>
                                            <option value="">Select Profile</option>
                                            @foreach($profilefor as $pro)
                                                <option value="{{ $pro->id  }}">{{ $pro->user_relation  }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Gender -->
                                    <div class="form-group">
                                        <label for="profile-for"
                                        >{{ __('Select Gender') }} <span class="text-red">*</span></label>

                                        <select class="custom-select" name="gender" required>
                                            <option value="">Select Gender</option>
                                            @foreach($genders as $g)
                                                <option value="{{ $g->id  }}">{{ $g->gender  }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="tab" v-if="formThreeDisplay">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title font-weight-normal mb-0"><span
                                                class="text-red pr-3">3/4</span> Religion & Cast</h4>
                                </div>
                                <div class="card-body">


                                    <!-- Country -->
                                    <div class="form-group">
                                        <label for="profile-for">{{ __('Country') }} <span
                                                    class="text-red">*</span></label>

                                        <select class="form-control" id="country" name="country" required>
                                            <option value="">Select Country</option>
                                            @foreach($country as $c)
                                                <option value="{{ $c->id  }}">{{ $c->country_name  }}</option>
                                            @endforeach
                                        </select>

                                    </div>

                                    <!-- State -->
                                    <div class="form-group">
                                        <label for="profile-for">{{ __('Select State') }} <span
                                                    class="text-red">*</span></label>

                                        <select class="form-control" id="state" name="state" required>
                                            <option value="">Select State</option>

                                        </select>

                                    </div>

                                    <!-- City -->
                                    <div class="form-group">
                                        <label for="profile-for">{{ __('Select City') }} <span class="text-red">*</span></label>

                                        <select class="form-control" id="city" name="city" required>
                                            <option value="">Select City</option>

                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab" v-if="formFourDisplay">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0 font-weight-normal"><span
                                                class="text-red pr-3">4/4</span> Education & Career </h4>
                                </div>
                                <div class="card-body">
                                    <!-- Education -->
                                    <div class="form-group">
                                        <label for="profile-for">{{ __('Highest Degree') }} <span
                                                    class="text-red">*</span></label>
                                        <select class="custom-select" name="education" required id="education">
                                            <option value="">Select Degree</option>
                                            @foreach($education as $e)
                                                <option value="{{ $e->id  }}">{{ $e->education  }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- Occupation -->
                                    <div class="form-group">
                                        <label for="profile-for">{{ __('Occupation') }} <span class="text-red">*</span></label>
                                        <select class="custom-select" name="occupation" required id="occupation">
                                            <option value="">Select Occupation</option>
                                            @foreach($occupations as $o)
                                                <option value="{{ $o->id  }}">{{ $o->occupation  }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Income -->
                                    <div class="form-group">
                                        <label for="profile-for">{{ __('Income') }} <span
                                                    class="text-red">*</span></label>
                                        <select class="custom-select" name="income" required>
                                            <option value="">Select Income</option>
                                            @foreach($incomes as $i)
                                                <option value="{{ $i->id  }}">{{ $i->income  }}</option>
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
 5. Where do you wish to settle down in future?"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-navigation">
                            <button type="button" class="previous btn btn-light float-left">&lt; Previous</button>
                            <button type="button" class="next btn btn-red float-right w-50">Next &gt;</button>
                            <input type="submit" class="btn btn-red float-right w-50">
                            <span class="clearfix"></span>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection



@section('script')
    <script src="vendor/parsley/parsley.min.js" type="text/javascript"></script>
    <script src="js/multistep-form.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
    <script>
        $('#country').select2({
            selectOnClose: true
        });
        $('#state').select2({
            selectOnClose: true
        });
        $('#city').select2({
            selectOnClose: true
        });
        $('#education').select2({
            selectOnClose: true
        });
        $('#occupation').select2({
            selectOnClose: true
        });
        $('#height').select2({
            selectOnClose: true
        });
        $('#mother_language').select2({
            selectOnClose: true
        });
        $('#religion').select2({
            selectOnClose: true
        });
        $('#sect').select2({
            selectOnClose: true
        });
        $('#cast').select2({
            selectOnClose: true
        });
    </script>



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


@endsection