@extends('layouts.app')

@section('title', 'List of Events')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Events</h1>
        <a href="{{ route('events.create') }}" class="btn btn-primary">Create Event</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Venue</th>
                <th>Date</th>
                <th>Organizer</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
                <td>{{ $event->title }}</td>
                <td>{{ $event->venue }}</td>
                <td>{{ $event->date }}</td>
                <td>{{ $event->organizer->name }}</td>
                <td>{{ $event->category->name }}</td>
                <td>
                    <a href="{{ route('events.show', $event->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
