<?php

namespace App\Http\Controllers;

use App\Models\Proovedores;
use Illuminate\Http\Request;

class ProovedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveer = Proovedores::all();
        return view('proovedores.index', compact('proveer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proovedores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $proovedor = New Proovedores();
        $proovedor->nombre = $request->input('nombre');
        $proovedor->nit = $request->input('nit');
        $proovedor->telefono = $request->input('telefono');
        $proovedor->email = $request->input('email');
        if ($request->hasFile('imagen')){
            $proovedor->imagen = $request->file('imagen')->store('public/proovedor');
        }
        $proovedor->save();
        return 'Proovedor agregado con éxito';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        {
            $proveer = Proovedores::find($id);
            return view('proovedores.show', compact('proveer'));
        }
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
