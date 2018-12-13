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
                    @php
                    $upload = wp_upload_dir()['baseurl'] . '/2018/12/';
                    @endphp
                    @php echo '<div class="item"><img src="'.$upload.'policardia1.png" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'policardia2.png" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'policardia3.png" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'policardi4.png" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'policardia5.png" alt="policardia slider" class="bw width-250"></div>'; @endphp
                </div>
            </div>
            <p> {!! $post->post_content !!} </p>
            <h2 class="center-content"> ANDREA ELODIE MORETTI </h2>
            <img src="@asset('images/andrea_moretti.png')" alt="Andrea Elodie Moretti" class="width-250">
            <p> @if( $descrizione = get_field('andrea_descrizione') ) {!! $descrizione !!} </p> @endif
            <div class="row end_page_buttons">
                <div class="col-sm-4 col-md-4">
                    <a href="{{ get_permalink(11) }}"><img src="@asset('images/tasto_cci.png')" alt="Centro di Creazione Internazionale" class="bw w-75 mt-1"></a>
                </div>
                <div class="col-sm-4 col-md-4">
                    <a href="{{ get_permalink(9) }}"><img src="@asset('images/tasto_la_compagnia.png')" alt="La Compagnia" class="bw w-75 mt-1"></a>
                </div>
                <div class="col-sm-4 col-md-4">
                    <a href="{{ get_permalink(13) }}"><img src="@asset('images/tasto_formazione.png')" alt="La Formazione" class="bw w-75 mt-1"></a>
                </div>
            </div>
        </div> {{-- !center --}}
    </div> {{-- !container --}}
@endsection