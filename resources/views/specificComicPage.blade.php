@extends('layout.default_layout')

@section('page_title', 'My comic of choice')

@section('main_content')

<div class="stripe">
    <div class="wrapper">
        <div class="img-container">
        
            <button class="top-btn">COMIC BOOK</button>
            <img src="{{ $comic['thumb'] }}" alt="">
            <button class="bottom-btn">VIEW GALLERY</button>

        </div>
    </div>
</div>

<div class="comic-specifics">
    <div class="wrapper">

        <div class="col-8">

            <h1>{{ $comic['title'] }}</h1>

            <div class="availability">
                <div class="col-9">

                    <p>U.S. Price:
                        <span>{{ $comic['price'] }}</span>
                    </p>

                    <p>AVAILABLE</p>
                </div>

                <div class="col-3">

                    <select name="" id="">
                        <option value="">Check Availability</option>
                    </select>

                </div>
            </div>

            <div class="comic-description">
                <p>{{ $comic['description'] }}</p>
            </div>

        </div>

        <div class="col-4">
            <div class="advertisement">
                <h5>ADVERTISEMENT</h5>
                
                <img src="{{ asset('images/adv.jpg') }}" alt="">
            </div>
        </div>

    </div>
</div>

<div class="additional-info">
    <div class="wrapper">
    
        <div class="col-8">
            <h2>Talent</h2>

            <div class="line">
                <span class="col-4">Art by:</span>

                <span class="col-8">
                    @foreach($comic['artists'] as  $artist)
                        <a href="#">{{ $artist }}</a>
                    @endforeach
                </span>
                    
            </div>

            <div class="line">
                <span class="col-4">Written by:</span>

                <span class="col-8">
                    @foreach($comic['writers'] as $writer)
                        <a href="#">{{ $writer }}</a>
                    @endforeach
                </span>

            </div>

        </div>

        <div class="col-4">
            <h2>Specs</h2>
            
            <div class="line">

                <span class="col-5">Series:</span>
                <span class="col-7">
                    <a href="">ACTION COMICS</a>
                </span>
            </div>

            <div class="line">

                <span class="col-5">U.S. Price:</span>
                <span class="col-7">{{ $comic['price'] }}</span>

            </div>

            <div class="line">
                <span class="col-5">On Sale Date:</span>
                <span class="col-7">{{ $comic['sale_date'] }}</span>
            </div>
        </div>

    </div>

    <div class="utility-links">
        <div class="wrapper">

            <div class="col-3">
                <h5>digital comics</h5>

                <div class="icon-container">
                    <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="">
                </div>
            </div>

            <div class="col-3">
                <h5>shop dc</h5>

                <div class="icon-container">
                    <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="">
                </div>
            </div>

            <div class="col-3">
                <h5>comic shop locator</h5>

                <div class="icon-container">
                    <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="">
                </div>
            </div>

            <div class="col-3">
                <h5>subscriptions</h5>

                <div class="icon-container">
                    <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="">
                </div>

            </div>

        </div>

    </div>
</div>


@endsection
