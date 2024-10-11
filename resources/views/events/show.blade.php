@extends('layouts.app')

@section('title', 'Event Details')

@section('content')
    <h1>{{ $event->title }}</h1>

    <p><strong>Venue:</strong> {{ $event->venue }}</p>
    <p><strong>Date:</strong> {{ $event->date }}</p>
    <p><strong>Time:</strong> {{ $event->start_time }}</p>
    <p><strong>Description:</strong></p>
    <p>{!! $event->description !!}</p>

    <p><strong>Tags:</strong> {{ $event->tags }}</p>
    <p><strong>Organizer:</strong> {{ $event->organizer->name }}</p>
    <p><strong>Category:</strong> {{ $event->category->name }}</p>

    <a href="{{ route('events.index') }}" class="btn btn-secondary">Back to Events</a>
@endsection
