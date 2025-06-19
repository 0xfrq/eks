@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
  <h1>Create New Post</h1>

  <form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div style="margin-bottom: 10px;">
      <label>Title:</label><br>
      <input type="text" name="title" required style="width: 100%; padding: 8px;">
    </div>

    <div style="margin-bottom: 10px;">
      <label>Body:</label><br>
      <textarea name="body" rows="5" required style="width: 100%; padding: 8px;"></textarea>
    </div>

    <button type="submit" style="padding: 10px 20px; background-color: #1da1f2; color: white; border: none; border-radius: 5px;">Publish</button>
  </form>
@endsection
