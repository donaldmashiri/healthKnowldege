<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('appointments.index')->with('appointments', Appointment::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('appointments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'time' => ['required', 'max:6'],
            'date' => ['required', 'max:255'],
            'purpose' => ['required', 'max:255'],
            'doctor' => ['required', 'max:255'],
        ]);

        Appointment::create([
            "time" => request('time'),
            "date" => request('date'),
            "purpose" => request('purpose'),
            "doctor" => request('doctor'),
        ]);

        return redirect()->back()->with('success', 'Appointment successfully created');
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
        $apply = Appointment::findOrFail($id);
        $apply->status = $request->input('status');
        $apply->save();

        return redirect()->back()->with('status', 'Appointment responded');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
