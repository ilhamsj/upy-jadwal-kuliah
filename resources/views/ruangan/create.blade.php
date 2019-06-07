@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Ruangan</div>
                <div class="card-body">
                    <form action="{{ route('ruangan.store') }}" method="post">
                        @csrf
                        <input type="text" name="kode" placeholder="Kode ruangan">
                        <input type="text" name="nama" placeholder="Nama ruangan">
                        <button type="submit">save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection