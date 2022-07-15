@extends('layouts.layout')
@section('content')

<div class="row">
  <h1>Welcom to Movie Hub!</h1>
  <form action="/movies" method="post" class="row g-3">
  @csrf
    <div class="col-auto">
      <input type="text" class="form-control" id="search_string" name="search_string" placeholder="Type to search a movie">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-3">Search</button>
    </div>
  </form>
</div>

@endsection
