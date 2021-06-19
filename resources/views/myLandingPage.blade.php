@extends('layout.default_layout')

@section('page_title', 'My Landing Page')

@section('body_content')
    <header>
        <div class="row top">
            <div class="wrapper">
                <div>DC POWER&#8480; VISA &reg;</div>

                <div>ADDITIONAL DC SITES &#9660;</div>
            </div>
        </div>

        <nav class="row bottom">
            <div class="wrapper">
            
                <div class="logo-container">
                    <img src="{{asset('images/dc-logo.png')}}" alt="">
                </div>

                <ul>
                    <li>
                        <a href="">characters</a>
                    </li>

                    <li>
                        <a href="">comics</a>
                    </li>

                    <li>
                        <a href="">movies</a>
                    </li>

                    <li>
                        <a href="">tv</a>
                    </li>

                    <li>
                        <a href="">games</a>
                    </li>

                    <li>
                        <a href="">collectibles</a>
                    </li>

                    <li>
                        <a href="">videos</a>
                    </li>

                    <li>
                        <a href="">fans</a>
                    </li>

                    <li>
                        <a href="">news</a>
                    </li>

                    <li>
                        <a href="">shop &#9660;</a>
                    </li>

                </ul>
                
                <div class="searchbar">
                    <input type="text" placeholder='Search...'>
                    <i class=" fas fa-search"></i>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="row top hero">
            <img src="{{asset('images/jumbotron.jpg')}}" alt="">
        </section>

        <section class="row center">
            <div class="wrapper">

                @foreach($comicsList as $comics)
                    <div class="comics-card">

                        <div class="thumbnail-container">
                            <img src="{{ $comics['thumb'] }}" alt="">
                        </div>

                        <h4><a href="#">{{ $comics["title"] }}</a></h4>

                    </div>
                    
                @endforeach

            </div>
            <div class="btn-container">
                <button>Load more</button>
            </div>
        </section>

        <section class="row bottom">
            <div class="wrapper">
            
                <div class="card">

                    <div class="icon-container">
                        <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">
                    </div>

                    <a href="#">digital comics</a>
                </div>

                <div class="card">

                    <div class="icon-container">
                        <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="">
                    </div>


                    <a href="#">dc merchandise</a>
                </div>

                <div class="card">

                    <div class="icon-container">
                        <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="">
                    </div>


                    <a href="#">subscription</a>
                </div>

                <div class="card">

                    <div class="icon-container">
                        <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="">
                    </div>

                    <a href="#">comic shop locator</a>
                </div>

                <div class="card">

                    <div class="icon-container">
                        <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="">
                    </div>

                    <a href="#">dc power visa</a>
                </div>
            </div>

        </section>
    </main>

    <footer>
        <div class="row top">
            <div class="wrapper">
            
                <div class="col-6 left">

                    <div class="ul-container">
                        <ul>
                            <h3>dc comics</h3>
                            <li><a href="#">characters</a></li>
                            <li><a href="#">comics</a></li>
                            <li><a href="#">movies</a></li>
                            <li><a href="#">tv</a></li>
                            <li><a href="#">games</a></li>
                            <li><a href="#">videos</a></li>
                            <li><a href="#">news</a></li>
                        </ul>

                        <ul>
                            <h3>dc</h3>
                            <li><a href="#">terms of use</a></li>
                            <li><a href="#">privacy policy (new)</a></li>
                            <li><a href="#">ad choices</a></li>
                            <li><a href="#">advertising</a></li>
                            <li><a href="#">jobs</a></li>
                            <li><a href="#">subscriptions</a></li>
                            <li><a href="#">talent workshop</a></li>
                            <li><a href="#">CPSC certificates</a></li>
                            <li><a href="#">ratings</a></li>
                            <li><a href="#">shop help</a></li>
                            <li><a href="#">contact us</a></li>
                        </ul>

                        <ul>
                            <h3>sites</h3>
                            <li><a href="#">DC</a></li>
                            <li><a href="#">MAD magazine </a></li>
                            <li><a href="#">DC kids</a></li>
                            <li><a href="#">DC universe</a></li>
                            <li><a href="#">DC power visa</a></li>
                        </ul>

                        <ul>
                            <h3>shop</h3>
                            <li><a href="#">shop DC</a></li>
                            <li><a href="#">shop DC collectibles</a></li>
                        </ul>
                    </div>

                    <div class="disclaimer-container">
                        <p>All Site Content and &reg; 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved</p>
                        <p><a href="#">Cookie Settings</a></p>
                    </div>

                </div>

                <div class="col-6 right">

                    <div class="big-logo-container">
                        <img src="{{ asset('images/dc-logo-bg.png') }}" alt="">
                    </div>

                </div>
            </div>
        </div>

        <div class="row bottom contacts">
            <div class="wrapper">

                <div class="left">
                    <button>
                        <h3>sign-up now!</h3>
                    </button>
                </div>

                <div class="right">
                    <h3>follow us</h3>

                    <div class="icon-container">
                        <img src="{{ asset('images/footer-facebook.png') }}" alt="">
                    </div>

                    <div class="icon-container">
                        <img src="{{ asset('images/footer-twitter.png') }}" alt="">
                    </div>

                    <div class="icon-container">
                        <img src="{{ asset('images/footer-youtube.png') }}" alt="">
                    </div>

                    <div class="icon-container">
                        <img src="{{ asset('images/footer-pinterest.png') }}" alt="">
                    </div>

                    <div class="icon-container">
                        <img src="{{ asset('images/footer-periscope.png') }}" alt="">
                    </div>
                </div>

            </div>
        </div>
    
    </footer>
@endsection