@section('title')
    Create post
@endsection

@extends('master')

@section('main')
    <div class="form-container">
        <form action="/post/create" method="POST">
            @csrf
            <input id="autor" value="{{ old('autor') }}" class="{{$errors->has('name') ? 'error' : ''}}" type="text" name="autor" placeholder="Your Name" autocomplete="off">
            <input id="title" value="{{ old('title') }}" class="{{$errors->has('title') ? 'error' : ''}}" type="text" name="title" placeholder="Title" autocomplete="off">
            <input id="body" value="{{ old('body') }}" class="{{$errors->has('body') ? 'error' : ''}}" type="text" name="body" placeholder="Description" autocomplete="off">
            <button type="submit">Save post</button>

            @if ($errors -> any())
                <p style="color: red; padding: 1rem;">Oops! Something went wrong. Try again!</p>
            @endif
        </form>
    </div>
@endsection