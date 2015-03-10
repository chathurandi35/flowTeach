(function($) {

	'use strict';

	$(window).load(function(){
		// Container
		var $container = $('#foliowrap');
		$container.isotope({
			filter:'*',
			animationOptions: {
				duration: 750,
				easing: 'linear',
				queue: false,
			}
		});

		// Isotope Button
		$('#options li a').click(function(){
			var selector = $(this).attr('data-filter');
			$container.isotope({
				filter:selector,
				animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: false,
				}
			});
			return false;
		});

		var $optionSets = $('#options'),
			$optionLinks = $optionSets.find('a');

			$optionLinks.click(function(){
				var $this = $(this);
				// don't proceed if already selected
				if ($this.hasClass('selected')) {
					return false;
				}
				var $optionSet = $this.parents('#options');
				$optionSet.find('.selected').removeClass('selected');
				$this.addClass('selected'); 
			});
	});

})( jQuery );