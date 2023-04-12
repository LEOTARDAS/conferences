@extends('layouts.app')


@section('title', 'Article creation form')


@section('content')
    <h4>Article creation form</h4>
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div>
            <label for="title-input">Title</label>
            <input id="title-input" type="text" name="title" value="{{ old('title') }}">
        </div>
        <div>
            <label for="content-input">Content</label>
            <textarea id="content-input" name="content">{{ old('content') }}</textarea>
        </div>
        @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{ $error }}
                    @endforeach
                </ul>
            </div>
        @endif
        <div><input type="submit" value="Create"></div>
    </form>
@endsection