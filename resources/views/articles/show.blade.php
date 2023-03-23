@extends('layouts.app')


@section('title', 'Article')


@section('content')
    <h1>{{ $article['title'] }}</h1>
    <h3>{{ $article['content'] }}</h3>
@endsection