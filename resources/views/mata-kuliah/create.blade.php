@extends('layout')

@section('content')
    <h1>Create Course</h1>

    <form method="post" action="{{route('courses.store')}}">

        @csrf
        <label for="id">Course Code</label>
        <input type="text" name="id"> <br/>

        <label for="name">Course Name</label>
        <input type="text" name="name"> <br/>

        <label for="sks">Course SKS</label>
        <input type="text" name="sks"> <br/>

        <button type="submit">Save</button>
    </form>

@endsection