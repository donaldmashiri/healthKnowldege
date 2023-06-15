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

                        @if(Auth::user()->role === "admin")
                    <h1 class="text-center text-white">Doctor Panel</h1>
                        @else
                            <h1 class="text-center text-white">Patient Panel</h1>
                        @endif

            </div>
        </div>
    </div>
</div>
@endsection
