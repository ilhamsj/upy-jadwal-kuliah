@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-4">
            
            @include('inc.alert')

             <div class="card">
                 <div class="card-header">Jadwak Kuliah</div>
                 <div class="card-body">
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
                    <table class="table table-responsive">
                        <tr>
                            <th>Kode</th>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>E</th>
                            <th>D</th>
                        </tr>
                        
                        @foreach ($makul as $item)
                        <tr>
                            <td>{{$item->kd_mata_kuliah}}</td>
                            <td><a href="">{{$item->nama_mata_kuliah}}</a></td>
                            <td>{{$item->sks}}</td>
                            <td>
                                <a href="mata-kuliah/{{$item->id}}/edit" class="btn btn-secondary btn-sm">
                                    E
                                </a>
                            </td>
                            <td>
                                <form action="{{route('mata-kuliah.destroy', $item->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-sm" type="submit">D</button>
                                </form>
                            </td>
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
                <div class="card-body">
                    @foreach ($dosen as $item)
                        {{$item->nama_dosen}} <br/>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- End Dosen --}}

        {{-- Ruang Kelas --}}
        <div class="col">
                <div class="card">
                    <div class="card-header">Ruang Kelas</div>
                    <div class="card-body">
                        @foreach ($ruangan as $item)
                            {{$item->nama_ruangan}} <br/>
                        @endforeach
                    </div>
                </div>
            </div>
        {{-- End Ruang Kelas --}}
    </div>
</div>
@endsection
