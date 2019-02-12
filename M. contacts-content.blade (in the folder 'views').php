@extends('layouts.index')



@section('title')

	<title>Контакты</title>

@endsection



@section('header')

	<li> <a href=" {{ route('main_page') }} " target="_blank">Главная</a> </li>
	<li> <a href=" {{ route('filmsShow') }} " target="_blank">Фильмы</a> </li>
	<li> <a href=" {{ route('serialsShow') }} " target="_blank">Сериалы</a> </li>
	<li> <a href=" {{ route('films_rating') }} " target="_blank">Рейтинг фильмов</a> </li>
	<li> <a href=" {{ route('serials_rating') }} " target="_blank">Рейтинг сериалов</a> </li>
	<li> <a href=" {{ route('news') }} " target="_blank">Новости</a> </li>
	<li class="active"> <a href=" {{ route('contacts') }} " target="_blank">Контакты</a> </li>

@endsection


 
@section('content')

	<h1>Контакты</h1>
	<hr>
					
	<p>Оставьте Ваш отзыв о портале КиноМонстр</p>
		<form action="#">
			<div class="form-group">
				<input type="text" placeholder="Ваше имя" class="form-control input-lg">
			</div>
			<div class="form-group">
				<input type="email" placeholder="Ваш электронный адрес" class="form-control input-lg">
			</div>
			<div class="form-group">
				<textarea class="form-control"></textarea>
			</div>
			<button class="btn btn-lg btn-warning pull-right">Отправить</button>
		</form>
		
@endsection