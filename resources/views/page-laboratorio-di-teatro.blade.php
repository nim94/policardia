@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="center-content">
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
            <div class="row">
                <div class="col-12">
                    <img src="@asset('images/mappa-formazione.png')" alt="mappa" class="mappa">
                </div>
            </div>
            <div class="row row-sedi">
                <div class="sede col-sm-12 col-md-4">
                    <h3 class="titolo-sede">Massa-Carrara e La Spezia</h3>
                    <p class="descrizione-sede">
                        I nostri laboratori sono presenti nei comuni di <strong>Massa</strong>, <strong>Carrara</strong> e <strong>La Spezia</strong>
                    </p>
                    <div class="sede-contatti">
                        <img src="@asset('images/Cell.png')" alt="cellulare">
                        <a href="tel:3341444065">Beatrice: 3341444065</a>
                    </div>
                    <div class="sede-contatti">
                        <img src="@asset('images/email.png')" alt="email">
                        <a href="mailto:massacarrara.policardiateatro@gmail.com">massacarrara.policardiateatro@gmail.com</a>
                    </div>
                </div>{{-- fine sede 1 --}}
                <div class="col-0 col-md-2"></div>
                <div class="sede col-sm-12 col-md-4">
                    <h3 class="titolo-sede">Versilia</h3>
                    <p class="descrizione-sede">
                        I nostri laboratori sono presenti nei comuni di <strong>Viareggio</strong>, <strong>Camaiore</strong>,<strong>Massarosa</strong> e <strong>Pietrasanta</strong>
                    </p>
                    <div class="sede-contatti">
                        <img src="@asset('images/Cell.png')" alt="cellulare">
                        <a href="tel:3341929572">Andrea: 3341929572</a>
                    </div>
                    <div class="sede-contatti">
                        <img src="@asset('images/email.png')" alt="email">
                        <a href="mailto:versilia.policardiateatro@gmail.com">versilia.policardiateatro@gmail.com</a>
                    </div>
                </div>{{-- fine sede 2 --}}
                <div class="sede col-sm-12 col-md-4">
                    <h3 class="titolo-sede">Lucca</h3>
                    <p class="descrizione-sede">
                        I nostri laboratori sono presenti nel comune di <strong>Lucca</strong>
                    </p>
                    <div class="sede-contatti">
                        <img src="@asset('images/Cell.png')" alt="cellulare">
                        <a href="tel:3402868993">Pietro: 3402868993</a>
                    </div>
                    <div class="sede-contatti">
                        <img src="@asset('images/email.png')" alt="email">
                        <a href="mailto:lucca.policardiateatro@gmail.com">lucca.policardiateatro@gmail.com</a>
                    </div>
                </div>{{-- fine sede 3 --}}
                <div class="col-0 col-md-2"></div>
                <div class="sede col-sm-12 col-md-4">
                    <h3 class="titolo-sede">Pisa</h3>
                    <p class="descrizione-sede">
                        I nostri laboratori sono presenti nei comuni di <strong>Pisa</strong> e <strong>Vicopisano</strong>
                    </p>
                    <div class="sede-contatti">
                        <img src="@asset('images/Cell.png')" alt="cellulare">
                        <a href="tel:3402868993">Pietro: 3402868993</a>
                    </div>
                    <div class="sede-contatti">
                        <img src="@asset('images/email.png')" alt="email">
                        <a href="mailto:pisa.policardiateatro@gmail.com">pisa.policardiateatro@gmail.com</a>
                    </div>
                </div>{{-- fine sede 4 --}}
            </div>
            <div class="row">
                <div class="col-12">
                    <img src="@asset('images/ubuntu-festival-immagine.png')" alt="ubuntu-festival" class="ubuntu-festival-img">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="ubuntu-descrizione">
                        @if( $ubuntu_descrizione = get_field('ubuntu-descrizione') ) {!! $ubuntu_descrizione !!} @endif
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="ubuntu-testo">
                        @if( $ubuntu_testo = get_field('ubuntu-testo') ) {!! $ubuntu_testo !!} @endif
                    </p>
                </div>
            </div>
            <div class="row end_page_buttons end_page_buttons_lab_teatro">
                <div class="col-sm-12 col-md-4">
                    
                </div>
                <div class="col-sm-12 col-md-4">
                    
                </div>
                <div class="col-sm-12 col-md-4">
                    
                </div>
            </div>
        </div> {{-- !center --}}
    </div> {{-- !container --}}
@endsection