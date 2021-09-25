
$("#adminLogin").click(function(){


	var loginEmail         = $("#loginEmail").val();
	var loginPass          = $("#loginPass").val();

	var base_url = window.location.origin;

	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;



	if(loginEmail == ''){
        $(".error-msg").show();
        $(".error-msg").html("Invalid Email");
 		$("#loginEmail").focus();
		return;
	}

	if(!(regex.test(loginEmail))) {
        $(".error-msg").show();
        $(".error-msg").html("Invalid Email");
		$("#loginEmail").focus();
		return;
	}

	if(loginPass == ''){
		$(".error-msg").show();
        $(".error-msg").html("Invalid Password");
		$("#loginPass").focus();
		return;
	}

	$(".error-msg").hide();
    $(".loader").show();

	$.ajax({
        url: base_url+"/Admin/login",
        type: "post",
        data:{'email':loginEmail,'password':loginPass},
        success: function (response) {
        	if( response==1 || response== '1' ){
        		setTimeout(function(){ 
        			window.location.href = base_url+"/Admin/adminHome"
        			 }, 1000);

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

