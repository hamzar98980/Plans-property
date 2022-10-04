<?php 


include 'dbconfig.php';
session_start();




// if (isset($_FILES['file'])) {
//     $file_name = $_FILES['file']['name'];
//     $file_temp = $_FILES['file']['tmp_name'];
//     $file_type = $_FILES['file']['type'];
//     $file_size = $_FILES['file']['size'];

//     $file_upload = "Agency-logo/".$file_name;
//     $temp = explode(".",$file_name);
      
//     $file_extention = strtolower(end($temp));
//     $req_extention = array("jpeg","png", "jpg");

//     if(in_array($file_extention, $req_extention) === false){
//         echo "&Image=Extension should be only jpeg , jpg or png";
        
//     }



    
    // $sql_q = "INSERT into firm_regist(fi_name,fi_logo,fi_email,fi_city,fi_cnic,fi_phone,fi_tel,fi_address,f_desc,fi_year,fi_letter,agent_id)
    // values('$fname','$file_upload','$femail','$city','$cnic','$pnumber','$tnumber','$add','$desc','$year','$letter','$sid')";
    // if($con->query($sql_q)){
    
            
    //         header("Location: index.php");
   
    // }else{
    //     echo 'eror';
    // }



// }




if(isset($_FILES['file'])) {

    $sid = $_SESSION['id'];
    $fname = $_REQUEST['fname'];
    // $flogo = $_REQUEST['flogo'];
    $femail = $_REQUEST['femail'];
    $city = $_REQUEST['city'];
    $cnic = $_REQUEST['cnic'];
    $pnumber = $_REQUEST['pnumber'];
    $tnumber = $_REQUEST['tnumber'];
    $add = $_REQUEST['add'];
    $desc = $_REQUEST['desc'];
    $year = $_REQUEST['year'];
    // $letter = $_REQUEST['letter'];

	$letter_name = $_FILES['letter']['name'];
	$letter_size = $_FILES['letter']['size'];
	$letter_temp = $_FILES['letter']['tmp_name'];
	$letter_type = $_FILES['letter']['type'];

	$letter_uploaded = "Letter-head/".$letter_name;
	$temp = explode(".",$letter_name);


	$file_name = $_FILES['file']['name'];
	$file_size = $_FILES['file']['size'];
	$file_temp = $_FILES['file']['tmp_name'];
	$file_type = $_FILES['file']['type'];

	$file_uploaded = "Agency-logo/".$file_name;
	$temp = explode(".",$file_name);


	$file_extension = strtolower(end($temp));
	$req_extensions = array("jpeg","jpg","png");
	
  
	
		move_uploaded_file($file_temp, $file_uploaded);
 
        $sql_q = "INSERT into firm_regist(fi_name,fi_logo,fi_email,fi_city,fi_cnic,fi_phone,fi_tel,fi_address,f_desc,fi_year,fi_letter,agent_id)
        values('$fname','$file_uploaded','$femail','$city','$cnic','$pnumber','$tnumber','$add','$desc','$year','$letter_uploaded','$sid')";
		if($con->query($sql_q))
		{
			header("Location: index.php");
		}
		else
		{
			echo "<script>alert('Data can not be added')</script>";
		}
	


}









?>