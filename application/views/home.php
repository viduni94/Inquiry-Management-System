<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Edulink</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
 


        <link rel="icon" href="<?php echo base_url('public/assets/EDULINK-Logo1.ico');?>" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->       

        
        
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container" >
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="<?php echo base_url('index.php/Page_controller/loadingpages/home') ?>">Edulink</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>



<?php

$name=$_SESSION["first_username"];
//$_SESSION['name'];
$propic=$_SESSION["propic"];

?>





<li class="xn-profile">
                       
                        <div class="profile">
                            <div class="profile-image">
                                <img src='<?php echo base_url($propic); ?>' alt="No image">
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $name; ?></div>
                                <div class="profile-data-title">Student</div>
                            </div>
                           
                        </div>                                                                        
                    </li>










                    <li class="xn-title">Navigation</li>
                    
                       


<li class="active">
  <a href="<?php echo base_url('index.php/Page_Controller/loadingpages/home') ?>"><span class="fa fa-desktop"></span>  <span class="xn-text"> Home</span> </a>
  </li>
  <li>
  <a href="<?php echo base_url('index.php/Page_Controller/loadingpages/student_profile') ?>"><span class="fa fa-user"></span>  <span class="xn-text"> Profile</span> </a>
  </li>
  <li>
  <a href="<?php echo base_url('index.php/Page_Controller/loadingpages/uploadresults') ?>"><span class="fa fa-floppy-o"></span>  <span class="xn-text"> Upload results </span> </a>
  </li>
  <li>
  <a href="<?php echo base_url('index.php/Page_Controller/loadingpages/contact') ?>"><span class="fa fa-envelope"></span>  <span class="xn-text"> Contact</span> </a>
  </li>
                      <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> <span class="xn-text"> Logout</span></a>                        
                    </li> 

















                    </li>                                        
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <li style="color:white; padding-top: 16px;" >Logged in as  <?php echo $name?></li>
                    <!-- END TOGGLE NAVIGATION -->                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Edulink</a></li>                    
                    <li class="active">Home</li>
                </ul>
                <!-- END BREADCRUMB -->                



                
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span>Hello <?php echo $name?>, Welcome to Edulink</h2>
                </div>                   
                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    
                                </div>
                                <div class="panel-body">
                                   <h3 class="panel-title">This is your temporary account and you have to upload your relevant certificates to prove your results.
You can proceed to upload from <a href="<?php echo site_url('page_controller/loadingpages/uploadresults') ?>" style="color:blue; ">here</a> or you can select "Upload results" from menu</h3>


<br><br><br><br><br><br><br><br>
<h1>You are eligible to following Degrees</h1>
<br><br>

    <?php


if(isset($programme)){

foreach ($programme ->result_array() as $degrees) {
?>
<ol>
<?php

    if($degrees['Programme1']!=NULL){
  ?>  <li><h4><?php echo $degrees['Programme1']; ?></h4> </li>

<?php
    }
    if($degrees['Programme2']!=NULL){
  ?>  <li><h4><?php echo $degrees['Programme2']; ?></h4> </li>

<?php
    }
    if($degrees['Programme3']!=NULL){
  ?>  <li><h4><?php echo $degrees['Programme3']; ?></h4> </li>

<?php
    }
    if($degrees['Programme4']!=NULL){
  ?>  <li><h4><?php echo $degrees['Programme4']; ?></h4> </li>

<?php
    }
    if($degrees['Programme5']!=NULL){
  ?>  <li><h4><?php echo $degrees['Programme5']; ?></h4> </li>

<?php
    }
    if($degrees['Programme6']!=NULL){
  ?>  <li><h4><?php echo $degrees['Programme6']; ?></h4> </li>

<?php
    }
    if($degrees['Programme7']!=NULL){
  ?>  <li><h4><?php echo $degrees['Programme7']; ?></h4> </li>

<?php
    }
?>
    </ol>
<?php
}


}
 
?>









                                </div>
                            </div>

                        </div>
                    </div>
                
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url('index.php/Login_Controller/logout') ?>" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <!-- END PRELOADS -->     


      <?php

      include 'imports.php'
      ?>

    </body>
</html>






