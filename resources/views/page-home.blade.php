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
                <div class="owl-carousel owl-theme owl-carousel-home">
                    <div class="item"><img src="@asset('images\policardia\policardi4.png')" alt="" class="bw width-250"></div>
                    <div class="item"><h4>2</h4></div>
                    <div class="item"><h4>3</h4></div>
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
                    <div class="item"><img src="@asset('images\policardia\policardi4.png')" alt="" class="bw width-250"></div>
                    <div class="item"><h4>2</h4></div>
                    <div class="item"><h4>3</h4></div>
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
                    <div class="item"><img src="@asset('images\policardia\policardi4.png')" alt="" class="bw width-250"></div>
                    <div class="item"><h4>2</h4></div>
                    <div class="item"><h4>3</h4></div>
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
                    <div class="item"><img src="@asset('images\policardia\policardi4.png')" alt="" class="bw width-250"></div>
                    <div class="item"><h4>2</h4></div>
                    <div class="item"><h4>3</h4></div>
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
            <div class="col-sm-12 col-md-6 section_title_container right"> 
                <a href="{!! get_permalink($post_policardia) !!}" class="section_toggle_mobile section_title_link right"><h2 class="section_title right">{{ $post_policardia->post_title }}</h2></a>
                <p class="section_excerpt right">{{ $post_policardia->post_excerpt }}</p>    
            </div>
        </div>
    </div>
@endsection
