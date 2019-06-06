@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Post</div>
                <div class="card-body">
                        <h1>Create Course</h1>

                        <form method="post" action="{{route('mata-kuliah.store')}}">

                            @csrf
                            <input type="text" name="kd_mata_kuliah" placeholder="Kode Mata Kuliah" required> <br/>
                            <input type="text" name="nama_mata_kuliah" placeholder="Nama Mata Kuliah" required> <br/>
                            <input type="text" name="sks" placeholder="Jumlah SKS" required> <br/>

                            <button type="submit">Save</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection