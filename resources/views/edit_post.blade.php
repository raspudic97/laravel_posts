@section('title')
    Edit post
@endsection

@extends('master')

@section('main')
    <div class="form-container">
        <form action="/post/{{$post -> id}}/edit" method="POST">
            @csrf
            @method('put')
            <input id="autor" value="{{ $post -> autor }}" class="{{$errors->has('name') ? 'error' : ''}}" type="text" name="autor" placeholder="Your Name" autocomplete="off">
            <input id="title" value="{{ $post -> title }}" class="{{$errors->has('title') ? 'error' : ''}}" type="text" name="title" placeholder="Title" autocomplete="off">
            <input id="body" value="{{ $post -> body }}" class="{{$errors->has('body') ? 'error' : ''}}" type="text" name="body" placeholder="Description" autocomplete="off">
            <button type="submit">Save post</button>

            @if ($errors -> any())
                <p style="color: red; padding: 1rem;">Oops! Something went wrong. Try again!</p>
            @endif
        </form>
    </div>
@endsection