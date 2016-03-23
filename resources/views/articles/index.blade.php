@extends('templates.default')
@section('content')
	<h3>Article's</h3>

		<h1>{{ $articles->title }} <small>posted by {{ $articles->user->name }}</small></h1>
		<p>{{ $articles->body }}</p>

		<h3>{{ $articles->comments->count() }} Comment's</h3>

		@foreach($articles->comments as $comment)
			<p>{{ $comment->body }}</p>
			<small>by <b>{{ $comment->user->name }}</b></small>
			<hr>
		@endforeach
@stop