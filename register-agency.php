<?php 
include 'dbconfig.php';
session_start();
$sid = $_SESSION['id'];
$fname = $_REQUEST['fname'];
$flogo = $_REQUEST['flogo'];
$femail = $_REQUEST['femail'];
$city = $_REQUEST['city'];
$cnic = $_REQUEST['cnic'];
$pnumber = $_REQUEST['pnumber'];
$tnumber = $_REQUEST['tnumber'];
$add = $_REQUEST['add'];
$desc = $_REQUEST['desc'];
$year = $_REQUEST['year'];
$letter = $_REQUEST['letter'];

$sql_q = "INSERT into firm_regist(fi_name,fi_logo,fi_email,fi_city,fi_cnic,fi_phone,fi_tel,fi_address,f_desc,fi_year,fi_letter,agent_id)
values('$fname','$flogo','$femail','$city','$cnic','$pnumber','$tnumber','$add','$desc','$year','$letter','$sid')";
if($con->query($sql_q)){

    $sql_1 = "UPDATE s_regist set agency_regist = '1' where s_id = '$sid'";
    if($con->query($sql_1)){
        
        
        header("Location: index.php");
    }
}else{
    echo 'eror';
}

?>