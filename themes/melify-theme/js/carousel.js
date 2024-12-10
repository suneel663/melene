jQuery(document).ready(function($) {
    function handleCarouselMove(event, positive = true) {
        const carousel = $(event.target).closest('.carousel').find('.carousel-container');
        const slide = carousel.find('.carousel-slide');
        const slideWidth = slide.width();
        
        carousel.animate({
            scrollLeft: positive ? carousel.scrollLeft() + slideWidth : carousel.scrollLeft() - slideWidth
        }, 300);
    }
    
    $('.carousel-arrow--prev').on('click', function(event) {
        handleCarouselMove(event, false);
    });
    
    $('.carousel-arrow--next').on('click', function(event) {
        handleCarouselMove(event, true);
    });
});