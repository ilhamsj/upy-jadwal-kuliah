@extends('layout')

@section('content')

    {{-- @if ($errors-any())
        @foreach ($errors as $error)
            <b>{{$error}}</b>
        @endforeach
    @endif --}}

    <h1>This is content</h1>
    <a href="courses/create">Create Course</a>
@endsection