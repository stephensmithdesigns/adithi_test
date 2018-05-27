(function($) {
    var $window = $(window),
        $stick = $( ".stickysidebar" );

    function resize() {
        if ($window.width() > 768) {
            return $stick.addClass('stick');
        }

        $stick.removeClass('stick');
    }

    $window
        .resize(resize)
        .trigger('resize');
})(jQuery);

jQuery(function() {
    var offset = jQuery(".stick").offset();
    var topPadding = 30;

    jQuery(window).scroll(function() {
        if (jQuery(window).scrollTop() > offset.top) {
            jQuery(".stick").stop().animate({
                marginTop: jQuery(window).scrollTop() - offset.top + topPadding
            });
        } else {
            jQuery(".stick").stop().animate({
                marginTop: 0
            });
        }
    });
});
