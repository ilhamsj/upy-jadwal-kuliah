@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="card-header">
                Data Ruangan
            </div>
            <div class="card-body">
                <table class="table table-responsive">
                    <tr>
                        <td>Kode Kelas</td>
                        <td>Nama Kelas</td>
                        @auth
                            <td><a href="{{route('kelas.create')}}">Create New</a></td>
                        @endauth
                    </tr>
                    
                    @foreach ($kelas as $item)
                        <tr>
                            <td>{{$item->kd_kelas}}</td>
                            <td>{{$item->nama_kelas}}</td>
                            @auth
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Details
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                                        <a href="{{route('kelas.edit', $item->id)}}" class="dropdown-item">Edit</a>
                                        <form action="{{route('kelas.destroy', $item->id)}}" method="post" class="d-inline">
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
</div>
</div>
@endsection