
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>User Registration | SILP Church Management System</title>

    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/logo.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css">

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="assets/css/demo.css">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css">
    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script><style type="text/css">
.layout-menu-fixed .layout-navbar-full .layout-menu,
.layout-page {
  padding-top: 0px !important;
}
.content-wrapper {
  padding-bottom: 0px !important;
}
.btn-cool-blues{
  background: #2193b0;
  background:-webkit-linear-gradient(to right, #6dd5ed, #2193b0);
  background: linear-gradient(to right, #6dd5ed,#2193b0);
  color:#fff;
  border: 3px solid #eee;
}
</style>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
               <!-- Logo -->
               <center><img src="assets/img/favicon/logo.png" height="60" width="60"></center>
              <center><span class="app-brand-text demo text-body fw-bolder">SILP</span></center></br>
              <!-- /Logo -->
              <h4 class="mb-2">Register</h4>
              <p class="mb-4">Please fill out every information to Register</p>

              <form id="formCreateUser" class="form-control-xxl" action="registration.php" method="POST">
                <div class="mb-3">
                  <label for="username" class="form-label">Firstname</label>
                  <input 
                  type="text" 
                  class="form-control" 
                  id="firstname" 
                  name="firstname" 
                  placeholder="Enter your firstname" 
                  autofocus="">
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Middlename</label>
                  <input 
                  type="text" 
                  class="form-control" 
                  id="middlename" 
                  name="middlename" 
                  placeholder="Enter your middlename" 
                  autofocus="">
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Lastname</label>
                  <input 
                  type="text" 
                  class="form-control" 
                  id="lastname" 
                  name="lastname" 
                  placeholder="Enter your lastname" 
                  autofocus="">
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Address</label>
                  <input 
                  type="text" 
                  class="form-control" 
                  id="address" 
                  name="address" 
                  placeholder="Enter your address" 
                  autofocus="">
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Contact Number</label>
                  <input 
                  type="text" 
                  class="form-control" 
                  id="contactnumber" 
                  name="address" 
                  placeholder="Enter your contactnumber" 
                  autofocus="">
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Email</label>
                  <input 
                  type="text" 
                  class="form-control" 
                  id="email" 
                  name="email" 
                  placeholder="Enter your email" 
                  autofocus="">
                </div>
                <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Gender</label>
                        <select class="form-select" id="gender" name="gender" aria-label="Default select example">
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                        </select>
                </div>
                <div class="mb-3">
                        <label for="language" class="form-label">Civil Status</label>
                          <select id="civil_status" name="civil_status" aria-valuenow="" class="select2 form-select">
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Annuled">Annuled</option>
                            <option value="Widow">Widow</option>
                            </select>
                          </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input 
                  type="text" 
                  class="form-control" 
                  id="username" 
                  name="username" 
                  placeholder="Enter your username" 
                  autofocus="">
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input 
                    type="password" 
                    id="password" 
                    class="form-control" 
                    name="password" 
                    placeholder="············" 
                    aria-describedby="password">
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
              
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms">
                    <label class="form-check-label" for="terms-conditions">
                      I agree to
                      <a href="javascript:void(0);">privacy policy &amp; terms</a>
                    </label>
                  </div>
                </div>
                <button class="btn btn-cool-blues d-grid w-100">Register</button>
              </form>

              <p class="text-center">
                <span>Already have an account?</span>
                <a href="index.php">
                  <span>Login instead</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
  

</body></html>