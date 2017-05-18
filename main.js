var burger_menu = document.querySelector('div.burger');
var ul = document.querySelector('ul.closed');

burger_menu.addEventListener('click', function(){
	ul.classList.toggle('closed');
});