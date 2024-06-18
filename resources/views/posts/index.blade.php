<!-- resources/views/posts/index.blade.php -->
@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Blog Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn waves-effect waves-light">Add New Post</a>
    <ul class="collection">
        @foreach ($posts as $post)
            <li class="collection-item">
                <span class="title">{{ $post->title }}</span>
                <p>{{ $post->content }}</p>
                <a href="{{ route('posts.edit', $post->id) }}" class="secondary-content"><i class="material-icons">edit</i></a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="secondary-content" style="margin-right: 20px;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-flat btn-small"><i class="material-icons">delete</i></button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
