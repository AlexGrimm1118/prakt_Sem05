@extends('layouts.app')

@section('content')
	
	<h1>{{ $data->title }}</h1>
	<p>
	{!! $data->content !!}

	@foreach ($attachdata as $item)
		<h2>{{ $item->title }} </h2>
		<p>{!! $item->content !!}</p>
	@endforeach
	
@endsection