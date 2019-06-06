@extends('layout')

@section('content')

    <form method="POST" action="{{ route('class_room.update', $class_room->room_id) }}">
        @method('PATCH')
        @csrf
        <input type="text" name="room_id" value="{{$class_room->room_id}}">
        <input type="text" name="room_name" value="{{$class_room->room_name}}">

        <button type="submit">save</button>
    </form>
@endsection