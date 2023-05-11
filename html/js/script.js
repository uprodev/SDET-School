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

});