define(['jquery', 'stampit', 'http://dhoolo.com/Sendan/wp-content/themes/sendan/assets-2/assets/js/portfolio-grid-filter/generalView'], function ($, stampit, generalView) {
	return stampit({
		props: {
			rowHTML:           '<div class = "carousel-item"><div class="row"></div></div>',
			appendItemsInside: '.row',
			arrowsSel:         '.js-wpg-arrows',
		},

		methods: {
			afterRendered: function () {
				// first carousel-item is active in slider
				this.$itemsContainer.children().first().addClass('active');

				return this;
			}
		},
	}).compose(generalView);
});
