@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- Mata Kuliah --}}
        <div class="col">
            <div class="card">
                <div class="card-header">Mata Kuliah</div>

                <div class="card-body">
                    <table class="table table-responsive">
                        <tr>
                            <th>Kode</th>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Delete</th>
                        </tr>
                        
                        @foreach ($makul as $item)
                        <tr>
                            <td>{{$item->kd_mata_kuliah}}</td>
                            <td><a href="">{{$item->nama_mata_kuliah}}</a></td>
                            <td>{{$item->sks}}</td>
                            <td><a href=""> Delete</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        {{-- End Mata Kuliah --}}

        {{-- Dosen --}}
        <div class="col">
            <div class="card">
                <div class="card-header">Dosen</div>
                <div class="card-body"></div>
            </div>
        </div>
        {{-- End Dosen --}}

        {{-- Ruang Kelas --}}
        <div class="col">
                <div class="card">
                    <div class="card-header">Ruang Kelas</div>
                    <div class="card-body"></div>
                </div>
            </div>
        {{-- End Ruang Kelas --}}
    </div>
</div>
@endsection
