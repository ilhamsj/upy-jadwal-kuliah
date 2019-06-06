@extends('layout')

@section('content')
    <h1>This is Lecture bro</h1>

    <form action="{{ route('lecture.store') }}" method="post">
        @csrf
        <input type="text" name="id">
        <input type="text" name="name">
        <button type="submit">save</button>
    </form>
@endsection