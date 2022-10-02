<?php
ob_start();
include("dbconfig.php");
session_start();
    $id = $_SESSION['id'];

    $head= "Location: editproperty.php?";
    function validate($data){
    
        $data = trim($data);
    
        $data = stripslashes($data);
    
        $data = htmlspecialchars($data);
    
        return $data;
    
    }

    $dat = date("Y-m-d");
    if(empty($_POST['cable']))
    {
        $cable=0;    
    }
    else{
       $cable = validate($_POST['cable']);
        }


    if(empty($_POST['electric']))
    {
        $electric=0;    
    }
    else{
        $electric = validate($_POST['electric']);
        }
    

    if(empty($_POST['gas']))
    {
        $gas=0;    
    }
    else{
        $gas = validate($_POST['gas']);
        }

    
    if(empty($_POST['water']))
    {
        $water=0;    
    }
    else{
        $water = validate($_POST['water']);
        }

    
    if(empty($_POST['balcony']))
    {
        $balcony=0;    
    }
    else{
        $balcony = validate($_POST['balcony']);
        }


    if(empty($_POST['kitchen']))
    {
        $kitchen=0;    
    }
    else{
        $kitchen = validate($_POST['kitchen']);
        }

    if(empty($_POST['dining']))
    {
        $dining=0;    
    }
    else{
        $dining = validate($_POST['dining']);
        }

    if(empty($_POST['dra_room']))
    {
        $drawing=0;    
    }
    else{
        $drawing = validate($_POST['dra_room']);
        }

    if(empty($_POST['tv_long']))
    {
        $tv=0;    
    }
    else{
        $tv = validate($_POST['tv_long']);
        }

    if(empty($_POST['hot_water']))
    {
        $hot_water=0;    
    }
    else{
        $hot_water = validate($_POST['hot_water']);
        }

    if(empty($_POST['mosque']))
    {
        $mosque=0;    
    }
    else{
        $mosque = validate($_POST['mosque']);
        }

    if(empty($_POST['security']))
    {
        $security=0;    
    }
    else{
        $security = validate($_POST['security']);
        }
    
    if(empty($_POST['park']))
    {
        $park=0;    
    }
    else{
        $park = validate($_POST['park']);
        }

    if(empty($_POST['garage']))
    {
        $garage=0;    
    }
    else{
        $garage = validate($_POST['garage']);
        }

    if(empty($_POST['commercial']))
    {
        $comm=0;    
    }
    else{
        $comm = validate($_POST['commercial']);
        }
    
 
 
    // $cable = $_POST['cable'];
    // $electric = $_POST['electric'];
    // $gas = $_POST['gas'];
    // $water = $_POST['water'];
    // $balcony = $_POST['balcony'];
    // $kitchen = $_POST['kitchen'];
    // $dining = $_POST['dining'];
    // $drawing = $_POST['dra_room'];
    // $tv = $_POST['tv_long'];
    // $hot_water = $_POST['hot_water'];
    // $mosque = $_POST['mosque'];
    // $security = $_POST['security'];
    // $park = $_POST['park'];
    // $garage = $_POST['garage'];
    // $comm = $_POST['commercial'];


  
    
        if(empty($_POST['title']))
            {
            $head=$head."&title=Property Title is Required*";    
            }
            else
            {
                if(!preg_match("/^[a-zA-Z0-9 -]{10,150}$/",$_POST['title']))
                {
                
                    $head=$head."&title=Alphabets Only between 20 to 150 character";    
                }
                else
                {
                    $title = validate($_POST['title']);
                }
            }
            if(empty($_POST['adrs']))
            {
            $head=$head."&adrs=Address is Required*";    
            }
            else
            {
                if(!preg_match("/^[^`]{20,150}$/",$_POST['adrs']))
                {
                
                    $head=$head."&adrs=Character between 20 to 150 character";    
                }
                else
                {
                    $adrs = validate($_POST['adrs']);
                }
            }
            if(empty($_POST['Desc']))
            {
            $head=$head."&Desc=Property Description is Required*";    
            }
            else
            {
                if(!preg_match("/^[^`]{25,350}$/",$_POST['Desc']))
                {
                
                    $head=$head."&Desc=Alphabets Only between 50 to 350 character";    
                }
                else
                {
                    $Desc = validate($_POST['Desc']);
                }
            }
        if(empty($_POST['price']))
            {
            $head=$head."&price=Price is Required*";    
            }
            else
            {
                if(!preg_match("/^[0-9]{4,15}$/",$_POST['price']))
                {
                
                    $head=$head."&price=Insert Valid Numeric Value";    
                }
                else
                {
                    $price = validate($_POST['price']);
                }
            }

        if(empty($_POST['purpose']))
            {
            $head=$head."&purpose=Purpose is Required*";    
            }
        else{
                $purpose = validate($_POST['purpose']);
            }

        if(empty($_POST['type']))
            {
            $head=$head."&type=Type is Required*";    
            }
        else{
                $type = validate($_POST['type']);
            }
        if(empty($_POST['city']))
            {
            $head=$head."&city=City is Required*";    
            }
        else{
            $city = validate($_POST['city']);
            }
            if(empty($_POST['bed']))
            {
            $head=$head."&bed=No. Of Bed(s) is Required*";    
            }
            else
            {
                if(!preg_match("/^[0-9]{1,2}$/",$_POST['bed']))
                {
                
                    $head=$head."&bed=Insert Valid Numeric Value";    
                }
                else
                {
                    $bed = validate($_POST['bed']);
                }
            }
            if(empty($_POST['bath']))
            {
            $head=$head."&bath=No. of Bath(s) is Required*";    
            }
            else
            {
                if(!preg_match("/^[0-9]{1,2}$/",$_POST['bath']))
                {
                
                    $head=$head."&bath=Insert Valid Numeric Value";    
                }   
                else
                {
                    $bath = validate($_POST['bath']);
                }
            }
            if(empty($_POST['area']))
            {
            $head=$head."&area=Area is Required*";    
            }
            else
            {
                if(!preg_match("/^[0-9]{4,10}$/",$_POST['area']))
                {
                
                    $head=$head."&area=Insert Valid Numeric Value in sqft";    
                }
                else
                {
                    $area = validate($_POST['area']);
                }
            }

