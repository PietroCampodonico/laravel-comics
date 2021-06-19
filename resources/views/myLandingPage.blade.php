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
    <footer></footer>
@endsection