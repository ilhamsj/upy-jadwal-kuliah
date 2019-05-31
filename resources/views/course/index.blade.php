@extends('layout')

@section('content')

    <a href="courses/create">Create Course</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kode</th>
            <th scope="col">Mata Kuliah</th>
            <th scope="col">SKS</th>
            <th scope="col">Edit</th>
            <th></th>
          </tr>
        </thead>

        @foreach ($courses as $course)
            <tr>
                <td></td>
                <td>{{$course -> course_id}}</td>
                <td>{{$course -> course_name}}</td>
                <td>{{$course -> course_sks}}</td>
                <td><a href="{{ route('courses.edit',$course->course_id)}}" class="btn btn-primary d-inline-block">Edit</a></td>
                <td>
                    <form action="{{ route('courses.destroy', $course->course_id) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
      </table>
@endsection