/***yaha say dobara */
if (!(isset($_FILES['file'])))
{
    $head=$head."&image=Insert two or more images";

}
else
 {

$totalfiles = count($_FILES['file']['name']);
for ($i = 0; $i < $totalfiles; $i++) {
    $temp = explode(".", $_FILES["file"]["name"][$i]);
    $file_extention = strtolower(end($temp));
    $req_extention = array("jpeg","png", "jpg");

    if(in_array($file_extention, $req_extention) === false){
        $head=$head."&image=Extension should be only jpeg , jpg or png";
        
    }
}
}

if($head=="Location: editproperty.php?")
{


  $add_id = $_POST['aid'];
 $sql_insert = "UPDATE s_add SET a_title = '$title', a_price = '$price', a_cat = '$purpose', a_type = '$type',a_city = '$city',a_bad = '$bed',a_bath = '$bath',a_loc = '$adrs',a_area = '$area',
 a_desc = '$Desc',ag_id = '$id',a_date = '$dat',cable = '$cable',electric = '$electric',gas = '$gas',water = '$water',balcony = '$balcony',kitchen = '$kitchen',dining = '$dining',draw_room = '$drawing',
 tv_lounge = '$tv',hot_water = '$hot_water',mosque = '$mosque',secutity_guard = '$security',park = '$park',garage = '$garage',nera_commercail = '$comm' where a_id = '$add_id'";


        if($con->query($sql_insert)) {      


            $sqL_fetch = "SELECT * FROM s_add where a_id ='$add_id'";
            $result = $con->query($sqL_fetch);
            while($r = $result->fetch_array()){

                $id = $r['a_id'];
                

                $totalfiles = count($_FILES['file']['name']);
                
                
        
                for($i=0;$i<$totalfiles;$i++){
                $filename = $_FILES['file']['name'][$i];

                $temp = explode(".", $_FILES["file"]["name"][$i]);
                $newfilename = round(microtime(true)+$i) . '.' . end($temp);
                
                // Upload files and store in database
                if(move_uploaded_file($_FILES["file"]["tmp_name"][$i], 'images/' . $newfilename)){
                // Image db insert sql
                $insert = "INSERT into aimg(i_pic,ai_id) values('$newfilename','$id')";
                    if(mysqli_query($con, $insert)){
                        header("Location:dashboard.php?sucess=property has been added");
                    }
                    else{
                    echo 'Error: '.mysqli_error($conn);
                    }
                
                }
                
                else{  
                    header($head+ 'Error in uploading file - '.$_FILES['file']['name'][$i]);
                } 
                }


            }

      
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