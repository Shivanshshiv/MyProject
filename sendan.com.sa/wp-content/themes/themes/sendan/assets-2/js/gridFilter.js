define(['stampit', 'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/assets/js/portfolio-grid-filter/nav', 'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/assets/js/portfolio-grid-filter/items', 'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/assets/js/portfolio-grid-filter/gridView', 'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/assets/js/portfolio-grid-filter/selectors'], function (stampit, nav, items, gridView, selectors) {
	return stampit().compose(nav, items, gridView, selectors);
});
