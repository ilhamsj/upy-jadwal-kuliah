<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JadwalKuliah;
use App\MataKuliah;
use App\Dosen;
use App\Ruangan;
use Carbon\Carbon;


class JadwalKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $date = Carbon::now()->toDateTimeString();
        // $date = Carbon::now()->toRfc850String();
        // $date = Carbon::now();
        $date = Carbon::today()->isoFormat('dddd');
        // dd($date);
        $jadwal = JadwalKuliah::with(['makul', 'dosen', 'ruangan'])->where('hari',  date('l'))->get();

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
        // dd($request->pukul);
        $jadwal = new JadwalKuliah([
            'id_mata_kuliah'    => $request->get('id_makul'),
            'id_dosen'          => $request->get('id_dosen'),
            'id_ruangan'        => $request->get('id_ruangan'),
            'hari'              => $request->get('hari'),
            'pukul'             => $request->get('pukul'),
        ]);
        $jadwal->save();

        return redirect(route('jadwal.index'));
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
        $makul      = MataKuliah::all();
        $dosen      = Dosen::all();
        $ruangan    = Ruangan::all();
        
        $jadwal = JadwalKuliah::find($id);
        return view('jadwal.edit', [
            'jadwal'    => $jadwal,
            'makul'     => $makul,
            'dosen'     => $dosen,
            'ruangan'   => $ruangan
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
        // dd($request->pukul);
        $jadwal = JadwalKuliah::find($id);
        $jadwal->id_mata_kuliah = $request->id_makul;
        $jadwal->id_dosen = $request->id_dosen;
        $jadwal->id_ruangan = $request->id_ruangan;
        $jadwal->hari = $request->hari;
        $jadwal->status = $request->status;
        $jadwal->save();

        return redirect(route('jadwal.index'))->with('success', 'Jadwal berhasil di update');
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
        return redirect(route('jadwal.index'))->with('success', 'Jadwal berhasil dihapus');
    }
}
