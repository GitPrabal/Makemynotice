/*
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
*/

(function($) {

	

	$(function() {

		var	$window = $(window),
			$body = $('body'),
			$header = $('#header');

		// Disable animations/transitions until the page has loaded.
			$body.addClass('is-loading');

			$window.on('load', function() {
				window.setTimeout(function() {
					$body.removeClass('is-loading');
				}, 100);
			});

		// Fix: Placeholder polyfill.

		// Prioritize "important" elements on medium.

		// Scrolly.
			// $('.scrolly').scrolly({
			// 	offset: function() {
			// 		return $header.height();
			// 	}
			// });

		// Menu.
			// $('#menu')
			// 	.append('<a href="#menu" class="close"></a>')
			// 	.appendTo($body)
			// 	.panel({
			// 		delay: 500,
			// 		hideOnClick: true,
			// 		hideOnSwipe: true,
			// 		resetScroll: true,
			// 		resetForms: true,
			// 		side: 'right'
			// 	});

	});

})(jQuery);


$("#open_modal").click(function(){
	$("#loginModal").modal('show');
});

$("#file_new_notice").click(function(){
	var base_url = window.location.origin;
	window.location.href = base_url+"/index.php/FileNotice/fileNewNotice";
})

$("#loginUser").click(function(){

	var loginEmail         = $("#loginEmail").val();
	var loginPass          = $("#loginPass").val();
	var redirectNoticeName = $("#noticeName").val();
	var base_url = window.location.origin;

	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;


	if(loginEmail == ''){
		alert("Email is not valid");
		$("#loginEmail").focus();
		return;
	}

	if(!(regex.test(loginEmail))) {
		alert("Email is not valid");
		$("#loginEmail").focus();
		return;
	}

	if(loginPass == ''){
		alert("Password can not be blanked");
		$("#loginPass").focus();
		return;
	}

	$(".error-msg").hide();

	$.ajax({
        url: base_url+"/index.php/User/login",
        type: "post",
        data:{'email':loginEmail,'password':loginPass},
        success: function (response) {
        	if( response==1 || response== '1' ){
        		$(".loader").show();
        		setTimeout(function(){ 
        			window.location.href = base_url+"/index.php/User/userHome"
        			 }, 2000);

        	}else{

                $(".loader").hide();
        		$("#loginEmail").val('');
        		$("#loginPass").val('');
        		$(".error-msg").show();
        		$(".error-msg").html("<p>Invalid Credentials!</p>");
        		return;
        	}
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });

})

$("#userSignUp").click(function(){
	
	var first_name   =  $("#first_name").val();
	var last_name    =  $("#last_name").val();
	var email        =  $("#email").val();
	var phone_number =  $("#phone_number").val();
	var password     =  $("#password").val();
	var dob          =  $("#dob").val();
	var gender       =  $('input[name=gender]:checked').val();
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var phone = $("#phone_number").val();
	var intRegex = /[0-9 -()+]+$/;
	var letters = /^[A-Za-z]+$/;


	var today = new Date();
    var birthDate = new Date(dob);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age = age - 1;
    }

	if(first_name == ''){
		$(".error-msg1").show();
		$(".error-msg1").html("Please Provide Valid Name");
		$("#first_name").focus();
		$('.error-msg1').delay(3000).fadeOut('slow');
		return;

	}

	if( !(first_name.match(letters)) ){
		$(".error-msg1").show();
		$(".error-msg1").html("Please Provide Valid Name");
		$("#first_name").focus();
		$('.error-msg1').delay(3000).fadeOut('slow');
		return;
	}

	if(last_name == ''){
		$(".error-msg1").show();
		$(".error-msg1").html("Please Provide Valid Name");
		$("#last_name").focus();
		$('.error-msg1').delay(3000).fadeOut('slow');
		return;
	}

	if( !(last_name.match(letters)) ){

		$(".error-msg1").show();
		$(".error-msg1").html("Please Provide Valid Name");
		$("#last_name").focus();
		$('#getStarted').scrollTop(0);
		$('.error-msg1').delay(3000).fadeOut('slow');
		return;
	}

	if(email == ''){

		$(".error-msg1").show();
		$(".error-msg1").html("Please Provide Valid Email");
		$("#email").focus();
		$('#getStarted').scrollTop(0);
		$('.error-msg1').delay(3000).fadeOut('slow');
		return;
	}

	if(!(regex.test(email))) {

		$(".error-msg1").show();
		$(".error-msg1").html("Please Provide Valid Email");
		$("#email").focus();
		$('#getStarted').scrollTop(0);
		$('.error-msg1').delay(3000).fadeOut('slow');
		return;

	}
    
	if((phone.length < 10) || (!intRegex.test(phone)))
	{
	    $(".error-msg1").show();
		$(".error-msg1").html("Please Provide Valid Number");
		$("#phone").focus();
		$('#getStarted').scrollTop(0);
		$('.error-msg1').delay(3000).fadeOut('slow');
		return;
	}
	if( (phone.length != 10 ) )
	{
	    $(".error-msg1").show();
		$(".error-msg1").html("Please Provide Valid Number");
		$("#phone").focus();
		$('#getStarted').scrollTop(0);
		$('.error-msg1').delay(3000).fadeOut('slow');
		return;
	}
	if(password == ''){

		$(".error-msg1").show();
		$(".error-msg1").html("Please Provide Valid Password");
		$("#password").focus();
		$('#getStarted').scrollTop(0);
		$('.error-msg1').delay(3000).fadeOut('slow');
		return;
	}

	if(dob == ''){

		$(".error-msg1").show();
		$(".error-msg1").html("Please Provide Valid Email");
		$("#dob").focus();
		$('#getStarted').scrollTop(0);
		$('.error-msg1').delay(3000).fadeOut('slow');
		return;
	}

	if(age < 18){
		alert("Age Should be greater than 18 years");
		return;
	}


	var base_url = window.location.origin;
	
	$.ajax({
    url: base_url+"/index.php/User/",
    type: "post",
    data:{'first_name':first_name,'last_name':last_name,'email':email,'password':password,'dob':dob,'age':age,'phone':phone,'gender':gender},
    dataType: 'json',
    cache: false,

    success: function (response) {

		if(response.status=='404'){

		$(".error-msg1").show();
		$(".error-msg1").html(response.msg);

	    $('#getStarted').animate({
          scrollTop: $(".error-msg1").offset().top
        }, 800);

        $("#"+response.focus).focus();
	    return;

		}

        $(".error-msg1").hide();
        $(".success-msg").show();
        $(".success-msg").html(response.msg);

        $('#getStarted').animate({
          scrollTop: $(".success-msg").offset().top
        }, 800);

        $(".success-msg").focus();
        window.location.href = base_url+"/index.php/User/userHome"

    },
    error: function(jqXHR, textStatus, errorThrown) {
       console.log(textStatus, errorThrown);
    }
});
	

})

