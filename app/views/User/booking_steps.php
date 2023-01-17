<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking Steps </title>
      <!-- Normalize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <!-- Bootstrap 4 CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
      <!-- Telephone Input CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css'>
      <!-- Icons CSS -->
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
      <!-- Nice Select CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css'>
    <script src="https://use.fontawesome.com/894f5ae9f7.js"></script>
     <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL. PUBLIC_DIR?>/step_form/css/style.css">
	<!-- Demo CSS -->
	<link rel="stylesheet" href="<?php echo BASE_URL.PUBLIC_DIR?>/step_form/js/script.js">
  
  </head>
  <body>
  
 <main>
  <article>

      <!-- Start Multiform HTML -->
  <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 id="heading">Sign Up Your User Account</h2>
                <p>Fill all form field to go to next step</p>
                <form id="msform" action="<?= site_url('User/add_customer')?>" method="post">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Account</strong></li>
                        <li id="personal"><strong>Personal</strong></li>
                        <li id="payment"><strong>Image</strong></li>
                        <!-- <li id="confirm"><strong>Finish</strong></li>
 -->                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Account Information:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 1 - 4</h2>
                                </div>
                            </div> <label class="fieldlabels">Email: *</label>
                             <input type="email" name="email" placeholder="Email" />
                              <label class="fieldlabels">Password: *</label> <input type="password" name="password" placeholder="Password" /> 
                              <label class="fieldlabels">Confirm Password: *</label> <input type="password" name="confirm_password" placeholder="Confirm Password" />
                        </div> <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Personal Information:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 2 - 4</h2>
                                </div>
                            </div> <label class="fieldlabels">First Name: *</label>
                             <input type="text" name="firstname" placeholder="First Name" />
                              <label class="fieldlabels">Last Name: *</label>
                               <input type="text" name="lastname" placeholder="Last Name" />
                                <label class="fieldlabels">Middle Name: *</label>
                               <input type="text" name="middlename" placeholder="Middle Name" />
                                <label class="fieldlabels">Address: *</label>
                               <input type="text" name="address" placeholder="Address" />
                               <div class="form-group">
                                <label class="fieldlabels">Gender: *</label>
            <select name="gender" class="form-control">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>

                                        <label class="fieldlabels mt-3">Birthday: *</label>         
                                        <input type="date" name="birthday" class="form-control mb-2-" placeholder="Birthday">
                                    </div>
                                      
                        </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Image Upload:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 3 - 4</h2>
                                </div>
                            </div> <label class="fieldlabels">Upload Your Photo:</label> <input type="file" name="pic" accept="image/*"> <label class="fieldlabels">Upload Signature Photo:</label> <input type="file" name="pic" accept="image/*">
                        </div> <input type="submit" name="next" class="next action-button" value="Submit" /> 
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                <!--     <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Finish:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 4 - 4</h2>
                                </div>
                            </div> <br><br>
                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset> -->
                </form>
            </div>
        </div>
    </div>
</div>
  </article>
 </main>
 

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js'></script>
    <script src="<?php echo BASE_URL.PUBLIC_DIR?>/step_form/js/script.js"></script>
  
  </body>
</html>