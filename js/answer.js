let btn = document.querySelector('.mobMenu div');
let mobMenu = document.querySelector('.navmenu');

$(document).on('click','#t4>div',function(){
	$(this).find('p:last-child').toggleClass('displayNone');
	$(this).find('p:last-child').toggleClass('pActive');
	$(this).find('p:nth-child(2)').toggleClass('colorActive');
});

btn.addEventListener('touchend',function(){
	mobMenu.classList.toggle('displayBlock');
})