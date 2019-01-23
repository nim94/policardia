<footer class="content-info">
  @php
   if( !isset( $_COOKIE["modal"] ) ) {
    setcookie( "modal", 'show_modal',  time()+31500000, '/');
    echo 
    '<div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <p>'. get_field('modal-text',  get_page_by_title('Opzioni')) .'</p>
            </div>
            <div class="modal-footer">
              <a href="mailto:promozione.policardiateatro@gmail.com"><button type="button" class="btn btn-primary">SCRIVICI</button></a>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button>
            </div>
          </div>
        </div>
      </div>';
      var_dump($_COOKIE["modal"]);
   }   
   /* elseif( $_COOKIE['modal'] && $_COOKIE['modal'] == 'modal_show' ) */  
  @endphp
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-lg-4 text-footer">
        <h4>Policardia Teatro</h4>
        <a href="mailto:promozione.policardiateatro@gmail.com">promozione.policardiateatro@gmail.com</a>
        <a href="mailto:coord.policardiateatro@gmail.com">coord.policardiateatro@gmail.com</a>
      </div>
      <div class="col-sm-12 col-lg-4 social_footer">
        <div><a href="https://www.facebook.com/PolicardiaT/"><img src="@asset('images/bianco_facebook.png')" alt="link social facebook"></a></div>
        <div><a href="https://www.instagram.com/policardiateatro/"><img src="@asset('images/bianco_instagram.png')" alt="link social instagram"></a></div>
        <div><a href="https://www.youtube.com/channel/UC1pKiq6u1HlOMwdJP36dLBg"><img src="@asset('images/bianco_Youtube.png')" alt="link social youtube" class="social_img_youtube"></a></div> 
      </div>
      <div class="col-sm-12 col-lg-4 funder35">
        <div><a href="http://funder35.it/"><img src="@asset('images/marchi_funder35.png')" alt="Logo Funder35"></a></div>
        <div>La Policardia Teatro è <br />sostenuta da Funder35</div>
      </div>
    </div>
    <div class="row end_footer">
      <div class="col-12">
        <a href="#"> Privacy </a>&nbsp;||&nbsp;<a href="/cookie"> Cookie </a>&nbsp;||&nbsp;Designed by Nicola Morelli
      </div>
    </div>
  </div>
</footer>
