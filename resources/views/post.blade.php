@extends('layout/main')

@section('container')
  <article class="border rounded p-2">
    <h2>{{ $post->title }}</h2>
    <p>By: Sahrul Mahani in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}

    <a href="/blog" class="d-block">Back to post's</a>
  </article>
@endsection
