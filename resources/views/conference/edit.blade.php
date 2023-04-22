@extends('layouts.app')
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
@section('content')
    <div class="container-main">
        <div class="container-conf">
        <a href="#">Edit Conference</a>
        <form action="{{ route('conference.update', $conference->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label><br>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $conference->title) }}">
            </div><br>
            <div class="form-group">
                <label for="description">Description</label><br>
                <textarea class="form-control" id="description" name="description">{{ old('description', $conference->description) }}</textarea>
            </div><br>
            <div class="form-group">
                <label for="start_time">Start Time</label><br>
                <input type="datetime-local" class="form-control" id="start_time" name="start_time" value="{{ old('start_time', $conference->start_time) }}">
            </div><br>
            <div class="form-group">
                <label for="end_time">End Time</label><br>
                <input type="datetime-local" class="form-control" id="end_time" name="end_time" value="{{ old('end_time', $conference->end_time) }}">
            </div>
            <br>
            <div>
                <label for="location">Location:</label><br>
                <input type="text" name="location" id="location" value="{{ old('location', $conference->location) }}">
            </div>
            <br>
            <div>
                <label for="city">City:</label><br>
                <select name="city" id="city">
                    <option value="vilnius" {{ $conference->city == 'vilnius' ? 'selected' : '' }}>Vilnius</option>
                    <option value="kaunas" {{ $conference->city == 'kaunas' ? 'selected' : '' }}>Kaunas</option>
                    <option value="klaipeda" {{ $conference->city == 'klaipeda' ? 'selected' : '' }}>Klaipeda</option>
                    <option value="siauliai" {{ $conference->city == 'siauliai' ? 'selected' : '' }}>Siauliai</option>
                    <option value="panevezys" {{ $conference->city == 'panevezys' ? 'selected' : '' }}>Panevezys</option>
                </select>
            </div><br><br>
            @guest
            <p>Log in to edit</p>
            @else
            <button type="submit" class="btn btn-primary">Update Conference</button>
            @endguest
        </form><br>
        <a href="{{ route('conferences.index') }}"><button>Back</button></a>
        </div>
    </div>
@endsection