@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $conference->title }}</h1>
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
@endsection