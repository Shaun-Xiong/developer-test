@extends('layouts.layout')
@section('content')

<h1>Movies</h1>
<div class="float-end">
  <a href="/" class="btn btn-primary me-2" tabindex="-1" role="button" aria-disabled="true">New Search</a>
  <a href="/" class="btn btn-outline-secondary" tabindex="-1" role="button" aria-disabled="true">Back to Home</a>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Year</th>
      <th scope="col">Poster</th>
    </tr>
  </thead>
  <tbody>
    @if(!is_null($movies))
      @foreach($movies as $movie)
      <tr>
        <td>{{$movie->Title}}</td>
        <td>{{$movie->Year}}</td>
        <td><img width="60px" src="{{$movie->Poster}}"></td>
      </tr>
      @endforeach
    @else
    <tr>
      <td>No result to show</td>
    </tr>
    @endif

  </tbody>
</table>
@endsection
