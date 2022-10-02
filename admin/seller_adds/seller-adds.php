<?php 
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


</head>



<?php 
    include 'navbar.php';
    include 'sidebar.php';
    ?>


<body>
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
                 
                   <div class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        <?php echo $_GET['success']; ?>
                      </div>
                    </div>
                  <?php } ?>




                  <?php if (isset($_GET['delete'])) { ?>
                 
                 <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                      <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                      </button>
                      <?php echo $_GET['delete']; ?>
                    </div>
                  </div>
                <?php } ?>






             



                <div class="card">
                  <div class="card-header">
                    <h4>All properties</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              
                            </th>
                            <th>Title</th>
                            <th>City</th>
                            <th>Type</th>
                            <th>Category</th>
                            <th>Seller Name</th>
                            <th>Status</th>
                            <th>Action</th>
                          
                          </tr>
                        </thead>
                        <tbody>

                        <?php 
                        $sql_quey= "SELECT a_id,a_title,a_price,a_cat,a_type,a_city,a_bad,a_bath,a_loc,a_area,a_status,a_desc,ag_id,s_name from s_add inner join s_regist on ag_id = s_id";
                        $res= $conn->query($sql_quey);
                        while ($r = $res->fetch_array()) {
                        ?>
                          <tr>
                            <td>
                            </td>
                            <td><?php echo $r['a_title']; ?></td>
                          
                        
                            <td><?php echo $r['a_city'] ?></td>
                           

                            <td><?php echo $r['a_type']; ?></td>
                            <td><?php echo $r['a_cat']; ?></td>

                            <td><?php echo $r['s_name']; ?></td>


                            <?php 
                            if($r['a_status'] == 'Pending'){
                            ?>
                            <td>
                              <div class="badge badge-warning badge-shadow"><?php echo $r['a_status']?></div>
                            </td>
                            <?php } ?>

                            <?php 
                            if($r['a_status'] == 'Approved'){
                            ?>
                            <td>
                              <div class="badge badge-success badge-shadow"><?php echo $r['a_status']?></div>
                            </td>
                            <?php } ?>

                            <?php 
                            if($r['a_status'] == 'Rejected'){
                            ?>
                            <td>
                              <div class="badge badge-danger badge-shadow"><?php echo $r['a_status']?></div>
                            </td>
                            <?php } ?>





                            <td><div class="dropdown">
                        <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Options</a>
                        <div class="dropdown-menu">
                          <a href="./display-adds.php?id=<?php echo $r['a_id']?>&ag_id=<?php echo $r['ag_id'] ?>" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                          <div class="dropdown-divider"></div>
                          <a href="./delete-adds.php?del=<?php echo $r['a_id']?>" class="dropdown-item has-icon text-danger"><i class="far fa-trash-alt"></i>
                            Delete</a>
                        </div>
                      </div></td>
                            
                            
                             
                          </tr>
                         
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </section>
      </div>



    </div>
  </div>
  <?php  include 'setting.php'; ?>
  
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

</body>


<!-- export-table.html  21 Nov 2019 03:56:01 GMT -->
</html>


