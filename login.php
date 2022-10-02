<?php 
include('dbconfig.php');
// require 'facebook_signup.php';
$title="Sign in Here ";
include ('layout/navbar.php');
require 'facebook_signup.php';

include 'google_signup.php';
?>
 <style>
    .bg-login-image {
  /* background: url("https://source.unsplash.com/Mv9hjnEUHR4/600x800"); */
  background-image: url("pictures/p1.jpg");
  background-position: center;
  background-size: cover;
}
.cr{
    color: #4c7ce3;
}
</style>


    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 -lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h2 cr mb-4"><b>Welcome Back!</b></h1>
                                    </div>
                                    <form class="user" action="session.php" method="POST">

                                    <?php if (isset($_GET['error'])) { ?>
                                        <div class="alert alert-danger" role="alert">
                                        <?php echo $_GET['error']; ?>
                                        </div>
                                    <?php } ?>


                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                            id="myInput" placeholder="Password" name="pwd">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">


                                             <!-- An element to toggle between password visibility -->
                                          <input type="checkbox" onclick="myFunction()"> Show Password  

                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block" name="btn" type="submit">Login</button>
                                           <!-- 
                                        <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> -->
                                        
                                    </form>

                                    <hr>
                                    
                                    <div class="text-center">
                                       <?php  echo '<div align="center">'.$login_button . '</div>'; ?>
                                    </div>
                                    <div class="text-center">
                                       <?php  
                                    //    echo '<div align="center">
                                        
                                    //     <a href="'.$login_url.'"class="btn btn-primary btn-user btn-block"><i class="fab fa-facebook fa-fw"></i> Login With Facebook</a>
                                    //    </div>'; 
                                    echo $facebook_login_url;
                                       ?>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


<script>
    function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<?php 
include('Layout/footer.php')?>