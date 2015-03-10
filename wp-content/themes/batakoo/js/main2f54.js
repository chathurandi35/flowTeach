(function($) {

	'use strict';

	$(document).ready(function(){
		// SUBMENU ARROW
		$('.site-navigation li:has(ul)').addClass('has-child');

		// SPLIT WORDS
		$('.home-title, .widget-title').splitWords(1);

		// EQUAL HEIGHT
		function equalHeight(group) {
			var tallest = 0;
			group.each(function() {
				var thisHeight = $(this).height();
				if(thisHeight > tallest) {
					tallest = thisHeight;
				}
			});
			group.height(tallest);
		}
		
		equalHeight($(".col-service"));

	});

	$(window).load(function(){

                // MENU SCROLL
        $(window).scroll(function () {
            var $this = $(this);
            if ($this.scrollTop() > 240) {
                $('body').addClass('scroll-run');
            } else if($this.scrollTop() < 240){
                $('body').removeClass('scroll-run');
            }
            delete $this.this;
        });

		// PRELOADER
		$('#preloader').fadeOut('slow',function(){$(this).remove();});


    $('#myTab a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
    })


  $('#sidebar-carousel').flexslider({
    animation: "slide",
    controlNav: false,  
  });

    $(".flex-wrapper .flexslider").flexslider( {
                    slideshow : true,
                    animation : "fade",
                    pauseOnHover: true,
                    animationSpeed : 400,
                    smoothHeight : true,
                    directionNav: true,
                    controlNav: false

    });

    });
		
})( jQuery );






/* Splitting word for heading (originally from Stack Overflow http://stackoverflow.com/questions/5151989/how-to-wrap-a-class-around-the-first-half-of-a-headline-with-jquery ) */
(function($) {
    $.fn.splitWords = function(index) {
        return this.each(function() {
            var el = $(this),
                i, first, words = el.text().split(/\s/);
            if (typeof index === 'number') {
                i = (index > 0) ? index : words.length + index;
            }
            else {
                i = Math.floor(words.length / 2);
            }
            first = words.splice(0, i);
            el.empty().
                append(makeWrapElem(1, first)).
                append(makeWrapElem(2, words));
        });
    };
    function makeWrapElem(i, wordList) {
        return $('<span class="wrap-' + i + '">' + wordList.join(' ') + ' </span>');
    }
}(jQuery));



       