<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	@yield('title')
	
	<link rel="shortcut icon" href=" {{ asset('img/favicon.ico') }} ">

    <!-- Bootstrap -->
    <link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css') }} ">
	<link rel="stylesheet" href=" {{ asset('css/style.css') }} ">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
	<div class="container-fluid">
		
		<div class="row">
		
			<nav role="navigation" class="navbar navbar-inverse">
				
				<div class="container">
				
					<div class="navbar-header header">
					
						<div class="container">
						
							<div class="row">
							
								<div class="col-lg-12">
									<h1><a href=" {{ route('main_page') }} " target="_blank">КиноМонстр</a></h1>
									<p>Кино - наша страсть!</p>
								</div>
							
							</div>
						
						</div>
					
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
						
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						
						</button>
					
					</div>
					
					<div class="collapse navbar-collapse navbar-right" id="navbarCollapse">
					
						<ul class="nav nav-pills">

							@yield('header')
						
						</ul>
						
					</div>	
					
				</div>
			
			</nav>
		
		</div>
	
	</div>
	
	@yield('films')
	
	<div class="wrapper">
	
		<div class="container">
		
			<div class="row">
				
				<div class="col-lg-9 col-lg-push-3">
					
					<form action="#" role="search" class="visible-xs">
						<div class="form-group">
							<div class="input-group">
								<input type="search" class="form-control input-lg" placeholder="Ваш запрос">
								<div class="input-group-btn">
									<button type="submit" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-search"></i></button>
								</div>
							</div>
						</div>
					</form>
					
				@yield('content')				
					
				</div>
				
				<div class="col-lg-3 col-lg-pull-9">
					
					<div class="panel panel-info hidden-xs">
						
						<div class="panel-heading">
							<div class="sidebar-header">Поиск</div>
						</div>
						
						<div class="panel-body">
							<form action="#" role="search">
								<div class="form-group">
									<div class="input-group">
										<input type="search" class="form-control input-lg" placeholder="Ваш запрос">
										<div class="input-group-btn">
											<button type="submit" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-search"></i></button>
										</div>
									</div>
								</div>
							</form>
						</div>
						
					</div>
					
					<div class="panel panel-info">
						
						<div class="panel-heading">
							<div class="sidebar-header">Вход</div>
						</div>
						
						<div class="panel-body">
							<form action=" {{ route('login') }} " target="_blank" role="form" method="post">
							{!! csrf_field() !!}
							
								<div class="form-group">
										<input type="text" class="form-control input-lg" placeholder="Логин" name="username">
								</div>
								<div class="form-group">
									<input type="password" class="form-control input-lg" placeholder="Пароль" name="password">
								</div>
								<button type="submit" class="btn btn-warning pull-right">Вход</button>
							</form>
						</div>
						
					</div>					
					
					<div class="panel panel-info">					
						
						<div class="panel-heading">
							<div class="sidebar-header">Новости</div>
						</div>
						
						<div class="panel-body">
							
							@if(!empty($news))	
								
									@foreach($news as $new)   
								
										<p> <a href=" {{ route('informationShow',['id'=>$new->id]) }} " target="_blank"> {{ $new->title }} </a> </p>
							
									@endforeach
							
							@endif						
						
						</div>
					
					</div>							
					
					<div class="panel panel-info">
						
						<div class="panel-heading">
							<div class="sidebar-header">Рейтинг фильмов</div>
						</div>
						
						<div class="panel-body">
							
							<ul class="list-group">					
	
								@if(!empty($movies))	
	
									@foreach($movies as $movie)                

										@if($movie->category_id == 1)                
                                
											<li class="list-group-item list-group-warning">
												<span class="badge"> {{ $movie->rating }} </span>
												<a href=" {{ route('filmShow',['id'=>$movie->id]) }} " target="_blank"> {{ $movie->name }} </a>
											</li>
                                        
										@endif
                                    
									@endforeach
	
								@endif	
							
							</ul>
							
						</div>
						
					</div>
					
					<div class="panel panel-info">
						
						<div class="panel-heading">
							<div class="sidebar-header">Рейтинг сериалов</div>
						</div>
						
						<div class="panel-body">
							
							<ul class="list-group">
	
								@if(!empty($movies))	
	
									@foreach($movies as $movie)                

										@if($movie->category_id == 2)                
                                
											<li class="list-group-item list-group-warning">
												<span class="badge"> {{ $movie->rating }} </span>
												<a href=" {{ route('filmShow',['id'=>$movie->id]) }} " target="_blank"> {{ $movie->name }} </a>
											</li>
                                        
										@endif
                                    
									@endforeach
	
								@endif	
							
							</ul>
							
						</div>
					
					</div>					
					
				</div>
				
			</div>
				
		</div>
	
		<div class="clear"></div>
	
	</div>
	
	<footer>
	
		<div class="container">
			<p class="text-center"> <a href="http://ru.wh-db.com">WH-DB.COM</a> </p>
		</div>
	
	</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>