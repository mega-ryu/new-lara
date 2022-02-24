@extends('layout/main')

@section('container')
  <h1>Posts Category : {{ $category }}</h1>
  <a href="/blog" class="small">All Post's</a>

  @foreach ($posts as $post)
    <article class="mb-5 border border-2 rounded p-3">
      <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
      <p>{{ $post->excerpt }}</p>
    </article>
  @endforeach
@endsection
