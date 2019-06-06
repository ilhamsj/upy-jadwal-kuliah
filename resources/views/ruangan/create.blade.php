@extends('layout')

@section('content')
    <h1>Add new class room</h1>

    <form method="POST" action="{{ route('class_room.store') }}">

        @csrf
        <input type="text" name="room_id">
        <input type="text" name="room_name">

        <button type="submit">save</button>
    </form>
@endsection