@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- <div class="card">
                <div class="card-body"> --}}
                    <table class="table table-responsive table-hover">
                        <tr>
                            <th>Hari</th>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Dosen</th>
                            <th>Ruangan</th>
                            <th colspan="2"><a href="/jadwal/create" class="d-inline btn btn-primary btn-sm">Add new</a></th>
                        </tr>

                        
                        @foreach ($jadwal as $item)
                        <tr>
                            <td>{{$item->hari}}</td>
                            <td>{{$item->makul->nama_mata_kuliah}}</td>
                            <td>{{$item->makul->sks}}</td>
                            <td>{{$item->dosen->nama_dosen}}</td>
                            <td>{{$item->ruangan->nama_ruangan}}</td>

                            <td><a href="{{route('jadwal.edit', $item->id)}}" class="btn btn-secondary btn-sm d-inline">Edit</a></td>
                            <td>
                                <form action="{{route('jadwal.destroy', $item->id)}}" method="post" class="d-inline">
                                    @csrf   
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-warning btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        
                    </table>
                {{-- </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection

