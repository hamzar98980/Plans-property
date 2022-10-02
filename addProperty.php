<?php
ob_start();
include 'dbconfig.php';
$title="Add Property ";
include 'functions.php';
include('Layout/navbar.php');
if(empty($_SESSION['id']))
{
    header("Location: index.php");
}
?>

<link rel="stylesheet" href="admin/assets/bundles/izitoast/css/iziToast.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.1/css/all.css" type="text/css">
<link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />

    <!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> -->
    <script src="https://kit.fontawesome.com/c94b035eab.js" crossorigin="anonymous"></script>

<!-- <link rel="stylesheet" href="admin/assets/css/style.css"> -->
<!-- <link rel="stylesheet" href="admin/assets/css/components.css"> -->
  <!-- Custom style CSS -->
  <!-- <link rel="stylesheet" href="admin/assets/css/custom.css"> -->
<style>
    .cr {
        color: #4c7ce3;
    }

    .table-img {
        margin: 1rem;
    }

    td.tb-val {
        text-align: center;
        vertical-align: baseline;

    }

    .drag-area {
        border: 1px dashed #6c757d;
        height: 125px;
        border-radius: 15px;
    }

    .drag-area.active {
        border: 1px solid #6c757d;
    }

    .drag-area img {
        height: 60px;
        width: 60px;
        object-fit: cover;
        border-radius: 15px;
    }
    .f1{
        color: #4c7ce3;
        font-size:large;
        
    }
  
</style>
<script src="./uploadimage.js"></script>

<?php

$json = file_get_contents('pk.json');
  
// Decode the JSON file
    $json_data = json_decode($json,true);
?>
<div class="container mt-5">
    <div class="row">

        <div class="col-sm-12">
            <?php 
            if(verified_check() == '0'){
                echo '<div class="alert alert-danger" role="alert">
                User Are Not Verified! First Verified Your Self
            </div>';
            }

            ?>

            <!-- <div class="col-12 col-sm-6 col-lg-3">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="mb-2">Error Message</div>
                    <button class="btn btn-primary" id="toastr-4">Launch</button>
                  </div>
                </div>
              </div>
            </div> -->

        </div>

        <div class="col-12 my-4">
          
            
            <div class="card ">



                <div class="card-title cr m-3">
                    <h2 class="font-weight-bold text-center">Add Property</h2>
                </div>
                <div class="card-body shadow-lg p-5 ht1">
                    <form method="POST" action="addItem.php" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="title" class="col-sm-2">Property Title:</label>
                            <div class="col-sm-8"><input type="text" name="title" id="title" class="form-control" aria-describedby="titlehelp">
                            <?php if (isset($_GET['title'])) { ?>
                                                <small id="titlehelp" class="text-danger">
                                                <?php echo $_GET['title']; ?>
                                                </small>
                                            <?php }else{ ?>
                                            <small id="titlehelp" class="text-muted">eg: 250 Ghaz Well Maintain Banglow Available</small>
                                            <?php } ?>
                                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Desc" class="col-sm-2">Description:</label>
                            <div class="col-sm-8"><textarea name="Desc" id="Desc" class="form-control" aria-describedby="Deschelp"></textarea>
                            <?php if (isset($_GET['Desc'])) { ?>
                                                <small id="Deschelp" class="text-danger">
                                                <?php echo $_GET['Desc']; ?>
                                                </small>
                                            <?php }
                                            else{ ?>
                                            <small id="Deschelp" class="text-muted">eg: Write Some Detail About Property</small>
                                            <?php } ?>
                                           
                                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="adrs" class="col-sm-2">Address:</label>
                            <div class="col-sm-6"><input type="text" name="adrs" id="adrs" class="form-control" aria-describedby="adrshelp">
                            <?php if (isset($_GET['adrs'])) { ?>
                                                <small id="adrshelp" class="text-danger">
                                                <?php echo $_GET['adrs']; ?>
                                                </small>
                                            <?php }else{ ?>
                                            <small id="adrshelp" class="text-muted">eg: Street Number, Flat Number</small>
                                            <?php } ?>
                                            </div>
                            <div class="col-sm-2">
                                <!-- <input type="text" name="city" id="city" class="form-control" aria-describedby="cityhelp">
                             -->
                             <select name="city" id="" class="form-control select2" searchable="Search here..">
                                <?php 
                                foreach($json_data as $data)
                                {
                                  //echo $data['city'];
                                ?>
                                  <option  value="<?php echo $data['city'] ?>"><?php echo $data['city'] ?></option>
                                
                                <?php
                                } 
                                ?>
                            </select>
                             <?php if (isset($_GET['city'])) { ?>
                                                <small id="cityhelp" class="text-danger">
                                                <?php echo $_GET['city']; ?>
                                                </small>
                                            <?php }else{ ?>
                                            <small id="cityhelp" class="text-muted">eg: Karachi</small>
                                            <?php } ?>
                                        </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="bed">No. Of Bed</label>
                                    <input type="text" name="bed" id="bed" class="form-control" placeholder="" aria-describedby="bedId">
                                    <?php if (isset($_GET['bed'])) { ?>
                                                <small id="bedId" class="text-danger">
                                                <?php echo $_GET['bed']; ?>
                                                </small>
                                            <?php }
                                            else{ ?>
                                            <small id="bedId" class="text-muted">eg: Number Of Bed(s)</small>
                                            <?php } ?>
                                        </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="area">Covered Area</label>
                                    <input type="text" name="area" id="area" class="form-control"aria-describedby="areaId">
                                    <?php if (isset($_GET['area'])) { ?>
                                                <small id="areaId" class="text-danger">
                                                <?php echo $_GET['area']; ?>
                                                </small>
                                            <?php }
                                            else{ ?>
                                            <small id="areaId" class="text-muted">Note: In Square feet</small>
                                            <?php } ?>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="bath">No. Of Bath</label>
                                    <input type="text" name="bath" id="bath" class="form-control" placeholder="" aria-describedby="bathId">
                                    <?php if (isset($_GET['bath'])) { ?>
                                                <small id="bathId" class="text-danger">
                                                <?php echo $_GET['bath']; ?>
                                                </small>
                                            <?php }
                                            else{ ?>
                                            <small id="bathId" class="text-muted">eg: Number Of Bath(s)</small>
                                            <?php } ?>
                                        </div>

                            </div>

                        </div>
                  <div class="form-group row">
                            <label for="img" class="col-sm-2">Add Images:</label>
                            <div class="col-sm-8">
                            <div id="viewImg" class="drag-area text-center p-3 overflow-auto">
                                <h6>Drag & Drop to Upload Image<br>Or<br></h6>
                                <a href="#" class="btn btn-outline-primary" onclick="defaultBtnActive()" id="files">Click Here</a>
                                </div>
                                <input type="file" hidden name="file[]" accept="image/*" id="default-btn" multiple>                            
                                <?php if (isset($_GET['image'])) { ?>
                                                <small id="imghelp" class="text-danger">
                                                <?php echo $_GET['image']; ?>
                                                </small>
                                            <?php }
                                            else{ ?>
                                            <small id="imghelp" class="text-muted">eg: You Can Add Multiples Images</small>
                                            <?php } ?>
                                        </div>
                        </div>
                      
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="type">Property Type</label>

                                    <select name="type" id="" class="form-control">
                                            <option value="Home">Home</option>
                                            <option value="Plot">Plot</option>
                                            <option value="Commercial">Commercial</option>

                                    </select>

                                    <!-- <input type="text" name="type" id="type" class="form-control" placeholder="" aria-describedby="typeId"> -->
                                    <?php if (isset($_GET['type'])) { ?>
                                                <small id="typeId" class="text-danger">
                                                <?php echo $_GET['type']; ?>
                                                </small>
                                            <?php }
                                            else{ ?>
                                            <small id="typeId" class="text-muted">eg: Home, Plot, Commercial</small>
                                            <?php } ?>
                                        </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="purpose">Purpose</label>
                                    <select name="purpose" id="purpose" class="form-control">
                                            <option value="Rent">Rent</option>
                                            <option value="Sell">Sell</option>
                                          
                                    </select>

                                    <!-- <input type="text" name="purpose" id="purpose" class="form-control" placeholder="" aria-describedby="purposeId"> -->
                                    <?php if (isset($_GET['purpose'])) { ?>
                                                <small id="purposeId" class="text-danger">
                                                <?php echo $_GET['purpose']; ?>
                                                </small>
                                            <?php }
                                                else{ ?>
                                            <small id="purposeId" class="text-muted">eg: Rent, Sell</small>
                                            <?php } ?>
                                        </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-sm-2">Price:</label>
                            <div class="col-sm-8">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rs.</span>
                                    </div>
                                    <input type="text" class="form-control" id="price" name="price" aria-describedby="priceId">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                    </div>
                                    <?php if (isset($_GET['price'])) { ?>
                                                <small class="text-danger">
                                                <?php echo $_GET['price']; ?>
                                                </small>
                                            <?php }
                                                    else{ ?>
                                            <small id="priceId" class="text-muted">Set Price According To Market</small>        
                                            <?php } ?>
                                    </div>
                        </div>

                        <!-- Features -->


                      
                            <h3 class="cr"><b> Features</b></h3>
                                <div class="form-group">
                                                    
                                   
                                    <div class="row">
                                                    
                                        <div class="col-sm-2"></div>

                                        <div class="col-sm-10">
                                        <h4 class="f1"><b> Home Features</b></h4>
                                                        <br>
                                            <div class=" col-sm-2 pretty p-icon p-smooth">
                                            <input type="checkbox" name="cable" value="1"/>
                                            <div class="state p-success">
                                                <i class="icon fa fa-check"></i>
                                                <label>Cable Wiring</label>
                                            </div>
                                            </div>

                                            <div class=" col-sm-2 pretty p-icon p-smooth">
                                            <input type="checkbox" name="electric" value="1"/>
                                            <div class="state p-success">
                                                <i class="icon fa fa-check"></i>                                               
                                                <label>Electricity</label>
                                            </div>
                                            </div>

                                            <div class=" col-sm-2 pretty p-icon p-smooth">
                                            <input type="checkbox" name="gas" value="1"/>
                                            
                                            <div class="state p-success">
                                                <i class="icon fa fa-check"></i>     
                                                                                          
                                                <label>Gas Supply</label>
                                            </div>
                                            </div>

                                            
                                            <div class=" col-sm-2  pretty p-icon p-smooth">
                                            <input type="checkbox" name="water" value="1"/>
                                            
                                            <div class="state p-success">
                                                <i class="icon fa fa-check"></i>     
                                                                                          
                                                <label>Water Supply</label>
                                            </div>
                                            </div>

                                            <div class=" col-sm-2  pretty p-icon p-smooth">
                                            <input type="checkbox" name="balcony" value="1"/>
                                            
                                            <div class="state p-success">
                                                <i class="icon fa fa-check"></i>     
                                                                                          
                                                <label>Balcony</label>
                                            </div>
                                            </div>


                                        </div>
                                      
                                    </div>
                                </div>
                                
                                    <div class="row">
                                                    
                                        <div class="col-sm-2"></div>

                                        <div class="col-sm-10">
                                        <!-- <h4 class="f1"><b> Home Features</b></h4> -->
                                                        <br>
                                            <div class="col-sm-2 pretty p-icon p-smooth">
                                            <input type="checkbox" name="kitchen" value="1"/>
                                            <div class="state p-success">
                                                <i class="icon fa fa-check"></i>
                                                <label>Kitchen</label>
                                            </div>
                                            </div>

                                            <div class="col-sm-2 pretty p-icon p-smooth">
                                            <input type="checkbox" name="dining" value="1"/>
                                            <div class="state p-success">
                                                <i class="icon fa fa-check"></i>                                               
                                                <label>Dining Room</label>
                                            </div>
                                            </div>

                                            <div class="col-sm-2 pretty p-icon p-smooth">
                                            <input type="checkbox" name="dra_room" value="1"/>
                                            
                                            <div class="state p-success">
                                                <i class="icon fa fa-check"></i>     
                                                                                            
                                                <label>Drawing Rooms</label>
                                            </div>
                                            </div>

                                            
                                            <div class="col-sm-2 pretty p-icon p-smooth">
                                            <input type="checkbox" name="tv_long" value="1"/>
                                            
                                            <div class="state p-success">
                                                <i class="icon fa fa-check"></i>     
                                                                                            
                                                <label>Tv Lounge</label>
                                            </div>
                                            </div>

                                            <div class="col-sm-2 pretty p-icon p-smooth">
                                            <input type="checkbox" name="hot_water" value="1"/>
                                            
                                            <div class="state p-success">
                                                <i class="icon fa fa-check"></i>     
                                                                                            
                                                <label>Hot Water Piping</label>
                                            </div>
                                            </div>

                                        </div>
                                        
                                    </div>

                                    <!-- Area -->
                                    <br>
                                    <div class="row">
                                                    
                                        <div class="col-sm-2"></div>

                                        <div class="col-sm-10">
                                        <h4 class="f1"><b> Area Features</b></h4>
                                                        <br>
                                            <div class=" col-sm-2 pretty p-icon p-smooth">
                                            <input type="checkbox" name="mosque" value="1"/>
                                            <div class="state p-success">
                                                <i class="icon fa fa-check"></i>
                                                <label>Mosque</label>
                                            </div>
                                            </div>

                                            <div class=" col-sm-2 pretty p-icon p-smooth">
                                            <input type="checkbox" name="security" value="1"/>
                                            <div class="state p-success">
                                                <i class="icon fa fa-check"></i>                                               
                                                <label>Security Guard</label>
                                            </div>
                                            </div>

                                            <div class=" col-sm-2 pretty p-icon p-smooth">
                                            <input type="checkbox" name="park" value="1"/>
                                            
                                            <div class="state p-success">
                                                <i class="icon fa fa-check"></i>     
                                                                                          
                                                <label>Park</label>
                                            </div>
                                            </div>

                                            
                                            <div class=" col-sm-2  pretty p-icon p-smooth">
                                            <input type="checkbox" name="garage" value="1"/>
                                            
                                            <div class="state p-success">
                                                <i class="icon fa fa-check"></i>     
                                                                                          
                                                <label>Garage</label>
                                            </div>
                                            </div>

                                            <div class=" col-sm-2  pretty p-icon p-smooth">
                                            <input type="checkbox" name="commercial" value="1"/>
                                            
                                            <div class="state p-success">
                                                <i class="icon fa fa-check"></i>     
                                                                                          
                                                <label>Near Commercial</label>
                                            </div>
                                            </div>


                                        </div>
                                      
                                    </div>
                                        
                                    
                                                        <br><br>




                        <?php 
                           if(verified_check() == '1'){
                        ?>
                        <div class="d-flex justify-content-center">
                        <button type="submit" class="btn  btn-primary">Submit Property</button>
                        </div>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Bootstrap core JavaScript-->
<script src="assets/js/dragImg.js"></script>



<?php
include('Layout/footer.php');
?>
<script src="admin/assets/js/page/toastr.js"></script>


<script src="admin/assets/bundles/izitoast/js/iziToast.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script>
    $('.select2').select2();


$(document).ready(function(){
  $('.toast').toast('show');
});

</script>