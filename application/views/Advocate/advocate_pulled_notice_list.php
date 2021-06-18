<?php //  echo  "<pre>";print_r($advocate_pulled_notice_list); die; ?>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pulled Notice
        <small>advanced details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Notices</a></li>
        <li class="active">Pulled</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pulled Notice List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Notice Type</th>
                  <th>Name</th>
                 
                  <th>Phone</th>
                  <th>Approved By User </th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php for( $i=0;$i<count($advocate_pulled_notice_list); $i++ ){ ?>
                 <tr>
                  <td><?php echo $advocate_pulled_notice_list[$i]["0"]->table_head; ?></td>
                  <td><?php echo $advocate_pulled_notice_list[$i]["0"]->first_name; ?>
                  <?php echo $advocate_pulled_notice_list[$i]["0"]->last_name; ?></td>
                  
                  <td><?php echo $advocate_pulled_notice_list[$i]["0"]->phone; ?></td>
                  <td><?php 
                  if( $advocate_pulled_notice_list[$i]["0"]->approved_by_user == "1" || $advocate_pulled_notice_list[$i]["0"]->approved_by_user == 1){  ?>
                  Approved

                  <?php } else { echo  "Pending"; } ?>
                    
                  </td>
                  <td>
                   <button class="btn btn-sm btn-info noticeDetails" 
                  table-name ="<?php echo $advocate_pulled_notice_list[$i]["0"]->table_name;?>"
                  user_id= "<?php echo $advocate_pulled_notice_list[$i]["0"]->user_id;  ?>"
                  notice_id= "<?php echo $advocate_pulled_notice_list[$i]["0"]->id;  ?>"
                  id="">View Notice</button>

                  <button class="btn btn-sm btn-success replyNotice"
                  table-name ="<?php echo $advocate_pulled_notice_list[$i]["0"]->table_name;?>"
                  user_id= "<?php echo $advocate_pulled_notice_list[$i]["0"]->user_id;  ?>"
                  notice_id= "<?php echo $advocate_pulled_notice_list[$i]["0"]->id;  ?>"
                  >Reply Notice</button>

                 

                   <?php if(  $advocate_pulled_notice_list[$i]["0"]->pulled =="1" && !empty($advocate_pulled_notice_list[$i]["0"]->reply_notice) && ($advocate_pulled_notice_list[$i]["0"]->approved_by_user == "1") ){ ?>

                   <button  class="uploadFinalNotice btn btn-primary btn-sm"
                   
                   table_name="<?php echo  $advocate_pulled_notice_list[$i]["0"]->table_name ;?>"
                   id="<?php echo  $advocate_pulled_notice_list[$i]["0"]->id ;?>" 
                   user_id = "<?php echo  $advocate_pulled_notice_list[$i]["0"]->user_id ;?>"

                    >Upload Final Notice</button>
                   
                   <button  class="uploadRecievedNotice btn btn-primary btn-sm" 
                   
                   table_name="<?php echo  $advocate_pulled_notice_list[$i]["0"]->table_name ;?>"
                   id="<?php echo  $advocate_pulled_notice_list[$i]["0"]->id ;?>" 
                   user_id = "<?php echo  $advocate_pulled_notice_list[$i]["0"]->user_id ;?>"

                   >Upload Recieved Notice</button>
                   
                   <?php } ?>



                 </tr>
                <?php  } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

