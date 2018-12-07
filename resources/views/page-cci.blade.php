@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="center-content">
            <h1 class="center-content"> CENTRO DI CREAZIONE INTERNAZIONALE </h1>
            <div class="col-sm-12 col-md-6 slider-policardia">
                <div class="owl-carousel owl-theme owl-carousel-home">
                    <div class="item"><img src="@asset('images\policardia\policardi4.png')" alt="" class="w-75 bw"></div>
                    <div class="item"><img src="@asset('images\policardia\policardi4.png')" alt="" class="w-75 bw"></div>
                    <div class="item"><img src="@asset('images\policardia\policardi4.png')" alt="" class="w-75 bw"></div>
                    <div class="item"><h4>4</h4></div>
                    <div class="item"><h4>5</h4></div>
                    <div class="item"><h4>6</h4></div>
                    <div class="item"><h4>7</h4></div>
                    <div class="item"><h4>8</h4></div>
                    <div class="item"><h4>9</h4></div>
                    <div class="item"><h4>10</h4></div>
                    <div class="item"><h4>11</h4></div>
                    <div class="item"><img src="@asset('images\policardia\policardi4.png')" alt="" class="w-75 bw"></div>
                </div>
            </div>
            <p> {!! $post->post_content !!} </p>
            <h2>I MAESTRI</h2>
            <div class="row maestri">
                @php
                    $query_maestri = new WP_Query( array( 'post_type' => 'maestri' ) );
                    if( $query_maestri->have_posts() ) : 
                        while ( $query_maestri->have_posts() ) : $query_maestri->the_post();
                @endphp

                <div class="col-sm-12 col-md-6 col-lg-4 maestro">
                    @php
                        if( has_post_thumbnail() ){
                            echo get_the_post_thumbnail( null, 'medium' );
                        }
                    @endphp
                    <div>
                        @if( $title = get_the_title() )<h3 class="nome_maestro">{{ $title }}</h3> @endif
                        <div class="descrizione_maestro">
                            {!! get_the_content() !!} 
                        </div>
                    </div>
                </div>

                        @endwhile
                    @endif
            </div>
        </div> {{-- !center --}}
    </div> {{-- !container --}}
@endsection