@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        {{-- Mata Kuliah --}}
        <div class="col mb-4">
            <div class="card">
                <div class="card-header">
                    Data Mata Kuliah
                </div>
                <div class="card-body">
                    <table class="table table-responsive">
                        <tr>
                            <td>Kode Mata Kuliah</td>
                            <td>Mata Kuliah</td>
                            <td>SKS</td>
                            @auth
                                <td><a href="{{route('mata-kuliah.create')}}">Create New</a></td>
                            @endauth
                        </tr>
                        @foreach ($makul as $item)
                            <tr>
                                <td>{{$item->kd_mata_kuliah}}</td>
                                <td>{{$item->nama_mata_kuliah}}</td>
                                <td>{{$item->sks}}</td>
                                @auth
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Details
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                                            <a href="{{route('mata-kuliah.edit', $item->id)}}" class="dropdown-item">Edit</a>
                                            <form action="{{route('mata-kuliah.destroy', $item->id)}}" method="post" class="d-inline">
                                                @csrf   
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                @endauth
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        {{-- End Mata Kuliah --}}

        {{-- Dosen --}}
        <div class="col mb-4">
            <div class="card">
                <div class="card-header">
                    Data Dosen
                </div>
                <div class="card-body">
                    <table class="table table-responsive">
                        <tr>
                            <td>Kode Dosen</td>
                            <td>Nama Dosen</td>
                            @auth
                                <td><a href="{{route('dosen.create')}}">Create New</a></td>
                            @endauth
                        </tr>
                        @foreach ($dosen as $item)
                            <tr>
                                <td>{{$item->kd_dosen}}</td>
                                <td>{{$item->nama_dosen}}</td>
                                @auth
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Details
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                                            <a href="{{route('dosen.edit', $item->id)}}" class="dropdown-item">Edit</a>
                                            <form action="{{route('dosen.destroy', $item->id)}}" method="post" class="d-inline">
                                                @csrf   
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                @endauth
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        {{-- End Dosen --}}

        {{-- Ruang Kelas --}}
        <div class="col mb-4">
                <div class="card">
                    <div class="card-header">
                        Data Ruangan
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <tr>
                                <td>Kode Ruangan</td>
                                <td>Nama Ruangan</td>
                                @auth
                                    <td><a href="{{route('ruangan.create')}}">Create New</a></td>
                                @endauth
                            </tr>
                            @foreach ($ruangan as $item)
                                <tr>
                                    <td>{{$item->kd_ruangan}}</td>
                                    <td>{{$item->nama_ruangan}}</td>
                                    @auth
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Details
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                                                <a href="{{route('ruangan.edit', $item->id)}}" class="dropdown-item">Edit</a>
                                                <form action="{{route('ruangan.destroy', $item->id)}}" method="post" class="d-inline">
                                                    @csrf   
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    @endauth
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>  
        {{-- End Ruang Kelas --}}
    </div>
</div>
@endsection
