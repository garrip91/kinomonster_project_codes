@extends('layouts.index')



@section('title')

	<title>Фильмы</title>

@endsection



@section('header')

	<li> <a href=" {{ route('main_page') }} " target="_blank">Главная</a> </li>
	<li class="active"> <a href=" {{ route('filmsShow') }} " target="_blank">Фильмы</a> </li>
	<li> <a href=" {{ route('serialsShow') }} " target="_blank">Сериалы</a> </li>
	<li> <a href=" {{ route('films_rating') }} " target="_blank">Рейтинг фильмов</a> </li>
	<li> <a href=" {{ route('serials_rating') }} " target="_blank">Рейтинг сериалов</a> </li>
	<li> <a href=" {{ route('news') }} " target="_blank">Новости</a> </li>
	<li> <a href=" {{ route('contacts') }} " target="_blank">Контакты</a> </li>

@endsection



@section('content')
		
	<h1>Фильмы</h1>
	<hr>
					
	@foreach($movies as $movie)

		@if($movie->category_id == 1)
					
			<div class="row">
				<div class="well clearfix">
					<div class="col-lg-3 col-md-2 text-center">
						<img class="img-thumbnail" src=" {{ $movie->poster }} " alt=" {{ $movie->name }} ">
						<p> {{ $movie->name }} </p>
					</div>
					<div class="col-lg-9 col-md-10">
						<p> {{ $movie->decsription }} </p>
					</div>
					<div class="col-lg-12">
						<a href=" {{ route('filmShow',['id'=>$movie->id]) }} " target="_blank" class="btn btn-lg btn-warning pull-right">Подробнее</a>
					</div>
				</div>
			</div>
		
		@endif
	
	@endforeach          
	
@endsection