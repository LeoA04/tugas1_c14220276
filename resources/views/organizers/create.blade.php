@extends('layouts.app')

@section('title', 'Create Organizer')

@section('content')
<div class="container">
    <h1>Create Organizer</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('organizers.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Organizer Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="facebook_link" class="form-label">Facebook Link</label>
            <input type="url" class="form-control" id="facebook_link" name="facebook_link" value="{{ old('facebook_link') }}">
        </div>

        <div class="mb-3">
            <label for="x_link" class="form-label">X Link</label>
            <input type="url" class="form-control" id="x_link" name="x_link" value="{{ old('x_link') }}">
        </div>

        <div class="mb-3">
            <label for="website_link" class="form-label">Website Link</label>
            <input type="url" class="form-control" id="website_link" name="website_link" value="{{ old('website_link') }}">
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="active" name="active" value="1" {{ old('active') ? 'checked' : '' }}>
            <label class="form-check-label" for="active">Active</label>
        </div>

        <button type="submit" class="btn btn-primary">Create Organizer</button>
    </form>
</div>
@endsection
