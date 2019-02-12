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
                    @php echo '<div class="item"><img src="'.$upload.'1.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'2.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'3.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'4.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                    @php echo '<div class="item"><img src="'.$upload.'5.jpg" alt="policardia slider" class="bw width-250"></div>'; @endphp
                </div>
            </div>
            <p> {!! $post->post_content !!} </p>
        </div> {{-- !center --}}
    </div> {{-- !container --}}
@endsection