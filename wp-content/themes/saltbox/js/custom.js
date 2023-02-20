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

// Remove Based on from Google Reviews Plugin
jQuery(document).ready(function() {
    var reviewsElement = jQuery('.wp-google-powered:first');
    var reviewsText = reviewsElement.text();
    if (reviewsText.includes('Based on')) {
        var newReviewsText = reviewsText.replace('Based on', '');
        reviewsElement.text(newReviewsText);
    }
});