<?php
include 'config.php';

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

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * from a_user where u_email = '$email' and u_pass = '$pass'";

        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['u_email'] === $email && $row['u_pass'] === $pass) {

                echo "Logged in!";

        if ($row['u_dest'] == 2) {
            $_SESSION['u_id'] = $row['u_id'];
            $_SESSION['name'] = $row['u_name'];
            $_SESSION['designation'] ='Super Admin';
            $_SESSION['email'] = $row['u_email'];
            $_SESSION['nic'] = $row['u_cnic'];
            $_SESSION['contact'] = $row['u_contact'];
            header("Location: index-2.php");

          
        }
        if ($row['u_dest'] == 1) {
            $_SESSION['u_id'] = $row['u_id'];
            $_SESSION['name'] = $row['u_name'];
            $_SESSION['designation'] ='Add Aproval';
            $_SESSION['email'] = $row['u_email'];
            $_SESSION['nic'] = $row['u_cnic'];
            $_SESSION['contact'] = $row['u_contact'];
            header("Location: index-2.php");

          
        }
        if ($row['u_dest'] == 3) {
            $_SESSION['u_id'] = $row['u_id'];
            $_SESSION['name'] = $row['u_name'];
            $_SESSION['designation'] ='Checker';
            $_SESSION['email'] = $row['u_email'];
            $_SESSION['nic'] = $row['u_cnic'];
            $_SESSION['contact'] = $row['u_contact'];
            header("Location: index-2.php");

          
        }


        exit();


            }
            else{

                header("Location: index.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}

?>
