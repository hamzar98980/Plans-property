<?php
include 'dbconfig.php';

session_start(); 


if (isset($_POST['email']) && isset($_POST['pwd'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $email = validate($_POST['email']);

    $pass = validate($_POST['pwd']);

    if (empty($email)) {

        header("Location: login.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: login.php?error=Password is required");

        exit();

    }
    else{

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
            $_SESSION['agency'] = $row['agency_regist'];


            header("Location: index.php");

        exit();

            }
            else{

                header("Location: login.php?error=Incorect User name or password");
                exit();
            }

        }else{
            header("Location: login.php?error=Incorect User name or password");
            exit();

        }

    }

}
else{

    header("Location: login.php");

    exit();

}

?>
