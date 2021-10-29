@extends("layouts.main")

@section("contenuto")

@foreach ($fumetti as $fumetto)

<div class="comics_card">

    <a class="link_fumetto" href='{{url("/comic/$loop->index")}}'>
        {{$fumetto['title']}}
    </a>

</div>


@endforeach


@endsection