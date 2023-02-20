// Swipe Slider
jQuery(function() {
    var warehousesSlider = new Swiper ('#warehouses-slider', {
        initialSlide: 0,
        slidesPerView: 1,
        loop: true,
        allowTouchMove: true,
        spaceBetween: 18,
        navigation: {
            nextEl: '#warehouses-next',
            prevEl: '#warehouses-prev',
        }
    })
    var officeSuitesSlider = new Swiper ('#office-suites-slider', {
        initialSlide: 0,
        slidesPerView: 1,
        loop: true,
        allowTouchMove: true,
        spaceBetween: 18,
        navigation: {
            nextEl: '#office-suites-next',
            prevEl: '#office-suites-prev',
        }
    })
    var ourMembersSaySlider = new Swiper ('#ombs', {
        initialSlide: 0,
        slidesPerView: 1,
        loop: true,
        allowTouchMove: true,
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

// Filter to show members in differentes categories in meet our new team section
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

// Change between image and map iframe in get to know the meighborhood
jQuery(document).ready(function() {
    jQuery('#gmap_canvas').hide();

    jQuery('.btn-default').on('click', function(event) {
        event.preventDefault();
        jQuery('#gmap_canvas').toggle();
        jQuery('img.neighborhood').toggle();
    });
});