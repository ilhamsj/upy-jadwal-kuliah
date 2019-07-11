@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Kelas</div>
                <div class="card-body">
                    <form action="{{ route('kelas.store') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <input type="text" name="kode" class="form-control" placeholder="Kode Kelas">
                        </div>

                        <div class="form-group">
                            <input type="text" name="nama" class="form-control" placeholder="Nama Kelas">
                        </div>

                        <button type="submit" class="btn btn-success btn-block">save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection