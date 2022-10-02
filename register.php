<?php 
$title="Registeration ";
include 'Layout/navbar.php';
require 'facebook_signup.php';
include 'google_signup.php';
?>
</body>



<style>
    .bg-register-image {
        margin-top: -150px;
    /* background: url(https://source.unsplash.com/Mv9hjnEUHR4/600x800); */
    background-image: url(pictures/For-sale.jpg);
    background-position: center;
    background-size: 125%;
    background-repeat: no-repeat;}
.cr{
    color: #4c7ce3;
}
</style>

<script src="uploadimage.js"></script>  



    <div class="container bg-gradient-primary">

        <div class="card o-hidden border-0  my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-6 p-5 ">
                       
                         <h1 class="text-center h2 cr mb-4"><b>Create an Account!</b></h1>
                         <form id="regForm" class="user" method="POST" action="signup.php" enctype="multipart/form-data">
                                        <div class="tab form-group row">

                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="fname">First Name</label>
                                                <input type="text" class="form-control" id="fname" placeholder="John" name="fname">
                                                <?php if (isset($_GET['fname'])) { ?>
                                                <small class="text-danger">
                                                <?php echo $_GET['fname']; ?>
                                                </small>
                                            <?php } ?>
                                            </div>
                                            <div class="col-sm-6">
                                            <label for="lname">Last Name</label>
                                                <input type="text" class="form-control" id="lname" placeholder="Doe" name="lname">
                                                <?php if (isset($_GET['lname'])) { ?>
                                                <small class="text-danger">
                                                <?php echo $_GET['lname']; ?>
                                                </small>
                                            <?php } ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                            <label for="CNIC">Id Card Number</label>
                                                <input type="number" min=0 class="form-control" id="CNIC" placeholder="42101-0000000-0" name="cnic">
                                                <?php if (isset($_GET['cnic'])) { ?>
                                                <small class="text-danger">
                                                <?php echo $_GET['cnic']; ?>
                                                </small>
                                            <?php } ?>
                                            </div>
                                            <div class="col-sm-6">
                                            <label for="num">WhatsApp Number</label>
                                                <input type="text" class="form-control" min=0 id="num" placeholder="03XX-0000000" name="num" >
                                                <?php if (isset($_GET['num'])) { ?>
                                                <small class="text-danger">
                                                <?php echo $_GET['num']; ?>
                                                </small>
                                            <?php } ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Email">Email</label>
                                            <input type="email" class="form-control" id="Email" placeholder="john@doe.com" name="email">
                                            <?php if (isset($_GET['email'])) { ?>
                                                <small class="text-danger">
                                                <?php echo $_GET['email']; ?>
                                                </small>
                                            <?php } ?>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="Password">Password</label>
                                                <input type="password" class="form-control" id="Password" placeholder="Password" name="pass">
                                                <?php if (isset($_GET['pass'])) { ?>
                                                <small class="text-danger">
                                                <?php echo $_GET['pass']; ?>
                                                </small>
                                            <?php } ?>
                                            </div>
                                            <div class="col-sm-6">
                                            <label for="ConPass">Confirm Password</label>
                                                <input type="Password" class="form-control" id="ConPass" name="ConPass">
                                                <?php if (isset($_GET['ConPass'])) { ?>
                                                <small class="text-danger">
                                                <?php echo $_GET['ConPass']; ?>
                                                </small>
                                            <?php } ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="Gender">Gender</label>
                                                <select name="gender" class="form-control ">
                                                    <option class="active">Select</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                                <?php if (isset($_GET['gender'])) { ?>
                                                <small class="text-danger">
                                                <?php echo $_GET['gender']; ?>
                                                </small>
                                            <?php } ?>
                                            </div>
                                        
                                            <div class="col-sm-6">
                                                <label for="age">Age</label>
                                                <input type="number" class="form-control " id="age" placeholder="Age" name="age" min=18>
                                                <?php if (isset($_GET['age'])) { ?>
                                                <small class="text-danger">
                                                <?php echo $_GET['age']; ?>
                                                </small>
                                            <?php } ?>
                                            </div>
                                        </div>
                
                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="Image">Image</label>
                                        <input type="file" class="form-control " id="Image" onchange="showPreview(event)" name="file">
                                        <?php if (isset($_GET['Image'])) { ?>
                                                <small class="text-danger">
                                                <?php echo $_GET['Image']; ?>
                                                </small>
                                            <?php } ?>
                                    </div>


                                    <div class="form-group col-md-6">
                                                        
                                        <img class="ml-5" id="file-ip-1-preview" src="https://rlv.zcache.com/create_your_own_photo_print-r7881a010b313447b82044d4b2d1875bc_ncud_8byvr_324.jpg" width="150px">
                                    </div>


                                </div>
                                <button class="btn btn-primary btn-user btn-block">Register</button>
                             <hr>

                                <?php  echo '<div align="center">'.$login_button . '</div>'; 
                                echo '<br>';
                                 echo $facebook_login_url;
                                
                                ?>

                               
                                <!--<a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a> -->

                            </form>
                            <hr>
                          
                            <div class="text-center">
                            Already have an account? <a class="small" href="login.php"> Login Here! </a>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php include('Layout/footer.php') ?>