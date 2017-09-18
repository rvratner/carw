
const toggleList = function(){
	var toggleList = document.querySelectorAll('.toggle-list');
	toggleList.forEach(function(item){
		item.onclick = function(e) {
			this.classList.toggle('open');
		};
	});
};

const anchorScroll = function(){
	var anchorScroll = document.querySelectorAll('.anchor-scroll');
	anchorScroll.forEach(function(item){
		item.onclick = function(e) {
			e.preventDefault();
			console.log(e);
			document.getElementById(e.target.dataset.href).scrollIntoView({behavior: 'smooth'});
		};
	});
};


var scrollTimeout;
var throttle = 250;


jQuery(window).on( 'scroll', function(){
	if (scrollTimeout) return false;
	 scrollTimeout = setTimeout(function () {
	var nav = jQuery('.main-navigation')
	if (this.scrollY > 681) {
	    nav.addClass("fixed");
	} else {
	    nav.removeClass("fixed");
	}	  
	    scrollTimeout = null;
    }, throttle);
	
});

document.onready = function(){
	toggleList();
	anchorScroll();
};

