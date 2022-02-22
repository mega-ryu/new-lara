@extends('layout/main')

@section('container')
  <h1>Posts</h1>

  @foreach ($posts as $post)
    <article class="mb-5 border border-2 rounded p-3">
      <h2><a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a></h2>
      <h5>By: {{ $post['author'] }}</h5>
      <p>{{ $post['body'] }}</p>
    </article>
  @endforeach
@endsection
