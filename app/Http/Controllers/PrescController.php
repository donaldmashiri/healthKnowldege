<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Presc;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class PrescController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('prescs.index')->with('prescs', Presc::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prescs.create')->with('users', \App\Models\User::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Presc::create([
            "duration" => request('duration'),
            "frequency" => request('frequency'),
            "dosage" => request('dosage'),
            "medication" => request('medication'),
        ]);

        return redirect()->back()->with('success', 'Prescription successfully created');
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
