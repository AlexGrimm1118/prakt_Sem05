@extends('layouts.app')

@section('content')
	
	<h1>{{ $data->title }}</h1>
	<p>
	{!! $data->content !!}

	@foreach ($attachdata as $item)
	<div class="cherta">	
		<h2>{{ $item->title }} </h2>
		<img src="images/asset/{{$item->img}}">
		<p>
			{{ $item->content }}
			(<a href="{{ $item->guid }}" target="_blank">Подробнее...</a>)
		</p>
	</div>
	@endforeach

@endsection