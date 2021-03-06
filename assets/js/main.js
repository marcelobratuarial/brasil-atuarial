(function ($)
  { "use strict"
 

/* 2. sticky And Scroll UP */
    $(window).on('scroll', function () {
      var scroll = $(window).scrollTop();
      if (scroll < 50) {
        $(".header-sticky").removeClass("sticky-bar");
        $('#back-top').fadeOut(500);
      } else {
        $(".header-sticky").addClass("sticky-bar");
        $('#back-top').fadeIn(500);
      }
    });

  // Scroll Up
    $('#back-top a').on("click", function () {
      $('body,html').animate({
        scrollTop: 0
      }, 800);
      return false;
    });
  

/* 3. slick Nav */
// mobile_menu
    var menu = $('ul#navigation');
    if(menu.length){
      menu.slicknav({
        prependTo: ".mobile_menu",
        closedSymbol: '+',
        openedSymbol:'-'
      });
    };

/* 4. MainSlider-1 */
    // h1-hero-active
    function mainSlider() {
      var BasicSlider = $('.slider-active');
      BasicSlider.on('init', function (e, slick) {
        var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
        doAnimations($firstAnimatingElements);
      });
      BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
        var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
        doAnimations($animatingElements);
      });
      BasicSlider.slick({
        autoplay: false,
        autoplaySpeed: 5000,
        dots: false,
        fade: true,
        arrows: false, 
        prevArrow: '<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',
        responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
            }
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false
            }
          }
        ]
      });

      function doAnimations(elements) {
        var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        elements.each(function () {
          var $this = $(this);
          var $animationDelay = $this.data('delay');
          var $animationType = 'animated ' + $this.data('animation');
          $this.css({
            'animation-delay': $animationDelay,
            '-webkit-animation-delay': $animationDelay
          });
          $this.addClass($animationType).one(animationEndEvents, function () {
            $this.removeClass($animationType);
          });
        });
      }
    }
    mainSlider();

/* 5. Testimonial Active*/

/* 4. Testimonial Active*/
    var testimonial = $('.h1-testimonial-active');
    if(testimonial.length){
    testimonial.slick({
        dots: false,
        infinite: true,
        speed: 1000,
        autoplay:true,
        loop:true,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
              arrow:false
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows:false
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows:false,
            }
          }
        ]
      });
    }

// $(".slider-area .hero-cap h2").on("click", function() {
//   if($(this).hasClass("opcty")) {
//     $(this).removeClass("opcty")
//   } else {
//     $(this).addClass("opcty")
//   }
// })

/* 6. Nice Selectorp  */
  var nice_Select = $('select');
    if(nice_Select.length){
      nice_Select.niceSelect();
    }

/* 7. data-background */
    $("[data-background]").each(function () {
      $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
      });


/* 10. WOW active */
    new WOW().init();

// 11. ---- Mailchimp js --------//  
    // function mailChimp() {
    //   $('#mc_embed_signup').find('form').ajaxChimp();
    // }
    // mailChimp();


// 12 Pop Up Img
    var popUp = $('.single_gallery_part, .img-pop-up');
      if(popUp.length){
        popUp.magnificPopup({
          type: 'image',
          gallery:{
            enabled:true
          }
        });
      }
/* 13. counterUp*/
    // $('.counter').counterUp({
    //   delay: 10,
    //   time: 3000
    // });

/* 14. Datepicker */
  $('#datepicker1').datepicker();

// 15. Time Picker
  $('#timepicker').timepicker();


  $(".search-icon").on('click', function() {
    $("#search-form").trigger('submit');
  });
  $("#search-form").on('submit', function (e) {
    e.preventDefault();
    var term = $("#search-term").val();
    window.location.href = base_url + '/blog/q/'+term
    // console.log('teste', term);
  });
  var isMobile;
  $(window).on('resize', function() {
    // console.log("redime")
    isMobile = window.matchMedia("(max-width: 768px)").matches;
    
  });
  function removeClone(){
    // $(e)[0].remove()
    // $(e)[0].remove()
    console.log($(document).find(".single-cat-clone").length)
    $(document).find(".single-cat-clone").remove()
    console.log($(document).find(".single-cat-clone").length)
    

      if($(document).find(".single-cat-clone").length > 0) {
        console.log("tenta novamente")
        removeClone()
      } else { 
        console.log("removidos")
        return true
      }
  }
  $(".single-cat").on("click", function () {
    // console.warn(isMobile)
    const el = this
    // var clone = $(this);
    // console.log(this)
    // console.log(clone)
    var p = new Promise((resolve, reject) => {
      // var r = removeClone()
      $(".single-cat").not(el).removeClass('reading')
      // if(r) {
      //   // $(".single-cat").not(el).removeClass('reading')
      //   // console.log(el)
      //   // $(el).clone().addClass("single-cat-clone").insertAfter(el)
      // }
      resolve()
      
    }).then(() => {
      // $(".single-cat").not(el).removeClass('reading')
      // console.log(el)
      // $(el).clone().addClass("single-cat-clone").insertAfter(el)
      // $clone.appendTo(el).addClass("single-cat-clone");
      // $(".single-cat-clone").remove()
    }).then(() => {
      
      // .removeClass('reading')
      if($(el).hasClass("reading")) {
        $(el).removeClass('reading')
        // var r = removeClone()
        // console.log(r)
      } else {
        $(el).addClass('reading')
      }
    })
    // if(alert("mobile"))
  })
})(jQuery);
