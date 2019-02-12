<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

use App\Movie;

use App\Information;

class IndexController extends Controller
{
	
	
	
	public function main_page() {
			
		$movies = Movie::all(); 
		
		$news = Information::all();
		
		return view('main_page')->with(['movies' => $movies, 'news' => $news]);
		
	}
	
	
	
	public function films() {
		
		$movies = Movie::all();
		
		$news = Information::all();
		
		return view('films-content')->with(['movies' => $movies, 'news' => $news]);
		
	}
	
	public function film($id) {
		
		$movies = Movie::all();
		
		$movie = Movie::all()->where('id', $id)->first();
		
		$news = Information::all();

		return view('film-content')->with(['movies' => $movies, 'movie' => $movie, 'news' => $news]);
		
	}
	
	
	
	public function serials() {
		
		$movies = Movie::all();
		
		$news = Information::all();
		
		return view('serials-content')->with(['movies' => $movies, 'news' => $news]);
		
	}
	
	public function serial($id) {
		
		$movies = Movie::all();
		
		$movie = Movie::all()->where('id', $id)->first();
		
		$news = Information::all();

		return view('serial-content')->with(['movies' => $movies, 'movie' => $movie, 'news' => $news]);
		
	}
	
	
	
	public function films_rating() {
		
		$movies = Movie::all();
		
		$news = Information::all();
		
		return view('films_rating-content')->with(['movies' => $movies, 'news' => $news]);
		
	}
	
	public function serials_rating() {
		
		$movies = Movie::all();
		
		$news = Information::all();
		
		return view('serials_rating-content')->with(['movies' => $movies, 'news' => $news]);
		
	}
	
	
	
	public function news() {
		
		$movies = Movie::all();
		
		$news = Information::all();
		
		return view('news-content')->with(['movies' => $movies, 'news' => $news]);
		
	}
	
	public function information($id) {
		
		$movies = Movie::all();
		
		$news = Information::all();
		
		$information = Information::all()->where('id', $id)->first();
		
		return view('information-content')->with(['movies' => $movies, 'news' => $news, 'information' => $information]);
		
	}
	
	
	
	public function contacts() {
		
		$movies = Movie::all();
		
		$news = Information::all();
		
		return view('contacts-content')->with(['movies' => $movies, 'news' => $news]);
		
	}
	
} 