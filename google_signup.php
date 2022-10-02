<?php 
include 'dbconfig.php';
include('google_config.php');

$login_button = '';

//This $_GET["code"] variable value received after user has login into their Google Account redirct to PHP script then this variable value has been received
if(isset($_GET["code"]))
{
 //It will Attempt to exchange a code for an valid authentication token.
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

 //This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
 if(!isset($token['error']))
 {
  //Set the access token used for requests
  $google_client->setAccessToken($token['access_token']);

  //Store "access_token" value in $_SESSION variable for future use.
  $_SESSION['access_token'] = $token['access_token'];

  //Create Object of Google Service OAuth 2 class
  $google_service = new Google_Service_Oauth2($google_client);

  //Get user profile data from google
  $data = $google_service->userinfo->get();

  //Below you can find Get profile data and store into $_SESSION variable
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }

    $user_info = [
        'email' => $data['email'],
        'name' => $data['name'],
        'pic' => $data['picture'],
        'token' => $data['id']
    ];

    $user = $user_info['email'];
    $id = $user_info['token'];

      $sql = "SELECT * from s_regist where s_email = '$user'";

      $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) === 1) {

        

        session_start();

            $row = mysqli_fetch_assoc($result);
            if($row['s_email'] == $user_info['email']){
                $sid = $row['s_id'];
                $sql_q = "UPDATE s_regist set g_token = '$id' where s_id = '$sid'";
                $run = mysqli_query($con,$sql_q);
                $_SESSION['id'] = $row['s_id'];
                $_SESSION['name'] = $row['s_name'];
                $_SESSION['email'] = $row['s_email'];
                $_SESSION['pic'] = $row['s_pic'];
                $_SESSION['verified'] = $row['s_verified'];
                

                header("Location: index.php");
                exit();

            }
        if ($row['s_email'] === $user_info['email'] && $row['g_token'] === $user_info['token']) {

            echo "Logged in!";

    
        $_SESSION['id'] = $row['s_id'];
        $_SESSION['name'] = $row['s_name'];
        $_SESSION['email'] = $row['s_email'];
        $_SESSION['pic'] = $row['s_pic'];
        

        header("Location: index.php");
        exit();
        }



    }
   else{ $sql_ins = "INSERT into s_regist(s_name,s_email,s_pass,s_pic,s_age,s_gen,s_num,s_cnic,g_token)
    values('{$user_info['name']}','{$user_info['email']}','','{$user_info['pic']}','','','','','{$user_info['token']}')";
   
    if($con->query($sql_ins)){
        
                  session_start();
                  $user = $user_info['email'];
                  $id = $user_info['token'];

                    $sql = "SELECT * from s_regist where s_email = '$user' and g_token = '$id'";

                    $result = mysqli_query($con, $sql);
            
                    if (mysqli_num_rows($result) === 1) {
            
                        $row = mysqli_fetch_assoc($result);
            
                        if ($row['s_email'] === $user_info['email'] && $row['g_token'] === $user_info['token']) {
            
                            echo "Logged in!";
            
                    
                        $_SESSION['id'] = $row['s_id'];
                        $_SESSION['name'] = $row['s_name'];
                        $_SESSION['email'] = $row['s_email'];
                        $_SESSION['pic'] = $row['s_pic'];
                        $_SESSION['agency'] = $row['agency_regist'];
                        
            
                        header("Location: index.php");
                        exit();}}
        
        // header("Location:index.php");


    }else{
        echo 'not created';
    }
}





}

//This is for check user has login into system by using Google account, if User not login into system then it will execute if block of code and make code for display Login link for Login using Google account.
if(!isset($_SESSION['access_token']))
{
 //Create a URL to obtain user authorization
 $login_button = '<a href="'.$google_client->createAuthUrl().'" class="btn btn-google btn-user btn-block"><i class="fab fa-google fa-fw"></i> Register with Google
  </a>';
}
?>