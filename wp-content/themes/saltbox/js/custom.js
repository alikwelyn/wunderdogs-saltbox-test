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

// Open popup on click or hover zoom class in spaces cards
jQuery(document).ready(function() {
    var zoomElement = jQuery('.zoom');

    zoomElement.on('click', function(event) {
        event.preventDefault();
        jQuery('#zoomModal').modal('show');
    });
    
    zoomElement.on('mouseenter', function() {
        jQuery('#zoomModal').modal('show');
    });
});

// testing
jQuery(document).ready(function() {
    jQuery('.col-md-3').hide();
    
    jQuery('a.active').each(function() {
        var category = jQuery(this).text();
        jQuery('.col-md-3[data-category="' + category + '"]').show();
    });
    
    jQuery('ul li a').click(function(event) {
        event.preventDefault();
        jQuery('.col-md-3').hide();
        var category = jQuery(this).text();
        jQuery('.col-md-3[data-category="' + category + '"]').show();
        jQuery('ul li a').removeClass('active');
        jQuery(this).addClass('active');
    });
});