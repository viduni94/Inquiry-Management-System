<!DOCTYPE html>
<html lang="en">

    <head> 

        <!-- META SECTION -->
        <title>Edulink IMS</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        
        <!-- END META SECTION -->
         <link rel="icon" href="<?php echo base_url('public/assets/EDULINK-Logo1.ico');?>" type="image/x-icon" />             
        <!-- CSS INCLUDE --> 
             
        <link rel="stylesheet" type="text/css" href= "<?php echo base_url('public/css/theme-default.css'); ?> "/>
        <link rel="stylesheet" type="text/css" href= "<?php echo base_url('public/css/fontawesome/font-awesome.min.css'); ?> "/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/sweetalert-master/dist/sweetalert.css'); ?>">
        <!-- EOF CSS INCLUDE --> 
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery/jquery.min.js"></script>
        <!-- JS INCLUDE --> 
                <script src="<?php echo base_url('public/sweetalert-master/dist/sweetalert.min.js'); ?>"></script>

    </head>
    <body>

     <?php

    $name = $_SESSION["first_username"];
    $propic = $_SESSION["propic"];

    ?>
        
    
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="#">Edulink IMS</a>
                        
                    </li>
                   <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="<?php echo base_url($propic);?>" alt="<?php echo $name." 's image";  ?>"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?php echo base_url($propic);?>" alt="<?php echo $name." 's image";  ?>"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $name;  ?></div>
                                <div class="profile-data-title">Admissions Officer</div>
                            </div>
                           
                        </div>                                                                        
                    </li>

                     <li>
                        <a href="<?php echo base_url();?>index.php/Page_Controller/loadingpages/admission_officer_student_list"><span class="fa fa-users"></span> <span class="xn-text">Student Profiles</span></a>
                        
                    </li>

                    <li class="active">
                        <a href="<?php echo base_url();?>index.php/ManageInquiries_controller/completedforadmissionofficer"><span class="fa fa-phone"></span> <span class="xn-text">Completed Inquiries</span></a>
                        
                    </li>        

                     <li>
                        <a href="<?php echo base_url();?>index.php/Admissions_controller/admissionsofficeradmissions"><span class="fa fa-graduation-cap"></span> <span class="xn-text">Admissions</span></a>
                        
                    </li>                
                    
                       
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            
            
<!-- ++++++++++++++++++++++++++++++++++++++   END OF SIDEBAR   +++++++++++++++++++++++++++++++++++++ -->

