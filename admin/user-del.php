<?php 
include 'config.php';


if(isset($_GET['del'])){
    $ar_id = $_REQUEST['del']; 
    $sql_del = "DELETE from a_user where u_id = '$ar_id'";
  
    
    if($con -> query($sql_del))
    {
        header("Location:user-display.php?delete= User Deleted successfully ");
    }
    else{
        echo "del nahi howa";
    }


}


?>