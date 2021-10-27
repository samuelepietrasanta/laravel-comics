@extends("layouts.main")

@section("contenuto")

@foreach ($fumetti as $fumetto)

<a class="singolo_fumetto" href='{{url("/comic/$loop->index")}}'>
    {{$fumetto['title']}}

</a>
@endforeach


@endsection