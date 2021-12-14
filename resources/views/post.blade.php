@section('title')
    Single post
@endsection

@extends('master')

@section('main')
    <h1 class="page-title"> Single Post </h1>

    <div class="post">
        <h1 class="title">{{$post -> title}}</h1>
        <p class="description">{{$post -> body}}</p>
        <small class="autor">{{$post -> autor}}</small>
        <a class="edit-post-btn" href="/post/{{$post -> id}}/edit">Edit Post</a>
        <a class="edit-post-btn" href="/post/{{$post -> id}}/delete">Delete Post</a>
    </div>
@endsection