@extends('layouts.index')



@section('title')

	<title>Киномонстер Bootstrap</title>

@endsection



@section('header')

	<li class="active"> <a href=" {{ route('main_page') }} " target="_blank">Главная</a> </li>
	<li> <a href=" {{ route('filmsShow') }} " target="_blank">Фильмы</a> </li>
	<li> <a href=" {{ route('serialsShow') }} " target="_blank">Сериалы</a> </li>
	<li> <a href=" {{ route('films_rating') }} " target="_blank">Рейтинг фильмов</a> </li>
	<li> <a href=" {{ route('serials_rating') }} " target="_blank">Рейтинг сериалов</a> </li>
	<li> <a href=" {{ route('news') }} " target="_blank">Новости</a> </li>
	<li> <a href=" {{ route('contacts') }} " target="_blank">Контакты</a> </li>

@endsection



@section('content')

	<h2>Новые фильмы</h2>
	<hr>                 

	<div class="row">

		@foreach($movies as $movie)
		
			@if($movie->category_id == 1)		
		
				<div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
					<a href=" {{ route('filmShow',['id'=>$movie->id]) }} " target="_blank"> <img src=" {{ $movie->poster }} " alt=" {{ $movie->name }} "> </a>	
					<div class="film_label"> {{ $movie->name }} </div>
				</div>

			@endif		
		
		@endforeach
					
	</div>                                               
	
	

	<div class="margin-8"></div>						 


					
	<h2>Новые сериалы</h2>
	<hr>                  
					
	<div class="row">
					
		@foreach($movies as $movie)
		
			@if($movie->category_id == 2)		
		
				<div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
					<a href=" {{ route('serialShow',['id'=>$movie->id]) }} " target="_blank"> <img src=" {{ $movie->poster }} " alt=" {{ $movie->name }} "> </a>	
					<div class="film_label"> {{ $movie->name }} </div>
				</div>

			@endif		
		
		@endforeach
						
	</div>											   
					
@endsection