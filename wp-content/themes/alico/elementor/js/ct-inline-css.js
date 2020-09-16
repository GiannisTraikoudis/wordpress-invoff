( function( $ ) {
    /**
     * @param $scope The Widget wrapper element as a jQuery element
     * @param $ The jQuery alias
     */
    var WidgetCTIlineHandler = function( $scope, $ ) {
    	
        var _inline_css = "<style>";
	    $scope.find('.ct-inline-css').each(function () {
	        var _this = $(this);
	        _inline_css += _this.attr("data-css") + " ";
	        _this.remove();
	    });
	    _inline_css += "</style>";
	    $('head').append(_inline_css);

    };

    // Make sure you run this code under Elementor.
    $( window ).on( 'elementor/frontend/init', function() {
        elementorFrontend.hooks.addAction( 'frontend/element_ready/ct_text_editor.default', WidgetCTIlineHandler );
        elementorFrontend.hooks.addAction( 'frontend/element_ready/ct_image_animate.default', WidgetCTIlineHandler );
        elementorFrontend.hooks.addAction( 'frontend/element_ready/ct_feature_carousel.default', WidgetCTIlineHandler );
        elementorFrontend.hooks.addAction( 'frontend/element_ready/ct_mailchimp_form.default', WidgetCTIlineHandler );
    } );
} )( jQuery );