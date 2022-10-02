

<?php 
include 'config.php';
session_start();
?>
 <head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />

<!------ Include the above in your HEAD tag ---------->
<style>
  .select2-container .select2-selection--single{
    height:34px !important;
}
.select2-container--default .select2-selection--single{
         border: 1px solid #ccc !important; 
     border-radius: 0px !important; 
}


</style>
</head>



<body>




    <?php 
    include 'navbar.php';
    include 'sidebar.php';

    $json = file_get_contents('pk.json');
  
// Decode the JSON file
    $json_data = json_decode($json,true);
    ?>


<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              
                <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Add User</h4>
                  </div>
                  <form action="addusers.php" method="POST">
                  <div class="card-body">
                  
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Name</label>
                        <input type="text" class="form-control" name="name" id="inputEmail4" placeholder="Name">
                        <?php if (isset($_GET['name'])) { ?>
                        <small class="text-danger">
                        <?php echo $_GET['name']; ?>
                        </small>
                    <?php } ?>    </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Email</label>
                        <input type="email" class="form-control" name="email" id="inputPassword4" placeholder="Email">
                        <?php if (isset($_GET['email'])) { ?>
                        <small class="text-danger">
                        <?php echo $_GET['email']; ?>
                        </small>
                    <?php } ?>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Password</label>
                        <input type="text" class="form-control" id="inputEmail4" name="pwd" placeholder="Password">
                        <?php if (isset($_GET['pwd'])) { ?>
                        <small class="text-danger">
                        <?php echo $_GET['pwd']; ?>
                        </small>
                    <?php } ?></div>

                      <div class="form-group col-md-6">
                        <label for="inputState">Designation</label>
                        <select name="dest" id="inputState" class="form-control">
                        <option selected>Choose...</option>
                          <?php 
                            $sql_get = "SELECT * from a_dest";
                            $result = $con->query($sql_get);
                            while ($row = $result->fetch_array()) {
                          ?>
                        
                          <option value="<?php echo $row['ad_id'] ?>"><?php echo $row['ad_dest'] ?></option>
                          <?php }?>
                        </select>
                        <?php if (isset($_GET['dest'])) { ?>
                        <small class="text-danger">
                        <?php echo $_GET['dest']; ?>
                        </small>
                    <?php } ?>
                      </div>

                    </div>
                  
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
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
                            <?php if (isset($_GET['city'])) { ?>
                        <small class="text-danger">
                        <?php echo $_GET['city']; ?>
                        </small>
                    <?php } ?></div>
                      <div class="form-group col-md-3">
                        <label for="inputZip">Contact</label>
                        <input type="text" name="contact" class="form-control" id="inputZip">
                        <?php if (isset($_GET['contact'])) { ?>
                        <small class="text-danger">
                        <?php echo $_GET['contact']; ?>
                        </small>
                    <?php } ?></div>
                      <div class="form-group col-md-3">
                        <label for="inputZip">Cnic</label>
                        <input type="text" name="cnic" class="form-control" id="inputZip">
                        <?php if (isset($_GET['cnic'])) { ?>
                        <small class="text-danger">
                        <?php echo $_GET['cnic']; ?>
                        </small>
                    <?php } ?> </div>
                    </div>
                    

                    <div class="form-group">
                      <label for="inputAddress2">Address </label>
                      <input type="text" name="address" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                        <?php if (isset($_GET['add'])) { ?>
                        <small class="text-danger">
                        <?php echo $_GET['add']; ?>
                        </small>
                    <?php } ?>
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

  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>


  <?php 
  
  
  ?>


<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
    $('.select2').select2();
</script>
</body>