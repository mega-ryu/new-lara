@extends('layout/main')

@section('container')
  <article class="border rounded p-2">
    <h2>{{ $post->title }}</h2>

    {!! $post->body !!}

    <a href="/blog" class="d-block">Back to post's</a>
  </article>
@endsection
