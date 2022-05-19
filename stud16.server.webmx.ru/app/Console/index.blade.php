@extends('layouts.app')

@section('content')
	
	<h1>Консоль управления</h1>
	<h2>Редактирование данных</h2>
	
	<!-- выводим записи верхнего уровня, добавляем ссылку на изменение -->
	@foreach ($data as $item)
		<h4>
			{{ $item->title }} (<a href="/console/update/{{ $item->id }}">Изменить</a>) 
		</h4>
	@endforeach

@endsection