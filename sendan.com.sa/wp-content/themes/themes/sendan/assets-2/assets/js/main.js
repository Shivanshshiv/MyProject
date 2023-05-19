/* global BoltsSliderCaptions, BoltsVars */

// config
require.config( {
	paths: {
	  jquery:     'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/assets/js/fix.jquery',
    underscore: 'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/assets/js/fix.underscore',
    util:       'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/bower_components/bootstrap/dist/js/umd/util',
    carousel:   'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/bower_components/bootstrap/dist/js/umd/carousel',
    collapse:   'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/bower_components/bootstrap/dist/js/umd/collapse',
    dropdown:   'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/bower_components/bootstrap/dist/js/umd/dropdown',
    modal:      'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/bower_components/bootstrap/dist/js/umd/modal',
    scrollspy:  'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/bower_components/bootstrap/dist/js/umd/scrollspy',
    tab:        'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/bower_components/bootstrap/dist/js/umd/tab',
    stampit:    'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/bower_components/stampit/stampit',
	}
} );

require.config( {
	baseUrl: ""
} );

require( [
		'jquery',
		'underscore',
		'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/assets/js/utils/isElementInView',
		'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/assets/js/utils/objectFitFallback',
		'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/assets/js/WidgetLine',
		'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/assets/js/portfolio-grid-filter/gridFilter',
		'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/assets/js/portfolio-grid-filter/sliderFilter',
		'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/assets/js/utils/easeInOutQuad',
		'carousel',
		'collapse',
		'tab'		
], function ( $, _, isElementInView, objectFitFallback, WidgetLine, gridFilter, sliderFilter, easeInOutQuad, NumberCounter ) {
	'use strict';

	/**
	 * Footer widgets fix
	 */
	$( '.col-lg-__col-num__' ).removeClass( 'col-lg-__col-num__' ).addClass( 'col-lg-3' );

	/**
	 * Number Counter Widget JS code
	 */
	// Get all number counter widgets
	var $counterWidgets = $( '.number-counters' );

	if ( $counterWidgets.length ) {

		// jQuery easing function: easeInOutQuad, for use in NumberCounter
		easeInOutQuad();

		$counterWidgets.each( function () {
			new NumberCounter( $( this ) );
		} );
	}


	
	/**
	 * Portfolio grid filtering
	 */
	$('.portfolio-grid').each(function () {
		var hash = window.location.hash,
			portfolioGrid;

		if ('slider' === $(this).data('type')) {
			portfolioGrid = sliderFilter({
				$container: $(this),
			});
		}
		else {
			portfolioGrid = gridFilter({
				$container: $(this),
			});
		}

		// Getting on visit or if "All" nav button is disabled.
		if ( new RegExp('^#' + portfolioGrid.hashPrefix).test(hash) ) {
			$(this).find('a[href="' + hash.replace(portfolioGrid.hashPrefix, '') + '"]').trigger('click');
		}
		else if ( $(this).find('.portfolio-grid__nav-item').first().hasClass('is-disabled') ) {

			// Trigger click for the second nav grid item.
			$(this).find('.portfolio-grid__nav-item:nth-child(2)').children('.portfolio-grid__nav-link').trigger('click');
		}

		// Recalculate the mobile nav height, if the "All" nav button is disabled. Fix for both cases above.
		if ( ! portfolioGrid.isDesktopLayout() && $(this).find('.portfolio-grid__nav-item').first().hasClass('is-disabled') ) {
			portfolioGrid.initNavHolderHeight();
		}
	});

	

} );
