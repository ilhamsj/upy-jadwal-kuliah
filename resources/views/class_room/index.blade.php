@extends('layout')

@section('content')
    <h1>This is Class Room</h1>
    <a href="{{route('class_room.create')}}">Add</a>

    @foreach ($class_rooms as $class_room)
        <p>
            {{ $class_room->room_id }}
            <a href="{{ route('class_room.show', $class_room->room_id) }}">
                {{ $class_room->room_name }}
            </a>

            <a href="{{ route('class_room.edit', $class_room->room_id) }}">
                Edit
            </a>

            <form action="{{ route('class_room.destroy', $class_room->room_id) }}" method="post">
                @csrf
                @method('DELETE')

                <button type="submit">delete</button>
            </form>
        </p>
    @endforeach

@endsection