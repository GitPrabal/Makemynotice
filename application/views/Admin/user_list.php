<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User's Details
        <small>advanced details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Active Users List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Gender</th>
                  <th>Added On</th>
                </tr>
                </thead>
                <tbody>
                <?php for($i=0;$i<count($userList);$i++){?>
                <tr>
                  <td><?php echo $userList[$i]->first_name; ?> <?php echo $userList[$i]->last_name; ?></td>
                  <td><?php echo $userList[$i]->email; ?></td>
                  <td><?php echo $userList[$i]->phone; ?></td>
                  <td><?php echo $userList[$i]->gender; ?></td>
                  <td><?php echo $userList[$i]->added_on; ?></td>
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

<!-- Modals -->

<div class="modal fade" id="bankniftyModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                
                <div class="row">
                  <div class="col-xs-3 col-md-3">
                    <label style="font-size: 15px;">Open Price</label>
                  </div>
                  <div class="col-xs-6 col-md-6">
                    <input type="text" name="open_price" class="form-control" id="open_price">
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-3 col-md-3">
                    <label style="font-size: 15px;">Close Price</label>
                  </div>
                  <div class="col-xs-6 col-md-6">
                    <input type="text" name="close_price" class="form-control" id="close_price">
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-3 col-md-3">
                    <label style="font-size: 15px;">High Price</label>
                  </div>
                  <div class="col-xs-6 col-md-6">
                    <input type="text" name="high_price" class="form-control" id="high_price">
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-3 col-md-3">
                    <label style="font-size: 15px;">Low Price</label>
                  </div>
                  <div class="col-xs-6 col-md-6">
                    <input type="text" name="low_price" class="form-control" id="low_price">
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-3 col-md-3">
                    <label style="font-size: 15px;">Banknifty Date</label>
                  </div>
                  <div class="col-xs-6 col-md-6">
                    <input type="text" name="bank_date" class="form-control" id="bank_date">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add Banknifty Details</button>
              </div>
            </div>
          </div>
</div>


<!-- ./wrapper -->

<!-- jQuery 3 -->
<!-- page script -->
<script>
 
</script>
</body>
</html>
