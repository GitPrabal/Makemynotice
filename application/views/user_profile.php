<style type="text/css">
    .tr-border {
        border: 2px solid red !important;
    }

    .no-border {
        border: 0px !important;
    }

    <style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  right: 323px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
  float:none;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
</style>
<main id="main">
    <section id="services" class="section-bg mt-5">
        <form method="post" id="update-data" name="update-data">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <form action="#" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label>Your First Name <sup class="red">*</sup></label>
                                    <input type="text" value="<?php echo $profileDetail["0"]->first_name ?>" class="form-control" id="firstname" name="firstname">
                                    <div class="err_firstname" style="color:red"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label>Your Last Name <sup class="red">*</sup></label>
                                    <input value="<?php echo $profileDetail["0"]->last_name ?>" type="text" class="form-control" id="lastname" name="lastname">
                                    <div class="err_lastname" style="color:red"></div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label>Email <sup class="red">*</sup></label>
                                    <input value="<?php echo $profileDetail["0"]->email ?>" disabled="true" type="text" class="form-control" id="email" name="email">
                                    <div class="err_email" style="color:red"></div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label>Your Permanent Address <sup class="red">*</sup></label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-4 form-group">
                                    <label>Pincode <sup class="red">*</sup></label>
                                    <input type="text" class="form-control" id="pincode" name="pincode">
                                    <div class="err_pincode" style="color:red"></div>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>State <sup class="red">*</sup></label>
                                    <input type="text" class="form-control" id="state" name="state">
                                    <div class="err_state" style="color:red"></div>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Address <sup class="red">*</sup></label>
                                    <input type="text" class="form-control" id="address" name="address">
                                    <div class="err_address" style="color:red"></div>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">


                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label>Your Date Of Birth <sup class="red">*</sup></label>
                                <input type="text" value="<?php echo $profileDetail["0"]->dob ?>" class="form-control datepicker" id="dob" name="dob">
                                <div class="err_dob" style="color:red"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label>Phone Number <sup class="red">*</sup></label>
                                <input type="text" disabled="true" value="<?php echo $profileDetail["0"]->phone ?>" class="form-control" id="phone" name="phone">
                                <div class="err_phone" style="color:red"></div>
                            </div>
                        </div>
        </form>
        </div>
        </div>

        <div class="form-row">
            <div class="col-md-12 form-group">
                <label class="fontBold fontRoboto">Please Attach following copy of Documents in PDF or Image</label>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 mt-5 mt-lg-0">
                <table style="border:0px;" class="table">
                    <tbody>
                    <tr id="tr_aadhar_front" class="no-border">
                        <td class="fontBold fontRoboto"><b> Aadhar Front Side</b></td>
                        <td>
                            <div class="upload-btn">
                                <input type="file" id="adharFront" name="adhar_front"
                                       onchange="checkFile(this.id,'tr_aadhar_front')">
                            </div>
                            <span id="front_err_file" style="color:red;display: none;">Please select some files</span>
                        </td>
                        <td id="adhar_front_file_uploaded" style="display: none;"><h3>File Uploaded</h3></td>
                    </tr>
                    <tr id="tr_aadhar_back" class="no-border">
                        <td class="fontBold fontRoboto"><b> Aadhar Back Side</b></td>
                        <td>
                            <div class="upload-btn">
                                <input type="file" name="adhar_back" id="adhar_back"
                                       onchange="checkFile(this.id,'tr_aadhar_back')">
                            </div>
                            <span id="back_err_file" style="color:red;display: none;">Please select some files</span>
                        </td>
                        <td id="adhar_back_file_uploaded" style="display: none;"><h3>File Uploaded</h3></td>
                        <?php 
                        if ( strpos($profileDetail['0']->adhar_front, "pdf") == true  ){ ?>
                        <td><a href="/notice_images/'.$profileDetail['0']->adhar_front.'" download >Download</a></td>
                        <?php 
                        }else{ ?>
                        <td><img id="myImg" class="largeImage" src="/notice_images/<?php echo $profileDetail['0']->adhar_front ?>" height="200" width="200" id="adhar_back" style="cursor:pointer;" ></img></td>
                        </a></td>
 
                      <?php } ?>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-6">
                <form action="#" method="post" role="form" class="php-email-form">
                    <label>
                        <button type="button" class="makeNoticeBtn" name="" id="updateData">Update Details
                        </button>
                    </label>
                    <?php if (isset($_GET['page_name'])) { ?>
                        <input type="hidden" id="page_name" name="page_name" value="<?php echo $_GET['page_name']; ?>">
                    <?php } ?>
                </form>
            </div>
        </div>
        </div>
    </section><!-- End Sevices Section -->
   
</main><!-- End #main -->

<div id="myModal" class="modal">
  <span class="close" id="closeModal">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>


<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container d-md-flex py-4">
        <div class="mr-md-auto text-center text-md-left">
            <div class="copyright">
                &copy; Copyright <strong><span>Make My Notice</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="http://www.makemynotice.com/" target="_blank">Make My Notice</a>
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->
<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
<div id="preloader"></div>
</body>
<script type="text/javascript">
    $(function () {
        $(".datepicker").datepicker({dateFormat: 'dd-mm-yy', maxDate: new Date()});
    });
</script>

