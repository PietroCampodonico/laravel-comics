@extends('layout.default_layout')

@section('page_title', 'My Landing Page')

@section('main_content')
   
    <section class="row top">
        <div class="wrapper">

            <button>
                <h1>current series</h1>
            </button>

            @foreach($comicsList as $key => $comics)
                <div class="comics-card">

                    <div class="thumbnail-container">
                        <a href="{{ route('specific-comic-page', ['index' => $key]) }}">
                            <img src="{{ $comics['thumb'] }}" alt="">
                        </a>
                    </div>

                    <h4><a href="{{ route('specific-comic-page', ['index' => $key]) }}">{{ $comics["title"] }}</a></h4>
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


@endsection