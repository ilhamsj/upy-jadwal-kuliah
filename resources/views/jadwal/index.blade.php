@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            {{-- table-hover --}}
            <table class="table table-striped">
                <tr>
                    <td>Hari</td>
                    <td>Mata Kuliah</td>
                    <td>SKS</td>
                    <td>Kelas</td>
                    <td>Dosen</td>
                    <td>Ruangan</td>
                    <td>Waktu</td>
                    <td>Status</td>
                    <td>Created at</td>
                    @auth
                        <td>
                            <a href=" {{ route('jadwal.create') }}">Add new</a>
                        </td>
                    @endauth
                </tr>

                
                @foreach ($jadwal as $item)
                <tr>
                    <td>{{$item->hari}}</td>
                    <td>{{$item->makul->nama_mata_kuliah}}</td>
                    <td>{{$item->makul->sks}}</td>
                    <td>{{$item->kelas->nama_kelas}}</td>
                    <td>{{$item->dosen->nama_dosen}}</td>
                    <td>{{$item->ruangan->nama_ruangan}}</td>
                    <td>{{$item->pukul}}</td>
                    <td>{{$item->status}}</td>
                    <td>{{$item->created_at->format('d/m/Y')}}</td>

                    @auth
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Details
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <a href="{{route('jadwal.edit', $item->id)}}" class="dropdown-item">Edit</a>
                                <form action="{{route('jadwal.destroy', $item->id)}}" method="post" class="d-inline">
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
@endsection

@guest
@section('autoscroll')
<script src="https://demos.daveismyname.blog/autoscroll/jquery.js"></script>
<script src="https://demos.daveismyname.blog/autoscroll/app.js"></script>
@endsection
@endguest
