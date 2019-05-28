@extends('layout')

@section('content')

    <h1>This is content</h1>
    <a href="courses/create">Create Course</a>

    
    @foreach ($courses as $course)
    <ul>
        <li>{{$course -> course_id}}</li>
        <li>{{$course -> course_name}}</li>
        <li>{{$course -> course_sks}}</li>
        <li>
            <a href="{{ route('courses.edit',$course->course_id)}}" class="btn btn-primary">Edit</a>
        </li>
        <li>
            <form action="{{ route('courses.destroy', $course->course_id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>

    </ul>
    @endforeach
@endsection