<footer>
    <div class="footerTop">
        <nav>
            <ul class="middleMenu">
                @foreach ($key['linksFooter'] as $link)
                <li>
                    <img src="{{$link['icon']}}" />
                    <a href="#">{{$link['text']}}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
    <div class="footerBtm">
        <div class="container">
            <div class="footer-links">
                <h4>DC COMICS</h4>
                @foreach ($key['dcComicsLinks'] as $dcComicsLink)
                <ul>
                    <li>
                        <a href="#">{{$dcComicsLink}}</a>
                    </li>
                </ul>
                @endforeach
            </div> 
            <div class="footer-links">
                <h4>SHOP</h4>
                @foreach ($key['shopLinks'] as $shopLink)
                <ul>
                    <li>
                        <a href="#">{{$shopLink}}</a>
                    </li>
                </ul>
                @endforeach
            </div>
            <div class="footer-links">    
                <h4>DC</h4>
                @foreach ($key['dcLinks'] as $dcLink)
                <ul>
                    <li>
                        <a href="#">{{$dcLink}}</a>
                    </li>
                </ul>
                @endforeach
            </div>
            <div class="footer-links">
                <h4>SITES</h4>
                @foreach ($key['siteLinks'] as $siteLink)
                <ul>
                    <li>
                        <a href="#">{{$siteLink}}</a>
                    </li>
                </ul>
                @endforeach
            </div>
            <img src="{{asset('images/dc-logo-bg.png')}}" alt="dc footer logo" />
        </div>
    </div>
    <div class="pageEnding">
        <div class="container">
            <button>SIGN-UP NOW!</button>
            <div class="social-icons">
                <h4>FOLLOW US</h4>
                <ul>
                    @foreach ($key['icons'] as $icon)
                    <li>
                        <img src="{{$icon}}" />
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>