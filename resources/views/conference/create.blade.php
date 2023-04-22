@extends('layouts.app')
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
@section('content')

<div class="container-main">
    <div class="container-conf">
    <a>Create Conference</a>
    <form method="POST" action="{{ route('conferences.store') }}">
        @csrf
<br>
        <div>
            <label for="title">Title:</label><br>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
        </div>
        <br>
        <div>
            <label for="description">Description:</label><br>
            <textarea name="description" id="description">{{ old('description') }}</textarea>
        </div>
        <br>
        <div>
            <label for="start_time">Start Time:</label><br>
            <input type="datetime-local" name="start_time" id="start_time" value="{{ old('start_time', date('Y-m-d\TH:i')) }}">
        </div>
        <br>
        <div>
            <label for="end_time">End Time:</label><br>
            <input type="datetime-local" name="end_time" id="end_time" value="{{ old('end_time', date('Y-m-d\TH:i')) }}">
        </div>
        <br>
        <div>
            <label for="location">Location:</label><br>
            <input type="text" name="location" id="location" value="{{ old('location') }}">
        </div>
        <br>
        <div>
            <label for="city">City:</label><br>
            <select name="city" id="city">
                <option value="vilnius">Vilnius</option>
                <option value="kaunas">Kaunas</option>
                <option value="klaipeda">Klaipeda</option>
                <option value="siauliai">Siauliai</option>
                <option value="panevezys">Panevezys</option>
            </select>
        </div><br><br>
        @guest
        <p>Log in to create a conference</p>
        @else
        <div>
            <button type="submit">Create</button>
        </div>
        @endguest
    </form>
</div>
</div>
@endsection