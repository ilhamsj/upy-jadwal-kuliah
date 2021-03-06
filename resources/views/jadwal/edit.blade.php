@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Jadwal Kuliah</div>
                <div class="card-body">
                    <form action="{{ route('jadwal.update', $jadwal->id) }}" method="post">
                        @method('PATCH')
                        @csrf

    
                        <div class="form-group">
                            <label for="id_makul">Mata Kuliah</label>
                            <select name="id_makul" class="form-control">
                                <option value="{{ $jadwal->id_mata_kuliah }}" selected>{{ $jadwal->makul->nama_mata_kuliah . '-' .$jadwal->id_mata_kuliah}}</option>
                                @foreach ($makul as $item)
                                    <option value="{{$item->id}}">
                                        {{$item->nama_mata_kuliah . '-' .$item->id}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_kelas">Kelas</label>
                            <select name="id_kelas" class="form-control">
                                <option value="{{ $jadwal->kelas->id }}" selected>{{ $jadwal->kelas->nama_kelas }}</option>
                                @foreach ($kelas as $item)
                                    <option value="{{$item->id}}">{{$item->nama_kelas}}</option>
                                @endforeach
                            </select>
                        </div>
 
                        <div class="form-group">
                            <label for="id_dosen">Dosen</label>
                            <select name="id_dosen" class="form-control">
                                <option value="{{ $jadwal->dosen->id }}" selected>{{ $jadwal->dosen->nama_dosen }}</option>
                                @foreach ($dosen as $item)
                                    <option value="{{$item->id}}">{{$item->nama_dosen}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_ruangan">Ruangan</label>
                            <select name="id_ruangan" class="form-control">
                                <option value="{{ $jadwal->ruangan->id }}" selected>{{ $jadwal->ruangan->nama_ruangan }}</option>
                                @foreach ($ruangan as $item)
                                    <option value="{{$item->id}}">{{$item->nama_ruangan}}</option>
                                @endforeach
                            </select>
                        </div>

                        @php
                            $day = [ 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday',];
                            $status = ['masuk', 'libur', 'tugas'];
                        @endphp

                        <div class="form-group">
                            <label for="hari">Hari</label>
                            <select name="hari" class="form-control">
                                <option value="{{ $jadwal->hari }}" selected>{{ $jadwal->hari }}</option>
                                @for ($i = 0; $i < count($day); $i++)
                                    <option value="{{ $day[$i] }}">{{ $day[$i] }}</option>
                                @endfor
                            </select>
                        </div>
 
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control">
                                <option value="{{ $jadwal->status }}" selected>{{ $jadwal->status }}</option>
                                @for ($i = 0; $i < count($status); $i++)
                                    <option value="{{ $status[$i] }}">{{ $status[$i] }}</option>
                                @endfor
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="pukul">Waktu Kuliah</label>
                            <input type="time" name="pukul" value="{{$jadwal->pukul}}" class="form-control" required>
                        </div>
                        
                        <button type="submit" class="btn btn-success btn-block">save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection