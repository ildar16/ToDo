@extends('layouts.default')

@section('content')
    <article>
        <h2>{{ $post->title }}</h2>
        <p>Pub on {{ $post->created_at->format('d.m.Y H:i:s') }}</p>
        <p>{{ $post->body }}</p>
    </article>
@stop