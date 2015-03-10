(function($) {

	'use strict';

		$(window).load(function(){
		// MASONRY
		$('#masonry').masonry({
			columnWidth: 585,
			itemSelector:'.tbox'
		});

		$('.griddy').masonry({
			columnWidth: 390,
			itemSelector:'.post'
		});

	});
})( jQuery );