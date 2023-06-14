<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::latest()->paginate(10);
        return [
            "status" => 1,
            "data" => $appointments
        ];
//        return view('appointments')->with('appointments', Appointment::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        return 123;

//        return $blog = Appointment::create($request->all());
//
//        return [
//            "status" => 1,
//            "data" => $blog
//        ];

        return Appointment::create([
            "time" => request('time'),
            "date" => request('date'),
            "purpose" => request('purpose'),
            "doctor" => request('doctor'),
        ]);

//        return response()->json([
//            'message' => 'Topic was successfully created',
//        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
