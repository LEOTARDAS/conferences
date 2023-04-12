@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/main.style.css') }}">

@section('content')
<div class="container-main">
    <h1>Conference List</h1>
    <ul>
        @foreach ($conferences as $conference)
        <div class="container-conf">
            <h2><a href="{{ route('conference.show', $conference->id) }}">{{ $conference->title }}</a></h2>
                <h4>{{ $conference->description }} </h4>
                <p>Start Date: {{ $conference->start_time }}</p>
                <p>End Date: {{ $conference->end_time }}</p>
                <p>Location: {{ $conference->location }}</p>
                <p>City: {{ $conference->city }}</p>
                    <a href="{{ route('conferences.edit', $conference->id) }}"><button>Edit</button></a>
                    <form action="{{ route('conferences.destroy', $conference->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
        </div>
        @endforeach
    </ul>

        <a href="{{ route('conferences.create') }}"><button>Create Conference</button></a>
</div>
@endsection