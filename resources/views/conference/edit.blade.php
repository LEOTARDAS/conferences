@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Edit Conference</h1>
        <form action="{{ route('conference.update', $conference->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $conference->title) }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description">{{ old('description', $conference->description) }}</textarea>
            </div>
            <div class="form-group">
                <label for="start_time">Start Time</label>
                <input type="datetime-local" class="form-control" id="start_time" name="start_time" value="{{ old('start_time', $conference->start_time) }}">
            </div>
            <div class="form-group">
                <label for="end_time">End Time</label>
                <input type="datetime-local" class="form-control" id="end_time" name="end_time" value="{{ old('end_time', $conference->end_time) }}">
            </div>

            <div>
                <label for="location">Location:</label>
                <input type="text" name="location" id="location" value="{{ old('location', $conference->location) }}">
            </div>

            <div>
                <label for="city">City:</label>
                <select name="city" id="city">
                    <option value="vilnius" {{ $conference->city == 'vilnius' ? 'selected' : '' }}>Vilnius</option>
                    <option value="kaunas" {{ $conference->city == 'kaunas' ? 'selected' : '' }}>Kaunas</option>
                    <option value="klaipeda" {{ $conference->city == 'klaipeda' ? 'selected' : '' }}>Klaipeda</option>
                    <option value="siauliai" {{ $conference->city == 'siauliai' ? 'selected' : '' }}>Siauliai</option>
                    <option value="panevezys" {{ $conference->city == 'panevezys' ? 'selected' : '' }}>Panevezys</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Conference</button>
        </form>
    </div>
@endsection