@extends('layouts.index')



@section('title')

	<title>Рейтинг сериалов</title>

@endsection



@section('header')

	<li> <a href=" {{ route('main_page') }} " target="_blank">Главная</a> </li>
	<li> <a href=" {{ route('filmsShow') }} " target="_blank">Фильмы</a> </li>
	<li> <a href=" {{ route('serialsShow') }} " target="_blank">Сериалы</a> </li>
	<li> <a href=" {{ route('films_rating') }} " target="_blank">Рейтинг фильмов</a> </li>
	<li class="active"> <a href=" {{ route('serials_rating') }} " target="_blank">Рейтинг сериалов</a> </li>
	<li> <a href=" {{ route('news') }} " target="_blank">Новости</a> </li>
	<li> <a href=" {{ route('contacts') }} " target="_blank">Контакты</a> </li>

@endsection


 
@section('content')

	<h1>Рейтинг сериалов</h1>
	<hr>
					
	<table class="table table-striped">
						
		<thead>
		
			<tr>
				<th></th>
				<th>Сериал</th>
				<th class="text-center">Год</th>
				<th class="text-center">Рейтинг</th>
			</tr>
		
		</thead>
	
		<tbody>	

			@foreach($movies as $movie)

				@if($movie->category_id == 2)
		
					<tr>
						<td class="col-lg-1 col-md-1 col-xs-2"><img class="img-responsive img-thumbnail" src=" {{ $movie->poster }} " alt=" {{ $movie->name }} "></td>
						<td class="vert-align"><a href=" {{ route('filmShow',['id'=>$movie->id]) }} " target="_blank"> {{ $movie->name }} </a></td>
						<td class="text-center vert-align"> {{ $movie->year }} </td>
						<td class="text-center vert-align"><span class="badge"> {{ $movie->rating }} </span></td>
					</tr>
					
				@endif
				
			@endforeach
							
		</tbody>
						
	</table>
	
@endsection