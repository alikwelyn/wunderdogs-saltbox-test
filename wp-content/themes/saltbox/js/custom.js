// Swipe Slider
jQuery(function() {
    var ourMembersSaySlider = new Swiper ('.swiper-container', {
        initialSlide: 0,
        slidesPerView: 1,
        loop: true,
        allowTouchMove: false,
        navigation: {
            nextEl: '#depoimentos-next',
            prevEl: '#depoimentos-prev',
        }
    })
});
