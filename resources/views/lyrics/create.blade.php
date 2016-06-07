@extends('layout.layout')

@section('subtitle')
	Add Song
@stop

@section('body')

	{!! Form::open(array('url' =>'lyrics/store', 'method' => 'patch')) !!}

		{!! Form::label('title', 'Title') !!}
		{!! Form::text('title') !!}
			<br>
		{!! Form::label('lyrics', 'Lyrics') !!}
		{!! Form::textarea('lyrics') !!}

		{!! Form::submit('Add') !!}

	{!! Form::close() !!}


	
@stop