<?php 
ob_start();
include 'dbconfig.php';
include('../Layout/navbar.php');
?>

<style>
    .bg-register-image {
  /* background: url("https://source.unsplash.com/Mv9hjnEUHR4/600x800"); */
  background-image: url("pictures/20945141.jpg");
  background-position: center;
  background-size: cover;
}
.cr{
    color: #4c7ce3;
}




</style>




    <title>Add Property</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        <link href="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <!-- <link href="./uploadimage.css"  rel="stylesheet"> -->
    <script src="./uploadimage.js"></script>  


    <div class="container bg-gradient-primary">

        <div class="card o-hidden border-0  my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5 shadow-lg">
                            <div class="text-center">
                                <h1 class="h2 cr mb-4"><b>Add Property</b></h1>
                            </div>



                            <form id="regForm" class="user" method="POST" enctype="multipart/form-data">
                               

                                        

                                        <div class="form-group row">

                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="Title">Title</label>
                                                <input type="text" class="form-control" id="exampleFirstName"
                                                    placeholder="Add Title" name="title">
                                            </div>

                                            <div class="col-sm-6">

                                              <label for="Price">Price</label>
                                                <input type="number" class="form-control" id="exampleFirstName"
                                                    placeholder="Add Price" name="Price">
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="">Category</label>
                                            <select name="category" class="form-control"> 
                                                <option value="select" class="active">Select ....</option>

                                                <option value="Sale"> Sale</option>
                                                <option value="Rent"> Rent</option>

                                            </select>
                                            </div>

                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="Type">Type</label>
                                            <select name="type" class="form-control"> 
                                                <option value="select" class="active">Select ....</option>

                                                <option value="Plot"> Plot</option>
                                                <option value="Home"> Home</option>
                                                <option value="Commercial"> commercial</option>

                                            </select>
                                            </div>
                                           
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="city">City</label>
                                                <input type="text" class="form-control"
                                                     placeholder="Add City" name="city">
                                            </div>
                                            <div class="col-sm-6">
                                            <label for="Bed">Bed</label>
                                                <input type="number" class="form-control"
                                                   placeholder="Add Bed" name="bed">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                            
                                        
                                            <div class="col-sm">
                                                <label for="Address">Address</label>
                                                <input type="text" class="form-control"
                                                   placeholder="Add Address" name="address">
                                            </div>
                                        </div>

                                                
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="Bath">Bath</label>
                                                <input type="number" class="form-control"
                                                     placeholder="Add Bath" name="bath" required>
                                            </div>

                                            
                                     <div class="col-sm-6">
                                        <label for="area">Area unit</label>
                                        <input type="text" class="form-control "
                                            placeholder="Add Sqft" name="area" >
                                    </div>


                                        </div>

                                        <div class="form-group row">

                                            <div class="col-sm-12 form-outline" >
                                            <label for="desc">Description</label>
                                            <textarea name="desc" class="form-control" id="textAreaExample1" cols="100" rows="5"></textarea>
                                          
                                            <!-- <input type="text" class="form-control"
                                                   placeholder="Add Description" name="desc" required> -->
                                            </div>
                                        </div>



                               
                                <br>
                                <div class="form-group row">


                                    

                                

                                    <div class="col-sm-6">
                                        <label for="Image">Image</label>
                                        <input  type="file" name="file[]" id="file" multiple 
                                            id="exampleRepeatPassword" placeholder="Select Your Image" onchange="showPreview(event)" class="form-control" >
                                    </div>
                                    <div class="col-sm-6" id="drag-drop-area"></div>
                                    <script src="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.js"></script>
                                                        

                                </div>
                                <button class="btn btn-primary btn-user btn-block" name="submit">Submit</button>
                                <hr>
                                <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a> -->

                            </form>




                            
                          
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
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



<?php 

$id = $_SESSION['id'];

if(isset($_POST['submit'])){

  

    $title = $_POST['title'];
    $prices = $_POST['Price'];
    $category = $_POST['category'];
    $type = $_POST['type'];
    $city = $_POST['city'];
    $bed = $_POST['bed'];
    $bath = $_POST['bath'];
    $loca = $_POST['address'];
    $area = $_POST['area'];
    $desc = $_POST['desc'];

   

   


    $sql_insert = "INSERT into s_add(a_title,a_price,a_cat,a_type,a_city,a_bad,a_bath,a_loc,a_area,a_desc,ag_id) 
    values ('$title','$prices','$category','$type','$city','$bed','$bath','$loca','$area','$desc','$id')";

        if($con->query($sql_insert)) {   


            $sqL_fetch = "SELECT * FROM s_add ORDER BY a_id DESC LIMIT 1";
            $result = $con->query($sqL_fetch);
            while($r = $result->fetch_array()){

                $id = $r['a_id'];
                

                $totalfiles = count($_FILES['file']['name']);
                
                
                // Looping over all files
                for($i=0;$i<$totalfiles;$i++){
                $filename = $_FILES['file']['name'][$i];

                $temp = explode(".", $_FILES["file"]["name"][$i]);
                $newfilename = round(microtime(true)+$i) . '.' . end($temp);
                
                // Upload files and store in database
                if(move_uploaded_file($_FILES["file"]["tmp_name"][$i], 'p_uploads/' . $newfilename)){
                // Image db insert sql
                $insert = "INSERT into imgaes(i_pic,ai_id) values('$newfilename','$id')";
                    if(mysqli_query($con, $insert)){
                        header("Location:members_details.php");
                    }
                    else{
                    echo 'Error: '.mysqli_error($conn);
                    }
                
                }
                
                else{  
                echo 'Error in uploading file - '.$_FILES['file']['name'][$i].'<br/>';
                } 
                }


            }

      
        }
        else
        {
            echo "<script>alert('Data can not be added')</script>";
            
        }
        
        
   
   
   
   
}
    


?>


</body>

</html>