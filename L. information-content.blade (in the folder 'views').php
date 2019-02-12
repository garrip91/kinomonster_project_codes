@extends('layouts.index')



@section('title')

	<title> {{ $information->title }} </title>

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

	<h1> {{ $information->title }} </h1>
	<hr>
					
	<p> {{ $information->text }} </p>
		
@endsection