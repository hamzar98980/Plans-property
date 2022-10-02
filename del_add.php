<?php 
include 'dbconfig.php';


if(isset($_GET['id']))
{
    $ar_id = $_REQUEST['id']; 
    $ag_id = $_REQUEST['aid']; 
    $get_img = "SELECT i_pic from aimg where ai_id = '$ar_id'";
    $rs_img = $con->query($get_img);
    while($r = $rs_img->fetch_array())
    {
        unlink('images/'.$r['i_pic']);
    }
    
    $sql_del = "DELETE FROM `s_add` WHERE ag_id = '$ag_id' AND a_id='$ar_id'";
     
    if($con -> query($sql_del))
    {
        header("Location:dashboard.php?sucess=your Property have been Remove");
    }
else
{
    header("Location:dashboard.php?error=Something went wrong,property not deleted");
}

}


?>