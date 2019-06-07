@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah dosen</div>
                <div class="card-body">
                    <form action="{{ route('dosen.store') }}" method="post">
                        @csrf
                        <input type="text" name="kode" placeholder="Kode Dosen">
                        <input type="text" name="nama" placeholder="Nama Dosen">
                        <button type="submit">save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection