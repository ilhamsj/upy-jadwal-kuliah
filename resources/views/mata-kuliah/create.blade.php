@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Post</div>
                <div class="card-body">
                        <form class="form-group" method="post" action="{{route('mata-kuliah.store')}}">

                            @csrf
                            <div class="form-group">
                                <input type="text" name="kd_mata_kuliah" placeholder="Kode Mata Kuliah" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="nama_mata_kuliah" placeholder="Nama Mata Kuliah" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="sks" placeholder="Jumlah SKS" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection