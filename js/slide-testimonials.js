$(document).ready(function()
{ 
    
    // owl-carousel
    
    $('.owl-carousel.owl-testimonials').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            1000:{
                items:2
            }
        }
    });  
});