@extends('layouts.app')

@section('content')
    <div style="background-color: #42A5F5" class="container">
        <div style="background-color: #42A5F5" class="row justify-content-center">
            <div style="background-color: #42A5F5" class="col-md-8">
                <div style="background-color: #42A5F5" class="card">

                    <h1 class="text-center text-white">My Appointments</h1>

                    <div class="text-center">
                        <img src="{{ asset('img/health.png') }}" width="200" height="80" alt="" srcset="">
                    </div>

                    <div class="card-body">
                        @if($prescs->count() > 0)
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Med</th>
                                <th scope="col">Dosage</th>
                                <th scope="col">Frequency</th>
                                <th scope="col">Duration</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($prescs as $presc)
                                <tr>
                                    <th scope="row">{{ $presc->medication }}</th>
                                    <td>{{ $presc->dosage }}</td>
                                    <td>{{ $presc->frequency }}</td>
                                    <td>{{ $presc->duration }}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        @else
                            <h1 class="text-center alert alert-danger">You dnt Have Prescription</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
