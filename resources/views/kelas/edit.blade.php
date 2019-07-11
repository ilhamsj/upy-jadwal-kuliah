@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data kelas</div>
                <div class="card-body">
                    <form method="post" action="{{ route('kelas.update', $kelas->id) }}">
                        <div class="form-group">

                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label for="kode">Kode Kelas</label>
                                <input type="text" value="{{$kelas->kd_kelas}}" name="kode" class="form-control">
                            </div> 

                            <div class="form-group">
                                <label for="nama">Nama Kelas</label>
                                <input type="text" value="{{$kelas->nama_kelas}}" name="nama" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection