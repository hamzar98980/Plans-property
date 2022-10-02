<?php  
 
 require 'vendor/facebook/graph-sdk/src/Facebook/autoload.php';
 include 'dbconfig.php';
 if (!session_id())
{
    session_start();
}


 $facebook = new \Facebook\Facebook([
    'app_id' => '642234297247579',
    'app_secret' => 'd9e021c2d9970c645373fed69ddf719b',
    'default_graph_version' => 'v2.10',
    //'default_access_token' => '{access-token}', // optional
  ]);

 
  

  $facebook_output = '';

$facebook_helper = $facebook->getRedirectLoginHelper();

if(isset($_GET['code']))
{
 if(isset($_SESSION['access_token']))
 {
  $access_token = $_SESSION['access_token'];
 }
 else
 {
  $access_token = $facebook_helper->getAccessToken();

  $_SESSION['access_token'] = $access_token;

  $facebook->setDefaultAccessToken($_SESSION['access_token']);
 }

 $_SESSION['user_id'] = '';
 $_SESSION['user_name'] = '';
 $_SESSION['user_email_address'] = '';
 $_SESSION['user_image'] = '';

 $graph_response = $facebook->get("/me?fields=name,email", $access_token);

 $facebook_user_info = $graph_response->getGraphUser();

//  print_r($facebook_user_info);

 if(!empty($facebook_user_info['id']))
 {  
//   $_SESSION['user_image'] = 'http://graph.facebook.com/'.$facebook_user_info['id'].'/picture';
$user = $facebook_user_info['email'];
$id = $facebook_user_info['id'];
  
   $sql = "SELECT * from s_regist where s_email = '$user'";

   $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) === 1) {

    

     session_start();

         $row = mysqli_fetch_assoc($result);
         if($row['s_email'] == $facebook_user_info['email']){
             $sid = $row['s_id'];
             $sql_q = "UPDATE s_regist set f_token = '$id' where s_id = '$sid'";
             $run = mysqli_query($con,$sql_q);
           $_SESSION['id'] = $row['s_id'];
             $_SESSION['name'] = $row['s_name'];
             $_SESSION['email'] = $row['s_email'];
             $_SESSION['pic'] = $row['s_pic'];
             $_SESSION['verified'] = $row['s_verified'];
            

             header("Location:/agency/index.php");
             exit();

         }
     if ($row['s_email'] === $facebook_user_info['email'] && $row['f_token'] === $facebook_user_info['id']) {

         echo "Logged in!";


     $_SESSION['id'] = $row['s_id'];
     $_SESSION['name'] = $row['s_name'];
     $_SESSION['email'] = $row['s_email'];
     $_SESSION['pic'] = $row['s_pic'];
     header("Location: /agency/index.php");
     exit();
     }



 }
 else{
   $sql_ins = "INSERT into s_regist(s_name,s_email,s_pass,s_pic,s_age,s_gen,s_num,s_cnic,g_token,f_token)
 values('{$facebook_user_info['name']}','{$facebook_user_info['email']}','','http://graph.facebook.com/{$facebook_user_info['id']}/picture','','','','','','{$facebook_user_info['id']}')";

 if($con->query($sql_ins)){
    
               
               $user = $facebook_user_info['email'];
               $id = $facebook_user_info['id'];
                 $sql = "SELECT * from s_regist where s_email = '$user' and f_token = '$id'";
                 $result = mysqli_query($con, $sql);
        
                 if (mysqli_num_rows($result) === 1) {
        
                     $row = mysqli_fetch_assoc($result);
        
                     if ($row['s_email'] === $facebook_user_info['email'] && $row['f_token'] === $facebook_user_info['id']) {
        
                      echo "Logged in!";
        
                
                     $_SESSION['id'] = $row['s_id'];
                     $_SESSION['name'] = $row['s_name'];
                     $_SESSION['email'] = $row['s_email'];
                     $_SESSION['pic'] = $row['s_pic'];
                    
        
                     header("Location: /agency/index.php");
                     exit();}}
    
     header("Location:index.php");


 }
 else{
     echo 'not created';
 }
 }

 }

 if(!empty($facebook_user_info['id']))
 {
  
  $_SESSION['fb_id'] = $facebook_user_info['id'];
  $_SESSION['user_image'] = 'http://graph.facebook.com/'.$_SESSION['fb_id'].'/picture';
  
 }

 if(!empty($facebook_user_info['name']))
 {
  $_SESSION['user_name'] = $facebook_user_info['name'];
 }

 if(!empty($facebook_user_info['email']))
 {
  $_SESSION['user_email_address'] = $facebook_user_info['email'];
 }
 
}
else
{
 // Get login url
    $facebook_permissions = ['email']; // Optional permissions

    $facebook_login_url = $facebook_helper->getLoginUrl('http://localhost/agency/facebook_signup.php/', $facebook_permissions);
    
    // Render Facebook login button
    $facebook_login_url = '<div align="center"><a href="'.$facebook_login_url.'"class="btn btn-outline-primary btn-user btn-block"><i class="fab fa-facebook fa-fw"></i> Login With Facebook</a></div>';
}

?>

<?php 
    if(isset($facebook_login_url))
    {
    //  echo $facebook_login_url;
    }
    else
    {
     echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
     echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
     echo '<h3><b>Name :</b> '.$_SESSION['user_name'].'</h3>';
     echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
     echo '<h3><b>Id :</b> '.$_SESSION['fb_id'].'</h3>';
     echo '<h3><a href="http://localhost/agency/logout.php">Logout</h3></div>';
    }
    ?>