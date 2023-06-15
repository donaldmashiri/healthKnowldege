@extends('layouts.app')

@section('content')
    <div style="background-color: #42A5F5" class="container">
        <div style="background-color: #42A5F5" class="row justify-content-center">
            <div style="background-color: #42A5F5" class="col-md-8">
                <div style="background-color: #42A5F5" class="card">
                    <h1>Reports</h1>

                    <div class="text-center">
                        <img src="{{ asset('img/health.png') }}" width="200" height="80" alt="" srcset="">
                    </div>


                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">Total Users : {{ $usersTotal }}</li>
                            <li class="list-group-item">Total Appointments : {{ $appointments }}</li>
                            <li class="list-group-item">Total Appointments : {{ $prescs }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
