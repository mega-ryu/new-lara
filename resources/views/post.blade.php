@extends('layout/main')

@section('container')
  <article class="border rounded p-2">
    <h2>{{ $post['title'] }}</h2>
    <h5>By: {{ $post['author'] }}</h5>
    <p>{{ $post['body'] }}</p>

    <a href="/blog">Back to post's</a>
  </article>
@endsection
