@extends('templates.default')
@section('content')
	<h3>THis is the homepage bratanas</h3>
	
	<table border="1">
	<tr>
		<td>ID</td>
		<td>Author's</td>
		<td>Article's</td>
	</tr>
	@foreach($users as $user)
		<tr>
			<td><p>{{ $user->id }}</p></td>
			<td><a href="{{ route('user.index', ['username' => $user->name]) }}">{{ $user->name }}</a></td>
			<td><p>{{ $user->articles->count() }}</p></td>
		</tr>
	@endforeach
	</table>
@stop