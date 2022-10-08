<?php 
    session_start();
    if(isset($_SESSION['u_id'])){
        include_once "../config.php";
        $outgoing_id = $_SESSION['u_id'];
        $incoming_id = mysqli_real_escape_string($con, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($con, $_POST['message']);
        if(!empty($message)){
            $sql = mysqli_query($con, "INSERT INTO a_chat (u_id1, u_id2, c_r1)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')") or die();
        }
    }else{
        header("location: ../index.php");
    }


    
?>