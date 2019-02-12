@extends('layouts.index')



@section('title')

	<title> {{ $movie->name }} </title>

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

	<div class="row">

			<h1> {{ $movie->name }} </h1>
			<hr>
					
			<div class="embed-responsive embed-responsive-16by9">	
				<iframe class="embed-responsive-item" src=" {{ $movie->player_code }} " frameborder="0" allowfullscreen></iframe>
			</div>

			<div class="well info-block text-center">
				Год: <span class="badge"> {{ $movie->year }} </span>
				Рейтинг: <span class="badge"> {{ $movie->rating }} </span>
				Режиссёр(-ы): <span class="badge"> {{ $movie->producer }} </span>
			</div>
					
			<div class="margin-8"></div>
					
			<h2>Описание фильма "{{ $movie->name }}" </h2>
			<hr>
					
			<div class="well">
				<p> {{ $movie->description }} </p>			
			</div>
					
			<div class="margin-8"></div>
					
			<a href="#"><h3>Как снимали фильм "{{ $movie->name }}" </h3></a>
			<hr>

			<p>
						
				<p>В качестве оператора был нанят Хойте Ван Хойтема, поскольку Уолли Пфистер был занят работой над своим режиссёрским дебютом «Превосходство».</p>
						
				<p>«Интерстеллар» снят в сочетании анаморфной 35-мм плёнки и формата IMAX.</p>
						
				<p>В январе 2013 года Кристофер Нолан начал переговоры с Paramount и Warner Bros., чтобы принять участие в проекте в качестве режиссёра. В марте его участие было утверждено. Съёмки проходили в последнем квартале 2013 года в провинции Альберта, Канада, в южной части Исландии, на леднике Снайфедльсйёкюдль и в деревне Киркьюбайярклёйстюр, а также в Лос-Анджелесе.</p>
						
				<p>14 декабря 2013 года был выпущен первый тизер к фильму.</p>
						
				<p>17 мая 2014 года вышел официальный трейлер к фильму.</p>
						
				<p>30 июля 2014 года вышел второй официальный трейлер к фильму. Эксклюзивный просмотр был доступен исключительно на официальном сайте фильма после ввода секретной комбинации цифр, которую нужно было разгадать из созвездия в звёздном небе. Спустя сутки ролик стал доступен на YouTube.</p>
						
			</p>

			<a href="#" class="btn btn-warning pull-right">читать</a>
					
			<div class="margin-8"></div>
					
			<h2>Отзывы о фильме "{{ $movie->name }}" </h2>
			<hr>
					
			<div class="panel panel-info">
				<div class="panel-heading"><i class="glyphicon glyphicon-user"></i><span>Сергей</span></div>
				<div class="panel-body">Отличный фильм, 3 часа пролетели незаметно.</div>
			</div>
					
			<div class="panel panel-info">
				<div class="panel-heading"><i class="glyphicon glyphicon-user"></i><span>Дмитрий</span></div>
				<div class="panel-body">После фильма Начало, я с нетерпением ждал еще работ от Кристофера Нолана. Интерстеллар меня впечатлил</div>
			</div>
					
			<div class="panel panel-info">
				<div class="panel-heading"><i class="glyphicon glyphicon-user"></i><span>Игорь</span></div>
				<div class="panel-body">Котька Леночка - чудик!!))):-Р</div>
			</div>
					
			<form action="#">
				<div class="form-group">
					<input type="text" placeholder="Ваше имя" class="form-control input-lg">
				</div>
				<div class="form-group">
					<textarea class="form-control"></textarea>
				</div>
				<button class="btn btn-lg btn-warning pull-right">Отправить</button>
			</form>  

	</div>                                           
	
@endsection