@extends('layout/main')

@section('container')
	<h1>Halaman About</h1>
	<small class="text-muted">Ini adalah halaman about yang berisi pribadi</small>

	<ul class="list-group">
		<li class="list-group-item">nama : {{ $nama }}</li>
		<li class="list-group-item">nama : {{ $nim }}</li>
	</ul>
	<img src="{{ $image }}" width="200" alt="{{ $nama }}" class="rounded-circle">
@endsection