<?php 
include 'dbconfig.php';


if(isset($_GET['del'])){
    $ar_id = $_REQUEST['del']; 
    $sql_del = "DELETE from s_add where a_id = '$ar_id'";
  
    
    if($conn -> query($sql_del))
    {
        header("Location:seller-adds.php?delete= Property Deleted successfully ");
    }
    else{
        echo "del nahi howa";
    }


}


?>