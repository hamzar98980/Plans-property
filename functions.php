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
   
    $res = mysqli_query($con,$sql_q);
    $num_row = mysqli_num_rows($res);
    return $num_row;

}

?>