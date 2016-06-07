@extends('layout.layout')



@section('subtitle')
	List of Songs
@stop

@section('body')
	<ul class="list-group">
		@foreach($songs as $song)
		<li class="list-group-item"> <a href="/lyrics/{{$song->slug}}"> {{ $song->title }} </a> </li>
		@endforeach

	</ul>
@stop
