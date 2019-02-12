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
                    @php echo '<div class="item"><img src="'.$upload.'compagnia1.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'compagnia2.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'compagnia3.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'compagnia4.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'compagnia5.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                </div>
            </div>
            <p> {!! $post->post_content !!} </p>
            <div class="row spettacoli end_page_buttons_spettacoli">
                <div class="spettacoli_button col-sm-12 col-md-4">
                    <a href="{{ esc_url( get_category_link( get_cat_ID( 'spettacoli' ) ) ) }}"></a>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="curriculum">  
                        <a href="@asset('images/curriculum_compagnia.pdf')" class="curriculum_button">CURRICULUM<br />COMPLETO</a>
                    </div>
                </div>
            </div>
            <h2>GLI ATTORI</h2>
            <div class="slider-compagnia">
                <div class="owl-carousel owl-theme owl-carousel-home">
                    @php
                        $query_attori = new WP_Query( array( 'post_type'       => 'attori',
                                                              'order'          => 'ASC',
                                                              'orderby'        => 'date',
                                                              'posts_per_page' =>  -1 ) );
                        if( $query_attori->have_posts() ) : 
                            while ( $query_attori->have_posts() ) : $query_attori->the_post();
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