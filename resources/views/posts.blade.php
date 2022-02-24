@extends('layout/main')

@section('container')
  <h1>Posts</h1>
  <small>test perubahan</small>

  @foreach ($posts as $post)
    <article class="mb-5 border border-2 rounded p-3">
      <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
      <p>{{ $post->excerpt }}</p>
    </article>
  @endforeach
@endsection