$("#logOut").click(function(){
    var action  = 'logout';
	$.ajax({
    url: "<?php echo base_url(); ?>" + "User/userLogOut",
    type: "post",
    data:{'action':action},
    dataType: 'json',
    cache: false,
    success: function (response) {
        $(".success-msg").show();
        $(".success-msg").html(response.msg);

        $('html, body').animate({
          scrollTop: $(".success-msg").offset().top
        }, 2000);

    },
    error: function(jqXHR, textStatus, errorThrown) {
       console.log(textStatus, errorThrown);
    }
});

 
})

$("#noticeType").change(function(){

var notice_name = $(this).val();

if(notice_name == 'vacate'){

	$("#motor-vehicle-form").hide();
	$("#consumer-notice-form").hide();
	$("#breach-form").hide();
	$("#divorce-form").hide();
	$("#cheque-form").hide();
	$("#vacate-form").show();
	$("#labour-form").hide();
}



if(notice_name == 'motor'){

	$("#motor-vehicle-form").show();
	$("#consumer-notice-form").hide();
	$("#breach-form").hide();
	$("#divorce-form").hide();
	$("#cheque-form").hide();
	$("#vacate-form").hide();
	$("#labour-form").hide();

}

if(notice_name == 'consumer'){

	$("#consumer-notice-form").show();
	$("#motor-vehicle-form").hide();
	$("#breach-form").hide();
	$("#divorce-form").hide();
	$("#cheque-form").hide();
	$("#vacate-form").hide();
	$("#labour-form").hide();

}

if(notice_name == 'divorce'){
$("#divorce-form").show();
$("#consumer-notice-form").hide();
$("#motor-vehicle-form").hide();
$("#breach-form").hide();
$("#cheque-form").hide();
$("#vacate-form").hide();
$("#labour-form").hide();
}

if(notice_name == 'cheque'){
$("#divorce-form").hide();
$("#consumer-notice-form").hide();
$("#motor-vehicle-form").hide();
$("#breach-form").hide();
$("#cheque-form").show();
$("#vacate-form").hide();
$("#labour-form").hide();
}

if(notice_name == 'breach'){
$("#divorce-form").hide();
$("#consumer-notice-form").hide();
$("#motor-vehicle-form").hide();
$("#breach-form").show();
$("#cheque-form").hide();
$("#vacate-form").hide();
$("#labour-form").hide();
}

if(notice_name == 'labour'){
	$("#divorce-form").hide();
	$("#consumer-notice-form").hide();
	$("#motor-vehicle-form").hide();
	$("#breach-form").hide();
	$("#cheque-form").hide();
	$("#labour-form").show();
	$("#vacate-form").hide();
}

})










/* All Consumer Case Notice  Functions */




$("#addDefendantData").click(function(e){

	e.preventDefault();

	var company_fname      = $("#company_fname").val();
	var company_name       = $("#company_name").val();
	var address_defendant  = $("#address_defendant").val();
	var commodity          = $("#commodity").val();
	var date_purchase      = $("#date_purchase").val();
	var consumer_state     = $("#consumer-state").val();
	var consumer_address   = $("#consumer-address").val();

	var complaint          = $("#complaint").val();
	var relief             = $("#relief").val();


	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var phone = $("#phone_number").val();
	var intRegex = /[0-9 -()+]+$/;
	var letters = /^[A-Za-z]+$/;

	var base_url = window.location.origin;


	if( company_fname == ''){
		$('html, body').animate({
	              scrollTop: $("#company_fname").offset().top
	        }, 500);    
		$("#err_company_fname").show();
		return;
	}else{$("#err_company_fname").hide();}


	if( company_name == ''){
		$('html, body').animate({
	              scrollTop: top
	        }, 500);    
		$("#err_company_name").show();
		return;
	}else{$("#err_company_name").hide();}


	if( address_defendant == ''){
		$('html, body').animate({
		          scrollTop: $("#address_defendant").offset()
		}, 500);
		$("#address_defendant").focus();
		$("#err_address_defendant").show();
		return;
	}else{$("#err-consumer-phone").hide();}


	if( commodity == '' ){

		$('html, body').animate({
		          scrollTop: $("#commodity").offset()
		}, 500);
		
		$("#commodity").focus();
		$("#err_commodity").show();
		return;
	}else{$("#err_commodity").hide();}



	if( date_purchase == ''){
		$("#date_purchase").focus();
		$("#err_date_purchase").show();
		return;
	}else{$("#err_date_purchase").hide();}


	if( consumer_state == ''){
		
		$("#consumer_state").focus();
		$("#err_consumer_state").show();
		return;
	}else{$("#err_consumer_state").hide();}


	if( consumer_address == ''){
		
		$("#consumer_address").focus();
		$("#err_consumer_address").show();
		return;
	}else{$("#err_consumer_address").hide();}


	if( complaint == ''){
		
		$("#complaint").focus();
		$("#err_complaint").show();
		return;
	}else{$("#err_complaint").hide();}

	if( relief == ''){
		
		$("#relief").focus();
		$("#err_relief").show();
		return;
	}else{$("#err_relief").hide();}


		// $.blockUI({
		//  css: { backgroundColor: '#fffff', color: '#74c2e1',border:'none',width:'20%', backgroundColor:'none' } 
		// });

		$.ajax({
	        url: base_url+ "/Home/addDefendantData", 
	        type: "POST",             
	        data: new FormData(document.getElementById("consumer-form")), 
	        contentType: false,                  
	        processData:false,
        
        success: function(response)   
        {
       
        if(response == "1"){
            $.unblockUI();
	        window.location.href= base_url+"/congoPage";
		    return;
        }
        if(response == '2'){
        	$.unblockUI();
        	alert("Something Wents Wrong Please Try After Some Time");
		}

        }
    });

})

$("#adhar_front").change(function() {
        var file = this.files[0];
        var imagefile = file.type;
        var match= ["application/pdf","image/jpeg","image/jpg","image/png"];

        if( !( (imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]) || (imagefile==match[3])  ) ){
            alert('Please Select a File In PDF or Image Format ');

            $("#adhar_front_file_uploaded").hide();
            $("#tr_aadhar_front").removeClass("no-border");
            $("#tr_aadhar_front").addClass("tr-border");
            $("#adhar_front").val('');
            return false;
        }


    $("#adhar_front_file_uploaded").show();

    $("#tr_aadhar_front").removeClass("tr-border");
    $("#tr_aadhar_front").addClass("no-border");
    $("#front_err_file").hide();
});
 

$("#adhar_back").change(function() {
        var file = this.files[0];
        var imagefile = file.type;
        var match= ["application/pdf","image/jpeg","image/jpg","image/png"];
        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]) || (imagefile==match[3])   )){
            alert('Please Select a Valid PDF File ');
            $("#adhar_back_file_uploaded").hide();
            $("#tr_aadhar_back").removeClass("no-border");
            $("#tr_aadhar_back").addClass("tr-border");
            $("#adhar_back").val('');
            return false;
        }


    $("#adhar_back_file_uploaded").show();

    $("#tr_aadhar_back").removeClass("tr-border");
    $("#tr_aadhar_back").addClass("no-border");
    $("#front_err_file").hide();
});













// $(".home-notices").click(function(){

// 	var base_url = window.location.origin;
// 	var name     = $(this).attr("data-name");
// 	var user_id  = $(this).attr("id");

// 	if(user_id == '' ||  user_id == ""){

// 	    $("#logiModal").modal('show');
// 	    $("#noticeName").val(name);
// 	    return;
// 	}
// 	if(name=='redirectCheque'){
// 	 window.location.href = base_url+"/index.php/RedirectNotices/redirectCheque";
//     }

//     if(name=='redirectMotor'){
// 	 window.location.href = base_url+"/index.php/RedirectNotices/redirectMotor";
//     }
//     if(name=='redirectConsumer'){
// 	 window.location.href = base_url+"/index.php/RedirectNotices/redirectConsumer";
//     }
//     if(name=='redirectVacate'){
// 	 window.location.href = base_url+"/index.php/RedirectNotices/redirectVacate";
//     }
//     if(name=='redirectDivorce'){
// 	 window.location.href = base_url+"/index.php/RedirectNotices/redirectDivorce";
//     }
//     if(name=='redirectLabour'){
// 	 window.location.href = base_url+"/index.php/RedirectNotices/redirectLabour";
//     }
// })



$("#addAdvocateButton").click(function(){

	var advocateName   = $("#advocateName").val();  
	var advocateEmail  = $("#advocateEmail").val();
	var advocatePhone  = $("#advocatePhone").val();
	var advocateGender = $("#advocateGender").val();
	var advocatePass   = $("#advocatePass").val();
	var registrationNumber = $("#registrationNumber").val();
	var certificate  = $("#certificate").val();

	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var intRegex = /[0-9 -()+]+$/;
	var letters = /^[A-Za-z ]+$/;

	if(advocateName == ''){
		
		$("#advocateName").css("border","1px solid red");
		$(".advocateName").show();
		$(".advocateName").html("Insert Valid Input");
		$("#advocateName").focus();
		return;
	}else{

		$("#advocateName").css('border', '1px solid #d2d6de');
		$(".advocateName").hide();
	}

	if( !(advocateName.match(letters)) ){
		$("#advocateName").css("border","1px solid red");
		$(".advocateName").show();
		$(".advocateName").html("Insert Valid Input");
		$("#advocateName").focus();
		return;
	}else{

		$("#advocateName").css('border', '1px solid #ccc');
		$(".advocateName").hide();
	}

	if(advocateEmail == ''){

		$("#advocateEmail").css("border","1px solid red");
		$(".advocateEmail").show();
		$(".advocateEmail").html("Insert Valid Input");
		$("#advocateEmail").focus();
		return;
	}else{

		$("#advocateEmail").css('border', '1px solid #ccc');
		$(".advocateEmail").hide();
	}

	

	if(advocatePass == ''){

		$("#advocatePass").css("border","1px solid red");
		$(".advocatePass").show();
		$(".advocatePass").html("Insert Valid Input");
		$("#advocatePass").focus();
		return;
	}else{

		$("#advocatePass").css('border', '1px solid #ccc');
		$(".advocatePass").hide();
	}



	if(!(regex.test(advocateEmail))) {

		$("#advocateEmail").css("border","1px solid red");
		$(".advocateEmail").show();
		$(".advocateEmail").html("Insert Valid Input");
		$("#advocateEmail").focus();
		return;
	}else{

		$("#advocateEmail").css('border', '1px solid #ccc');
		$(".advocateEmail").hide();
	}

	if((advocatePhone.length < 10) || (!intRegex.test(advocatePhone)))
	{
	    $("#advocatePhone").css("border","1px solid red");
		$(".advocatePhone").show();
		$(".advocatePhone").html("Insert Valid Input");
		$("#advocatePhone").focus();
		return;
	}else{

		$("#advocatePhone").css('border', '1px solid #ccc');
		$(".advocatePhone").hide();
	}
	if( (advocatePhone.length != 10 ) )
	{
	    $("#advocatePhone").css("border","1px solid red");
		$(".advocatePhone").show();
		$(".advocatePhone").html("Insert Valid Input");
		$("#advocatePhone").focus();
		return;
	}else{

		$("#advocatePhone").css('border', '1px solid #ccc');
		$(".advocatePhone").hide();
	}

	if( registrationNumber == ''  )
	{
	    $("#registrationNumber").css("border","1px solid red");
		$(".registrationNumber").show();
		$(".registrationNumber").html("Insert Valid Input");
		$("#registrationNumber").focus();
		return;
	}else{

		$("#registrationNumber").css('border', '1px solid #ccc');
		$(".registrationNumber").hide();
	}
	
	if( certificate == ''  )
	{
	    $("#certificate").css("border","1px solid red");
		$(".certificate").show();
		$(".certificate").html("Insert Valid Input");
		$("#certificate").focus();
		return;
	}else{

		$("#certificate").css('border', '1px solid #ccc');
		$(".certificate").hide();
	}
	


	var base_url = window.location.origin;

	$(".advocate-success").hide();
	$(".advocate-error").hide();
	$(".loader").show();
	
	$.ajax({
    url: base_url+"/Admin/addAdvocateData",
    type: "post",
    data: new FormData(document.getElementById("advocate-form")),
    contentType: false,                  
	        processData:false,

    success: function (response) {

    	if( response == "1" || response == 1 ){
    		$(".loader").hide();
    		$(".advocate-success").show();
    		$(".advocate-error").hide();

    		window.location.reload();
    		
    	}
    	if( response == "3" || response == 3 ){
    		$(".loader").hide();
    		$(".advocate-error").show();
    		$(".advocate-error").html('<i class="fa fa-thumbs-o-down" aria-hidden="true"></i>&nbsp;Phone Number Exists');
    	}

    	if( response == "2" || response == 2 ){
    		$(".loader").hide();
    		$(".advocate-error").show();
    		$(".advocate-error").html('<i class="fa fa-thumbs-o-down" aria-hidden="true"></i>&nbsp;Email Exists');
    	}
    	else{

    		$(".loader").hide();
    		$(".advocate-success").hide();
    		$(".advocate-error").show();
    		$(".advocate-error").html('<i class="fa fa-thumbs-o-down" aria-hidden="true"></i>&nbsp;Something went wrong !');

    	}

    },
    error: function(jqXHR, textStatus, errorThrown) {
       console.log(textStatus, errorThrown);
    }
});
 
});




