<?php // echo  "<pre>";print_r($new_notices_uploaded); die; ?>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        New Notices List
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
              <h3 class="box-title">New Notices Loaded</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="" class="table table-bordered table-striped notice_list">
                <thead>
                <tr>
                  <th>Notice Type</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Added On</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>


                <?php for( $i=0;$i<count($new_notices_uploaded); $i++ ){ ?>
                <?php if( !empty($new_notices_uploaded[$i]) ){ ?>
                 <tr>
                  <td><?php echo $new_notices_uploaded[$i]["0"]->table_head; ?></td>
                  <td><?php echo $new_notices_uploaded[$i]["0"]->first_name; ?>
                  <?php echo $new_notices_uploaded[$i]["0"]->last_name; ?></td>
                  <td><?php echo $new_notices_uploaded[$i]["0"]->email; ?></td>
                  <td><?php echo $new_notices_uploaded[$i]["0"]->phone; ?></td>
                  <td><?php echo $new_notices_uploaded[$i]["0"]->added_date; ?></td>
                  <td>
                  <button class="btn btn-sm btn-info noticeDetails" 
                  table-name ="<?php echo $new_notices_uploaded[$i]["0"]->table_name;?>"
                  user_id= "<?php echo $new_notices_uploaded[$i]["0"]->user_id;  ?>"
                  notice_id= "<?php echo $new_notices_uploaded[$i]["0"]->id;  ?>"
                  id="<?php echo $new_notices_uploaded[$i]["0"]->advocate_pulled_id;  ?>">
                  View Notice</button>

                  <button class="btn btn-sm btn-success pullNotice"
                          table-name ="<?php echo $new_notices_uploaded[$i]["0"]->table_name;?>" 
                          id="<?php echo $new_notices_uploaded[$i]["0"]->advocate_pulled_id;  ?>"
                          user_id= "<?php echo $new_notices_uploaded[$i]["0"]->user_id;  ?>"
                          notice_id= "<?php echo $new_notices_uploaded[$i]["0"]->notice_id;  ?>"
                          >
                          Pull Notice
                  </button>
                 </tr>
                <?php  } } ?>
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

<!-- Modals -->

  <div id="viewNoticeDetail" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Consumer Notice Detail</h4>
      </div>
      <div class="modal-body">
      <div id="result"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
