@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="center-content">
            <h1 class="center-content"> {!! get_the_title() !!} </h1>
            <div class="row row-sedi">
                <div class="sede col-sm-12">
                    <h2 class="titolo-contatto">REFERENTE LABORATORI DI TEATRO MASSA-CARRARA</h2>
                <h3 class="titolo-sede">{{ get_field('contatto-massa-carrara-nome',  get_page_by_title('Opzioni')) }}</h3>
                    @if( get_field('contatto-massa-carrara-tel',  get_page_by_title('Opzioni')) )
                    <div class="sede-contatti">
                        <img src="@asset('images/Cell.png')" alt="cellulare" class="tel">
                    <a href="tel:{{ get_field('contatto-massa-carrara-tel',  get_page_by_title('Opzioni')) }}">{{ get_field('contatto-massa-carrara-tel',  get_page_by_title('Opzioni')) }}</a>
                    </div>
                    @endif
                    @if( get_field('contatto-massa-carrara-mail',  get_page_by_title('Opzioni')) )
                    <div class="sede-contatti">
                        <img src="@asset('images/email.png')" alt="email" class="email">
                        <a href="mailto:{{ get_field('contatto-massa-carrara-mail',  get_page_by_title('Opzioni')) }}">{{ get_field('contatto-massa-carrara-mail',  get_page_by_title('Opzioni')) }}</a>
                    </div>
                    @endif
                </div>{{-- fine sede 1 --}}
                <div class="sede col-sm-12">
                    <h2 class="titolo-contatto">REFERENTE LABORATORI DI TEATRO VERSILIA</h2>
                    <h3 class="titolo-sede">{{ get_field('contatto-versilia-nome',  get_page_by_title('Opzioni')) }}</h3>
                    @if( get_field('contatto-versilia-tel',  get_page_by_title('Opzioni')) )
                    <div class="sede-contatti">
                        <img src="@asset('images/Cell.png')" alt="cellulare" class="tel">
                        <a href="tel:{{ get_field('contatto-versilia-tel',  get_page_by_title('Opzioni')) }}">{{ get_field('contatto-versilia-tel',  get_page_by_title('Opzioni')) }}</a>
                    </div>
                    @endif
                    @if( get_field('contatto-versilia-mail',  get_page_by_title('Opzioni')) )
                    <div class="sede-contatti">
                        <img src="@asset('images/email.png')" alt="email" class="email">
                        <a href="mailto:{{ get_field('contatto-versilia-mail',  get_page_by_title('Opzioni')) }}">{{ get_field('contatto-versilia-mail',  get_page_by_title('Opzioni')) }}</a>
                    </div>
                    @endif
                </div>{{-- fine sede 2 --}}
                <div class="sede col-sm-12">
                    <h2 class="titolo-contatto">REFERENTE LABORATORI DI TEATRO LUCCA</h2>
                    <h3 class="titolo-sede">{{ get_field('contatto-lucca-nome',  get_page_by_title('Opzioni')) }}</h3>
                    @if( get_field('contatto-lucca-tel',  get_page_by_title('Opzioni')) )
                    <div class="sede-contatti">
                        <img src="@asset('images/Cell.png')" alt="cellulare" class="tel">
                        <a href="tel:{{ get_field('contatto-lucca-tel',  get_page_by_title('Opzioni')) }}">{{ get_field('contatto-lucca-tel',  get_page_by_title('Opzioni')) }}</a>
                    </div>
                    @endif
                    @if( get_field('contatto-lucca-mail',  get_page_by_title('Opzioni')) )
                    <div class="sede-contatti">
                        <img src="@asset('images/email.png')" alt="email" class="email">
                        <a href="mailto:{{ get_field('contatto-lucca-mail',  get_page_by_title('Opzioni')) }}">{{ get_field('contatto-lucca-mail',  get_page_by_title('Opzioni')) }}</a>
                    </div>
                    @endif
                </div>{{-- fine sede 3 --}}
                <div class="sede col-sm-12">
                    <h2 class="titolo-contatto">REFERENTE LABORATORI DI TEATRO PISA</h2>
                    <h3 class="titolo-sede">{{ get_field('contatto-pisa-nome',  get_page_by_title('Opzioni')) }}</h3>
                    @if( get_field('contatto-pisa-tel',  get_page_by_title('Opzioni')) )
                    <div class="sede-contatti">
                        <img src="@asset('images/Cell.png')" alt="cellulare" class="tel">
                        <a href="tel:{{ get_field('contatto-pisa-tel',  get_page_by_title('Opzioni')) }}">{{ get_field('contatto-pisa-tel',  get_page_by_title('Opzioni')) }}</a>
                    </div>
                    @endif
                    @if( get_field('contatto-pisa-mail',  get_page_by_title('Opzioni')) )
                    <div class="sede-contatti">
                        <img src="@asset('images/email.png')" alt="email" class="email">
                        <a href="mailto:{{ get_field('contatto-pisa-mail',  get_page_by_title('Opzioni')) }}">{{ get_field('contatto-pisa-mail',  get_page_by_title('Opzioni')) }}</a>
                    </div>
                    @endif
                </div>{{-- fine sede 4 --}}
                <div class="sede col-sm-12">
                    <h2 class="titolo-contatto">REGIA E DIREZIONE ARTISTICA</h2>
                    <h3 class="titolo-sede">{{ get_field('contatto-regia-direzione-artistica-nome',  get_page_by_title('Opzioni')) }}</h3>
                    @if( get_field('contatto-regia-direzione-artistica-tel',  get_page_by_title('Opzioni')) )
                    <div class="sede-contatti">
                        <img src="@asset('images/Cell.png')" alt="cellulare" class="tel">
                        <a href="tel:{{ get_field('contatto-regia-direzione-artistica-tel',  get_page_by_title('Opzioni')) }}">{{ get_field('contatto-regia-direzione-artistica-tel',  get_page_by_title('Opzioni')) }}</a>
                    </div>
                    @endif
                    @if( get_field('contatto-regia-direzione-artistica-mail',  get_page_by_title('Opzioni')) )
                    <div class="sede-contatti">
                        <img src="@asset('images/email.png')" alt="email" class="email">
                        <a href="mailto:{{ get_field('contatto-regia-direzione-artistica-mail',  get_page_by_title('Opzioni')) }}">{{ get_field('contatto-regia-direzione-artistica-mail',  get_page_by_title('Opzioni')) }}</a>
                    </div>
                    @endif
                </div>{{-- fine sede 5 --}}
                <div class="sede col-sm-12">
                    <h2 class="titolo-contatto">COORDINAMENTO</h2>
                    <h3 class="titolo-sede">{{ get_field('contatto-coordinamento-nome',  get_page_by_title('Opzioni')) }}</h3>
                    @if( get_field('contatto-coordinamento-tel',  get_page_by_title('Opzioni')) )
                    <div class="sede-contatti">
                        <img src="@asset('images/Cell.png')" alt="cellulare" class="tel">
                        <a href="tel:{{ get_field('contatto-coordinamento-tel',  get_page_by_title('Opzioni')) }}">{{ get_field('contatto-coordinamento-tel',  get_page_by_title('Opzioni')) }}</a>
                    </div>
                    @endif
                    @if( get_field('contatto-coordinamento-mail',  get_page_by_title('Opzioni')) )
                    <div class="sede-contatti">
                        <img src="@asset('images/email.png')" alt="email" class="email">
                        <a href="mailto:{{ get_field('contatto-coordinamento-mail',  get_page_by_title('Opzioni')) }}">{{ get_field('contatto-coordinamento-mail',  get_page_by_title('Opzioni')) }}</a>
                    </div>
                    @endif
                </div>{{-- fine sede 6 --}}
                <div class="sede col-sm-12">
                    <h2 class="titolo-contatto">PROMOZIONE</h2>
                    <h3 class="titolo-sede">{{ get_field('contatto-promozione-nome',  get_page_by_title('Opzioni')) }}</h3>
                    @if( get_field('contatto-promozione-tel',  get_page_by_title('Opzioni')) )
                    <div class="sede-contatti">
                        <img src="@asset('images/Cell.png')" alt="cellulare" class="tel">
                        <a href="tel:{{ get_field('contatto-promozione-tel',  get_page_by_title('Opzioni')) }}">{{ get_field('contatto-promozione-tel',  get_page_by_title('Opzioni')) }}</a>
                    </div>
                    @endif
                    @if( get_field('contatto-promozione-mail',  get_page_by_title('Opzioni')) )
                    <div class="sede-contatti">
                        <img src="@asset('images/email.png')" alt="email" class="email">
                        <a href="mailto:{{ get_field('contatto-promozione-mail',  get_page_by_title('Opzioni')) }}">{{ get_field('contatto-promozione-mail',  get_page_by_title('Opzioni')) }}</a>
                    </div>
                    @endif
                </div>{{-- fine sede 7 --}}
                <div class="sede col-sm-12">
                    <h2 class="titolo-contatto">AMMINISTRAZIONE</h2>
                    <h3 class="titolo-sede">{{ get_field('contatto-amministrazione-nome',  get_page_by_title('Opzioni')) }}</h3>
                    @if( get_field('contatto-amministrazione-tel',  get_page_by_title('Opzioni')) )
                    <div class="sede-contatti">
                        <img src="@asset('images/Cell.png')" alt="cellulare" class="tel">
                        <a href="tel:{{ get_field('contatto-amministrazione-tel',  get_page_by_title('Opzioni')) }}">{{ get_field('contatto-amministrazione-tel',  get_page_by_title('Opzioni')) }}</a>
                    </div>
                    @endif
                    @if( get_field('contatto-amministrazione-mail',  get_page_by_title('Opzioni')) )
                    <div class="sede-contatti">
                        <img src="@asset('images/email.png')" alt="email" class="email">
                        <a href="mailto:{{ get_field('contatto-amministrazione-mail',  get_page_by_title('Opzioni')) }}">{{ get_field('contatto-amministrazione-mail',  get_page_by_title('Opzioni')) }}</a>
                    </div>
                    @endif
                </div>{{-- fine sede 8 --}}
            </div>
        </div> {{-- !center --}}
    </div> {{-- !container --}}
@endsection