jQuery(document).ready(function ($) {


  $(".top-line").sticky({
    topSpacing:0
  });

  /* mob-menu*/
  $(document).on('click', '.open-menu a', function (e){
    e.preventDefault();
    $(this).toggleClass('is-open')

    if($(this).hasClass('is-open')){
      $.fancybox.open( $('#menu-responsive'), {
        touch:false,
        autoFocus:false,
        beforeClose: function (e){
          $('html').removeClass('is-menu');
        }
      });

      setTimeout(function() {
        $('html').addClass('is-menu');

      }, 100);
    }else{
      $('html').removeClass('is-menu');
      $.fancybox.close();
    }

  });

  /* form label*/
  $('.input-wrap input, .input-wrap-text textarea').change(function(){
    myInput = $(this);
    tmpval = $(this).val();
    if(tmpval == '') {
      $(myInput).siblings('label').removeClass('is-active');
    } else {
      $(myInput).siblings('label').addClass('is-active');
    }
  });
  $('.input-wrap input, .input-wrap-text textarea').focus(function (e) {
    $(this).siblings('label').addClass('is-focus')
  });
  $('.input-wrap input, .input-wrap-text textarea').blur(function (e) {
    $(this).siblings('label').removeClass('is-focus')
  });

  /*slider*/
  var swiperWork = new Swiper(".work-slider", {
    slidesPerView: "auto",
    spaceBetween: 0,
    pagination: {
      el: ".work-pagination",
      type: "progressbar",
    },

  });

  /*accordion*/
  $(function() {
    $(".accordion > .accordion-item.is-active").children(".accordion-panel").slideDown();
    $(document).on('click', '.accordion > .accordion-item .accordion-thumb', function (e){
      $(this).parent('.accordion-item').siblings(".accordion-item").removeClass("is-active").children(".accordion-panel").slideUp();
      $(this).parent('.accordion-item').toggleClass("is-active").children(".accordion-panel").slideToggle("ease-out");
      let topFix = $(this).offset().top;
      setTimeout(function() {
        $('body,html').animate({scrollTop: topFix - 100}, 1000);
      }, 500);

    })
  });

  /*slider*/
  var swiperReviews = new Swiper(".reviews-slider", {
    slidesPerView: 2,
    spaceBetween: 30,
    pagination: {
      el: ".reviews-pagination",
      clickable: true,
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      991: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
    },
  });

  /*slider*/
  var swiperVideo = new Swiper(".video-slider", {
    slidesPerView: 2,
    spaceBetween: 30,
    pagination: {
      el: ".video-pagination",
      clickable: true,
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      680: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
    },
  });
});