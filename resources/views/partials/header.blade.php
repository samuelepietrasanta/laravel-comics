<div class="header_container">
   

    <ul class="header_menu_list">
        <img src="{{asset('images/dc-logo.png')}}" alt="non lo trovo">
        @foreach ($lista_header as $menu_element)
            <li><a href="{{route($menu_element['route'])}}"><b>{{$menu_element['text']}}</b></a></li>
        @endforeach
        <input type="search" placeholder="Search">
        <button class="header_button"><i class="fas fa-search"></i></button>
    </ul>


    <div class="header_image">
        <img src="{{asset('images/jumbotron.jpg')}}" alt="">
    </div>

</div>