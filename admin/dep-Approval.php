<?php 
session_start();
ob_start();
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Plans Property - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="./assets/css/app.min.css">
  <link rel="stylesheet" href="./assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="./assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="./assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='./assets/img/favicon.ico' />


</head>

<body>

<?php 
    include 'navbar.php';
    include 'sidebar.php';
    ?>

  <div class="loader"></div>
  <div id="app">
    
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
     
      

      
   
      

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">




            <div class="col-12">

<?php if (isset($_GET['success'])) { ?>
   <div class="alert alert-success" role="alert">
     <?php echo $_GET['success']; ?>
  </div>
 <?php } ?>
 
 <?php if (isset($_GET['delete'])) { ?>
   <div class="alert alert-danger" role="alert">
     <?php echo $_GET['delete']; ?>
  </div>
 <?php } ?>


                <div class="card">
                  <div class="card-header">
                    <h4>Add Approval</h4>
                  </div>
                  <div class="card-body">
                   All users in the designation of Add Approval
                  </div>
                  <div class="card-footer text-right">
                    <a href="users.php"><button class="btn btn-primary">Add new user</button></a>
                  </div>
                </div>



<div class="card">
 <div class="card-header">
   <h4>Export Data</h4>
 </div>


               


 <div class="card-body">
   
   <div class="table-responsive">
     <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
       
       <thead>
         <tr>
           <th>Name</th>
           <th>Email</th>
           <th>Password</th>
           <th>Destination</th>
           <th>Contact</th>
           <th>Cnic</th>
           <th>Address</th>
           <th>City</th>
           <th>Action</th>
           <!-- <th></th> -->
         </tr>
       </thead>
       <tbody>
           
           <?php 
           $sql_fetch = "SELECT u_id,u_name,u_email,u_pass,u_contact,u_cnic,u_addres,u_city,ad_dest from a_user join a_dest ON u_dest = ad_id where ad_dest = 'Add Approval'";

           $res = $con->query($sql_fetch);
           while ($r = $res->fetch_array()){
           ?>

         <tr>
           <td><?php echo $r['u_name'] ?></td>
           <td><?php echo $r['u_email'] ?></td>
           <td><?php echo $r['u_pass'] ?></td>
           <td><?php echo $r['ad_dest'] ?></td>
           <td><?php echo $r['u_contact'] ?></td>
           <td><?php echo $r['u_cnic'] ?></td>
           <td><?php echo $r['u_addres'] ?></td>
           <td><?php echo $r['u_city'] ?></td>
           <!-- <td><a href="user-edit.php?edit=<?php echo $r['u_id'] ?>"><button class="btn btn-primary">Edit</button></a></td>
             <td> <a href="user-del.php?del=<?php echo $r['u_id'] ?>"><button class="btn btn-danger">Delete</button></a> </td>
              -->


                      <td><div class="dropdown">
                        <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Options</a>
                        <div class="dropdown-menu">
                          <a href="" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                          <div class="dropdown-divider"></div>
                          <a href="#" class="dropdown-item has-icon text-danger"><i class="far fa-trash-alt"></i>
                            Delete</a>
                        </div>
                      </div></td>
             
          </tr>
         
         <?php }?>
      
       </tbody>
     </table>
   </div>
 </div>
</div>
</div>


          
            </div>
          </div>
        </section>
        
   


        <?php  include 'setting.php'; ?>
  <!-- General JS Scripts -->
  <script src="./assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="./assets/bundles/datatables/datatables.min.js"></script>
  <script src="./assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="./assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="./assets/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="./assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="./assets/js/custom.js"></script>


  <!-- JS Libraies -->
  <script src="./assets/bundles/izitoast/js/iziToast.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="./assets/js/page/toastr.js"></script>






        






</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>