@extends('layout')

@section('content')
    <h1>Jadwal Kuliah</h1>
    <a href="{{route('schedule.create')}}">Tambah Jadwal</a>
    @foreach ($schedules as $item)
        <h3>{{$item->id}}.
        {{$item->course_id}}</h3>
    @endforeach
@endsection