<!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    

                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="<?php echo base_url();?>index.php/Login_Controller/logout" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->  

                    <li class="pull-right" style="color:grey; padding-top: 16px; padding-right: 20px" >Logged in as <?php echo $name; ?> </li>
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->           

                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Completed Inquiries</a></li>
                </ul>
                <!-- END BREADCRUMB -->


                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
            
            
                            <!-- START DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h2 class="panel-title"><strong>Completed Inquiries</strong></h2>                               
                                </div>

                                <div class="panel-body">
                                     <table id="customers2" class="table datatable table-hover">
                                        <thead>
                                            <tr>
                                                <th width="100" style="text-align: center">First Name</th>
                                                <th width="100" style="text-align: center">Last Name</th>
                                                <th width="100" style="text-align: center">OL</th>
                                                <th width="100" style="text-align: center">AL</th>
                                                <th width="100" style="text-align: center">Contact No.</th>
                                                <th width="200" style="text-align: center">Email</th>
                                                <th width="100" style="text-align: center">Potential Date</th>
                                                <th width="100" style="text-align: center">Handled By</th>
                                                <th width="200" style="text-align: center">Actions</th>
                                            </tr>
                                        </thead>
                                        <div id="completed">
                                    <form>
                                    <tbody id='table'>
                                    <?php
                                    if ($posts4->num_rows() > 0) {
                                        foreach($posts4 ->result_array()  as $post){ ?>


                                            <tr id="<?php  echo $post['r_id']; ?>">
                                                <td style="text-align: center"><?php echo $post['Fname']; ?></td>
                                                <td style="text-align: center"><?php echo $post['Lname']; ?></td>
                                                <td style="text-align: center"><?php echo $post['OL']; ?></td>
                                                <td style="text-align: center"><?php echo $post['Grade1']; ?></td>
                                                <td style="text-align: center"><?php echo $post['Contactno']; ?></td>
                                                <td style="text-align: center"><?php echo $post['Email']; ?></td>
                                                <td style="text-align: center"><?php echo $post['Pdate']; ?></td>
                                                <td style="text-align: center"><?php echo $post['CounsellorName']; ?></td>
                                                <td style="text-align: center">
                                                <button type="button"  class="btn btn-success" style="border: solid;" onclick="registered('<?php echo urlencode($post['Contactno']); ?>','<?php echo $post['r_id']; ?>')">&nbsp&nbsp&nbsp&nbsp&nbsp Registered &nbsp&nbsp&nbsp&nbsp&nbsp</button>
                                                <?php
                                                if($post['account_created']==1){
                                                    ?>
                                                    <button type="button" class="btn btn-danger" style="border: solid;" onclick="Resend('<?php echo urlencode($post['Contactno']); ?>','<?php echo $post['r_id']; ?>','<?php echo urlencode($post['Email']); ?>')"" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Resend &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>

                                                    <?php                                                    
                                                }else{
?>
                                                <button type="button" class="btn btn-info" style="border: solid;" onclick="createAndSend('<?php echo urlencode($post['Contactno']); ?>','<?php echo $post['r_id']; ?>','<?php echo urlencode($post['Email']); ?>')" >Create and Send</button>

<?php                                                    
                                                }
                                                ?>

                                                </td>
                                            </tr>
                                            
                                            <?php
                                        }
                                    }
                                            ?>
                                            </tbody>
                                            </form>
                                            </div>
                                            </table>

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
                        <p><strong>Press No if you want to continue work.</strong> Press Yes to logout.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url('index.php/Login_Controller/logout') ?>" class="btn btn-danger btn-lg">Yes</a>
                            <button type= "button" class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end of message box-->
        
        
        
                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/bootstrap/bootstrap.min.js"></script>                
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='<?php echo base_url(); ?>public/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/tableexport/tableExport.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/tableexport/jquery.base64.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/tableexport/html2canvas.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/tableexport/jspdf/jspdf.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/tableexport/jspdf/libs/base64.js"></script> 

        <!-- To delete an admission -->
        <script type="text/javascript">

        function deleteStudent(email,r_id){
                $.ajax({             
                    type:"post",
                    url : 'admissions_controller/deleteStudent/',
                    data : {id:r=email},
                    success: function(data) {
                        $('#deleted').html(data);
                    }
                });
                $('#'+r_id).hide();
        }
        
       </script>

       <script>
        $('.mb-control').click(function(e){
            e.preventDefault()
        })
        

        function registered(Contactno,r_id){
           
                $.ajax({             
                    type:"get",
                    url : '<?php echo base_url();?>index.php/Inquirybutton_controller/registeredforadmissionofficer/'+Contactno,
                    //data : {id:r=email},
                    success: function(data) {

                    respond=data.trim();
                       // alert(respond);
                      if(respond=="True"){

                        swal("Registerd!", "Student with contact number "+Contactno+" registerd!", "success");
                        //window.location="<?php echo base_url();?>index.php/ManageInquiries_controller/completedforadmissionofficer";
                                        $('#'+r_id).hide();

                        }
                        else{
                            sweetAlert("Oops...", "Something went wrong. Couldn't Register!", "error");
                        }
                            

                        //$('#registered').html(data);
                    }
                });
               // $('#'+r_id).hide();
        }
        

        function createAndSend(Contactno,r_id,email){


                $.ajax({
                    type:"get",
                    url: '<?php echo base_url();?>index.php/Email/EmailtoDB_Controller/addstudentforadmissionofficer/'+Contactno+'/'+email,
                    success: function(data) {
                        respond=data.trim();
                        //alert(respond)
                      if(respond=="True"){

                        swal("Email Sent!", "An email with account details are sent to the user "+email+" !", "success");
                        window.location="<?php echo base_url();?>index.php/ManageInquiries_controller/completedforadmissionofficer";


                        }
                        else if(respond=="False"){
                            sweetAlert("Oops...", "Something went wrong Email couldn't sent!", "error");
                        }
                        
                        //location.href=""
                    }

                });

        }


        function Resend(Contactno,r_id,email){


                $.ajax({
                    type:"get",
                    url: '<?php echo base_url();?>index.php/Email/EmailtoDB_Controller/Resend_addstudentforadmissionofficer/'+Contactno+'/'+email,
                    success: function(data) {
                        respond=data.trim();
                        //alert(respond)
                      if(respond=="True"){

                        swal("Email Resent!", "An email with account details are sent to the user "+email+" !", "success");
                        window.location="<?php echo base_url();?>index.php/ManageInquiries_controller/completedforadmissionofficer";


                        }
                        else if(respond=="False"){
                            sweetAlert("Oops...", "Something went wrong Email couldn't sent!", "error");
                        }
                          //alert("dd");
            //            window.location="<?php echo base_url();?>index.php/ManageInquiries_controller/completedforadmissionofficer";
                        //location.href=""
                    }

                });

        }

</script>

        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                   
    </body>
</html>



