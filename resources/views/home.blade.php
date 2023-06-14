@extends('layouts.app')

@section('content')
<div style="background-color: #42A5F5" class="container">
    <div style="background-color: #42A5F5" class="row justify-content-center">
        <div style="background-color: #42A5F5" class="col-md-8">
            <div style="background-color: #42A5F5" class="card">

                <div class="text-center">
                    <img src="{{ asset('img/health.png') }}" width="200" height="80" alt="" srcset="">
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <a href="" class="btn btn-primary">Start Date</a>
                        <a href="" class="btn btn-primary">Start Date</a>
                        <a href="" class="btn btn-primary">Start Date</a>

                    <div class="form-group text-center mt-3">
                        <a href="" class="btn btn-danger">Make Appointment</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
