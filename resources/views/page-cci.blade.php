@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="center-content">
            <h1 class="center-content"> CENTRO DI CREAZIONE INTERNAZIONALE </h1>
            <div class="col-sm-12 col-md-6 slider-policardia">
                <div class="owl-carousel owl-theme owl-carousel-home">
                    @php
                        $upload = wp_upload_dir()['baseurl'] . '/2019/01/';
                    @endphp
                    @php echo '<div class="item"><img src="'.$upload.'1.png" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'2.png" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'3.png" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'4.png" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'5.png" alt="policardia slider" class="bw width-250"></div>'; @endphp
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