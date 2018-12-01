<header class="banner">
  <div class="container">
    <div class="social_links">
      <a href="#" class="social_link"><img src="{{get_stylesheet_directory_uri()}}/assets/images/tasto_facebook.png" alt="facebook page link" class="social_img"></a>
      <a href="#" class="social_link"><img src="{{get_stylesheet_directory_uri()}}/assets/images/tasto_instagram.png" alt="instagram page link" class="social_img"></a>
      <a href="#" class="social_link"><img src="{{get_stylesheet_directory_uri()}}/assets/images/tasto_youtube.png" alt="youtube page link" class="social_img"></a>
    </div>
    <div class="center">
      <a class="brand" href="{{ home_url('/') }}"><img src="{{get_stylesheet_directory_uri()}}/assets/images/logo_teatro_policardia.png" alt="logo teatro Policardia" class="logo"></a>
    </div>
    {{-- Navbar desktop --}}
    <nav class="navbar-desktop">
      @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    <!--Navbar phone-->
    <nav class="navbar navbar-light purple lighten-4 mb-4">
  
      <!-- Collapse button -->
      <button class="navbar-toggler toggler-example purple darken-3" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent41" aria-controls="navbarSupportedContent41" aria-expanded="false"
        aria-label="Toggle navigation"><span class="navbar-toggler-icon black-text"><i class="fa fa-bars fa-1x"></i></span></button>
    
      <!-- Collapsible content -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent41">
    
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
    
      </div>
      <!-- Collapsible content -->
    
    </nav>
  <!--/.Navbar-->
  </div>
</header>
