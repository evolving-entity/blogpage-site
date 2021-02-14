@extends('layouts.app')
@php
    $title = 'Blog Post'
@endphp

@section('content')
    <h1>{{$post->title}}</h1>
    <small>{{$post->created_at}}</small>
    <p>{{$post->body}}</p>
@endsection