<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MataKuliah;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mata-kuliah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $makul = new MataKuliah([
            'kd_mata_kuliah' => $request->get('kd_mata_kuliah'),
            'nama_mata_kuliah' => $request->get('nama_mata_kuliah'),
            'sks' => $request->get('sks')
        ]);

        $makul->save();
        return redirect('/home')->with("success", "Mata Kuliah Berhasil Ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $makul = MataKuliah::find($id);
        return view('mata-kuliah.edit')->with('makul', $makul);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $makul = MataKuliah::find($id);
        $makul->kd_mata_kuliah      = $request->get('kode');
        $makul->nama_mata_kuliah    = $request->get('nama');
        $makul->sks                 = $request->get('sks');

        $makul->save();
        return redirect('/home')->with("success", "Mata Kuliah Berhasil di update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $makul = MataKuliah::find($id);
        $makul->delete();

        return redirect('/home')->with('success', 'Mata Kuliah berhasil dihapus');
    }
}
