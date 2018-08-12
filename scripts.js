$(function(){

//Checking width of screen to determine which brand/logo to show

	if($(window).width() > 991){
			$("#c-brand").fadeIn(500);
			$("#r-brand").hide();
		}else{
			$("#c-brand").hide();
			$("#r-brand").fadeIn(500);
		}

//Hide toTopBtn then show when scrolled

	if($(window).scrollTop() >= 200){
		$("#toTopBtn").fadeIn();
	}else{
		$("#toTopBtn").fadeOut();
	}

});//End ready function


//Checking width of screen to determine which brand/logo to show

$(window).resize(function(){
	if($(window).width() > 991){
		$("#c-brand").fadeIn(500);
		$("#r-brand").hide();
	}else{
		$("#c-brand").hide();
		$("#r-brand").fadeIn(500);
	}
});

$(document).scroll(function(){
	if($(window).scrollTop() >= 200){
		$("#toTopBtn").fadeIn();
	}else{
		$("#toTopBtn").fadeOut();
	}
})

/********************************
* Setting links to smooth scroll
*********************************/
$('#toTopBtn').click(function(e){
	e.preventDefault();
	$('html, body').animate({scrollTop: 0}, "slow");
})

$('.servicesLink').click(function(e){
	$('html, body').animate({scrollTop: $("#services").offset().top}, "slow");
})

$('.testimonialsLink').click(function(e){
	e.preventDefault();
	$('html, body').animate({scrollTop: $("#testimonials").offset().top}, "slow");
})

$('.aboutLink').click(function(e){
	e.preventDefault();
	$('html, body').animate({scrollTop: $("#about").offset().top}, "slow");
})

$('.contactLink').click(function(e){
	e.preventDefault();
	$('html, body').animate({scrollTop: $("#contact").offset().top}, "slow");
})
