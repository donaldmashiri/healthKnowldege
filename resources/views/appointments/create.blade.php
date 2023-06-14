@extends('layouts.app')

@section('content')
    <div style="background-color: #42A5F5" class="container">
        <div style="background-color: #42A5F5" class="row justify-content-center">
            <div style="background-color: #42A5F5" class="col-md-8">
                <div style="background-color: #42A5F5" class="card">

                    <div class="text-center">
                        <img src="{{ asset('img/health.png') }}" width="200" height="80" alt="" srcset="">
                    </div>
                    @include('partials.errors')
                    <div class="card-body">
                        <form action="{{ route('appointments.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Date</label>
                                <input type="date" class="form-control" name="date" required>
                            </div>
                            <div class="form-group">
                                <label for="">Time</label>
                                <input type="time" class="form-control" name="time" required>
                            </div>
                            <div class="form-group">
                                <label for="">Purpose</label>
                                <input type="text" class="form-control" name="purpose" required>
                            </div>
                            <div class="form-group">
                                <label for="">Select Doctor</label>
                                <select name="doctor" class="form-control" id="">
                                    <option value="">Select Dr</option>
                                    <option value="Dr Mashiri">Dr Mashiri</option>
                                    <option value="Dr Tayi">Dr Tayi</option>
                                    <option value="Dr Kwashira">Dr Kwashira</option>
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
