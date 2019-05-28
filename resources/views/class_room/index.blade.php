@extends('layout')

@section('content')
    <h1>This is Class Room</h1>
    <a href="{{route('class_room.create')}}">Add</a>

    @foreach ($class_rooms as $class_room)
        <p>
            {{ $class_room->room_id }}
            {{ $class_room->room_name }}
        </p>
    @endforeach

@endsection