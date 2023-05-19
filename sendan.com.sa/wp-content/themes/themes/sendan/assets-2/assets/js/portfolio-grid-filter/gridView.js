define(['stampit', 'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/assets/js/portfolio-grid-filter/generalView'], function (stampit, generalView) {
	return stampit().refs({
		rowHTML: '<div class="row"></div>',
	}).compose(generalView);
});
