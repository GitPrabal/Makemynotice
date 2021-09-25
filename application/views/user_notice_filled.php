<style type="text/css">

.mobiVisible { display: none !important; }
.desktopVisible { display: block !important; }
@media only screen and (max-width : 768px) {
  .mobiVisible { display: inline-block !important; }
  .desktopVisible { display: none !important; }
}
.pointer{
    cursor: pointer;
}



/* Margin top  */

.mt-5  { margin-top: 5px; }
.mt-10 { margin-top: 10px; }
.mt-15 { margin-top: 15px; }
.mt-20 { margin-top: 20px; }
.mt-25 { margin-top: 25px; }
.mt-30 { margin-top: 30px; }
.mt-35 { margin-top: 35px; }
.mt-40 { margin-top: 40px; }
.mt-45 { margin-top: 45px; }
.mt-50 { margin-top: 50px; }
.mt-55 { margin-top: 55px; }
.mt-60 { margin-top: 60px; }


/* Padding Left  */

.pl-10{ padding-left: 10px;}
.pl-20{ padding-left: 20px;}
.pl-30{ padding-left: 30px;}
.pl-40{ padding-left: 40px;}
.pl-50{ padding-left: 50px;}
.pl-60{ padding-left: 60px;}
.pl-70{ padding-left: 70px;}

/* Padding Top  */

.pt-10{ padding-top: 10px; }
.pt-15{ padding-top: 15px; }
.pt-20{ padding-top: 20px; }
.pt-25{ padding-top: 25px; }
.pt-30{ padding-top: 30px; }

button.close{
  width: 70px !important;
  height: 25px !important;
  background: url('../_images/close.png') center center no-repeat;
  background-size: cover !important;
  opacity: .8;
}

#getStarted input[type='text'],#getStarted input[type='email'],#getStarted input[type='password']{
  height: 28px !important;
}
.mForm input[type='text'],.mForm input[type='email'],.mForm select{
  height: 35px !important;
  border-radius: 0px;
  color: #222222 !important;
  font-weight: bold;
}
.mForm .narrow{
  max-width: 750px !important;
}
.back-btn{
  text-decoration: none;
  font-weight: bold;
  font-size: 13px;
  display: inline-block;
  margin-right: 25px;
}
.btn-save{
  border: 2px solid #5a9afb !important;
  background: transparent !important;
  color: #5a9afb !important;
}
.right{ float: right; }
.left{ float: left; }
.clear{
  display: table;
  content: "";
  clear: both;
}

#getStarted input[type="radio"]{
  opacity: 1;
  background: unset !important;
  z-index: 100 !important;
  position: relative !important;
  right: unset;left: unset;
  display: inline-block !important;
  -moz-appearance: radio;
  -webkit-appearance: radio;
  -ms-appearance: radio;
  appearance: radio;
  margin-right: 5px !important;
}

.red{ color: red !important; }



/*progressbar*/
#progressbar {
  margin-bottom: 30px;
  overflow: hidden;
  /*CSS counters to number the steps*/
  counter-reset: step;
}
#progressbar li {
  list-style-type: none;
  color: #5a9afb;
  text-transform: uppercase;
  font-size: 12px;
  width: 33.33%;
  float: left;
  position: relative;
  font-weight: bold;
}
#progressbar li:before {
  content: counter(step);
  counter-increment: step;
  width: 25px;
  line-height: 25px;
  display: block;
  font-size: 12px;
  color: #333;
  background: #dedede;
  padding-left: 8px;
  border-radius: 25px;
  margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
  content: '';
  width: 100%;
  height: 2px;
  background: #dedede !important;
  position: absolute;
  left: -50%;
  top: 9px;
  z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
  /*connector not needed before the first step*/
  content: none; 
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
  background: #5a9afb !important;
  color: white;
}

.upload-btn {
  position: relative;
  overflow: hidden;
  width: 170px;
  display: inline-block;
  margin-left: 70px;
}
.upload-btn input {
  opacity: 0 !important;
  position: absolute;
  width: 170px;
  z-index: 1;
  cursor: pointer !important;
}
.upload-btn .fa{
  font-size: 25px !important;
  vertical-align: top !important;
  color: #5a9afb;
  font-weight: bold;
  cursor: pointer !important;
}
ul.sidebar-notice{
  margin: 0px;
  margin-top: 30px;
  padding: 0px;
  list-style: none;
}
ul.sidebar-notice li{
  display: block;
  padding: 10px 20px 10px 20px;
  border: 1px solid #f6f6f6;
  border-right: 0px;
}
ul.sidebar-notice li a{
  text-decoration: none;
  font-size: 14px;
  color: #444444;
}
ul.sidebar-notice li.active a,ul.sidebar-notice li a:hover{
  font-weight: bold;
  color: #5a9afb;
}

