@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="center-content">
            <h1 class="center-content"> FORMAZIONE </h1>
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
            <div class="row link_formazione">
                <div class="col-sm-12 col-md-4 single_link_formazione">
                    <a href="http://progettovalar.wixsite.com/progettovalar"></a><img src="@asset('images\policardia\policardi4.png')" alt="" class="w-75 bw">
                </div>
                <div class="col-sm-12 col-md-4 single_link_formazione">
                    <img src="@asset('images\policardia\policardi4.png')" alt="" class="w-75 bw">
                </div>
                <div class="col-sm-12 col-md-4 single_link_formazione">
                    <img src="@asset('images\policardia\policardi4.png')" alt="" class="w-75 bw">
                </div>
            </div>
            <h2> L'EQUIPE DEI FORMATORI </h2>
            <div class="slider-compagnia">
                <div class="owl-carousel owl-theme owl-carousel-home">
                    @php
                        $query_formatori = new WP_Query( array( 'post_type' => 'formatori' ) );
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