@extends('layouts.app')

@section('content')
	
	<h1>{{ $data->title }}</h1>
	<p>
	{!! $data->content !!}
	
	@foreach ($attachdata as $item)
		<h2>{{ $item->title }} </h2>
		<img src="images/asset/{{$item->img}}">
		<p>{{ $item->content }}</p>
		<a href="{{ $item->guid }}" target="_blank">Подробнее: {{ $item->title }}</a>
	@endforeach	

@endsection