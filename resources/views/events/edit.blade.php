@extends('layouts.app')

@section('title', 'Edit Event')

@section('content')
<div class="container">
    <h1>Edit Event</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Event Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $event->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="venue" class="form-label">Venue</label>
            <input type="text" class="form-control" id="venue" name="venue" value="{{ old('venue', $event->venue) }}" required>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $event->date->format('Y-m-d')) }}" required>
        </div>

        <div class="mb-3">
            <label for="start_time" class="form-label">Start Time</label>
            <input type="time" class="form-control" id="start_time" name="start_time" value="{{ old('start_time', $event->start_time) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $event->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="booking_url" class="form-label">Booking URL (optional)</label>
            <input type="url" class="form-control" id="booking_url" name="booking_url" value="{{ old('booking_url', $event->booking_url) }}">
        </div>

        <div class="mb-3">
            <label for="tags" class="form-label">Tags</label>
            <input type="text" class="form-control" id="tags" name="tags" value="{{ old('tags', $event->tags) }}">
        </div>

        <div class="mb-3">
            <label for="organizer_id" class="form-label">Organizer</label>
            <select class="form-control" id="organizer_id" name="organizer_id" required>
                <option value="">Select Organizer</option>
                @foreach($organizers as $organizer)
                    <option value="{{ $organizer->id }}" {{ old('organizer_id', $event->organizer_id) == $organizer->id ? 'selected' : '' }}>{{ $organizer->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="event_category_id" class="form-label">Event Category</label>
            <select class="form-control" id="event_category_id" name="event_category_id" required>
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('event_category_id', $event->event_category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="active" name="active" value="1" {{ old('active', $event->active) ? 'checked' : '' }}>
            <label class="form-check-label" for="active">Active</label>
        </div>

        <button type="submit" class="btn btn-primary">Update Event</button>
    </form>
</div>
@endsection
