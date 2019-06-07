<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JadwalKuliah;
use App\MataKuliah;
use App\Dosen;
use App\Ruangan;

class JadwalKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = JadwalKuliah::with(['makul', 'dosen', 'ruangan'])->get();

        return view('jadwal.index', [
            'jadwal' => $jadwal,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $makul      = MataKuliah::all();
        $dosen      = Dosen::all();
        $ruangan    = Ruangan::all();

        return view('jadwal.create', [
            'makul'     => $makul,
            'dosen'     => $dosen,
            'ruangan'   => $ruangan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jadwal = new JadwalKuliah([
            'id_mata_kuliah'    => $request->get('id_makul'),
            'id_dosen'          => $request->get('id_dosen'),
            'id_ruangan'        => $request->get('id_ruangan'),
            'hari'              => $request->get('hari'),
        ]);
        $jadwal->save();

        return redirect('/jadwal');
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
        $jadwal = JadwalKuliah::find($id);
        return view('jadwal.edit', [
            'jadwal' => $jadwal
        ]);
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
        $jadwal = JadwalKuliah::find($id);
        $jadwal->id_mata_kuliah = $request->get('id');
        $jadwal->save();

        return redirect('/jadwal')->with('success', 'Jadwal berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal = JadwalKuliah::find($id);
        $jadwal->delete();
        return redirect('/jadwal')->with('success', 'Jadwal berhasil dihapus');
    }
}
