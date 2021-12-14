@section('title')
    Posts
@endsection

@extends('master')

@section('main')
    <h1  class="page-title">All posts</h1>
    @foreach ($allPosts as $post)
        <a href="{{ route('post.single', ['id' => $post -> id]) }}">
            <div class="post">
                <h1 class="title">{{$post -> title}}</h1>
                <p class="description">{{$post -> body}}</p>
                <small class="autor">{{$post -> autor}}</small>
            </div>
        </a>
    @endforeach
@endsection