@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
  <h1>All Posts</h1>

  <ul class="section-links">
    <li><a href="{{ route('posts.create') }}">Create New Post</a></li>
  </ul>

  <ul>
    @foreach ($posts as $post)
      <li><strong>{{ $post->title }}</strong><br>{{ $post->body }}</li>
    @endforeach
  </ul>
@endsection
