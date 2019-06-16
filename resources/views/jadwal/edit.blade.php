@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah dosen</div>
                <div class="card-body">

                    <form action="{{ route('jadwal.update', $jadwal->id) }}" method="post">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <input type="text" name="id" class="form-control" value="{{$jadwal->id_mata_kuliah}}" >
                        </div>

                        <div class="form-group">
                            <input type="text" name="id" class="form-control" value="{{$jadwal->id_dosen}}" >
                        </div>

                        <div class="form-group">
                            <input type="text" name="id" class="form-control" value="{{$jadwal->id_ruangan}}" >
                        </div>

                        <div class="form-group">
                            <label for="hari">Hari</label>
                            <select name="hari" id="" class="form-control">
                                <option value="{{$jadwal->hari}}">{{$jadwal->hari}}</option>
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