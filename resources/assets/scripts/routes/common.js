const lightbox = require('lightbox2');
 
export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    $('.slider-compagnia .owl-carousel').owlCarousel({
      center: true,
      items: 1,
      loop: true,
      margin: 5,
      nav: true,
      navText: ['',''],
      navElement: 'span',
      dots: false,
      autoplay: false,
      lazyLoad: true,
    });
    
    $('.owl-carousel').owlCarousel({
      center: true,
      items: 1,
      loop: true,
      margin: 5,
      dots: true,
      autoplay: true,
      animateOut: 'fadeOut',
      lazyLoad: true,
    });

    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true,
      'alwaysShowNavOnTouchDevices': true,
      'showImageNumberLabel': false,
    });

    setTimeout(() =>
      $('.modal').modal({
        show: true,
        backdrop: false,
      }), 
      1000 
    );
     
  },
};
