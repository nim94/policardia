@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="center-content">
            <h1 class="center-content"> {!! get_the_title() !!} </h1>
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
            <div class="row spettacoli">
                <div class="spettacoli_button col-sm-12 col-md-6">
                    <a href="@php echo esc_url( get_category_link( get_cat_ID( 'spettacoli' ) ) ) @endphp"><img src="@asset('images\policardia\policardi4.png')" alt="Spettacoli" class="bw width-250"></a>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="curriculum">  
                        <a href="#" class="curriculum_button">CURRICULUM<br />COMPLETO</a>
                    </div>
                </div>
            </div>
            <h2>GLI ATTORI</h2>
            <div class="slider-compagnia">
                <div class="owl-carousel owl-theme owl-carousel-home">
                    @php
                        $query_attori = new WP_Query( array( 'post_type' => 'attori' ) );
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
                    <div class="item"><img src="@asset('images\policardia\policardi4.png')" alt="" class="width-250"></div>
                    <div class="item"><img src="@asset('images\policardia\policardi4.png')" alt="" class="width-250"></div>
                    <div class="item"><h4>4</h4></div>
                    <div class="item"><h4>5</h4></div>
                    <div class="item"><h4>6</h4></div>
                    <div class="item"><h4>7</h4></div>
                    <div class="item"><h4>8</h4></div>
                    <div class="item"><h4>9</h4></div>
                    <div class="item"><h4>10</h4></div>
                    <div class="item"><h4>11</h4></div>
                    <div class="item"><h4>12</h4></div>
                </div>
            </div>
        </div> {{-- !center --}}
    </div> {{-- !container --}}
@endsection