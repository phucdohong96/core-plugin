(function ($, root, undefined) {
	
	$(function () {
			
		$(".rslides_custom").responsiveSlides({
		  auto: true,             // Boolean: Animate automatically, true or false
		  speed: 1000,            // Integer: Speed of the transition, in milliseconds
		  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
		  manualControls: '#pager-custom',     // Selector: Declare custom pager navigation

		});

	});

})(jQuery, this);
