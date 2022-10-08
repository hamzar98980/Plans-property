<?php
    session_start();
    include_once "../config.php";
    $u_id= $_SESSION['u_id'];
    $sql = "SELECT * from a_user WHERE NOT u_id = {$u_id} ORDER BY u_id DESC";
    $res = mysqli_query($con, $sql);
    $output = "";
    if(mysqli_num_rows($res) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($res) > 0){
        include_once "data.php";
    }
    echo $output;
?>