@extends('layout.layout')

@section('subtitle')
	Show Song
@stop

@section('body')
	
	<h4>{{ $songs->title }}</h4>

	<p> {{ $songs->lyrics }} </p>	


@stop