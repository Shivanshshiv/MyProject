define(['stampit', 'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/assets/js/portfolio-grid-filter/navSlider', 'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/assets/js/portfolio-grid-filter/items', 'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/assets/js/portfolio-grid-filter/sliderView', 'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/assets/js/portfolio-grid-filter/selectors'], function (stampit, navSlider, items, sliderView, selectors) {
	return stampit().compose(navSlider, items, sliderView, selectors);
});
