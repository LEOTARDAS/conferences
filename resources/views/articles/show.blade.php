@extends('layouts.app')


@section('title', 'Article')


@section('content')
    @if(session('status'))
        <div style="background-color: lime; color:green;">{{ session('status') }} </div>
    @endif

    <h1>{{ $article->title }}</h1>
    <h3>{{ $article->content }}</h3>
@endsection