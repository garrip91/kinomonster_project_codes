@extends('layouts.index')



@section('title')

	<title>Новости</title>

@endsection



@section('header')

	<li> <a href=" {{ route('main_page') }} " target="_blank">Главная</a> </li>
	<li> <a href=" {{ route('filmsShow') }} " target="_blank">Фильмы</a> </li>
	<li> <a href=" {{ route('serialsShow') }} " target="_blank">Сериалы</a> </li>
	<li> <a href=" {{ route('films_rating') }} " target="_blank">Рейтинг фильмов</a> </li>
	<li> <a href=" {{ route('serials_rating') }} " target="_blank">Рейтинг сериалов</a> </li>
	<li class="active"> <a href=" {{ route('news') }} " target="_blank">Новости</a> </li>
	<li> <a href=" {{ route('contacts') }} " target="_blank">Контакты</a> </li>

@endsection


 
@section('content')

	<h1>Новости</h1>
	<hr>
					
	@foreach($news as $new)
	
		<a href=" {{ route('informationShow',['id'=>$new->id]) }} " target="_blank"> <h3> {{ $new->title }} </h3> </a>
		<hr>
					
		<p> {{ $new->slug }} </p>
					
		<a href=" {{ route('informationShow',['id'=>$new->id]) }} " target="_blank" class="btn btn-warning pull-right">читать</a>
		
		<div class="margin-8"></div>
	
	@endforeach
		
@endsection