$(".header button").click(feedback);
$(".price button").click(feedback);

function feedback(){
	let goto = document.querySelector('#feedback_click');
	$("html,body").stop().animate({scrollTop: $(goto).offset().top-250},1000);
	$('#feedback_name').focus();
}