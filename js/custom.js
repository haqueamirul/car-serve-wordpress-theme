/*...................................................
                    Sticky_nav bar 
....................................................*/ 
$(document).ready(function(){
    $("#sticky_header").sticky({topSpacing:0});
 });
/*.............................................................
                    Magnific PopUp
............................................................*/
$(document).ready(function(){ 
    $('.view').magnificPopup({
      type: 'image',
      gallery: {
        enabled: true
      },
    });
});
/*.............................................................
                    Magnific PopUp
............................................................*/
$(document).ready(function(){ 
    $('.client_slider').owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        animateOut: 'zoomOutLeft',
        animateIn: 'zoomInRight',
        autoplay:true,
        autoplayTimeout:5000,
        smartSpeed:1500,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
});