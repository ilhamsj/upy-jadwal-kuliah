@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Jadwal</div>
                <div class="card-body">
                    @foreach ($jadwal as $item)
                    <p>
                        {{-- {{$item->id}} --}}
                        {{-- {{$item->id_mata_kuliah}} --}}
                        Mata Kuliah : {{$item->makul->nama_mata_kuliah}} <br/>
                        SKS         : {{$item->makul->sks}}
                    </p>
                    <a href="{{route('jadwal.edit', $item->id)}}" class="btn btn-secondary btn-sm d-inline">
                        Edit
                    </a>

                    <form action="{{route('jadwal.destroy', $item->id)}}" method="post" class="d-inline">
                        @csrf   
                        @method('DELETE')

                        <button type="submit" class="btn btn-warning btn-sm">Hapus</button>
                    </form>
                    @endforeach
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection