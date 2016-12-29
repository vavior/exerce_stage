$.validator.setDefaults({
	highlight:function(element){
		$(element).parent('div').siblings('label').addClass('has-error');
	},
	unhighlight:function(element){
		$(element).parent('div').siblings('label').removeClass('has-error');
	},
	errorElement:"span",
	errorClass:"help-block",
	submitHandler:function(form){
		form.submit();
	}
});

$(document).ready(function() {
	$('.form_login').click(function() {
	  	$("#form_log").validate({
			rules:{
				email:{
					required:true,
					email:true
				},
				pw:"required"
			},
			messages:{
				email:"Entrez une adresse email valide",
				pw:"Entrez votre mot de passe"
			}
		});
	});
		

	var string=$('#removeBR').html();
	if ($(window).width()<768){
		noBR=string.replace("<br>", "");
		$('#removeBR').html(noBR);
		$('#email[placeholder]').attr('placeholder','Your email address');
		$('#pw[placeholder]').attr('placeholder','Your password');
	}

	$(window).resize(function(){
	    if ($(window).width()<768){
			noBR=string.replace("<br>", "");
			$('#removeBR').html(noBR);
			$('#email[placeholder]').attr('placeholder','Your email address');
			$('#pw[placeholder]').attr('placeholder','Your password');
		} else {
			$('#removeBR').html(string);
			$('#email[placeholder]').attr('placeholder','Type here your email address');
			$('#pw[placeholder]').attr('placeholder','Type here your password');
		}
	});
});

