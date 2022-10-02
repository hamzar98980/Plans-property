<?php 
include 'dbconfig.php';

/**$fnam = $_POST['fname'];
$lnam = $_POST['lname'];
$nam= $fnam." ".$lnam;
$nic = $_POST['cnic'];
$emal = $_POST['email'];
$pwd = $_POST['pass'];
$conpwd = $_POST['ConPass'];
$num = $_POST['num'];
$gen = $_POST['gender'];
$age = $_POST['age'];
$error=array();**/


function generateNumericOTP($n) {

$generator = "1357902468";

$result = "";

for ($i = 1; $i <= $n; $i++) {
    $result .= substr($generator, (rand()%(strlen($generator))), 1);
}
// Return result
return $result;
}





$head= "Location: register.php?";
function validate($data){

    $data = trim($data);

    $data = stripslashes($data);

    $data = htmlspecialchars($data);

    return $data;

 }

 if(empty($_POST['fname']))
    {
    $head=$head."&fname=Required*";    
    }
    else
    {
        if(!preg_match("/^[a-zA-Z-']*$/",$_POST['fname']))
        {
        
            $head=$head."&fname=Alphabets Only";    
        }
        else
        {
            $fname = validate($_POST['fname']);
        }
    }
    if(empty($_POST['lname']))
    {
    $head=$head."&lname=Required*";    
    }
    else
    {
        if(!preg_match("/^[a-zA-Z-']*$/",$_POST['lname']))
        {
        
            $head=$head."&lname=Alphabets Only";    
        }
        else
        {
            $lname = validate($_POST['lname']);
            $name=$fname." ".$lname;
        }
    }
 if(empty($_POST['pass']))
{
    $head=$head."&pass=Required*";    
}    
else
{
        $pass = validate($_POST['pass']);
}
if(empty($_POST['ConPass']))
{
    $head=$head."&ConPass=Required*";    
}    
else
{
        $ConPass = validate($_POST['ConPass']);
        if($pass!=$ConPass)
        {
            $head=$head."&pass=Password does not match*";    
        }
}
if(empty($_POST['email']))
    {
    $head=$head."&email=Required*";    
    }
    else
    {

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $head=$head."&email=Invalid email format";    
        }
        else
        {
            $email = validate($_POST['email']);
            $sql = "SELECT * from s_regist where s_email = '$email'";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) === 1) {
    
                $head=$head."&email=Email is already register";    
            } 
            }
    }

    if(isset($_POST['gender']))
{
if($_POST['gender']=="Select")
{
$head=$head."&gender=Required*";    
}
else
{
        $gender = validate($_POST['gender']);
    }

}
if(empty($_POST['age']))
    {
    $head=$head."&age=Required*";    
    }
    else
    {
        if(!($_POST['age']>=18)){
            $head=$head."&age=Above 18 is required";    
        }
        else{
            $age = validate($_POST['age']);
        }
    }

    if(empty($_POST['num']))
    {
    $head=$head."&num=Required*";    
    }
    else
    {
        if(!preg_match("/^[0-9]{11}$/",$_POST['num'])){
            $head=$head."&num=Invalid Number";    
        }
        else{
            $num = $_POST['num'];
            $sql = "SELECT * from s_regist where s_num = '$num'";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) === 1) {
    
                $head=$head."&num=Number is already register";    
            }  }

    }

    if(empty($_POST['cnic']))
    {
    $head=$head."&cnic=Required*";    
    }
    else
    {
        if(!preg_match("/^[0-9]{13}$/",$_POST['cnic'])){
            $head=$head."&cnic=Invalid Nic Number";    
        }
        else{
            $cnic = validate($_POST['cnic']);
            $sql = "SELECT * from s_regist where s_cnic = '$cnic'";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) === 1) {
    
                $head=$head."&cnic=Id Card is already register";    
            } }
    }
        

if (isset($_FILES['file'])) {
    $file_name = $_FILES['file']['name'];
    $file_temp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];

    $file_upload = "profiles/".$file_name;
    $temp = explode(".",$file_name);
      
    $file_extention = strtolower(end($temp));
    $req_extention = array("jpeg","png", "jpg");

    if(in_array($file_extention, $req_extention) === false){
        $head=$head."&Image=Extension should be only jpeg , jpg or png";
        
    }
if(($head=="Location: register.php?"))
        {
            move_uploaded_file($file_temp, $file_upload);

            $sql_insert = "INSERT into s_regist(s_name,s_cnic,s_email,s_pass,s_num,s_gen,s_age,s_pic)
            values('$name','$cnic','$email','$pass','$num','$gender','$age','$file_upload')";

            if($con->query($sql_insert))
                {
                    session_start();

                    $sql = "SELECT * from s_regist where s_email = '$email' and s_pass = '$pass'";

                    $result = mysqli_query($con, $sql);
            
                    if (mysqli_num_rows($result) === 1) {
            
                        $row = mysqli_fetch_assoc($result);
            
                        if ($row['s_email'] === $email && $row['s_pass'] === $pass) {
            
                            echo "Logged in!";
            
                    
                        $_SESSION['id'] = $row['s_id'];
                        $_SESSION['name'] = $row['s_name'];
                        $_SESSION['email'] = $row['s_email'];
                        $_SESSION['nic'] = $row['s_cnic'];
                        $_SESSION['contact'] = $row['s_num'];
                        $_SESSION['pic'] = $row['s_pic'];
                        $_SESSION['verified'] = $row['s_verified'];

                        $otp = generateNumericOTP(4);
                        $uid = $_SESSION['id'];
                        $ch = date("Y-m-d H:i:s");

                            
                        $sql_ins = "INSERT into s_auth(`user_id`,`auth_code`,`auth_time`) values
                        ($uid,$otp,now())";
                        if($con->query($sql_ins)){
                            // $sql_inss = "DELETE from s_auth where auth_time<now()+interval 1 min";

                     
                            
                        }
                        

                        header("Location: auth.php");
                        exit();
                        

                    }
                    }}
                }
                else
                {
                    header($head);
                    
                }

        }
        else{
            header($head);

        }


        ?>