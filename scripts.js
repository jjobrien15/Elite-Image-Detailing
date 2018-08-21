$(function(){
//Hide toTopBtn then show when scrolled

	if($(window).scrollTop() >= 200){
		$("#toTopBtn").fadeIn();
	}else{
		$("#toTopBtn").fadeOut();
	}

});//End ready function

$(document).scroll(function(){
	if($(window).scrollTop() >= 200){
		$("#toTopBtn").fadeIn();
	}else{
		$("#toTopBtn").fadeOut();
	}
});

/********************************
* Setting links to smooth scroll
*********************************/
$('#toTopBtn').click(function(e){
	e.preventDefault();
	$('html, body').animate({scrollTop: 0}, "slow");
});

$('.servicesLink').click(function(e){
	$('html, body').animate({scrollTop: $("#services").offset().top}, "slow");
});

$('.testimonialsLink').click(function(e){
	e.preventDefault();
	$('html, body').animate({scrollTop: $("#testimonials").offset().top}, "slow");
});

$('.aboutLink').click(function(e){
	e.preventDefault();
	$('html, body').animate({scrollTop: $("#about").offset().top}, "slow");
});

$('.contactLink').click(function(e){
	e.preventDefault();
	$('html, body').animate({scrollTop: $("#contact").offset().top}, "slow");
});

//Form validation
var err;
//checks whether to display error message or success message
function errcheck(err){
	if(err){
		$('#errmsg').css({display: "block"});
		$('#successmsg').css({display: "none"});
	}else{
		$('#errmsg').css({display: "none"});
		$('#successmsg').css({display: "block"});
	}
}
//Actual form validation
$('#submit-btn').click(function(e){
	e.preventDefault();
	//If successfull, remove all error classes, show success message and send email
	if($('#name').val() && $('#email').val() && $('#subject').val() && $('#body').val()){
		$('#name').removeClass('error');
		$('#email').removeClass('error');
		$('#subject').removeClass('error');
		$('#body').removeClass('error');
		err = false;
		errcheck(err);
		$('#email-form').submit();
		//else find errors and display error message and do not submit form
	}else{

		if(!$('#name').val()){
				$('#name').addClass('error');
				err = true;
		}else if($('#name').hasClass('error')){
				$('#name').removeClass('error');
				err = false;
		}

		if(!$('#email').val()){
				$('#email').addClass('error');
				err = true;
		}else if($('#email').hasClass('error')){
				$('#email').removeClass('error');
				err = false;
		}

		if(!$('#subject').val()){
				$('#subject').addClass('error');
				err = true;
		}else if($('#subject').hasClass('error')){
				$('#subject').removeClass('error');
				err = false;
		}

		if(!$('#body').val()){
				$('#body').addClass('error');
				err = true;
		}else if($('#body').hasClass('error')){
				$('#body').removeClass('error');
				err = false;
		}

			errcheck(err);
			return;
	}//End Else
});
