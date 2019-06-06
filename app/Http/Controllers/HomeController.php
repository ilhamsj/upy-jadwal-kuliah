<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MataKuliah;
use App\Dosen;
use App\Ruangan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $makul = MataKuliah::all();
        $dosen = Dosen::all();
        $ruangan = Ruangan::all();

        return view('home', [
            'makul' => $makul,
            'dosen' => $dosen,
            'ruangan' => $ruangan,
            ]);
    }
}
