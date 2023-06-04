$(document).ready(function () {
   // WOW Slider 
   new WOW().init();

   // Object Fit Images 
   objectFitImages();
   $('.jarallax').jarallax();

   // Owl Carousel
   if ($(".owl-carousel").length > 0) {
      $(".owl-carousel").owlCarousel({
         center: true,
         nav: false,
         loop: true,
         margin: 10,
         responsiveClass: true,
         responsive: {
            0: {
               items: 1
            },
            600: {
               items: 2,
               center: false
            },
            1000: {
               items: 3
            },
            1300: {
               items: 5
            }
         }
      });

   }
});

$(window).on('load', function () {

   setTimeout(function () {
      fixedtop_wow();
   }, 1000);

});

function fixedtop_wow() {
   if ($('.top-nav-collapse .wow').length > 0) {
      $wows = $('.top-nav-collapse .wow');
      $animations = [
         'bounce', 'bounceIn', 'bounceInUp', 'bounceInDown', 'bounceInRight', 'bounceInLeft',
         'bounceOut', 'bounceOutUp', 'bounceOutDown', 'bounceOutRight', 'bounceOutLeft',
         'fadeIn', 'fadeInUp', 'fadeInDown', 'fadeInRight', 'fadeInLeft',
         'fadeInUpBig', 'fadeInDownBig', 'fadeInRightBig', 'fadeInLeftBig',
         'fadeOut', 'fadeOutUp', 'fadeOutDown', 'fadeOutRight', 'fadeOutLeft',
         'fadeOutUpBig', 'fadeOutDownBig', 'fadeOutRightBig', 'fadeOutLeftBig',
         'flash', 'flipInX', 'flipInY', 'flipOutX', 'flipOutY', 'hinge',
         'lightSpeedIn', 'lightSpeedOut', 'pulse', 'rollIn', 'rollOut', 'rotateIn',
         'rotateInDownLeft', 'rotateInDownRight', 'rotateInUpLeft', 'rotateInUpRight',
         'rotateOut', 'rotateOutDownLeft', 'rotateOutDownRight', 'rotateOutUpLeft',
         'rotateOutUpRight', 'shake', 'slideInDown', 'slideInLeft', 'slideInRight',
         'slideOutLeft', 'slideOutRight', 'slideOutUp', 'swing', 'tada', 'wobble'
      ];

      $($wows).each(function () {
         $wow = $(this);
         $classes = $wow.attr("class").split(' ');


         if ($wow.css('visibility') == 'hidden') {

            // Check if any animations are defined in the classes. 
            $animation = $($animations).filter($classes);

            // Adding the animation to the element. 
            $($animation).each(function (i, e) {
               $wow.css('animation-name', $animation[i]);
               $wow.css('visibility', 'visible');
            });
         }
         console.log();
      });
   }
}
