@extends('layout')

@section('content')
    <h1>Atur Jadwal</h1>

    <form method="post" action="{{route('schedule.store')}}">

        @csrf
        <input type="text" name="course_id" placeholder="Course ID">

        <button type="submit">Save</button>
    </form>

@endsection