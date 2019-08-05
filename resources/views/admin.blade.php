@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as Admin!
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-5">

            <div class="card">
                <div class="card-header"> Total Users </div>
                <div class="card-body">
                    <div class="display-1 text-center">
                        {{ count($users) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
