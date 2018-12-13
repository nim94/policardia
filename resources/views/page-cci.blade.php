@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="center-content">
            <h1 class="center-content"> CENTRO DI CREAZIONE INTERNAZIONALE </h1>
            <div class="col-sm-12 col-md-6 slider-policardia">
                <div class="owl-carousel owl-theme owl-carousel-home">
                    @php
                        $upload = wp_upload_dir()['baseurl'] . '/2018/12/';
                    @endphp
                    @php echo '<div class="item"><img src="'.$upload.'cci1.png" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'cci2.png" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'cci3.png" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'cci4.png" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'cci5.png" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'cci6.png" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'cci7.png" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'cci8.png" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'cci9.png" alt="policardia slider" class="bw width-250"></div>'; @endphp
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