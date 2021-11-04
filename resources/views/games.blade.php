@extends("layouts.main")

@section("contenuto")

<div class="games_container">

    @foreach ($giochi as $gioco)
    <div class="single_game">
        <a href='{{url("/game/$loop->index")}}'>
            <h2 class="game_text">
                    {{$gioco['title']}}
            </h2>
        </a>    
        <img src="{{$gioco['url']}}" alt="">


    </div>
    
    
    @endforeach

</div>



@endsection