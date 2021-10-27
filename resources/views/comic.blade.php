@extends("layouts.main");

@section("contenuto")

<h1>{{$comics['title']}}</h1>
    <img src="{{$comics['thumb']}}" alt="immagine comic">

@dump($comics)

@endsection