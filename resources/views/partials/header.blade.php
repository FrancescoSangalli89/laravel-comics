<header>
    <div class="container">
        <div class="LogoContainer">
            <img class="DcLogo" src="{{asset('images/dc-logo.png')}}" alt="dc logo">
        </div>
        <nav>
            <ul class="HeaderMenu">
                @foreach ($key['linksHeader'] as $link)
                    <li>
                        <a href="{{$link['url']}}" class="{{Request::route()->getName() == $link['text']?'active':''}}">{{$link['text']}}</a>
                    </li>
                @endforeach    
            </ul>
        </nav>
    </div>
</header>