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
                        @if($appointments->count() > 0)
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">Purpose</th>
                                <th scope="col">Doctor</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($appointments as $appoint)
                            <tr>
                                <th scope="row">{{ $appoint->date }}</th>
                                <td>{{ $appoint->time }}</td>
                                <td>{{ $appoint->purpose }}</td>
                                <td>{{ $appoint->doctor }}</td>
                                <td>
                                    {{ $appoint->status }}



                                    @if(Auth::user()->role === "admin")
                                    @if($appoint->status === null)
                                        <form action="{{ route('appointments.update', $appoint->id) }}" method="POST" id="statusForm">
                                            @csrf
                                            @method('PUT')
                                            <button onclick="showAlert()"  class="btn btn-success btn-sm" name="status" value="Aprroved" type="submit">Approve</button>
                                            <button onclick="showDAlert()" class="btn btn-danger btn-sm" name="status" value="Declined" type="submit">Decline</button>
                                        </form>

                                    @endif
                                    @endif


                                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css">

                                    {{--                            <button onclick="showAlert()" class="btn btn-primary">Show Alert</button>--}}

                                    <!-- Bootstrap JS and jQuery -->
                                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
                                    <!-- SweetAlert JS -->
                                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>

                                    <script>
                                        // Display a basic SweetAlert alert
                                        function showAlert() {
                                            Swal.fire('Success', 'Appointment was Approved', 'success');
                                        }

                                        function showDAlert() {
                                            Swal.fire('Declined', 'Declined Appointment', 'error');
                                        }
                                    </script>

                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                        @else
                            <h1 class="alert alert-danger">You Dont Have Appointments</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
