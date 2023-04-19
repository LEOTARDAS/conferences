@extends('layouts.app')
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
@section('content')
<div class="container-main">
    <div class="container-conf">
    <a href="#">{{ $conference->title }}</a>
    <p>{{ $conference->description }}</p>
    <p>Start Time: {{ $conference->start_time}}</p>
    <p>End Time: {{ $conference->end_time}}</p>
    <p>Location: {{ $conference->location }}</p>
    <p>City: {{ $conference->city }}</p>
    <a href="{{ route('conferences.edit', $conference->id) }}"><button>Edit</button></a>
    <form action="{{ route('conferences.destroy', $conference->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('conferences.index') }}"><button>Back</button></a>
    </div>
</div>
@endsection