   
<?php 

// session_start();

?>
  <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="../index-2.php"> <img alt="image" src="../assets/img/logo.png" class="header-logo" /> <span
            class="logo-name"><img alt="image" src="../assets/img/property.png" class="header-logo" /></span>
            </a>
          </div>
   
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="../index-2.php" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
        <?php 
        if( $_SESSION['designation'] == 'Super Admin'){
           ?>
         


            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="user"></i><span>User</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="../users.php">Add User</a></li>
                <li><a class="nav-link" href="../user-display.php">All Users</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="box"></i><span>Seller</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="../seller/all-seller.php">All Seller</a></li>
                <!-- <li><a class="nav-link" href="portfolio.html">Portfolio</a></li>
                <li><a class="nav-link" href="blog.html">Blog</a></li>
                <li><a class="nav-link" href="calendar.html">Calendar</a></li> -->
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="shopping-bag"></i><span>Adds</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="seller-adds.php">All properties</a></li>
                <li><a class="nav-link" href="unapproved-adds.php">Unapproved properties</a></li>
                <li><a class="nav-link" href="approved-adds.php">Approved properties</a></li>
                <li><a class="nav-link" href="rejected-adds.php">Rejected properties</a></li>
              
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="send"></i><span>Chat</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="../emp-chat.php">Chat</a></li>

              </ul>
            </li>

        <?php
         }
         ?> 

            <?php if($_SESSION['designation'] == 'Add Aproval') {?>

              <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="shopping-bag"></i><span>Adds</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="seller-adds.php">All properties</a></li>
                <li><a class="nav-link" href="unapproved-adds.php">Unapproved properties</a></li>
                <li><a class="nav-link" href="approved-adds.php">Approved properties</a></li>
                <li><a class="nav-link" href="rejected-adds.php">Rejected properties</a></li>
              
              </ul>
             </li>

             <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="send"></i><span>Chat</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="./emp-chat.php">Chat</a></li>

              </ul>
            </li>

              <?php }?>


                    <?php if($_SESSION['designation'] == 'Checker') {?>

                      <li class="dropdown">
                      <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="shopping-bag"></i><span>Adds</span></a>
                      <ul class="dropdown-menu">
                        <li><a class="nav-link" href="seller-adds.php">All properties</a></li>
                        <li><a class="nav-link" href="unapproved-adds.php">Unapproved properties</a></li>
                        <li><a class="nav-link" href="approved-adds.php">Approved properties</a></li>
                        <li><a class="nav-link" href="rejected-adds.php">Rejected properties</a></li>

                      </ul>
                      </li>

                      <li class="dropdown">
                      <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="send"></i><span>Chat</span></a>
                      <ul class="dropdown-menu">
                        <li><a class="nav-link" href="./emp-chat.php">Chat</a></li>

                      </ul>
                      </li>

                      <?php }?>



          </ul>
        </aside>
      </div>