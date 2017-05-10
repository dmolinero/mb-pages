
jQuery(document).ready(function($) {

// Set up the controller that we'll use for all of our ScrollMagic animation
var controller = new ScrollMagic.Controller({container: "#iScroll-wrapper"});

	/**
	* Header Animation
	*/

    var titleFade = new ScrollMagic.Scene ({
		triggerElement: '#go-icons',
		triggerHook: .6,
		duration: '20%'
	})
	.setTween(TweenMax.from( '.go-icon', 1, {css: {'opacity' : '0'}, ease:Linear.easeNone}))
	.addTo(controller);


}); // End Ready