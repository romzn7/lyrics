@extends('layout.layout')

@section('subtitle')
	Edit Song
@stop

@section('body')

{!! Form::model(array('route' => '/lyrics/$songs->slug')) !!}

{!! Form::close() !!}
	<form method="post" action="/lyrics/{{$songs->slug}}">
		<label>Title</label> <input type="text" name='title' value="{{ $songs->title }} "> <br>

		<label>Lyrics</label> <textarea name='lyrics '> {{ $songs->lyrics }} </textarea>

		<input type="submit" name='submit' value="Update">
	</form>
@stop