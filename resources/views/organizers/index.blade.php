@extends('layouts.app')

@section('title', 'List of Organizers')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Organizers</h1>
        <a href="{{ route('organizers.create') }}" class="btn btn-primary">Create Organizer</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($organizers as $organizer)
            <tr>
                <td>{{ $organizer->name }}</td>
                <td>{{ $organizer->description }}</td>
                <td>
                    <a href="{{ route('organizers.show', $organizer->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('organizers.edit', $organizer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('organizers.destroy', $organizer->id) }}" method="POST" class="d-inline">
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