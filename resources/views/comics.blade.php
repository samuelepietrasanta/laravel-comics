@extends("layouts.main")

@section("contenuto")

<div class="cards-container">



@foreach ($fumetti as $fumetto)

    <div class="comics_card">

        <a class="link_fumetto" href='{{url("/comic/$loop->index")}}'>
            <h4>{{$fumetto['title']}}</h4>
        </a>
        <a class="immagine_fumetto" href='{{url("/comic/$loop->index")}}'>
            <img src="{{$fumetto['thumb']}}" alt="error">
        </a>

    </div>


@endforeach

</div>



@endsection