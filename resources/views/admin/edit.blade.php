@extends('layouts.auth')


@section('title', 'Create')


@section('content')

<div class="container">
    <form method="POST" action="{{ route('update_post', ['id' => $post->id]) }}">

        @csrf
        @method('put')

        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" value="{{ $post->title }}">
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" name="content" rows="12">{{ $post->content }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-outline-danger">Edit Post</button>
    </form>

    <a href="{{ route('show_post', ['id' => $post->id]) }}" class="btn btn-outline-primary">Back</a>
</div>

@endsection
