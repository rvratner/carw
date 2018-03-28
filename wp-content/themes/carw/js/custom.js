
const toggleList = function(){
	var toggleList = document.querySelectorAll('.toggle-list');
	toggleList.forEach(function(item){
		item.onclick = function(e) {
			if (jQuery(e.target).hasClass('toggle-list')) this.classList.toggle('open');
		};
	});
};

const anchorScroll = function(){
	var anchorScroll = document.querySelectorAll('.anchor-scroll');
	anchorScroll.forEach(function(item){
		item.onclick = function(e) {
			e.preventDefault();
			document.getElementById(e.target.dataset.href).scrollIntoView({behavior: 'smooth'});
		};
	});
};


var scrollPos;
const navScroll = function() {
	jQuery(window).on( 'scroll', function(){
		scrollPos = jQuery(window).scrollTop();
// 		console.log('Log: ',scrollPos);
		if (jQuery('body').is('.home')) {
			if (scrollPos > 240) {
			    jQuery('h1.logo').addClass("fixed ready");
			    jQuery('.main-navigation').removeClass("no-shadow");
			} else if (scrollPos > 160) {
			    jQuery('h1.logo').addClass("ready");
			    jQuery('.main-navigation').removeClass("no-shadow");
			} else {
			    jQuery('h1.logo').removeClass("fixed ready");
			    jQuery('.main-navigation').addClass("no-shadow");
			}
		}
	});
}

document.onready = function() {

	toggleList();
	anchorScroll();
	navScroll();

	// smooth scroll with #hash and history update
	jQuery('a[href*=#]:not([href=#])').click(function() {
		var targetId = this.hash;
		var theTarget = jQuery(targetId);
		var customOffset = 0;

		// if the target #id exists
		if (theTarget.length) {
			var targetOffset = (theTarget.offset().top);
			var stateData = {
				path: window.location.href,
				scrollTop: targetOffset
			};
			window.history.replaceState(stateData, '', targetId);
			window.history.pushState(stateData, '', targetId);
			jQuery('html, body').animate({scrollTop: targetOffset}, 1000);

			return false;
		}
	});

	if (jQuery('.accordion').length) {
		jQuery('.accordion .accordion-content').hide();
		jQuery('.accordion .accordion-title').on('click', function() {
			if (jQuery(this).hasClass('open')) {
				jQuery(this).removeClass('open').next('.accordion-content').slideUp(500).removeClass('open');
			} else {
/*
				jQuery('.accordion .accordion-title').removeClass('open');
				jQuery('.accordion .accordion-content').slideUp(500);
*/
				jQuery(this).addClass('open').next('.accordion-content').slideDown(500).addClass('open');
/*
				var rowOffset = jQuery(this).parent('.accordion-section').offset().top;
				jQuery('html, body').animate({scrollTop: rowOffset-85}, 500);
*/
			}
		});
	}
};

