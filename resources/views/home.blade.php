@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-4">
            
            @include('inc.alert')

             <div class="card">
                 <div class="card-header">Jadwak Kuliah</div>
                 <div class="card-body">
                     <a href="/jadwal">Jadwal Kuliah</a>
                     <a href="/jadwal/create">Tambah Jadwal Kuliah</a>
                 </div>
             </div>
        </div>

        {{-- Mata Kuliah --}}
        <div class="col mb-4">
            <div class="card">
                <div class="card-header">
                    Mata Kuliah <a href="{{route('mata-kuliah.create')}}">Create New</a>
                </div>

                <div class="card-body">
                        @foreach ($makul as $item)
                        <div>
                            <h3>{{$item->nama_mata_kuliah}}</h3>
                            {{$item->sks}} SKS <br/>
                            <a href="{{route('mata-kuliah.edit', $item->id)}}" class="btn btn-secondary btn-sm d-inline">
                                Edit
                            </a>
                            {{-- <a href="javascript:$('#form_id').submit()">Delete</a> --}}

                            <form action="{{route('mata-kuliah.destroy', $item->id)}}" id="form_id" method="post" class=" d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-warning btn-sm">Hapus</button>
                            </form>
                            <hr/>
                        </div>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        {{-- End Mata Kuliah --}}

        {{-- Dosen --}}
        <div class="col">
            <div class="card">
                <div class="card-header">Dosen <a href="{{route('dosen.create')}}">Create New</a></div>
                <div class="card-body">
                    @foreach ($dosen as $item)
                        <div>
                            <h3>{{$item->nama_dosen}}</h3>
                            <a href="{{route('dosen.edit', $item->id)}}" class="d-inline btn btn-secondary btn-sm">
                                Edit
                            </a>
                            <form action="{{route('dosen.destroy', $item->id)}}" id="form_delete_dosen" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-warning btn-sm">Hapus</button>
                            </form>
                            <hr/>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- End Dosen --}}

        {{-- Ruang Kelas --}}
        <div class="col mb-4">
                <div class="card">
                    <div class="card-header">Ruang Kelas <a href="{{route('ruangan.create')}}">Create New</a></div>
                    <div class="card-body">
                        @foreach ($ruangan as $item)
                        <div>
                            <h3>{{$item->nama_ruangan}}</h3>
                            <a href="ruangan/{{$item->id}}/edit" class="btn btn-secondary btn-sm d-inline">
                                Edit
                            </a>

                            <form class="d-inline" action="{{route('ruangan.destroy', $item->id)}}" id="form_delete_ruangan" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-warning btn-sm">Hapus</button>
                            </form>
                            <hr/>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        {{-- End Ruang Kelas --}}
    </div>
</div>
@endsection
