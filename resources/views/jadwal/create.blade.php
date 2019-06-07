@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah dosen</div>
                <div class="card-body">
                    <form action="{{ route('jadwal.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="id_makul">Mata Kuliah</label>
                            <select name="id_makul" id="" class="form-control">
                                @foreach ($makul as $item)
                                    <option value="{{$item->id}}">{{$item->nama_mata_kuliah}} - {{$item->sks}} SKS</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_dosen">Dosen</label>
                            <select name="id_dosen" id="" class="form-control">
                                @foreach ($dosen as $item)
                                    <option value="{{$item->id}}">{{$item->nama_dosen}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_ruangan">Ruangan</label>
                            <select name="id_ruangan" id="" class="form-control">
                                @foreach ($ruangan as $item)
                                    <option value="{{$item->id}}">{{$item->nama_ruangan}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="hari">Hari</label>
                            <select name="hari" id="" class="form-control">
                                <option value="senin">Senin</option>
                                <option value="selasa">Selasa</option>
                                <option value="rabu">Rabu</option>
                                <option value="kamis">Kamis</option>
                                <option value="jum'at">Jum'at</option>
                                <option value="sabtu">Sabtu</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection