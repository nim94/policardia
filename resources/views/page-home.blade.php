@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row la_policardia">
            @php $post_policardia = get_post(7); @endphp
            <div class="col-sm-12 col-md-6 section_title_container left"> 
                <a href="{!! get_permalink($post_policardia) !!}" class="section_title_link left"><h2 class="section_title left">{{ $post_policardia->post_title }}</h2></a>
                <p class="section_toggle_mobile left">{{ $post_policardia->post_excerpt }}</p>    
            </div>    
            <div class="col-sm-12 col-md-6 slider">
                @php
                    $upload = wp_upload_dir()['baseurl'] . '/2019/02/';
                @endphp
                <div class="owl-carousel owl-theme owl-carousel-home">
                        @php echo '<div class="item"><img src="'.$upload.'policardia1.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                        @php echo '<div class="item"><img src="'.$upload.'policardia2.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                        @php echo '<div class="item"><img src="'.$upload.'policardia3.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                        @php echo '<div class="item"><img src="'.$upload.'policardi4.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                        @php echo '<div class="item"><img src="'.$upload.'policardia5.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                </div>
            </div>
            <div class="col-sm-12 col-md-6 section_toggle_desktop">
                <p class="section_excerpt">{{ $post_policardia->post_excerpt }}</p>
            </div>
        </div>
        <div class="row la_compagnia">
            @php $post_policardia = get_post(9); @endphp
            <div class="col-sm-12 col-md-6 section_toggle_desktop">
                <a href="{!! get_permalink($post_policardia) !!}" class="section_title_link right"><h2 class="section_title right">{{ $post_policardia->post_title }}</h2></a>
            </div>
            <div class="col-sm-12 col-md-6 slider">
                <div class="owl-carousel owl-theme owl-carousel-home">
                    @php echo '<div class="item"><img src="'.$upload.'compagnia1.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'compagnia2.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'compagnia3.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'compagnia4.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'compagnia5.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                </div>
            </div>
            <div class="col-sm-12 col-md-6 section_title_container right"> 
                <a href="{!! get_permalink($post_policardia) !!}" class="section_toggle_mobile section_title_link right"><h2 class="section_title right">{{ $post_policardia->post_title }}</h2></a>
                <p class="section_excerpt right">{{ $post_policardia->post_excerpt }}</p>    
            </div>    
        </div>
        <div class="row cci">
            @php $post_policardia = get_post(11); @endphp
            <div class="col-sm-12 col-md-6 section_title_container left"> 
                <a href="{!! get_permalink($post_policardia) !!}" class="section_title_link left"><h2 class="section_title left">{{ $post_policardia->post_title }}</h2></a>
                <p class="section_toggle_mobile left">{{ $post_policardia->post_excerpt }}</p>    
            </div>    
            <div class="col-sm-12 col-md-6 slider">
                <div class="owl-carousel owl-theme owl-carousel-home">
                    @php echo '<div class="item"><img src="'.$upload.'cci1-1.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'cci2-1.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'cci3-1.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'cci4-1.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'cci5-1.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'cci6.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'cci7.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'cci8.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'cci9.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                </div>
            </div>
            <div class="col-sm-12 col-md-6 section_toggle_desktop">
                <p class="section_excerpt">{{ $post_policardia->post_excerpt }}</p>
            </div>
        </div>
        <div class="row formazione">
            @php $post_policardia = get_post(13); @endphp
            <div class="col-sm-12 col-md-6 section_toggle_desktop">
                <a href="{!! get_permalink($post_policardia) !!}" class="section_title_link right"><h2 class="section_title right">{{ $post_policardia->post_title }}</h2></a>
            </div>
            <div class="col-sm-12 col-md-6 slider">
                <div class="owl-carousel owl-theme owl-carousel-home">
                        @php echo '<div class="item"><img src="'.$upload.'formazione1.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                        @php echo '<div class="item"><img src="'.$upload.'formazione2.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                        @php echo '<div class="item"><img src="'.$upload.'formazione3.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                        @php echo '<div class="item"><img src="'.$upload.'formazione4.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                        @php echo '<div class="item"><img src="'.$upload.'formazione5.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                </div>
            </div>
            <div class="col-sm-12 col-md-6 section_title_container right"> 
                <a href="{!! get_permalink($post_policardia) !!}" class="section_toggle_mobile section_title_link right"><h2 class="section_title right">{{ $post_policardia->post_title }}</h2></a>
                <p class="section_excerpt right">{{ $post_policardia->post_excerpt }}</p>    
            </div>
        </div>
    </div>
@endsection
