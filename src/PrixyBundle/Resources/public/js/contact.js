$(document).ready(function(){
	$('#contactForm').submit(function(e){
		e.preventDefault();
		$.post( $.('#contactForm').attr('action'), $( "#contactForm" ).serialize() )
			.done(function(){
				$("span.sent").css("display",'block');
			});
	});
});