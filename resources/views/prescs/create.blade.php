@extends('layouts.app')

@section('content')
    <div style="background-color: #42A5F5" class="container">
        <div style="background-color: #42A5F5" class="row justify-content-center">
            <div style="background-color: #42A5F5" class="col-md-8">
                <div style="background-color: #42A5F5" class="card">

                    <h1>Create Prescription</h1>

                    <div class="text-center">
                        <img src="{{ asset('img/health.png') }}" width="200" height="80" alt="" srcset="">
                    </div>
                    @include('partials.errors')
                    <div class="card-body">
                        <form action="{{ route('prescs.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">medication</label>
                                <input type="text" class="form-control" name="medication" required>
                            </div>
                            <div class="form-group">
                                <label for="">Dosage</label>
                                <input type="text" class="form-control" name="dosage" required>
                            </div>
                            <div class="form-group">
                                <label for="">Frequency</label>
                                <input type="number" class="form-control" name="frequency" required>
                            </div>
                            <div class="form-group">
                                <label for="">Duration</label>
                                <input type="number" class="form-control" name="duration" required>
                            </div>
                            <div class="form-group">
                                <label for="">Select User</label>
                                <select name="doctor" class="form-control" id="">
                                    <option value="">Select User</option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="text-center mt-3">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
