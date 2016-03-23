@extends('templates.default')
@section('content')
	<h1>Post's made in {{ $country->name }}</h1>
	
	@foreach($country->articles as $article)
		<h3>{{ $article->title }} <small> by {{ $article->user->name }}</small></h3>
		<p>{{ $article->body }}</p>

		<h4>{{ $article->comments->count() }} Comment's</h4>
		@foreach($article->comments as $comment)
			<p>{{ $comment->body }}</p>
		@endforeach
		<hr />
	@endforeach

@stop