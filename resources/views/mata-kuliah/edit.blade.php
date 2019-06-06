@extends('layouts.app')

@section('content')
    <h1>Edit Mata Kuliah</h1>

    <form method="post" action="{{ route('mata-kuliah.update', $makul->id) }}">

        @method('PATCH')
        @csrf

        <input type="text" value="{{$makul->kd_mata_kuliah}}" name="kode"> <br/>
        <input type="text" value="{{$makul->nama_mata_kuliah}}" name="nama"> <br/>
        <input type="text" value="{{$makul->sks}}" name="sks"> <br/>
        <button type="submit">Update</button>
    </form>

@endsection