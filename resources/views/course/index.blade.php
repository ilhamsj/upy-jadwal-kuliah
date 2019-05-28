@extends('layout')

@section('content')

    <h1>This is Course</h1>
    <a href="courses/create">Create Course</a>

        @foreach ($courses as $course)

        <div class="card mt-4">
            <div class="card-body">
                <p>
                    <b>Course Code</b> {{$course -> course_id}}
                </p>
                <p>
                    <b>Course Name</b> {{$course -> course_name}}
                </p>
                <p>
                    <b>Course SKS</b> {{$course -> course_sks}}
                </p>
                
                
            </div>

            <div class="card-footer">
                <a href="{{ route('courses.edit',$course->course_id)}}" class="btn btn-primary d-inline-block">Edit</a>
                <form action="{{ route('courses.destroy', $course->course_id) }}" method="POST" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
        @endforeach

@endsection