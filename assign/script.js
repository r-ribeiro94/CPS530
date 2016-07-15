$(".user").focus(function(){
	$(".user-help").slideDown(500);
}).blur(function(){
	$(".user-help").slideUp(500);
});

$(".pass").focus(function(){
	$(".pass-help").slideDown(500);
}).blur(function(){
	$(".pass-help").slideUp(500);
});

$(".e-mail").focus(function(){
	$(".email-help").slideDown(500);
}).blur(function(){
	$(".email-help").slideUp(500);
});