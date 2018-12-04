@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="center-content">
            <p>
                @if( $citazione = get_field('citazione') ) {!! $citazione !!} @endif
            </p>
            <h1 class="center-content"> {!! get_the_title() !!} </h1>
            <div class="col-sm-12 col-md-6 slider-policardia">
                <div class="owl-carousel owl-theme owl-carousel-home">
                    <div class="item"><img src="{{get_stylesheet_directory_uri()}}\assets\images\policardia\policardi4.png" alt="" class="w-75 bw"></div>
                    <div class="item"><img src="{{get_stylesheet_directory_uri()}}\assets\images\policardia\policardi4.png" alt="" class="w-75 bw"></div>
                    <div class="item"><img src="{{get_stylesheet_directory_uri()}}\assets\images\policardia\policardi4.png" alt="" class="w-75 bw"></div>
                    <div class="item"><h4>4</h4></div>
                    <div class="item"><h4>5</h4></div>
                    <div class="item"><h4>6</h4></div>
                    <div class="item"><h4>7</h4></div>
                    <div class="item"><h4>8</h4></div>
                    <div class="item"><h4>9</h4></div>
                    <div class="item"><h4>10</h4></div>
                    <div class="item"><h4>11</h4></div>
                    <div class="item"><h4>12</h4></div>
                </div>
            </div>
            <p> {!! get_the_content() !!} </p>
            <h2 class="center-content"> ANDREA ELODIE MORETTI </h2>
            <img src="{{get_stylesheet_directory_uri()}}\assets\images\policardia\policardi4.png" alt="Andrea Elodie Moretti" class="w-25">
            <p> @if( $descrizione = get_field('andrea_descrizione') ) {!! $descrizione !!} </p> @endif
            <div class="row end_page_buttons">
                <div class="col-sm-12 col-md-4">
                    <a href="{{ get_permalink(11) }}"><img src="{{get_stylesheet_directory_uri()}}\assets\images\policardia\policardi4.png" alt="Centro di Creazione Internazionale" class="bw width-250"></a>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a href="{{ get_permalink(9) }}"><img src="{{get_stylesheet_directory_uri()}}\assets\images\policardia\policardi4.png" alt="La Compagnia" class="bw width-250"></a>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a href="{{ get_permalink(13) }}"><img src="{{get_stylesheet_directory_uri()}}\assets\images\policardia\policardi4.png" alt="La Formazione" class="bw width-250"></a>
                </div>
            </div>
        </div> {{-- !center --}}
    </div> {{-- !container --}}
@endsection