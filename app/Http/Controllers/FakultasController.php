<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // akses tabel Falkultas
        $result = Fakultas::all(); // Select * from Fakultas
        // dd($result); // dump data 
       return view('fakultas.index', compact('result')); // passing data ke view
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fakultas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
            // validasi data
            $input = $request->validate([
                'nama_fakultas' => 'required|unique:Fakultas',
                'singkatan' => 'required',
            ]);

        
     //simpan ke tabel fakulas
        Fakultas::create($input);


     // redirect ke route halaman Fakultas.index
    return redirect()->route('Fakultas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fakultas $fakultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fakultas $fakultas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fakultas $fakultas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fakultas $fakultas)
    {
        //
    }
}
