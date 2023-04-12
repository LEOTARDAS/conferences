@extends('layouts.app')

@section('content')
    <h1>Conference List</h1>
    <ul>
        @foreach ($conferences as $conference)
            <li>
                {{ $conference->title }}
                <a href="{{ route('conference.edit', $conference) }}">Edit</a>
                <form action="{{ route('conference.destroy', $conference) }}" method="post" onsubmit="return confirm('Are you sure?')">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('conference.create') }}">Add Conference</a>
@endsection