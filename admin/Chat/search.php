<?php
    session_start();
    include_once "../config.php";

    $u_id= $_SESSION['u_id'];
    $searchTerm = mysqli_real_escape_string($con, $_POST['searchTerm']);

    $sql = "SELECT * FROM a_user WHERE NOT u_id = {$u_id} AND (u_name LIKE '%{$searchTerm}%' OR u_email LIKE '%{$searchTerm}%') ";
    $output = "";
    $res = mysqli_query($con, $sql);
    if(mysqli_num_rows($res) > 0){
        include_once "data.php";
    }else{
        $output .= 'No user found related to your search term';
    }
    echo $output;
?>