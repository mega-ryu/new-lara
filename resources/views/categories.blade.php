@extends('layout/main')

@section('container')
  <h1>Posts Category</h1>
  <a href="/blog" class="small">All Post's</a>

  @foreach ($categories as $category)
    <article class="mb-1 border border-2 rounded p-3">
      <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
    </article>
  @endforeach
@endsection
