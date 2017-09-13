
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
			// use scrollto
			// document.getElementById(e.target.dataset.href).scrollTo({behavior: 'smooth'});
			document.getElementById(e.target.dataset.href).scrollIntoView({behavior: 'smooth'});
		};
	});
};


document.onready = function(){
	toggleList();
	anchorScroll();
};