$("#takeToMyNotice").click(function(){
	var base_url = window.location.origin;
	window.location.href = base_url+ "/User/userHome";
});


$("#addMedicalNegligenceBasicDetails").click(function(e){


	e.preventDefault();


var consumer_fname     = $("#consumer-fname").val();
var consumer_lname     = $("#consumer-lname").val();
var consumer_email     = $("#consumer-notice-email").val();
var consumer_phone     = $("#consumer-phone").val();
var consumer_pincode   = $("#consumer-pincode").val();
var consumer_state     = $("#consumer-state").val();
var consumer_address   = $("#consumer-address").val();

var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var phone = $("#phone_number").val();
var intRegex = /[0-9 -()+]+$/;
var letters = /^[A-Za-z]+$/;

var base_url = window.location.origin;


if( consumer_fname == ''){
	$("html, body").animate({ scrollTop: 0 }, "slow");
	$("#err-consumer-fname").show();
	return;
}else{$("#err-consumer-fname").hide();}


if( consumer_lname == ''){
	$("html, body").animate({ scrollTop: 0 }, "slow");
	$("#err-consumer-lname").show();
	return;
}else{$("#err-consumer-lname").hide();}


if( consumer_email == ''){
	$('html, body').animate({
              scrollTop: $("#consumer-fname").offset().top
        }, 2000);    
	$("#err-consumer-email").show();
	return;
}else{$("#err-consumer-email").hide();}


if( !(regex.test(consumer_email)) ){
	$('html, body').animate({
		          scrollTop: $("#consumer-fname").offset()
		        }, 2000);
	$("#err-consumer-email").show();
	return;
}else{$("#err-consumer-email").hide();}


if( consumer_phone == ''){
	$('html, body').animate({
	          scrollTop: $("#consumer-phone").offset()
	}, 2000);
	$("#consumer_phone").focus();
	$("#err-consumer-phone").show();
	return;addConsumerNoticeData
}else{$("#err-consumer-phone").hide();}


if( consumer_pincode == '' ){
	
	$("#consumer-pincode").focus();
	$("#err-consumer-pincode").show();
	return;
}else{$("#err-consumer-pincode").hide();}



if( consumer_state == ''){
	$("#consumer-state").focus();
	$("#err-consumer-state").show();
	return;
}else{$("#err-consumer-state").hide();}


if( consumer_address == ''){
	
	$("#consumer_address").focus();
	$("#err-consumer-address").show();
	return;
}else{$("#err-consumer-address").hide();}


		$.blockUI({
		 css: { backgroundColor: '#fffff', color: '#74c2e1',border:'none',width:'20%', backgroundColor:'none' } 
		});

		$.ajax({
	        url: base_url+ "/Consumer_Disputes/addMedicalNegligenceBasicDetails", 
	        type: "POST",             
	        data: new FormData(document.getElementById("consumer-form")),
	        contentType: false,                  
	        processData:false,
	       
        
        success: function(response)   
        {
	        if(response=="3"){
	        	$.unblockUI();
	        	$("#logiModal").modal('show');
	        	return;
	        }else{

	         $.unblockUI();
		     window.location.href= base_url+"/Consumer_Disputes/defendant_notice";
		 }

        }
    });

})


