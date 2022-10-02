
<?php include 'Layout/navbar.php';
include 'dbconfig.php';
// session_start();
?>

<style>
    body{
    margin-top:20px;
    /* color: #1a202c; */
    text-align: left;
    /* background-color: #e2e8f0;     */
}
.main-body {
    padding: 15px;
}
.cd1 {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.cd1 {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.cb1 {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
.cr{
    color: #4c7ce3;
    /* font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; */
    font-family:Georgia, 'Times New Roman', Times, serif;
}
</style>

<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->

          <?php 
          $ag = $_REQUEST['id'];
          $sql_q = "SELECT * from firm_regist where agent_id = '$ag'";
          $res = mysqli_query($con,$sql_q);
          $r = mysqli_fetch_assoc($res);
          ?>
          <div class="row">
                <div class="col-sm-8">
                    <br>
                    <br>
                    <h2><center><b class="cr"><?php echo $r['fi_name'] ?></b></center></h2>
                    <br>
                    
                    <div class="card cd1 mb-3">
                        <div class="card-body cb1">
                            <h2 class="cr text-info">About:</h2>
                            <p><?php echo $r['f_desc'] ?></p>
                        </div>

                    </div>

                    <div class="card cd1 mb-3">
                        <div class="card-body cb1">
                        <div class="counter">
                            <div class="row">
                                <div class="col-6 col-lg-4">
                                    <div class="count-data text-center">
                                        <h6 class="count h2" data-to="500" data-speed="500">500</h6>
                                        <p class="m-0px font-w-600">Listed Properties</p>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="count-data text-center">
                                        <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                                        <p class="m-0px font-w-600">Followers</p>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="count-data text-center">
                                        <h6 class="count h2" data-to="850" data-speed="850">850</h6>
                                        <p class="m-0px font-w-600">Following</p>
                                    </div>
                                </div>
                              
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4">

                    <div class="card cd1">
                        <div class="card-body cb1">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                            <h4>John Doe</h4>
                            <p class="text-secondary mb-1">Full Stack Developer</p>
                            <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                            <button class="btn btn-primary">Follow</button>
                            <button class="btn btn-outline-primary">Email</button>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
                
            </div>


        

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card cd1">
                <div class="card-body cb1">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>John Doe</h4>
                      <p class="text-secondary mb-1">Full Stack Developer</p>
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                      <button class="btn btn-outline-primary">Chat Now!</button>
                      <button class="btn btn-success btn_w">Whatsapp</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card cd1 mt-3">

                 <!--  -->
                
              </div>

            </div>
            <div class="col-md-8">
              <div class="card cd1 mb-3">
                <div class="card-body cb1">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" value="Hamas" readonly style="background-color:#fff;" class="form-control">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" value="Hamza@gmail.com" readonly style="background-color:#fff;" class="form-control">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" value="999999" readonly style="background-color:#fff;" class="form-control">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" value="3330 (600)" readonly style="background-color:#fff;" class="form-control">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" value="Bay Area, San Francisco, CA" readonly style="background-color:#fff;" class="form-control">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card cd1 h-100">
                    <div class="card-body cb1">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card cd1 h-100">
                    <div class="card-body cb1">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



            </div>
          </div>

        </div>
    </div>