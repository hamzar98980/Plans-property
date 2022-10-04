<?php 

$title="Register Your Agency";
include 'Layout/navbar.php';
?>  
<style>
    .card-box{
        /* box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
         */
        /* box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px; */
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        padding: 50px;
    }.cr{
    color: #4c7ce3;
    /* font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; */
    font-family:Georgia, 'Times New Roman', Times, serif;
}
.btn_w{
    width: 30%;
}
</style>


<?php 
$json = file_get_contents('pk.json');
  
// Decode the JSON file
$json_data = json_decode($json,true);
?>
<section class="page-header" style="background-image: url(assets/images/backgrounds/s3.jpg); background-size:cover;">
            <div class="container">
                <div class="page-header-inner">
                    <h2>Agency Registration</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>/</span></li>
                        <li>Agency Registeration</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Locations Start-->
        <section class="locations">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Locations Single-->
                        <div class="locations_three_single">
                            <div class="locations_three_title">
                                <h3>Buyers</h3>
                                <p>You can interact with good buyers and get best deals</p>
                            </div>
                         
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Locations Single-->
                        <div class="locations_three_single">
                            <div class="locations_three_title">
                                <h3>Trus Building</h3>
                                <p>You can build trust for buyers as an Ageny and make a good Deal</p>
                            </div>
                       
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Locations Single-->
                        <div class="locations_three_single">
                            <div class="locations_three_title">
                                <h3>Opportunites</h3>
                                <p>You can increase your business with us and get best offers</p>
                            </div>
                         
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Locations Single-->
                        <div class="locations_three_single">
                            <div class="locations_three_title">
                                <h3>Scalibility</h3>
                                <p>Working with plans Property can Scale Your business Sales</p>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Locations End-->

        <!--Contact Start-->
        <section class="contact">
            <div class="container">
                <div class="row">
    
                    <div class="col-sm-6 card-box">
                <h1 class="text-center h2 cr mb-4 block-title"><b>Register Your Agency</b></h1>

                        <form action="register-agency.php" method="post"  enctype="multipart/form-data">


                            <div class="form-row">
                                <div class="col-md-6 mb-6">
                                    <label for="">Firm Name</label>
                                    <div class="input-group">
                                        <input type="text" name="fname" class="form-control" placeholder="Enter Name" required>
                                    </div>
                                </div>
                          
                                <div class="col-md-6 mb-8">
                                    <label for="">Logo</label>
                                    <div class="input-group">
                                        <input type="file" name="file" placeholder="Select File" required>
                                    </div>
                                </div>
                            </div>
                            <br>

                            
                            <div class="form-row">                             
                                <div class="col-md-6 mb-8">
                                    <label for="">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                        </div>
                                        <input type="email" name="femail" class="form-control" placeholder="Enter email" required>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-8">
                                    <label for="">City</label>
                                    <div class="input-group">
                                        <!-- <input type="text" class="form-control" placeholder="Enter City" required> -->
                                        <select name="city" id="" class="form-control select2" searchable="Search here..">
                                            <?php 
                                            foreach($json_data as $data)
                                            {
                                            //echo $data['city'];
                                            ?>
                                            <option  value="<?php echo $data['city'] ?>"><?php echo $data['city'] ?></option>
                                            
                                            <?php
                                            } 
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            
                            <div class="form-row">
                                <div class="col-md-4 mb-8">
                                    <label for="">Cnic</label>
                                    <div class="input-group">
                                        <input type="text" name="cnic" class="form-control" placeholder="Cnic Number" required>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-8">
                                    <label for="">Phone Number</label>
                                    <div class="input-group">
                                        <input type="text" name="pnumber" class="form-control" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-8">
                                    <label for="">Telephone Number</label>
                                    <div class="input-group">
                                        <input type="text" name="tnumber" class="form-control" placeholder="Tel. Number" required>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="form-row">
                                <div class="col-md-12 mb-8">
                                    <label for="">Address</label>
                                    <div class="input-group">
                                        <input type="text" name="add" class="form-control" placeholder="Enter Address" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            
                            <div class="form-row">
                                <div class="col-md-12 mb-8">
                                    <label for="">Description</label>
                                    <div class="input-group">
                                       <textarea name="desc" id="" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <div class="form-row">
                                <div class="col-md-6 mb-12">
                                    <label for="">Year of Establishment</label>
                                    <div class="input-group">
                                        <input type="month" name="year" class="form-control" placeholder="Enter Address" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-12">
                                    <label for="">Firm Letter Head</label>
                                    <div class="input-group">
                                        <input type="file" name="letter" placeholder="Select letter head">
                                    </div>
                                </div>
                            </div>






                        <br>
                        <?php
                          if(agency_verified('1','0')>0){
                            if(agency_verified('0','1') == 'Pending'){
                                echo '<div class="alert alert-warning" role="alert">Registration in Pending</div>';
                            }
                          } 
                           else{
                                echo '
                                <button class="btn btn-outline-info btn_w" type="submit">Submit Form</button>
                                
                                ';
                            }
                        ?>

                        </form> 
                    </div>

                    <div class="col-xl-6 col-lg-5">

                        <img src="assets/images/bg1.jpg" alt="" srcset="" style="width:600px ;height:700px;">
               
                   
                </div>
            </div>
        </section>
     






    </div><!-- /.page-wrapper -->

   <?php include'Layout/footer.php' ?>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
   <script>
    $('.select2').select2();
    </script>
</body>

</html>