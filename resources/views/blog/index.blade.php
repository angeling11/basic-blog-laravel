@extends('layouts.app')


@section('title', 'Home')


@section('content')

<div class="container">
    <div class="card-columns">

        @foreach ($posts as $post)

        <div class="card">
            @if($post->image)
                <img src="{{ $post->image }}" class="card-img-top" alt="image">
            @endif
            
            <div class="card-body">
                <h4 class="card-title">
                    <a href="{{ route('show_post', ['id' => $post->id]) }}">{{ $post->title }}</a>
                </h4>
                <p class="card-text">{{ $post->content }}</p>
                <p class="card-text"><a href="{{ route('show_post', ['id' => $post->id]) }}">Read more....</p>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection
