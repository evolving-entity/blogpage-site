@extends('layouts.app')
@php
    $title = 'Create Blog'
@endphp

@section('content')
    <div class="posts-container px-4 py-5">
        <h1>Create a Post!</h1>
        <form action="PostsController@store" method="POST">
            <div class="form-group">
                <label for="title">Blog Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="What shall we name it?" >
            </div>
            <div class="form-group">
                <label for="body">Blog Content</label>
                <input type="textarea" name="body" id="body" class="form-control" placeholder="What is it about?" >
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
@endsection