$("#addAccidentalClaimConsumer").click(function(e){


	e.preventDefault();

var consumer_fname     = $("#consumer-fname").val();
var consumer_lname     = $("#consumer-lname").val();
var consumer_email     = $("#consumer-notice-email").val();
var consumer_phone     = $("#consumer-phone").val();
var consumer_pincode   = $("#consumer-pincode").val();
var consumer_state     = $("#consumer-state").val();
var consumer_address   = $("#consumer-address").val();

var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var phone = $("#phone_number").val();
var intRegex = /[0-9 -()+]+$/;
var letters = /^[A-Za-z]+$/;

var base_url = window.location.origin;


if( consumer_fname == ''){
	$("html, body").animate({ scrollTop: 0 }, "slow");
	$("#err-consumer-fname").show();
	return;
}else{$("#err-consumer-fname").hide();}


if( consumer_lname == ''){
	$("html, body").animate({ scrollTop: 0 }, "slow");
	$("#err-consumer-lname").show();
	return;
}else{$("#err-consumer-lname").hide();}


if( consumer_email == ''){
	$('html, body').animate({
              scrollTop: $("#consumer-fname").offset().top
        }, 2000);    
	$("#err-consumer-email").show();
	return;
}else{$("#err-consumer-email").hide();}


if( !(regex.test(consumer_email)) ){
	$('html, body').animate({
		          scrollTop: $("#consumer-fname").offset()
		        }, 2000);
	$("#err-consumer-email").show();
	return;
}else{$("#err-consumer-email").hide();}


if( consumer_phone == ''){
	$('html, body').animate({
	          scrollTop: $("#consumer-phone").offset()
	}, 2000);
	$("#consumer_phone").focus();
	$("#err-consumer-phone").show();
	return;addConsumerNoticeData
}else{$("#err-consumer-phone").hide();}


if( consumer_pincode == '' ){
	
	$("#consumer-pincode").focus();
	$("#err-consumer-pincode").show();
	return;
}else{$("#err-consumer-pincode").hide();}



if( consumer_state == ''){
	$("#consumer-state").focus();
	$("#err-consumer-state").show();
	return;
}else{$("#err-consumer-state").hide();}


if( consumer_address == ''){
	
	$("#consumer_address").focus();
	$("#err-consumer-address").show();
	return;
}else{$("#err-consumer-address").hide();}


		$.blockUI({
		 css: { backgroundColor: '#fffff', color: '#74c2e1',border:'none',width:'20%', backgroundColor:'none' } 
		});

		$.ajax({
	        url: base_url+ "/Consumer_Disputes/addAccidentalClaimConsumer", 
	        type: "POST",             
	        data: new FormData(document.getElementById("consumer-form")),
	        contentType: false,                  
	        processData:false,
	       
        
        success: function(response)   
        {
	        if(response=="3"){
	        	$.unblockUI();
	        	$("#logiModal").modal('show');
	        	return;
	        }else{

	         $.unblockUI();
		     window.location.href= base_url+"/Consumer_Disputes/accidental_claim_defendant_notice";
		 }

        }
    });


})


