@extends("layouts.main")

@section("contenuto")

    <h1 class="comic_title">{{$comics['title']}}</h1>
    <div class="single_comic_price">
        <h3>Price: {{$comics['price']}}</h3>
    </div>
    <div class="single_comic_section">
        <div class="single_comic_image">
            <img src="{{$comics['thumb']}}" alt="immagine comic">
        </div>
        <div class="single_comic_description">
            <p>{{$comics['description']}}</p>
            <button>BUY NOW</button>
        </div>
    </div>

@endsection