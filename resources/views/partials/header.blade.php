<div class="header_container">
    <img class="jumbo" src="{{asset('images/jumbotron.jpg')}}" alt="Errore">

    <ul class="header_menu_list">
        @foreach ($lista_header as $menu_element)
            <li><a href="{{route($menu_element['route'])}}">{{$menu_element['text']}}</a></li>
        @endforeach

    </ul>

</div>