jQuery(document).ready(function($) {
    var scroll = $(window).scrollTop();
    var scrollup = $('.scroll-top');
    /*------------------------------------------------
              Scroll Top
    ------------------------------------------------*/
    scrollup.click(function () {
      $('html, body').animate({
        scrollTop: '0px'
      }, 800);
      return false;
    });
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();
      if (scroll >= 200) {
        scrollup.fadeIn();
      } else {
        scrollup.fadeOut();
      }
    });

    /*------------------------------------------------
              Homepage Testimonial
    ------------------------------------------------*/
    var one_business_blocks_testimonial_Slider = new Swiper(".one-business-blocks-testimonial-swiper", {
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      600: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 3,
      },
      1100: {
        slidesPerView: 4,
      }
    },
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".one-business-blocks-testimonial-pagination",
      clickable: true,
    },
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".one-business-blocks-testimonial-swiper-button-next",
      prevEl: ".one-business-blocks-testimonial-swiper-button-prev",
    },
  });

});
