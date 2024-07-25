jQuery(function ($) {
  $(document).ready(function(){
      $('.product-gallery').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
      lazyLoad: 'progressive',
    asNavFor: '.product-gallery-thumbnail'
  });
  $('.product-gallery-thumbnail').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    centerPadding: '30px',
     infinite: true,
    asNavFor: '.product-gallery',
    dots: true,
      lazyLoad: 'progressive',
    centerMode: true,
    arrows: false,
    focusOnSelect: true
  });
  /*
    $('.product-gallery').slick({
      responsive: [
          {
              breakpoint: 9999,
              settings: "unslick"
          },
      {
        breakpoint: 768,
        settings: {
          arrows: true,
        //  centerMode: true,
           dots: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
  
    ]
    });
    */
  
    $('.related-prod .row').slick({
      responsive: [
          {
              breakpoint: 9999,
              settings: "unslick"
          },
      {
        breakpoint: 768,
        settings: {
          arrows: false,
        //  centerMode: true,
           dots: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
    /*  {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }*/
    ]
    });
  
  });
    
  /*
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
  */
  });