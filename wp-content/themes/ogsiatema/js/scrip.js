$( document ).ready(function(){
  $(".loading").hide();
  $(".button-collapse").sideNav();
  $('.slider').slider({
    indicators:false,
    height: 600,
  });
  $('.scrollspy').scrollSpy();
  $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
    }
    );
  $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });

  //MENU FIJO LUEGO DE SCROLL
  posicionarMenu();

  $(window).scroll(function() {
      posicionarMenu();
  });

  function posicionarMenu() {
    var altura_del_header = $('.header').outerHeight(true);
    var altura_del_menu = $('.menu-fijo').outerHeight(true);

    if ($(window).scrollTop() >= altura_del_header){
        $('.menu-fijo').addClass('fixed');
    } else {
        $('.menu-fijo').removeClass('fixed');
    }
  }

/*SLIDER
   $('.slider2').bxSlider({
      slideWidth: 300,
      minSlides: 1,
      maxSlides: 5,
      slideMargin: 10,
      moveSlides: 1,
    });*/

  //ANIMACION
  var options = [
     {selector: '.paquetes-slider', offset: 200, callback: function(el) { Materialize.fadeInImage($(el)); } },
      {selector: '.lista-medios-pago', offset: 200, callback: function(el) { Materialize.fadeInImage($(el)); } },
      {selector: '.playas-evento-slider', offset: 250, callback: function(el) { Materialize.fadeInImage($(el)); } },
      {selector: '.playas-destino-slider', offset: 300, callback: function(el) { Materialize.fadeInImage($(el)); } },
      {selector: '.costa-evento-slider', offset: 500, callback: function(el) { Materialize.fadeInImage($(el)); } },
      {selector: '.sierra-evento-slider', offset: 500, callback: function(el) { Materialize.fadeInImage($(el)); } },
      {selector: '.selva-evento-slider', offset: 500, callback: function(el) { Materialize.fadeInImage($(el)); } },

    ];

      Materialize.scrollFire(options);

  //PARALLAX
   $('.parallax').parallax();

   //ALTURA
    $(".height-total").css({"height":$(window).height()+"px"});

  //SCROOL LENTO
  /* Select all links with hashes
  $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
              return false;
            } else {
              $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
              $target.focus(); // Set focus again
            };
          });
        }
      }
    });*/

    //NUEVO SCROLL LENTO
    $("#miBoton").click(function () {
      $('html,body').animate({
        scrollTop: $("#nosotros").offset().top
      }, 2000);
    });

    //MISMA ALTURA
    function equalHeight(group) {
    tallest = 0;
    group.each(function() {
    thisHeight = $(this).height();
    if(thisHeight > tallest) {
    tallest = thisHeight;
    }
    });
    group.height(tallest);
    }

    $(document).ready(function() {
    equalHeight($(".altura-igual-1"));
    });
    $(document).ready(function() {
    equalHeight($(".altura-igual-2"));
    });
    $(document).ready(function () {
      equalHeight($(".altura-igual-convocatoria-titulo"));
    });
    $(document).ready(function () {
      equalHeight($(".altura-igual-convocatoria-contenido"));
    });
    $(document).ready(function () {
      equalHeight($(".altura-igual-noticia-titulo-1"));
    });
    $(document).ready(function () {
      equalHeight($(".altura-igual-noticia-contenido-1"));
    });
     $(document).ready(function () {
       equalHeight($(".altura-igual-noticia-titulo-2"));
     });
     $(document).ready(function () {
       equalHeight($(".altura-igual-noticia-contenido-2"));
     });


    //Swiper efects
    
    
    
   var swiperH1 = new Swiper('.swiper-container-horizontal-1', {
     spaceBetween: 50,
     pagination: {
       el: '.swiper-pagination-h',
       clickable: true,
     },
     autoplay: {
       delay: 3500,
       disableOnInteraction: false,
     },
   });

    var swiperH2 = new Swiper('.swiper-container-horizontal-2', {
      spaceBetween: 50,
      pagination: {
        el: '.swiper-pagination-h',
        clickable: true,
      },
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
    });

    var swiperH3 = new Swiper('.swiper-container-horizontal-3', {
      spaceBetween: 50,
      pagination: {
        el: '.swiper-pagination-h',
        clickable: true,
      },
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
    });

    var swiperV = new Swiper('.swiper-container-v', {
          direction: 'vertical',
          spaceBetween: 50,
          pagination: {
            el: '.swiper-pagination-v',
            clickable: true,
          },
    });

})
