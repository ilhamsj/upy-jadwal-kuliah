@extends('layouts.app')

@section('content')

<div class="container"> 
    <div class="row justify-content-left">
        @foreach ($jadwal as $item)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        Hari : {{$item->hari}} <br/>
                        Mata Kuliah : {{$item->makul->nama_mata_kuliah}} <br/>
                        SKS {{$item->makul->sks}} <br/>
                        Dosen : {{$item->dosen->nama_dosen}} <br/>
                        Ruangan : {{$item->ruangan->nama_ruangan}}
                    </div>
                    <div class="card-footer">
                        <a href="{{route('jadwal.edit', $item->id)}}" class="btn btn-secondary btn-sm d-inline">Edit</a>
                        <form action="{{route('jadwal.destroy', $item->id)}}" method="post" class="d-inline">
                            @csrf   
                            @method('DELETE')
                            <button type="submit" class="btn btn-warning btn-sm">Hapus</button>
                        </form>
                        <a href="/jadwal/create" class="d-inline btn btn-primary btn-sm">Add new</a>   
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

