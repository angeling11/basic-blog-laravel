@extends('layouts.app')


@section('title', e($post->title))


@section('content')

<div class="container">
    <h1 class="display-2">{{ $post->title }}</h1>
    <p class="text-muted">Posted: {{ $post->created_at->format('d/F/Y h:ia') }} - Updated: {{ $post->updated_at->format('d/F/Y h:ia') }}</p>


    <hr>

    @if($post->image)
        <img src="{{ $post->image }}" class="rounded post-image float-left mb-3 mr-3" alt="image">
    @endif
    
    <div class="lead">{{ $post->content }}</div>

    <br>
    <a href="{{ route('edit_post', ['id' => $post->id]) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('index') }}" class="btn btn-primary">Back</a>

    <form method="POST" action="{{ route('delete_post', ['id' => $post->id]) }}" class="my-1">

        @csrf
        @method('delete')
        
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
    
@endsection
