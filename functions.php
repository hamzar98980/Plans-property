<?php

function verified_check(){
    
    include 'dbconfig.php';
    $sid = $_SESSION['id'];
    $sql_get = "SELECT 	s_verified from s_regist where s_id = '$sid'";
    $res = $con->query($sql_get);
    $r = mysqli_fetch_assoc($res);
    return $r['s_verified'];
}

function no_of_rows_bytable($table_name,$condition){
    include 'dbconfig.php';
    $sql_q = "SELECT * from $table_name $condition";
//    echo $sql_q;
    $res = mysqli_query($con,$sql_q);
    $num_row = mysqli_num_rows($res);
    return $num_row;

}

function agency_verified($num_row,$status){
    include 'dbconfig.php';
    $sid = $_SESSION['id']; 
    $sql_q = "SELECT fi_id,fi_name,f_status from firm_regist where agent_id = '$sid'";  
    $res = mysqli_query($con,$sql_q);
    $r = mysqli_fetch_assoc($res);
    $num = mysqli_num_rows($res);
    if($num_row == '0' && $status == '1'){
        return $r['f_status'];
    }else if($num_row == '1' && $status == '0'){
        return $num;
    }else{
        return 'Incorrect Syntax';
    }
}

function agency_verified2($num_row,$status,$ag_id){
    include 'dbconfig.php';
    // $sid = $_SESSION['id']; 
    $sql_q = "SELECT fi_id,fi_name,f_status from firm_regist where agent_id = '$ag_id'";  
    $res = mysqli_query($con,$sql_q);
    $r = mysqli_fetch_assoc($res);
    $num = mysqli_num_rows($res);
    if($num_row == '0' && $status == '1'){
        return $r['f_status'];
    }else if($num_row == '1' && $status == '0'){
        return $num;
    }else{
        return 'Incorrect Syntax';
    }
}
?>