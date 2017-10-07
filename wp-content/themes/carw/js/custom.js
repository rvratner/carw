
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


const navScroll = function() {
	var nav = jQuery('.menu-main-container');
	jQuery(window).on( 'scroll', function(){
	var scrollTop = jQuery(window).scrollTop();
	if (scrollTop > 640) {
	    nav.addClass("fixed");
	} else {
	    nav.removeClass("fixed");
	}	  
	
});
}

document.onready = function(){
	toggleList();
	anchorScroll();
	navScroll();
};

