<div class="footer_wrapper">

    <ul class="footer_list">
        @foreach ($lista_footer as $footer_menu_element)
        <li>
            <h1>{{$footer_menu_element['title']}}</h1>  
    
    
            @foreach ($footer_menu_element['items'] as $single_footer_item)
    
            <p>{{$single_footer_item}}</p>
    
            @endforeach 
            
    
        </li>
        @endforeach
    </ul>

    <img src="{{asset('images/dc-logo-bg.png')}}" alt="errore" class="logo_footer">

</div>