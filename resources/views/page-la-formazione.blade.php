@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="center-content">
            <h1 class="center-content"> FORMAZIONE </h1>
            <div class="col-sm-12 col-md-6 slider-policardia">
                <div class="owl-carousel owl-theme owl-carousel-home">
                    @php
                    $upload = wp_upload_dir()['baseurl'] . '/2018/12/';
                    @endphp
                    @php echo '<div class="item"><img src="'.$upload.'formazione1.png" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'formazione2.png" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'formazione3.png" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'formazione4.png" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'formazione5.png" alt="policardia slider" class="bw width-250"></div>'; @endphp
                </div>
            </div>
            <p> {!! $post->post_content !!} </p>
            <div class="row end_page_buttons end_page_buttons_formazione">
                <div class="col-sm-12 col-md-4">
                    <a href="http://progettovalar.wixsite.com/progettovalar"></a>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a href="{{ get_permalink( get_page_by_path( 'laboratorio-di-teatro' ) ) }}"></a>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a href="{{ get_permalink( get_page_by_path( 'progetti-nel-sociale' ) ) }}"></a>
                </div>
            </div>
            <h2> L'EQUIPE DEI FORMATORI </h2>
            <div class="slider-compagnia">
                <div class="owl-carousel owl-theme owl-carousel-home">
                    @php
                        $query_formatori = new WP_Query( array( 'post_type'       => 'formatori',
                                                                 'order'          => 'ASC',
                                                                 'orderby'        => 'date',
                                                                 'posts_per_page' =>  -1 ) );
                        if( $query_formatori->have_posts() ) : 
                            while ( $query_formatori->have_posts() ) : $query_formatori->the_post();
                    @endphp
                    <div class="item">
                        <div class="item_flex">      
                            <div>
                                @php
                                    if( has_post_thumbnail() ){
                                        echo get_the_post_thumbnail( null, 'medium' );
                                    }
                                @endphp
                            </div>
                            <div>
                            <h3 class="nome_attore">{{ get_the_title() }}</h3>
                                <div class="descrizione_attore">
                                   {!! get_the_content() !!} 
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                            endwhile;
                        endif;
                    @endphp
                </div>
            </div>
        </div> {{-- !center --}}
    </div> {{-- !container --}}
@endsection