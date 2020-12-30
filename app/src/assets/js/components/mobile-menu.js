document.addEventListener("DOMContentLoaded", function(){
	var hamburger   = document.querySelector('#hambBut');
	var mobile_menu = document.querySelector('#header__mobile-nav');

	hamburger.onclick = function() {
		hamburger.classList.toggle('open');
		mobile_menu.classList.toggle('open');
	}
});