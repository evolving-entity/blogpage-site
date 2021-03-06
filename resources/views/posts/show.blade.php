@extends('layouts.app')
@php
    $title = 'Blog Post'
@endphp

@section('content')
    <div class="posts-container px-4 py-5">
        <h1>{{$post->title}}</h1>
        <small>{{$post->created_at}}</small>
        <p>{{$post->body}}</p>
    </div>
@endsection