@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="center-content">
            @if( get_field( 'immagine-top' ) )
            <img src="{{ get_field( 'immagine-top' ) }}" alt="copertina spettacolo" class="top-image">
            @endif
            @if( get_field( 'titolo' ) )
            <h1 class="sub-title"> {{ get_field( 'titolo' ) }} </h1>
            @endif
            @if( get_field( 'metadati' ) )
            <p class="metadati"> {!! get_field( 'metadati' ) !!} </p>
            @endif
            @if( get_field( 'citazione-spettacolo' ) )
            <p class="citazione-spettacolo"> {!! get_field( 'citazione-spettacolo' ) !!} </p>
            @endif
            <div class="note">
                @if( get_field( 'titolo-note' ) )
                <h2 class="titolo-note"> {!! get_field( 'titolo-note' ) !!} </h2>
                @endif
                @if( get_field( 'descrizione-note' ) )
                <p class="testo-note"> {!! get_field( 'descrizione-note' ) !!} </p>
                @endif
            </div>
            <div class="row spettacoli end_page_buttons_foto">
                @if( get_field( 'brochure-link' ) )
                <div class="col-sm-12 col-md-6">
                    <div class="curriculum">  
                        <a href="{{ get_field( 'brochure-link' ) }}" class="curriculum_button">BROCHURE</a>
                    </div>
                </div>
                @endif
                @if( get_field( 'gallery01' ) || 
                     get_field( 'gallery02' ) || 
                     get_field( 'gallery03' ) || 
                     get_field( 'gallery04' ) ||
                     get_field( 'gallery05' ) || 
                     get_field( 'gallery06' ) || 
                     get_field( 'gallery07' ) || 
                     get_field( 'gallery08' ) ||
                     get_field( 'gallery09' ) ||
                     get_field( 'gallery10' )
                    )
                <div class="spettacoli_button col-sm-12 col-md-4" @if( get_field( 'sfondo-tasto-gallery' ) ) style="background-image:url({!! get_field( 'sfondo-tasto-gallery' ) !!})" onmouseout="this.style.backgroundImage='url({!! get_field( 'sfondo-tasto-gallery' ) !!})'" @endif @if( get_field( 'sfondo-tasto-gallery-hover' ) ) onmouseover="this.style.backgroundImage='url({!! get_field( 'sfondo-tasto-gallery-hover' ) !!})'" @endif >
                    @if( get_field( 'gallery01' ) ) <a href="{{ get_field( 'gallery01' ) }}" data-lightbox="roadtrip-spettacoli"></a> @endif
                    @if( get_field( 'gallery02' ) ) <a href="{{ get_field( 'gallery02' ) }}" data-lightbox="roadtrip-spettacoli"></a> @endif
                    @if( get_field( 'gallery03' ) ) <a href="{{ get_field( 'gallery03' ) }}" data-lightbox="roadtrip-spettacoli"></a> @endif
                    @if( get_field( 'gallery04' ) ) <a href="{{ get_field( 'gallery04' ) }}" data-lightbox="roadtrip-spettacoli"></a> @endif
                    @if( get_field( 'gallery05' ) ) <a href="{{ get_field( 'gallery05' ) }}" data-lightbox="roadtrip-spettacoli"></a> @endif
                    @if( get_field( 'gallery06' ) ) <a href="{{ get_field( 'gallery06' ) }}" data-lightbox="roadtrip-spettacoli"></a> @endif
                    @if( get_field( 'gallery07' ) ) <a href="{{ get_field( 'gallery07' ) }}" data-lightbox="roadtrip-spettacoli"></a> @endif
                    @if( get_field( 'gallery08' ) ) <a href="{{ get_field( 'gallery08' ) }}" data-lightbox="roadtrip-spettacoli"></a> @endif
                    @if( get_field( 'gallery09' ) ) <a href="{{ get_field( 'gallery09' ) }}" data-lightbox="roadtrip-spettacoli"></a> @endif
                    @if( get_field( 'gallery10' ) ) <a href="{{ get_field( 'gallery10' ) }}" data-lightbox="roadtrip-spettacoli"></a> @endif
                </div>
                @endif
            </div>
            @if( get_field( 'video01' ) )
            <div>
                <div class="frame-video col-12">
                    {!! get_field( 'video01' ) !!}
                </div>
            </div>
            @endif
            @if( get_field( 'video02' ) )
            <div>
                <div class="frame-video col-12">
                        {!! get_field( 'video02' ) !!}
                </div>
            </div>
            @endif
            @if( get_field( 'video03' ) )
            <div>
                <div class="frame-video col-12">
                        {!! get_field( 'video03' ) !!}
                </div>
            </div>
            @endif
            @if( get_field( 'video04' ) )
            <div>
                <div class="frame-video col-12">
                        {!! get_field( 'video04' ) !!}
                </div>
            </div>
            @endif
            @if( get_field( 'video05' ) )
            <div>
                <div class="frame-video col-12">
                        {!! get_field( 'video05' ) !!}
                </div>
            </div>
            @endif
        </div> {{-- !center --}}
    </div> {{-- !container --}}
@endsection