
$("#advocateLogin").click(function(){

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
        url: base_url+"/Advocate/login",
        type: "post",
        data:{'email':loginEmail,'password':loginPass},
        success: function (response) {
        	if( response==1 || response== '1' ){
        		
        			window.location.href = base_url+"/Advocate/advocate_home"
        
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


$(".replyNotice").click(function(e){


    var table_name  = $(this).attr("table-name");
    var user_id     = $(this).attr("user_id");
    var notice_id   = $(this).attr("notice_id");

    $("#user_id").val(user_id);
    $("#table_name").val(table_name);
    $("#notice_id").val(notice_id);
    $("#replyModal").modal('show');
})


$(".uploadFinalNotice").click(function(e){

    var notice_id  = $(this).attr("id");

    notice_id = notice_id.split("-");
    notice_id = notice_id["0"];

    var table_name       = $(this).attr("table_name");
    var advocate_user_id = $(this).attr("advocate_user_id");
    var user_id          = $(this).attr("user_id");

    $(".advocate_user_id").val(advocate_user_id);
    $(".user_id").val(user_id);
    $(".table_name").val(table_name);
    $(".notice_id").val(notice_id);

    $("#finalNoticeModal").modal('show');
  
})

$(".uploadRecievedNotice").click(function(e){

    var notice_id  = $(this).attr("id");

    notice_id = notice_id.split("-");
    notice_id = notice_id["0"];

    var table_name       = $(this).attr("table_name");
    var advocate_user_id = $(this).attr("advocate_user_id");
    var user_id          = $(this).attr("user_id");

    $(".advocate_user_id").val(advocate_user_id);
    $(".user_id").val(user_id);
    $(".table_name").val(table_name);
    $(".notice_id").val(notice_id);

    $("#recieveNoticeModal").modal('show');

})


$(".pullNotice").click(function(){

      var notice_id        = $(this).attr("notice_id");
      var table_name       = $(this).attr("table-name");
      var user_id          = $(this).attr("user_id");


      var base_url   = window.location.origin;

      var x = confirm("Are you sure you want to pull this notice");


      if( x ){

      $.ajax({
        url: base_url+"/Pulled_Notice/pull_notice",
        type: "post",
        data:{'user_id':user_id,'notice_id':notice_id,'table_name':table_name},
        success: function (response) {
          swal("Good job!", "You successfully pulled notice", "success");
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });

      $(this).prop('disabled', true);
      $(this).text("Already Pulled");
      $("#"+notice_id+"-replyNotice").show();
  }

})

