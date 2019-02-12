@extends('layouts.app')



@section('login')

	<div class="panel panel-info">
						
		<div class="panel-heading">
			<div class="sidebar-header">Вход</div>
		</div>
						
		<div class="panel-body">
			<form action="#" role="form">
				<div class="form-group">
					<input type="text" class="form-control input-lg" placeholder="Логин">
				</div>
				<div class="form-group">
					<input type="password" class="form-control input-lg" placeholder="Пароль">
				</div>
				<button type="submit" class="btn btn-warning pull-right">Вход</button>
			</form>
		</div>
						
	</div>

@endsection



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection