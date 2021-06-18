<style type="text/css">
  .trBorder{
    border:1px solid red !important;
  }
  .noBorder{
    border:none;
  }
</style>
<?php // echo  "<pre>";print_r($advocate_user_id);die; ?>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        PF Claim Details
        <small>advanced details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Notices</a></li>
        <li class="active">PF Claim</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">PF Claim Notice List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Approved By User</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php //]  echo  "<pre>";print_r($pf_claim_list); die;?>
                <?php for($i=0;$i<count($pf_claim_list);$i++){ ?>
                 <tr>
                  <td><?php echo $pf_claim_list[$i]->first_name." ".$pf_claim_list[$i]->last_name ?></td>
                  <td><?php echo $pf_claim_list[$i]->email  ?></td>
                  <td><?php echo $pf_claim_list[$i]->phone ?></td>
                  <td><?php if( $pf_claim_list[$i]->approved_by_user =="1"  && $pf_claim_list[$i]->approved_by_user == 1 ){
                    echo  "Approved"; }else{ echo "Pending"; }?>
                  </td>

                  <td>
                  <button class="btn btn-info noticeDetails" id="<?php echo $pf_claim_list[$i]->id ?>">View Details</button>

                  <?php if( $pf_claim_list[$i]->pulled =="1"  && $pf_claim_list[$i]->pulled_by == $advocate_user_id ){ ?>

                  

                   <button style="" class="replyNotice btn btn-primary" advocate_user_id ="<?php echo  $advocate_user_id; ?>"   table_name="pf_claim" id="<?php echo $pf_claim_list[$i]->id ?>-replyNotice" user_id = "<?php echo  $pf_claim_list[$i]->user_id; ?>" >Reply Notice</button>

                  <?php }else{ ?>

                  <button class="btn btn-success pullNotice" advocate_user_id ="<?php echo  $advocate_user_id; ?>"   table_name="pf_claim" id="<?php echo $pf_claim_list[$i]->id ?>" user_id = "<?php echo  $pf_claim_list[$i]->user_id; ?>" >Pull Notice</button>

                   <?php }?>
                   <button style="display: none;" class="replyNotice btn btn-primary" advocate_user_id ="<?php echo  $advocate_user_id; ?>"   table_name="pf_claim" id="<?php echo $pf_claim_list[$i]->id ?>-replyNotice" user_id = "<?php echo  $pf_claim_list[$i]->user_id; ?>" >Reply Notice</button>


                   <?php if(  $pf_claim_list[$i]->pulled =="1" && !empty($pf_claim_list[$i]->reply_notice) && ($pf_claim_list[$i]->approved_by_user == "1") ){ ?>
                   <button  class="uploadFinalNotice btn btn-primary" advocate_user_id ="<?php echo  $advocate_user_id; ?>"   table_name="pf_claim" id="<?php echo $pf_claim_list[$i]->id ?>-replyNotice" user_id = "<?php echo  $pf_claim_list[$i]->user_id; ?>" >Upload Final Notice</button>
                   <button  class="uploadRecievedNotice btn btn-primary" advocate_user_id ="<?php echo  $advocate_user_id; ?>"   table_name="pf_claim" id="<?php echo $pf_claim_list[$i]->id ?>-replyNotice" user_id = "<?php echo  $pf_claim_list[$i]->user_id; ?>" >Upload Recieved Notice</button>
                   <?php } ?>




                </tr>
                <?php } ?>
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


<script src="../../public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../public/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../public/dist/js/demo.js"></script>

<script src="../../public/advocate.js"></script>


<!-- page script -->
<script>

  $(function () {

    $("#addBankniftyModal").click(function(){
        $("#bankniftyModal").modal('show');
    });
    




    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
