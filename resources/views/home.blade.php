@extends('layouts.base')

@section('content')
<div class="container">
@foreach ($movies as $movie)
    <div class="card">
        <h2>Titolo</h2>
        <h4>{{ $movie->title }}</h4>
        <h2>Lingua</h2>
        <h4>{{ $movie->nationality }}</h4>
        <h2>data di uscita</h2>
        <h4>{{ $movie->date }}</h4>
        <h2>Voto</h2>
        <h4>{{ $movie->vote }}</h4>
    </div>
    @endforeach
</div>
@endsection