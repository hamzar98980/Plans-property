<?php 
ob_start();
include 'config.php';
session_start();
?>
 <head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Plans Property - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>



<body>
  
    <?php 
    include 'navbar.php';
    include 'sidebar.php';
    ?>
  <?php 
    include 'navbar.php';
    include 'sidebar.php';

    $json = file_get_contents('pk.json');
  
// Decode the JSON file
    $json_data = json_decode($json,true);
    ?>
<?php 
function select($val1,$val2){
    if($val1 == $val2){
        return 'selected';
    }
    else{
        return '';
    }
}
$id = $_REQUEST['edit'];
$sql_get = "SELECT u_name,u_email,u_pass,u_dest,u_contact,u_cnic,u_addres,u_city,ad_dest from a_user inner join a_dest on ad_id = u_dest where u_id = '$id';";
$res= $con->query($sql_get);
while ($r = $res->fetch_array()) {

?>
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              
                <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit User</h4>
                  </div>
                  <form action="" method="POST">
                  <div class="card-body">
                  
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Name</label>
                        <input type="text" class="form-control" name="name" id="inputEmail4" value="<?php echo $r['u_name'] ?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Email</label>
                        <input type="email" class="form-control" name="email" id="inputPassword4" value="<?php echo $r['u_email'] ?>">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Password</label>
                        <input type="text" class="form-control" id="inputEmail4" name="pwd" value="<?php echo $r['u_pass'] ?>">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="inputState">Designation</label>
                        <select name="dest" id="inputState" class="form-control">
                             <?php echo'<option >Choose...</option>
                             <option value="2" '.select($r['u_dest'],'2').'>Admin</option>
                             <option value="1" '.select($r['u_dest'],'1').'>Add Approval</option>
                             <option value="3" '.select($r['u_dest'],'3').'>Checker</option>';?>
                          
                         
                        
                        </select>
                      </div>

                    </div>
                  
                    <div class="form-row">

                      <div class="form-group col-md-6">
                      <label for="inputCity">City</label>
                            <select name="city" id="" class="form-control select2" searchable="Search here..">
                                  <option active value="<?php echo $r['u_city'] ?>"><?php echo $r['u_city'] ?></option>
                                
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


                      <div class="form-group col-md-3">
                        <label for="inputZip">Conatct</label>
                        <input type="text" name="contact" class="form-control" id="inputZip" value="<?php echo $r['u_contact']  ?>">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputZip">Cnic</label>
                        <input type="text" name="cnic" class="form-control" id="inputZip" value="<?php echo $r['u_cnic']  ?>">
                      </div>
                    </div>
                    

                    <div class="form-group">
                      <label for="inputAddress2">Address </label>
                      <input type="text" name="address" class="form-control" id="inputAddress2"
                      value="<?php echo $r['u_addres']  ?>">
                    </div>
                    
                   
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-primary" name="btn" type="submit">Submit</button>
                  </div>
                  </form>
                </div>
                </div>
               
            </div>
          </div>
        </section>
</div>
<?php }?>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>


  <?php 
  
if(isset($_POST['btn'])){

  $name = $_POST['name']; 
  $email = $_POST['email'];
  $pass = $_POST['pwd'];
  $dest = $_POST['dest']; 
  $cont = $_POST['contact'];
  $cnic = $_POST['cnic'];
  $city = $_POST['city'];
  $add = $_POST['address'];

  $sql_insert = "UPDATE a_user set u_name = '$name',u_email = '$email',u_pass = '$pass',u_dest = '$dest',u_contact = '$cont',u_cnic = '$cnic',u_addres = '$add',u_city = '$city' where u_id = '$id'";

  if($con->query($sql_insert)){
        echo 'Submitted';
        // header("Location: user-display.php?success=1 row Added $name");
        header("Location:user-display.php?success=1 row Edit $name");
  }
  else{
    echo "not submit";
  }
  
}
  
  ?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
    $('.select2').select2();
</script>
</body>