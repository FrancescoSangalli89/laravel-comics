<header>
    <div class="container">
        <div class="LogoContainer">
            <img class="DcLogo" src="{{asset('images/dc-logo.png')}}" alt="dc logo">
        </div>
        <nav>
            <ul class="HeaderMenu">
                @foreach ($linksHeader as $link)
                    <li>
                        <a href="#" class="link.active?'active':''">{{$link}}</a>
                    </li>
                @endforeach    
            </ul>
        </nav>
    </div>
</header>