<?php // echo "<pre>";print_r($advocateList["0"]->); die; ?>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Advocate's Details
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
          <button class="btn btn-info" id="addAdvocate">Add Advocate Details</button>
        </div>
     </div>
     
     <br />

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Advocate List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Registration No</th>
                  <th>Certificate</th>
                </tr>
                </thead>
                <tbody>
                <?php for($i=0;$i<count($advocateList);$i++ ){ ?>
                 <tr>
                  <td><?php echo  $advocateList[$i]->first_name; ?></td>
                  <td><?php echo  $advocateList[$i]->email; ?></td>
                  <td><?php echo  $advocateList[$i]->phone; ?></td>
                  <td><?php echo  $advocateList[$i]->registration_no;?></td>
                  <?php if (empty($advocateList[$i]->certificate)){  ?>
                  <td>No Certificate Uploaded</td>
                  <?php }else { ?> 
                  <td><a href="/advocate_certificate/<?php echo $advocateList[$i]->certificate; ?>" download >Download</a></td>
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

<!-- Modals -->

<div class="modal fade" id="bankniftyModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Advocate</h4>
              </div>
              <div class="modal-body">

                <form class="form-horizontal" name="advocate-form" id="advocate-form">
                <div class="alert alert-success text-center advocate-success" style="display: none;margin: auto;width:60%;">
                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>&nbsp;Advocate Added Successfully</div>
                <div class="alert alert-danger text-center advocate-error" style="display: none;margin: auto;width:60%;"></div>
                <div class="loader text-center" style="display: none;">
                <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                </div>

                <br />
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="advocateName" placeholder="Enter Name" name="name">
                    <span class="advocateName" style="color: red;" id=""></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Email</label>
                  <div class="col-sm-10">          
                    <input type="text" class="form-control" id="advocateEmail" placeholder="Enter Email" name="email">
                    <span class="advocateEmail" style="color: red;" id=""></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pass">Password</label>
                  <div class="col-sm-10">          
                    <input type="text" class="form-control" id="advocatePass" placeholder="" name="advocatePass" >
                    <span class="advocatePass" style="color: red;" id=""></span>
                    <a href="#" id="generatePassword"><span>Generate Password</span></a>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Phone</label>
                  <div class="col-sm-10">          
                    <input type="text" class="form-control" id="advocatePhone" placeholder="Enter Phone" name="phone" >
                    <span class="advocatePhone" style="color: red;" id=""></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Gender</label>
                  <div class="col-sm-10">          
                    <select class="form-control" id="advocateGender" name="advocateGender">
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="registrationNumber">Registration No</label>
                  <div class="col-sm-10">          
                    <input type="text" class="form-control" id="registrationNumber" placeholder="" name="registrationNumber" >
                    <span class="registrationNumber" style="color: red;" id=""></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="certificate">Certificate</label>
                  <div class="col-sm-10">          
                    <input type="file" class="form-control" id="certificate" placeholder="" name="certificate" >
                    <span class="certificate" style="color: red;" id=""></span>
                  </div>
                </div>
              </form>
                
               
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="addAdvocateButton">Send</button>
              </div>
            </div>
          </div>
</div>


<!-- ./wrapper -->

<!-- jQuery 3 -->
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

<script src="../../public/assets/js/main.js"></script>

<!-- page script -->
<script>
  $(function () {

    $("#generatePassword").click(function(){

          var symbol = "!@#$%^&*(){}[]=<>/,.|~?";
          var randomPass =  Math.random().toString(36).slice(2);
          $("#advocatePass").val(randomPass);
    })


    $("#addAdvocate").click(function(){
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
