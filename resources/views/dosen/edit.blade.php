@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Dosen</div>
                <div class="card-body">
                    <form method="post" action="{{ route('dosen.update', $dosen->id) }}">
                        <div class="form-group">

                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <input type="text" value="{{$dosen->kd_dosen}}" name="kode" class="form-control">
                            </div> 

                            <div class="form-group">
                                <input type="text" value="{{$dosen->nama_dosen}}" name="nama" class="form-control">
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