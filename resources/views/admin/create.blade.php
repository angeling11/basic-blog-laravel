@extends('layouts.auth')


@section('title', 'Create')


@section('content')

<div class="container">
    <form method="POST" action="{{ route('store_post') }}" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title">
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" name="content" rows="12"></textarea>
        </div>
        
        <div class="form-group">
            <label for="post-image">Image</label>
            <input type="file" class="form-control-file" id="file-image" name="post-image">
        </div>
        
        <button type="submit" class="btn btn-success">Submit Post</button>
    </form>
    <a href="{{ route('index') }}" class="btn btn-primary my-1">Back</a>
</div>

@endsection
