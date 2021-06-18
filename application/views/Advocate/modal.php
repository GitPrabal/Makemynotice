  <div id="viewNoticeDetail" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">PF Claim Notice Detail</h4>
      </div>
      <div class="modal-body">
      <center><h4 id="loading"><i class="fa fa-spinner fa-pulse fa-2x fa-fw"></i></h4></center>
      <div id="result"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


  <div id="replyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
  <form enctype="multipart/form-data" name="reply-form" id="reply-form">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Your Reply</h4>
      </div>
      <div class="modal-body">

      <center>
        <div class="loader" style="display: none;"><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></div>
        <div class="btn btn-success successMsg"  style="display: none;">Thanks For Your Reply</div>
        <div class="btn btn-danger errorMsg" style="display: none;">SomeThing Wents Wrong !</div>
      </center>
      
       <table class="table">
         <tr>
           <th>
             Upload Notice Attachment
           </th>
           <td>
             <input type="file" class="form-control" name="replyNoticeAttachment" id="replyNoticeAttachment">
             <input type="hidden" class="form-control" name="table_name" id="table_name">
             <input type="hidden" class="form-control" name="user_id" id="user_id">
             <input type="hidden" class="form-control" name="notice_id" id="notice_id">
           </td>
         </tr>
       </table>
       
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="sendReplyNotice">Send</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    </form>
  </div>
</div>



<div id="finalNoticeModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
  <form enctype="multipart/form-data" name="final-form" id="final-form">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload Final Notice</h4>
      </div>
      <div class="modal-body">
      <center>
        <div class="loader" style="display: none;"><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></div>
        <div class="btn btn-success successMsg"  style="display: none;">Thanks For Your Reply</div>
        <div class="btn btn-danger errorMsg" style="display: none;">SomeThing Wents Wrong !</div>
      </center>
      
       <table class="table">
         <tr>
           <th>
             Upload Final Notice
           </th>
           <td>
             <input type="file" class="form-control finalNotice" name="finalNotice" >
             <input type="hidden" class="form-control advocate_user_id" name="advocate_user_id">
             <input type="hidden" class="form-control table_name" name="table_name">
             <input type="hidden" class="form-control user_id" name="user_id">
             <input type="hidden" class="form-control notice_id" name="notice_id">
           </td>
         </tr>
       </table>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="uploadFinal">Send</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    </form>
  </div>
</div>


<div id="recieveNoticeModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
  <form enctype="multipart/form-data" name="recieved-form" id="recieved-form">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload Recieved Note</h4>
      </div>
      <div class="modal-body">
      <center>
        <div class="loader" style="display: none;"><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></div>
        <div class="btn btn-success successMsg"  style="display: none;">Thanks For Your Reply</div>
        <div class="btn btn-danger errorMsg" style="display: none;">SomeThing Wents Wrong !</div>
      </center>
      
       <table class="table">
         <tr>
           <th>
             Upload Recieved Note
           </th>
           <td>
             <input type="file" class="form-control recievedNote" name="recievedNote" id="recievedNote">
             <input type="hidden" class="form-control advocate_user_id" name="advocate_user_id">
             <input type="hidden" class="form-control table_name" name="table_name">
             <input type="hidden" class="form-control user_id" name="user_id">
             <input type="hidden" class="form-control notice_id" name="notice_id">
           </td>
         </tr>
       </table>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="uploadRecievedNote">Send</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    </form>
  </div>
</div>


<script type="text/javascript">
  
  $("#sendReplyNotice").click(function(e){
    e.preventDefault();
    var replyNoticeAttachment =  $("#replyNoticeAttachment").val();
    if(replyNoticeAttachment == ""){
        $("#replyNoticeAttachment").addClass("trBorder");
        alert("Please select some files");
        return;
    }

    $(this).prop("disabled","true");
    $(".loader").show();

    var base_url =  window.location.origin;

    $.ajax({
    url: base_url+"/Pulled_Notice/sendReplyNotice",
    type: "POST",
    data: new FormData(document.getElementById("reply-form")),
    contentType: false,                  
    processData:false,
    success: function (response) {

        $(this).prop("disabled","false");
        $(".loader").hide();
        if(response == "1"){
            $(".successMsg").show();
            $(".errorMsg").hide();;
            $("#replyNoticeAttachment").val("");
            window.location.reload()
            return;
        }
        if(response == '2'){
            $(".errorMsg").show();
            $(".successMsg").hide();
        }
    },
    error: function(jqXHR, textStatus, errorThrown) {
       console.log(textStatus, errorThrown);
     }
    });

})


$("#uploadFinal").click(function(e){

    e.preventDefault();
    var finalNotice     = $("#finalNotice").val();
    if(finalNotice == ""){
        $("#finalNotice").addClass("trBorder");
        alert("Please select some files");
        return;
    }

    $(this).prop("disabled","true");
    $(".loader").show();

    var base_url =  window.location.origin;

    $.ajax({
    url: base_url+"/Pulled_Notice/uploadFinalNotice",
    type: "POST",
    data: new FormData(document.getElementById("final-form")),
    contentType: false,                  
    processData:false,
    success: function (response) {

        $(this).prop("disabled","false");
        $(".loader").hide();
        
         if(response == "1"){
            $(".successMsg").show();
            $(".errorMsg").hide();;
            $("#replyNoticeAttachment").val("");
            window.location.reload()
            return;
        }
        if(response == '2'){
            $(".errorMsg").show();
            $(".successMsg").hide();
        }
    },
    error: function(jqXHR, textStatus, errorThrown) {
       console.log(textStatus, errorThrown);
     }
    });

})

$("#uploadRecievedNote").click(function(e){

  e.preventDefault();
    var recievedNote     = $("#recievedNote").val();
    if(recievedNote == ""){
        $("#recievedNote").addClass("trBorder");
        alert("Please select some files");
        return;
    }

    $(this).prop("disabled","true");
    $(".loader").show();

    var base_url =  window.location.origin;

    $.ajax({
    url: base_url+"/Pulled_Notice/uploadRecievedNote",
    type: "POST",
    data: new FormData(document.getElementById("recieved-form")),
    contentType: false,                  
    processData:false,
    success: function (response) {

        $(this).prop("disabled","false");
        $(".loader").hide();

         if(response == "1"){
            $(".successMsg").show();
            $(".errorMsg").hide();;
            $("#replyNoticeAttachment").val("");
            window.location.reload()
            return;
        }
        if(response == '2'){
            $(".errorMsg").show();
            $(".successMsg").hide();
        }
    },
    error: function(jqXHR, textStatus, errorThrown) {
       console.log(textStatus, errorThrown);
     }
    });

})

</script>