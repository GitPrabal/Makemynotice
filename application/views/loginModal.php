<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css">
<meta name="google-signin-client_id" content="383371093700-njdpog5uhjgd4clth4leni083f8s394h.apps.googleusercontent.com">

<div class="modal fade bd-example-modal-lg" id="logiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-body" style="padding: 0rem;">
      <div class="row"> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form" style="padding: 25px;">
               <span style="font-size: 19px;font-weight: bold;">MAKE MY NOTICE</span>
               <span style="font-size: 17px;display: block;margin-top: 10px;margin-bottom: 10px;">Welcome Back, Please Login to your account</span>
               <br />
               <img src="../../public/assets/img/back_arrow.png" class="displayNone backImage" width="20" style="margin-bottom:20px;cursor:pointer;"/>
               <center>
                <div class="alert alert-danger text-center error-msg" style="display: none;"></div>
                <div class="text-center loader" style="display: none;">
                  <h3>
                     Loading...
                  </h3>
                </div>
                
               </center>

               <div class=""> 
                <form>
                  <div class="form-group">
                    <label class="emailLabel">Email / Phone </label>
                    <input type="email" name="email" placeholder="Email / Phone " class="form-control" id="loginEmail">
                    <input type="text" placeholder="Enter OTP" name="otpTextBox" class="form-control" id="otpTextBox" style="display:none">
                    <span class="colorRed fontSize13 displayNone message">This field cannot be left blank</span>  
                  </div>
                  <div class="form-group password_div">
                    <label class="passLabel displayNone">Password</label>
                    <input type="password" placeholder="Password" name="password" class="form-control displayNone" id="loginPassText">
                  </div>
                  <div class="allowBack" style="display:flex">
                  <input type="button" id="loginWithOtpBtn" name="" value="Login With Otp" class="btn btn-primary otp-button">
                  <input type="button" id="verifyOtpBtn" name="" value="Verify Otp" class="displayNone btn btn-primary otp-button">&nbsp;
                  <input type="button" id="loginWithPassBtn" name="" value="Login With Password" class="btn btn-primary pass-button">
                  <input type="button" id="loginUser" name="" value="Login" class="displayNone btn btn-primary">
                  </div>
                </form>
                </div>
                <br />
                

                <div style="display:flex;" class="row">
                <div class="col-md-5">
                  <button class="loginBtn loginBtn--facebook"  style="height:50px;" onclick="fbLogin();" id="fbLink">
                     Login with Facebook
                  </button></div>
                  <div class="col-md-6">
                    <div id="gSignIn" style="margin-top:3px;"></div>
                  </div><!-- Col -->
                </div><!-- Row -->


                </div>
            </div>

             <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs desktopVisible" style="padding-left:0px;">
                <img src="../../public/assets/img/modal_rt.png" class="desktopVisible img-responsive" style="width: 100%;">
                <button type="button" class="close" data-dismiss="modal" style="position:absolute; top: 8px; right: 40px;color: white;font">X</button>
            </div>
        </div>
      </div>
   
    </div>
  </div>
</div>


<div class="modal fade bd-example-modal-lg" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-body" style="padding: 0rem;">
      <div class="row"> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form" style="padding: 25px;">
               <span style="font-size: 19px;font-weight: bold;">MAKE MY NOTICE</span>
               <span style="font-size: 17px;display: block;margin-top: 10px;margin-bottom: 10px;">Welcome, Create an account</span>
               <br />
               <center>
                <div class="alert alert-danger text-center error-msg" style="display: none;"></div>
                <div class="alert alert-success text-center success-msg" style="display: none;"></div>
                <div class="text-center" style="display: none;">
                  <h3>
                     Loading...
                  </h3>
                </div>
                
               </center>
                <form>

                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control" id="first_name">
                  </div>
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="last_name">
                  </div>

                  <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" class="form-control" id="email_id">
                  </div>
                  <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" name="phone_num" class="form-control" id="phone_num">
                  </div>

                  <div class="form-group">
                    <label>Create Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                  </div>

                   <div class="form-group">
                    <label>Date Of Birth</label>
                    <input type="text" name="dob" class="form-control datepicker" id="dob">
                  </div>

                  <div class="row">
                       <div class="col-lg-6">
                          <input type="radio" name="gender" value="male" checked=""> Male
                       </div>
                       <div class="col-lg-6">
                          <input type="radio" name="gender" value="female"> Female
                       </div>
                    </div>
                    

                  <input type="button" id="userSignUp" name="" value="Register" class="btn btn-primary mt-2">
                  <!-- <a href="#" style="text-decoration: none"><span id="newSignUp" style="font-size: 11px;font-weight: bold;">Already a Member ? Sign In</span></a> -->
                </form>
                </div>
            </div>

             <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs desktopVisible" style="padding-left:0px;">
                 <img src="../../public/assets/img/register.png" class="desktopVisible img-responsive" style="width: 100%;height:733px">
                <button type="button" class="close" data-dismiss="modal" style="position:absolute; top: 8px; right: 40px;color: white;font">X</button>
               
            </div>
        </div>
      </div>
   
    </div>
  </div>
</div>
<script type="text/javascript">
   
</script>
