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

    <main></main>
    <footer></footer>
@endsection