@media screen and (max-width: 767px){
  ul.sidebar-notice{
    float: unset;
    margin: 0px auto;
  }
  ul.sidebar-notice li{
    width: 100% !important;
  }
  .welcome{
    float: unset;
    display: block;
    margin-left: 20px;
    margin-bottom: 15px;
  }
}
  .borderless td, .borderless th {
    border: none !important;
}

</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<?php  //  echo "<pre>";print_r($noticeList);die;  ?>
 <div class="row mt-120">
          <!-- Sidebar -->
         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <br />
            <span style="padding-right:20px;font-weight: normal;" class="fontSize20 welcome right  fontRoboto color3e3e3e">Welcome, <?php echo  $data["0"]->first_name; ?></span>
            <span class="clear"></span>
            <ul class="sidebar-notice right">
               <li class="active"><a href="#"><span class="fa fa-folder" style="margin-right: 15px;"></span> Filed notices <span style="margin-left: 15px;font-size: 12px"><?php echo  count($noticeList); ?></span></a></li>
               <!-- <li><a href="reviewNotice"><span class="fa fa-edit" style="margin-right: 15px;"></span>  Review notices</a></li>
               <li><a href="approvedNotice"><span class="fa fa-calendar-check-o" style="margin-right: 15px;"></span>  Approved notices</a></li> -->
            </ul>
            <span class="clear"></span>
         </div> 


         <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12" style="background: #f3f6f8; padding-right:25px;padding-left:30px;height: 400px;overflow: auto;">
            <br /><br />
             <?php
             
             if( count($noticeList) > 0 ){
              for( $i=0; $i < count($noticeList); $i++ ){   

                    $filled_date = $noticeList[$i]["0"]->added_date;
                    $filled_date = explode(" ", $filled_date);

                    $notice_filled_date = date('l jS F Y', strtotime($filled_date["0"]));
                    $notice_filled_time = $filled_date["1"];
                    $notice_filled_time =  date('h:i:s A', strtotime($notice_filled_time));
              ?>

               <div class="panel-group">
                   <div class="panel panel-default">
                     <div class="panel-heading" style="padding: 25px;">
                        <span class="right fontRoboto color3e3e3e fontSize20">Filed on: <?php echo $notice_filled_date; ?> <br /> Time - at <?php echo  $notice_filled_time; ?></span>
                        <span class="left fontRoboto color3e3e3e fontSize20 mt10"><?php echo $noticeList[$i]["0"]->table_head ; ?></span>
                        <span class="clear"></span>
                     </div>

                     <div class="panel-body">
                        <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <!-- progressbar -->
                             <ul id="progressbar">
                                <li class="active" class="" style="color: #000000;"><center>Basic Info</center></li>
                                <li class="active" style="color: #000000;"><center>Notice Details</center></li>
                                <li class="active" style="color: #000000;" ><center>File Notice</center></li>
                             </ul>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                              <br />
                              <table class="table borderless">
                                 <tr style="border: 0px;background: transparent;">
                                    <td style="color: #767d85">First Name</td>
                                    <td class="noticeTd"><b style="color: #111111"><?php echo $noticeList[$i]["0"]->first_name ?></b></td>
                                 </tr>

                                 <tr style="border: 0px;background: transparent;">
                                    <td style="color: #767d85">Ph No</td>
                                    <td><b style="color: #111111"><?php echo $noticeList[$i]["0"]->phone; ?></b></td>
                                 </tr>

                                 <tr style="border: 0px;background: transparent;">
                                    <td style="color: #767d85">Email</td>
                                    <td><b style="color: #111111"><?php echo $noticeList[$i]["0"]->email; ?></b></td>
                                 </tr>
                              </table>
                              <a style="text-decoration: none;cursor: pointer;" class="viewNoticeDetails">View Details</a>
                           </div>

                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                              <b style="color: #111111"></b>
                              <br />
                              <table class="table borderless">
                                 <tr style="border: 0px;background: transparent;">
                                    <td style="color: #767d85">Last Name</td>
                                    <td><b style="color: #111111"><?php echo $noticeList[$i]["0"]->last_name; ?></b></td>
                                 </tr>

                                 <tr style="border: 0px;background: transparent;">
                                    <td style="color: #767d85">Address</td>
                                    <td><b style="color: #111111"><?php echo $noticeList[$i]["0"]->address; ?></b></td>
                                 </tr>

                                 <tr style="border: 0px;background: transparent;">
                                    <td style="color: #767d85">State</td>
                                    <td><b style="color: #111111"><?php echo $noticeList[$i]["0"]->state; ?></b></td>
                                 </tr>
                              </table>
                           </div>

                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                              <center>

                              <?php if ( empty($noticeList[$i]["0"]->reply_notice) && empty( $noticeList[$i]["0"]->approved_by_user)  ){  ?>
                              <button href="" class="btn btn-primary" style="height: 55px;padding-right:25px;padding-left:25px;">
                              No Notice Uploaded
                              </button>
                              <?php }

                                elseif ( !empty($noticeList[$i]["0"]->reply_notice) &&  empty($noticeList[$i]["0"]->approved_by_user)  ) { ?>

                                <table class="table borderless">
                                  <tr>
                                   <td>
                                     <a href="/reply_images/<?php echo $noticeList[$i]["0"]->reply_notice ?>" download>
                                       <button  class="btn btn-primary  mt10" style="background-color: #5a9afb;">Download Notice</button>
                                       <br />
                                     </a>
                                   </td>
                                  </tr>
                                  <tr>
                                   <td>
                                    <button tablename = "<?php echo $noticeList[$i]["0"]->table_name ?>" id="<?php echo $noticeList[$i]["0"]->id ?>"  class="btn btn-primary  mt10 approvedNotice" style="width:56%;background-color: #28b446;border-radius: 1.5px #28b446;border-color:#28b446;">Approve <i class="fa fa-check-circle" aria-hidden="true"></i>
                                  </button>
                                   </td>
                                  </tr>
                                  <tr>
                                   <<button tablename = "<?php echo $noticeList[$i]["0"]->table_name ?>" id="<?php echo $noticeList[$i]["0"]->id ?>"  class="btn btn-primary  mt10 generateQuery" style="background-color: white;color:#5a9afb; ">Generate Query</button>
                                   </td>
                                  </tr>
                                </table>

                                 <?php }   elseif ( !empty($noticeList[$i]["0"]->reply_notice) &&  $noticeList[$i]["0"]->approved_by_user == "1" && empty($noticeList[$i]["0"]->final_notice) && empty($noticeList[$i]["0"]->recieved_note)   ) { ?> ?>
                                 <table>
                                 <tr>
                                   <td>
                                      <a href="/reply_images/<?php echo $noticeList[$i]["0"]->reply_notice ?>" download>
                                       <button  class="btn btn-primary btn-sm  mt10" style="background-color: #5a9afb;">Download Notice</button>
                                      <br />
                                     </a>
                                   </td>
                                 </tr>
                                 <tr>
                                   <td>
                                      <button class="btn btn-success mt10 btn-sm">Approved</button>
                                   </td>
                                 </tr>

                                  <tr>
                                   <td>
                                       <button tablename = "<?php echo $noticeList[$i]["0"]->table_name ?>" id="<?php echo $noticeList[$i]["0"]->id ?>"  class="btn btn-primary  mt10 generateQuery btn-sm" style="background-color: white;color:#5a9afb; ">Generate Query</button>
                                   </td>
                                 </tr>
                                 </table>

                                <?php }

                                elseif ( !empty($noticeList[$i]["0"]->reply_notice) &&  $noticeList[$i]["0"]->approved_by_user == "1" && !empty($noticeList[$i]["0"]->final_notice) && empty($noticeList[$i]["0"]->recieved_note)   ) { ?>

                                <table class="table borderless">
                                  <tr>
                                    <td>
                                       <a href="/reply_images/<?php echo $noticeList[$i]["0"]->final_notice ?>" download>
                                       <button  class="btn btn-primary  mt10 btn-sm" style="background-color: #5a9afb;">Download Final Notice</button>
                                       </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                        <button class="btn btn-success mt10 btn-sm">Approved</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                        <button tablename = "pf_claim" id="<?php echo $noticeList[$i]["0"]->id ?>"  class="btn btn-primary  mt10 generateQuery" style="background-color: white;color:#5a9afb; ">Generate Query</button>
                                    </td>
                                  </tr>
                                </table>

                                 

                                    

                                <?php } else {  ?>

                                <table class="table borderless">
                                <tr>
                                  <td>
                                     <a href="/reply_images/<?php echo $noticeList[$i]["0"]->final_notice ?>" download>
                                     <button  class="btn btn-primary btn-sm  mt10" style="background-color: #5a9afb;">Download Final Notice</button>
                                     <br />
                                  </a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <a style="text-decoration: none;" href="/reply_images/<?php echo $noticeList[$i]["0"]->recieved_note ?>" download>
                                      <button  class="btn btn-info btn-sm  mt10">Download Recieved Note</button>
                                    </a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                     <button tablename = "pf_claim" id="<?php echo $noticeList[$i]["0"]->id ?>"  class="btn btn-primary  mt10 generateQuery" style="background-color: white;color:#5a9afb; ">Generate Query</button>
                                  </td>
                                </tr>
                                </table>
                                <?php } ?>

                              </center>
                           </div>
                           <br /><br />
                        </div>
                     </div>
                   </div>
                   <br /> <br />
                </div>  <!-- Panel Group Close -->

                <?php } } ?>


                <!--   -->






                <div class="panel-group" >
                   <div class="panel panel-default" style="background-color: #eeeeee;">
                     <div class="panel-heading">
                        <center><button class="btn btn-primary margin5" id="fileNewNotice">File New Notice</button></center>
                     </div>
                  </div>
                </div>
         </div>
      </div>


<div id="generateQueryModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Generate Query</h4>
      </div>
      <div class="modal-body" style="padding: 25px;">
      
      <form>
      <center>
      <div class="btn btn-success success-msg" style="display: none">Your Query Added Successfully</div>
      <div class="btn btn-danger fail-msg" style="display: none;width: 50%;">Something went wrong</div>
      <div style="display: none;" class="loader"><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></div>

      </center><br />

      <div class="row">
        <div class="col-md-3">
          <label>Your Query</label>
        </div>
        <div class="col-md-8">
          <textarea cols="15" rows="3" name="query" id="query"></textarea>
        </div>
      </div>
      <input type="hidden" name="" id ="tablename">
      <input type="hidden" name="" id ="noticeid">
      </form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" name="" id="submitQuery">Submit Query</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">

$(".viewNoticeDetails").click(function(e){

  e.preventDefault();

  var id         =  $(this).attr("id");
  var table_name =  $(this).attr("table_name");

  $.ajax({
    url: base_url+"/Advocate/"+table_name,
    type: "post",
    data:{'id':id,'tablename':tablename},
    success: function (response) {

      if(response == "1" || response == 1){
        $.alert("Your Response Recorded");
        $(".approvedNotice").text("Approved");
        $(".approvedNotice").prop("disabled","true")
      }else{
        $.alert("Something Wents Wrong Please Try Again");
      }
  },
      error: function(jqXHR, textStatus, errorThrown) {
         console.log(textStatus, errorThrown);
      }
  });

})
        
      $(".generateQuery").click(function(){

        var id  =  $(this).attr("id");
        var tablename =  $(this).attr("tablename");

        var base_url =  window.location.origin;

        $("#noticeid").val(id);
        $("#tablename").val(tablename);
        $("#generateQueryModal").modal('show');

      })

      $(".approvedNotice").click(function(e){

        e.preventDefault();

        var id  =  $(this).attr("id");
        var tablename =  $(this).attr("tablename");
        var base_url =  window.location.origin;

        $.confirm({
        title: 'Are You Sure!',
        content: 'The Action can not be undone later!',
        buttons: {
            
            cancel: function () {
                
            },
            confirm: {
                text: 'Okay',
                btnClass: 'btn-blue',
                keys: ['enter', 'shift'],
                action: function(){

                $.ajax({
                url: base_url+"/User/userApproveNotice",
                type: "post",
                data:{'id':id,'tablename':tablename},
                success: function (response) {

                  if(response == "1" || response == 1){
                    $.alert("Your Response Recorded");
                    $(".approvedNotice").text("Approved");
                    $(".approvedNotice").prop("disabled","true")
                  }else{
                    $.alert("Something Wents Wrong Please Try Again");
                  }


              },
       
                    error: function(jqXHR, textStatus, errorThrown) {
                       console.log(textStatus, errorThrown);
                    }
                });

                }
            }
        }
    });


      

        

        


       

      })
      </script>
