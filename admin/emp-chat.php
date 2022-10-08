<?php 
ob_start();
session_start();
// include 'dbconfig.php';
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">


<!-- chat.html  21 Nov 2019 03:50:11 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Plans Property - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="./assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="./assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='./assets/img/favicon.ico' />


<style>
  
  .to{
    float: right;
    color: green;

  }
  .message {
			box-sizing: border-box;
			padding: 0.5rem 1rem;
			margin: 1rem;
			background: #6777EF;
			border-radius: 1.125rem 1.125rem 1.125rem 0;
			min-height: 2.25rem;
			width: fit-content;
			max-width: 66%;
			
			box-shadow: 
				0 0 2rem rgba(black, 0.075),
				0rem 1rem 1rem -1rem rgba(black, 0.1);
  }
			.parker {
				margin: 1rem 1rem 1rem auto ;
				border-radius: 1.125rem 1.125rem 0 1.125rem;
				/* background: $text-1; */
				color: white;
			}

    .stc{
			background: black;
      color: white;
      
    }
   
</style>
</head>

<body>




  <!-- <div class="loader"></div> -->
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      
     <?php 
     include 'navbar.php';
     include 'sidebar.php';

     ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="card">
                  <div class="body">
                    <div id="plist" class="people-list">
                      <div class="chat-search">
                        <input type="text" class="form-control" placeholder="Search..." />
      </div>
                      <div class="m-b-20">
                        <div id="chat-scroll">

                          <ul class="chat-list list-unstyled m-b-0">
                                <?php
                                $u_id= $_SESSION['u_id'];
                                $sql_get = "SELECT * from a_user WHERE NOT u_id = {$u_id} ORDER BY u_id DESC";
                                $res = $con->query($sql_get);
                                $output = "";
                                if(mysqli_num_rows($res) == 0){
                                  $output .= "No users are available to chat";
                              }elseif(mysqli_num_rows($res) > 0){
                                  include_once "Chat/data.php";
                              }
                              echo $output; ?>
                          
                          </ul>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="card">
                  <div class="chat">
                    <div class="chat-header clearfix">
                      <img src="assets/img/users/user-4.png" alt="avatar">
                      <div class="chat-about">
                      <?php
                      include 'config.php';
                        if(isset($_REQUEST['id'])){
                        $id = $_REQUEST['id'];
                        // echo $id;
                        
                        ?>
                      
                        <div class="chat-with">
                            <?php $sql_user = "SELECT u_name,u_email,u_id,ad_dest from a_user inner join a_dest on ad_id = u_dest where u_id = '$id'";
                            $res_em = $con->query($sql_user);
                            while ($row = $res_em->fetch_array()) {
                                $dest = $row['ad_dest'];  
                              echo $row['u_name'];

                            }
                          
                            ?>
                        </div>
                        <div class="chat-num-messages"><?php echo $dest ?></div>
                        <?php } ?>
                        <?php  

                          if(!isset($_REQUEST['id'])){
                            $sm = $_SESSION['name'];
                            echo $sm;
                          }
                        
                        ?>
                      </div>
                    </div>
                  </div>
                    

                  <div class="chat-box" id="">
                    <div class=" <?php 
                      if(isset($_REQUEST['id'])){
                   echo"chat-area"; }?> card-body chat-content">
                       
                       
                        




                      <!-- <input type="text" readonly value="" class="form-control"> -->
                      <?php if(empty($_REQUEST['id'])){
                        ?>
                       <center>
                        <img src="../pictures/r2.png" alt="" height="300px" width="300px">
                        <p>Select Any User To Chat</p>
                        </center>
                        
                        <?php } ?>
                    </div>
                    <div class="card-footer chat-form">
                
                      <form action="#" class="typing-area">
                      <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $id; ?>" hidden>
                      <input type="text" class="form-control input-field" name="message" placeholder="Type a message">
                        <button class="btn btn-primary" name="btnchat" type="submit"><i class="far fa-paper-plane"></i></button>
                      </form>


                    </div>
             
                    </div>
           
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="./assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <script src="./assets/js/page/chat.js"></script>
  <!-- Template JS File -->
  <script src="./assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="./assets/js/custom.js"></script>
</body>

<script src="./Chat/chat.js"></script>
<!-- chat.html  21 Nov 2019 03:50:12 GMT -->
</html>