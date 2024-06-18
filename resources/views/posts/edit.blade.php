<!-- resources/views/posts/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="input-field">
            <input type="text" id="title" name="title" value="{{ $post->title }}" required>
            <label for="title">Title</label>
        </div>
        <div class="input-field">
            <textarea id="content" name="content" class="materialize-textarea" required>{{ $post->content }}</textarea>
            <label for="content">Content</label>
        </div>
        <button type="submit" class="btn waves-effect waves-light">Update</button>
    </form>
</div>
@endsection
