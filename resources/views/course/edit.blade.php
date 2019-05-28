@extends('layout')

@section('content')
    <h1>Edit Course</h1>

    <form method="post" action="{{ route('courses.update', $course->course_id) }}">

        @method('PATCH')
        @csrf
        <label for="course_id">Course Code</label>
        <input type="text" name="course_id" value="{{ $course->course_id }}"> <br/>

        <label for="course_name">Course Name</label>
        <input type="text" name="course_name" value="{{ $course->course_name }}"> <br/>

        <label for="course_sks">Course SKS</label>
        <input type="text" name="course_sks" value="{{ $course->course_sks }}"> <br/>

        <button type="submit">update</button>
    </form>

@endsection