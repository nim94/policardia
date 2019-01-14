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
      dots: true,
      autoplay: false,
    });
    
    $('.owl-carousel').owlCarousel({
      center: true,
      items: 1,
      loop: true,
      margin: 5,
      dots: true,
      autoplay: true,
    });
  },
};
