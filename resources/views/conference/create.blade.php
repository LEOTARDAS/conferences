@extends('layouts.app')

@section('content')
    <h1>Create Conference</h1>
    <form method="POST" action="{{ route('conferences.store') }}">
        @csrf

        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description">{{ old('description') }}</textarea>
        </div>

        <div>
            <label for="start_time">Start Time:</label>
            <input type="datetime-local" name="start_time" id="start_time" value="{{ old('start_time', date('Y-m-d\TH:i')) }}">
        </div>

        <div>
            <label for="end_time">End Time:</label>
            <input type="datetime-local" name="end_time" id="end_time" value="{{ old('end_time', date('Y-m-d\TH:i')) }}">
        </div>
        
        <div>
            <label for="location">Location:</label>
            <input type="text" name="location" id="location" value="{{ old('location') }}">
        </div>

        <div>
            <label for="city">City:</label>
            <select name="city" id="city">
                <option value="vilnius">Vilnius</option>
                <option value="kaunas">Kaunas</option>
                <option value="klaipeda">Klaipeda</option>
                <option value="siauliai">Siauliai</option>
                <option value="panevezys">Panevezys</option>
            </select>
        </div>

        <div>
            <button type="submit">Create</button>
        </div>
    </form>
@endsection