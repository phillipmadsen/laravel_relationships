@extends('templates.default')
@section('content')
	<div class="col-lg-6">
		<div class="row">
			<h1>User Info</h1>
			<p><strong>Name: </strong>{{ $user->name }}</p>
			<p><strong>Role: </strong>
				<ul>
					@foreach($user->roles as $role)
						<li>{{ $role->name }}</li>
					@endforeach
				</ul>
			</p>
			<p><strong>Country: </strong>{{ $user->country->name }}</p>
		</div>
		<hr />
		<div class="row">
			<h3>Comment's</h3>
			@foreach($user->comments as $comment)
				<p>{{ $comment->body }}</p>
				<p><small> by <b>{{ $comment->user->name }}</b></small></p>
				<hr />
			@endforeach

			<hr />
		</div>
	</div>
	
	<div class="col-lg-6">
		<h2>Article's</h2>

		@foreach($user->articles as $article)
			<h3><a href="{{ route('article.index', ['article_id' => $article->id ]) }}">{{ $article->title }}</a></h3>
			<p>{{ $article->body }}</p>
		@endforeach

	</div>
@stop