<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cita = Cita::all();

        return view('cita.index-citas', compact('cita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cita.create-cita');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cita::create($request->all());

        return redirect()->route('cita.index-citas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cita $cita)
    {
        return view('cita.show-citas', compact('cita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cita $cita)
    {
        return view('cita.edit-cita', compact('cita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cita $cita)
    {
        $cita->update($request->all());
        return redirect()->route('cita.show', $cita);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cita $cita)
    {
        $cita->delete();

        return redirect()->route('cita.index');
    }
}
