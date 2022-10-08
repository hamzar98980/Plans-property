<?php 
    session_start();
    if(isset($_SESSION['u_id'])){
        include_once "../config.php";
        $outgoing_id = $_SESSION['u_id'];
        $incoming_id = mysqli_real_escape_string($con, $_POST['incoming_id']);
        $output = "";
        $sql = "SELECT * FROM a_chat LEFT JOIN a_user ON a_user.u_id = a_chat.u_id1
                WHERE (u_id1 = {$outgoing_id} AND u_id2 = {$incoming_id})
                OR (u_id1 = {$incoming_id} AND u_id2 = {$outgoing_id}) ORDER BY c_id";
        $query = mysqli_query($con, $sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                if($row['u_id1'] === $outgoing_id){
                    $output .= '
                    <div class="card-box message stc">
                    <p class="smsg" style="color:#fff;">'.$row['c_r1'] .'</p>
                    </div>';
                }else{
                    $output .= '
                    <div class="card-box message parker">
                                <p class="" style="color:#fff;">'.$row['c_r1'].'</p>
                                </div>';
                }
            }
        }else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;
    }

?>