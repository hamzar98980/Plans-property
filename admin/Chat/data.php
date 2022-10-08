<?php
while ($row = $res->fetch_array()) {
    $sql2 = "SELECT * FROM a_chat WHERE (u_id1 = {$row['u_id']} OR u_id2 = {$row['u_id']}) AND (u_id2 = {$u_id} 
    OR u_id1 = {$u_id}) ORDER BY c_id DESC LIMIT 1";
$query2 = mysqli_query($con, $sql2);
$row2 = mysqli_fetch_assoc($query2);
(mysqli_num_rows($query2) > 0) ? $result = $row2['c_r1'] : $result ="No message available";
(strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
if(isset($row2['u_id2'])){
($u_id == $row2['u_id2']) ? $you = "You: " : $you = "";
}else{
$you = "";
}
       
                                    
                               

$output .=         '<li class="clearfix">
                               <a href="emp-chat.php?id='.$row['u_id'].'">
                               <img src="assets/img/users/user-4.png" alt="avatar">
                               <div class="about">
                                   <div class="name">'.$row['u_name'].'</div>
                                   <div class="status">
                                   '. $you . $msg.' </div>
                               </div>
                               </a>
                               </li>';
                                 }
                                 
                                 ?>