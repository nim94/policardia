@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="center-content">
            <h1 class="center-content"> {!! get_the_title() !!} </h1>
            <div class="col-sm-12 col-md-6 slider-policardia">
                <div class="owl-carousel owl-theme owl-carousel-home">
                    @php
                    $upload = wp_upload_dir()['baseurl'] . '/2019/02/';
                    @endphp
                    @php echo '<div class="item"><img src="'.$upload.'formazione1.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'formazione2.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'formazione3.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'formazione4.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'formazione5.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                </div>
            </div>
            <p> {!! $post->post_content !!} </p>
            <div class="row">
                <div class="col-12">
                    <img src="@asset('images/mappa-formazione.png')" alt="mappa" class="mappa">
                </div>
            </div>
            <div class="row row-sedi">
                <div class="sede col-sm-12 col-md-5 col-lg-4">
                    <h3 class="titolo-sede">Massa-Carrara e La Spezia</h3>
                    <p class="descrizione-sede">
                        I nostri laboratori sono presenti nei comuni di <strong>Massa</strong>, <strong>Carrara</strong> e <br /><strong>La Spezia</strong>
                    </p>
                    <div class="sede-contatti">
                        <img src="@asset('images/Cell.png')" alt="cellulare" class="tel">
                        <a href="tel:{{ get_field('contatto-massa-carrara-tel',  get_page_by_title('Opzioni')) }}">Beatrice: {{ get_field('contatto-massa-carrara-tel',  get_page_by_title('Opzioni')) }}</a>
                    </div>
                    <div class="sede-contatti">
                        <img src="@asset('images/email.png')" alt="email" class="email">
                        <a href="mailto:{{ get_field('contatto-massa-carrara-mail',  get_page_by_title('Opzioni')) }}">{{ get_field('contatto-massa-carrara-mail',  get_page_by_title('Opzioni')) }}</a>
                    </div>
                </div>{{-- fine sede 1 --}}
                <div class="col-md-1 col-lg-2"></div>
                <div class="sede col-sm-12 col-md-5 col-lg-4">
                    <h3 class="titolo-sede">Versilia</h3>
                    <p class="descrizione-sede">
                        I nostri laboratori sono presenti nei comuni di <strong>Viareggio</strong>, <strong>Camaiore</strong>,<strong>Massarosa</strong> e <strong>Pietrasanta</strong>
                    </p>
                    <div class="sede-contatti">
                        <img src="@asset('images/Cell.png')" alt="cellulare" class="tel">
                        <a href="tel:{{ get_field('contatto-versilia-tel',  get_page_by_title('Opzioni')) }}">Andrea Elodie: {{ get_field('contatto-versilia-tel',  get_page_by_title('Opzioni')) }}</a>
                    </div>
                    <div class="sede-contatti">
                        <img src="@asset('images/email.png')" alt="email" class="email">
                        <a href="mailto:{{ get_field('contatto-versilia-mail',  get_page_by_title('Opzioni')) }}">{{ get_field('contatto-versilia-mail',  get_page_by_title('Opzioni')) }}</a>
                    </div>
                </div>{{-- fine sede 2 --}}
                <div class="sede col-sm-12 col-md-5 col-lg-4">
                    <h3 class="titolo-sede">Lucca</h3>
                    <p class="descrizione-sede">
                        I nostri laboratori sono presenti nel comune di <strong>Lucca</strong>
                    </p>
                    <div class="sede-contatti">
                        <img src="@asset('images/Cell.png')" alt="cellulare" class="tel">
                        <a href="tel:{{ get_field('contatto-lucca-tel',  get_page_by_title('Opzioni')) }}">Pietro: {{ get_field('contatto-lucca-tel',  get_page_by_title('Opzioni')) }}</a>
                    </div>
                    <div class="sede-contatti">
                        <img src="@asset('images/email.png')" alt="email" class="email">
                        <a href="mailto:{{ get_field('contatto-lucca-mail',  get_page_by_title('Opzioni')) }}">{{ get_field('contatto-lucca-mail',  get_page_by_title('Opzioni')) }}</a>
                    </div>
                </div>{{-- fine sede 3 --}}
                <div class="col-md-1 col-lg-2"></div>
                <div class="sede col-sm-12 col-md-5 col-lg-4">
                    <h3 class="titolo-sede">Pisa</h3>
                    <p class="descrizione-sede">
                        I nostri laboratori sono presenti nei comuni di <strong>Pisa</strong> e <strong>Vicopisano</strong>
                    </p>
                    <div class="sede-contatti">
                        <img src="@asset('images/Cell.png')" alt="cellulare" class="tel">
                        <a href="tel:{{ get_field('contatto-pisa-tel',  get_page_by_title('Opzioni')) }}">Pietro: {{ get_field('contatto-pisa-tel',  get_page_by_title('Opzioni')) }}</a>
                    </div>
                    <div class="sede-contatti">
                        <img src="@asset('images/email.png')" alt="email" class="email">
                        <a href="mailto:{{ get_field('contatto-pisa-mail',  get_page_by_title('Opzioni')) }}">{{ get_field('contatto-pisa-mail',  get_page_by_title('Opzioni')) }}</a>
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
                <div class="col-sm-12 col-md-4 LightLink2016">
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/Ubuntu-2016-1-.jpg" data-lightbox="roadtrip"></a>
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/Ubuntu-2016-2.jpg" data-lightbox="roadtrip"></a>
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/Ubuntu-2016-3.jpg" data-lightbox="roadtrip"></a>
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/Ubuntu-2016-4.jpg" data-lightbox="roadtrip"></a>
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/Ubuntu-2016-5.jpg" data-lightbox="roadtrip"></a>
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/Ubuntu-2016-6.jpg" data-lightbox="roadtrip"></a>
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/Ubuntu-2016-7.jpg" data-lightbox="roadtrip"></a>
                </div>
                <div class="col-sm-12 col-md-4 LightLink2017">
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/Ubuntu-2017-1.jpg" data-lightbox="roadtrip2"></a>
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/Ubuntu-2017-2.jpg" data-lightbox="roadtrip2"></a>
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/Ubuntu-2017-3.jpg" data-lightbox="roadtrip2"></a>
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/Ubuntu-2017-4.jpg" data-lightbox="roadtrip2"></a>
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/Ubuntu-2017-5.jpg" data-lightbox="roadtrip2"></a>
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/Ubuntu-2017-6.jpg" data-lightbox="roadtrip2"></a>
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/Ubuntu-2017-7.jpg" data-lightbox="roadtrip2"></a>
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/Ubuntu-2017-8.jpg" data-lightbox="roadtrip2"></a>
                </div>
                <div class="col-sm-12 col-md-4 LightLink2018">
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/ubuntu-2018-1.jpg" data-lightbox="roadtrip2"></a>
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/ubuntu-2018-2.jpg" data-lightbox="roadtrip2"></a>
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/ubuntu-2018-3.jpg" data-lightbox="roadtrip2"></a>
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/ubuntu-2018-4.jpg" data-lightbox="roadtrip2"></a>
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/ubuntu-2018-5.jpg" data-lightbox="roadtrip2"></a>
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/ubuntu-2018-6.jpg" data-lightbox="roadtrip2"></a>
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/ubuntu-2018-7.jpg" data-lightbox="roadtrip2"></a>
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/ubuntu-2018-8.jpg" data-lightbox="roadtrip2"></a>
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/ubuntu-2018-9.jpg" data-lightbox="roadtrip2"></a>
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/ubuntu-2018-10.jpg" data-lightbox="roadtrip2"></a>
                    <a href="{{ wp_upload_dir()['baseurl'] }}/2019/01/ubuntu-2018-11.jpg" data-lightbox="roadtrip2"></a>
            </div>
            </div>
        </div> {{-- !center --}}
    </div> {{-- !container --}}
@endsection