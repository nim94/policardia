@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="center-content"> SPETTACOLI </h1>
        @php
            if( have_posts() ) :
                while( have_posts() ) : the_post();
        @endphp
        <div class="item">
            <div class="item_flex">     
                <a href="{{ esc_url( get_permalink() ) }}"> 
                    <div>
                        @php
                            if( has_post_thumbnail() ){
                                echo get_the_post_thumbnail( null, 'thumbnail' );
                            }
                        @endphp
                    </div>
                    <div>
                    <h3 class="nome_attore">{!! get_the_title() !!}</h3>
                        <div class="descrizione_attore">
                            @php the_excerpt() @endphp 
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @php
            endwhile;
        endif;
        @endphp
    </div> {{-- !container --}}
@endsection