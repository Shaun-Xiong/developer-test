<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index($movies = null){
      return view('movies.index', [
        'movies' => $movies,
      ]);
    }

    public function search(){
      $search_tring = request('search_string');
      error_log($search_tring);

      $apikey = 'f14f526a';
      $endpoint = 'http://www.omdbapi.com/?apikey='.$apikey.'&type=movie&s='.$search_tring;
      error_log($endpoint);
      $data = Http::get($endpoint);
      $result = json_decode($data);
      $movies = $result->Search;

      return $this->index($movies);
    }
}
