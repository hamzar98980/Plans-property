<?php 
ob_start();
session_start();
include 'dbconfig.php';

?>

<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Plans Property - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="../assets/css/app.min.css">
  <link rel="stylesheet" href="../assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="../assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="../assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='../assets/img/favicon.ico' />

  
  <link rel="stylesheet" href="../assets/bundles/izitoast/css/iziToast.min.css">



    
 <!-- General CSS Files -->
 <link rel="stylesheet" href="../assets/css/app.min.css">
  <link href="../assets/bundles/lightgallery/dist/css/lightgallery.css" rel="stylesheet">
  <!-- Template CSS -->


  <style>
    .cb1{
      height: 700px;
    }
    .img1{
      height: 150px;
      width: 150px;
    }

  </style>
</head>



<?php 
    include 'navbar.php';
    include 'sidebar.php';

    $ad_id = $_REQUEST['id'];
    $ag_id = $_REQUEST['ag_id'];

   
    ?>

               
<body>
  <!-- <div class="loader"></div> -->
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <!-- Main Content -->
      


      <div class="main-content">
        <section class="section">
          <div class="section-body">










          <section class="section">
          <div class="section-body">
            <div class="row clearfix">
              <!-- <div class="col-sm-4"></div> -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Properties Images</h4>
                  </div>
                  <div class="card-body">
                    <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                      <?php 
                      $sql_img = "SELECT i_pic from aimg where ai_id  = '$ad_id'";
                      // echo $sql_img;
                      $resu = $conn->query($sql_img);
                      $ch  = mysqli_num_rows($resu);
                      while ($row = $resu->fetch_array()) {
                        $pic = $row['i_pic'];
                      ?>
                      <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <a href="<?php  echo '/agency/images/'.$row['i_pic'];?>">
                          <img class="img-responsive thumbnail" src="<?php echo '/agency/images/'.$row['i_pic'];?>" alt="" style="width: 150px;padding:2px; height:150px;" >
                        </a>
                      </div>
                      <?php }?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>








            <div class="row mt-sm-4">
              <div class="col-6 col-md-12 col-lg-4">
           
                <div class="card">
                   
                  <div class="card-header">
                  <h4>Sellers Info</h4>       
                  </div>
                  <div class="card-body">
                  
                    <div class="py-4">
                      <?php 
                      $sql_ag = "SELECT * from s_regist where s_id = '$ag_id'";
                      $reg = $conn->query($sql_ag);
                      while ($r = $reg->fetch_array()) {
                      ?>
                        <div class="row">
                          <div class="col-sm-2"></div>
                          <div class="col-sm-3">
                          <img src="<?php echo '/agency/'.$r['s_pic'] ?>" alt="" class="rounded-circle img1">
                          </div>
                          <div class="col-sm-7"></div>
                        </div>
                      <br>
                      <br>
                      <p class="clearfix">
                        <span class="float-left">
                          Sellers Name
                        </span>
                        <span class="float-right text-muted">
                          <?php echo $r['s_name'] ?>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Phone
                        </span>
                        <span class="float-right text-muted">
                          <?php echo $r['s_num'] ?>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Mail
                        </span>
                        <span class="float-right text-muted">
                          <?php echo $r['s_email'] ?>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Cnic
                        </span>
                        <span class="float-right text-muted">
                        <?php echo $r['s_cnic'] ?>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Gender
                        </span>
                        <span class="float-right text-muted">
                            <?php echo $r['s_gen'] ?>
                        </span>
                      </p>
                      <?php } ?>
                    </div>

                    
                  </div>
              
                </div>
              
               
              </div>



            


              <div class="col-12 col-md-12 col-lg-8">
              <div class="card">
                  <div class="card-header">
                    <h4>Property Details</h4>
                  </div>
                  <form action="" method="POST"> 
                  <div class="card-body cb1">
                    <div class="">
                    <?php 
                    $sql_get = "SELECT * from s_add where a_id = '$ad_id'";
                    $res = $conn->query($sql_get);
                    while ($r = $res->fetch_array()) { 
                        $sm = $r['ag_id'];
                        $img_id = $r['a_id'];
                        
                    ?>
            
                    

                    <div class="row">
                    <div class="col-sm-12">
                                <label for="" class="">Title</label>
                         <input type="text" value="<?php echo $r['a_title'] ?>" class="form-control" readonly>
                    </div>
                    </div>
 
                    <br>
                    <div class="row">
                    <div class="col-sm-12">
                                <label for="" class="">Address</label>
                         <input type="text" value="<?php echo $r['a_loc'] ?>" class="form-control" readonly>
                    </div>
                    </div>
                      
                    <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="" class="">Price</label>
                            <input type="text" value="<?php echo $r['a_price'] ?>" class="form-control" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label for="" class="">Category</label>
                            <input type="text" value="<?php echo $r['a_cat'] ?>" class="form-control" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label for="" class="">Type</label>
                            <input type="text" value="<?php echo $r['a_type'] ?>" class="form-control" readonly>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-3">
                            <label for="" class="">City</label>
                            <input type="text" value="<?php echo $r['a_city'] ?>" class="form-control" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label for="" class="">Bathrroms</label>
                            <input type="text" value="<?php echo $r['a_bath'] ?>" class="form-control" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label for="" class="">Bedrooms</label>
                            <input type="text" value="<?php echo $r['a_bad'] ?>" class="form-control" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label for="" class="">Area</label>
                            <input type="text" value="<?php echo $r['a_area'] ?>" class="form-control" readonly>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <textarea name="text"  readonly class="form-control"  cols="30" rows="10" ><?php echo $r['a_desc'] ?></textarea>
                        </div>
          
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <select name="status" id=""  class="form-control">
                              <?php 
                              if($r['a_status'] == 'Pending'){
                              ?>
                              <option style="color: red;" value="<?php echo $r['a_status'] ?>" ><?php echo $r['a_status'] ?></option>
                              <option value="Approved" style="color: green;"><b>Approved</b></option>
                              <option value="Rejected" style="color:black;"><b>Rejected</b></option>
                                <?php } if($r['a_status'] == 'Approved'){?>
                                  <option style="color: red;" value="<?php echo $r['a_status'] ?>" ><?php echo $r['a_status'] ?></option>
                                  <option value="Pending" style="color: green;"><b>Pending</b></option>
                                  <option value="Rejected" style="color:black;"><b>Rejected</b></option>
                           
                                  <?php } if($r['a_status'] == 'Rejected'){
                                    ?>
                                    <option style="color: red;" value="<?php echo $r['a_status'] ?>" ><?php echo $r['a_status'] ?></option>
                                  <option value="Pending" style="color: green;"><b>Pending</b></option>
                                  <option value="Rejected" style="color:black;"><b>Approved</b></option>
                                    <?php }?>
                            </select>
   
                        </div>
                    </div>
                    <br>
                    <br>
                   
                    <br>
                    <div class="row">
                      <div class="col-sm-12">
                        <button class="btn btn-primary" name="btn"  style="width:100% ;">Submit</button>
                      </div>
                    </div>
                       

                    <?php  } ?>
                    </div>
                  </div>
                  </form>


              <?php 
              if(isset($_POST['btn'])){
                $stats = $_POST['status'];

                $sql_upd = "UPDATE s_add set a_status = '$stats' where a_id = '$ad_id'";
                if($conn->query($sql_upd)){
                  header("Location: seller-adds.php?success=Property has been Updated");
                }
                else{
                  echo 'try again';
                }
              }
              
              ?>





                </div>
          
              </div>
            </div>
          </div>
        </section>

        <!-- Setting Sidebar  -->
        <?php  include 'setting.php'; ?>
      </div>

    </div>
  </div>
  
  <!-- General JS Scripts -->
  <script src="../assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="../assets/bundles/datatables/datatables.min.js"></script>
  <script src="../assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="../assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="../assets/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="../assets/js/custom.js"></script>


  <!-- JS Libraies -->
  <script src="../assets/bundles/izitoast/js/iziToast.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="../assets/js/page/toastr.js"></script>



  <!-- JS Libraies -->
  <script src="../assets/bundles/lightgallery/dist/js/lightgallery-all.js"></script>
  <!-- Page Specific JS File -->
  <script src="../assets/js/page/light-gallery.js"></script>
  



</body>


<!-- export-table.html  21 Nov 2019 03:56:01 GMT -->
</html>