$("#addMedicalDefendant").click(function(e){


	e.preventDefault();

	var medical_name           = $("#medical_name").val();
	var doctor_name            = $("#doctor_name").val();
	var address_establishment  = $("#address_establishment").val();
	var type_negligence          = $("#type_negligence").val();
	var date_dispute          = $("#date_dispute").val();
	var complaint              = $("#complaint").val();
	var relief                 = $("#relief").val();


	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var phone = $("#phone_number").val();
	var intRegex = /[0-9 -()+]+$/;
	var letters = /^[A-Za-z]+$/;

	var base_url = window.location.origin;

	if( medical_name == ''){
		$('html, body').animate({
	              scrollTop: $("#medical_name").offset().top
	        }, 500);    
		$("#err_type_negligence").show();
		return;
	}else{$("#err_medical_name").hide();}

	if( address_establishment == ''){
		$('html, body').animate({
	              scrollTop: $("#address_establishment").offset().top
	        }, 500);    
		$("#err_address_establishment").show();
		return;
	}else{$("#err_address_establishment").hide();}



	if( type_negligence == ''){
		$('html, body').animate({
	              scrollTop: $("#type_negligence").offset().top
	        }, 500);    
		$("#err_type_negligence").show();
		return;
	}else{$("#err_type_negligence").hide();}


	if( date_dispute == ''){
		$('html, body').animate({
	              scrollTop: top
	        }, 500);    
		$("#err_date_dispute").show();
		return;
	}else{$("#err_date_dispute").hide();}
	

	if( complaint == ''){
		
		$("#complaint").focus();
		$("#err_complaint").show();
		return;
	}else{$("#err_complaint").hide();}

	if( relief == ''){
		
		$("#relief").focus();
		$("#err_relief").show();
		return;
	}else{$("#err_relief").hide();}


		$.blockUI({
		 css: { backgroundColor: '#fffff', color: '#74c2e1',border:'none',width:'20%', backgroundColor:'none' } 
		});

		$.ajax({
	        url: base_url+ "/Consumer_Disputes/addDefendantNotice", 
	        type: "POST",             
	        data: new FormData(document.getElementById("consumer-form")), 
	        contentType: false,                  
	        processData:false,
        
        success: function(response)   
        {

       
        if(response == "1"){
            $.unblockUI();
	        window.location.href= base_url+"/congoPage";
		    return;
        }
        if(response == '2'){
        	$.unblockUI();
        	alert("Something Wents Wrong Please Try After Some Time");
		} 

        }
    });



});


$("#addConsumerDiputesDefendantData").click(function(e){

	e.preventDefault();

	var company_fname      = $("#company_fname").val();
	var company_name       = $("#company_name").val();
	var address_defendant  = $("#address_defendant").val();
	var type_accident      = $("#type_accident").val();
	var date_accident      = $("#date_accident").val();

	var complaint          = $("#complaint").val();
	var relief             = $("#relief").val();


	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var phone = $("#phone_number").val();
	var intRegex = /[0-9 -()+]+$/;
	var letters = /^[A-Za-z]+$/;

	var base_url = window.location.origin;


	if( company_fname == ''){
		$('html, body').animate({
	              scrollTop: $("#company_fname").offset().top
	        }, 500);    
		$("#err_company_fname").show();
		return;
	}else{$("#err_company_fname").hide();}


	if( company_name == ''){
		$('html, body').animate({
	              scrollTop: top
	        }, 500);    
		$("#err_company_name").show();
		return;
	}else{$("#err_company_name").hide();}


	if( address_defendant == ''){
		$('html, body').animate({
		          scrollTop: $("#address_defendant").offset()
		}, 500);
		$("#address_defendant").focus();
		$("#err_address_defendant").show();
		return;
	}else{$("#err-consumer-phone").hide();}


	if( date_accident == ''){
		$("#date_accident").focus();
		$("#err_date_accident").show();
		return;
	}else{$("#err_date_accident").hide();}


	if( type_accident == ''){
		$("#type_accident").focus();
		$("#err_type_accident").show();
		return;
	}else{$("#err_type_accident").hide();}


	if( complaint == ''){
		
		$("#complaint").focus();
		$("#err_complaint").show();
		return;
	}else{$("#err_complaint").hide();}

	if( relief == ''){
		
		$("#relief").focus();
		$("#err_relief").show();
		return;
	}else{$("#err_relief").hide();}


		$.blockUI({
		 css: { backgroundColor: '#fffff', color: '#74c2e1',border:'none',width:'20%', backgroundColor:'none' } 
		});

		$.ajax({
	        url: base_url+ "/Consumer_Disputes/addAccidentalClaimDefendantData", 
	        type: "POST",             
	        data: new FormData(document.getElementById("consumer-form")), 
	        contentType: false,                  
	        processData:false,
        
        success: function(response)   
        {

       
        if(response == "1"){
            $.unblockUI();
	        window.location.href= base_url+"/congoPage";
		    return;
        }
        if(response == '2'){
        	$.unblockUI();
        	alert("Something Wents Wrong Please Try After Some Time");
		} 

        }
    });

})


/* Generate Query */

