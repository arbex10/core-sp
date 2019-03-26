$(document).ready(function(){
	new WOW().init();
	
	$('#btn-contrast').on('click', function(){
		$('body').toggleClass('contraste');
		$('#espaco-representante').toggleClass('contraste');
	});
});

$(window).scroll(function(){
	if ($(document).scrollTop() > 300) {
		$('#fixed-menu').slideDown(200);
	} else {
		$('#fixed-menu').hide();
	}
});

var primeira = document.getElementById('menu-principal');
var segunda = document.getElementById('append-menu');

segunda.innerHTML = primeira.innerHTML;