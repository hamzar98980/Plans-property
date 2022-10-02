<?php 
include '../dbconfig.php';
if (isset($_FILES['file'])) {
        $nam = $_POST['name'];
        $nic = $_POST['cnic'];
        $emal = $_POST['email'];
        $pwd = $_POST['pass'];
        $num = $_POST['num'];
        $gen = $_POST['gender'];
        $age = $_POST['age'];

        $file_name = $_FILES['file']['name'];
        $file_temp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        $file_size = $_FILES['file']['size'];

        $file_upload = "../uploads/".$file_name;
        $temp = explode(".",$file_name);

        $file_extention = strtolower(end($temp));
        $req_extention = array("jpeg","png", "jpg");

        if(in_array($file_extention, $req_extention) === false){
            echo "<script>alert('Extension should be only jpeg , jpg or png')</script>";
            
        }

        else{

            move_uploaded_file($file_temp, $file_upload);

            $sql_insert = "INSERT into s_regist(s_name,s_cnic,s_email,s_pass,s_num,s_gen,s_age,s_pic)
            values('$nam','$nic','$emal','$pwd','$num','$gen','$age','$file_upload')";

            if($con->query($sql_insert))
                {
                    
                    header("Location:index.php");
                }
                else
                {
                    echo "<script>alert('Data can not be added')</script>";
                    
                }

        }

}
?>