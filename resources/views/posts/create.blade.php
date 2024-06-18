<!-- resources/views/posts/create.blade.php -->
@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Create New Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="input-field">
            <input type="text" id="title" name="title" required>
            <label for="title">Title</label>
        </div>
        <div class="input-field">
            <textarea id="content" name="content" class="materialize-textarea" required></textarea>
            <label for="content">Content</label>
        </div>
        <button type="submit" class="btn waves-effect waves-light">Save</button>
    </form>
</div>
@endsection
