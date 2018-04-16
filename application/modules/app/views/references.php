<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <?php $this->load->view('common/header_styles')?> 
        <link href="<?php echo site_url() ?>assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo site_url() ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        
        <link href="<?php echo site_url() ?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo site_url() ?>assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo site_url() ?>assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    </head>
    <!-- END HEAD -->
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
              <?php $this->load->view('common/header')?>  
            <!-- BEGIN PAGE TITLE-->

            <!-- BEGIN CONTENT -->
            <div class="row">
                    <div class="col-sm-12">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption font-dark">
                                    <i class="fa fa-users font-dark"></i>
                                    <span class="caption-subject bold uppercase">Reference List</span>
                                </div>
                                <div class="">                                                      
                                        <a href="<?php echo site_url('app/user-add') ?>">
                                         <button id="newlead"  class="btn green">Add New Reference <i class="fa fa-plus"></i></button>    
                                        </a>
                                </div>
                                <div class="tools"></div>
                                 
                            </div>
                            <div class="portlet-body">
                                <table class="table table-striped table-bordered table-hover" id="sample_1">
                                    <thead>
                                        <tr>
                                            
                                            <th>Name</th>
                                            <th>Company Name</th>
                                            <th>Category</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td><a href="<?php echo site_url('user-detail')?>">Ashok</a></td> 
                                            <td>test@gmail.com</td>
                                            <td>987654321</td>
                                            <td>8</td>
                                            <td>About the user</td>
                                            <td><a href="#" class="btn red btn-dafault pull pull-right">Delete</a></td>
                                        </tr>
                                        <tr>
                                            
                                            <td><a href="<?php echo site_url('user-detail')?>">Rahul</a></td>
                                            <td>test@gmail.com</td>
                                            <td>987654321</td>
                                            <td>8</td>
                                            <td>About the user</td>
                                            <td><a href="#" class="btn red btn-dafault pull pull-right">Delete</a></td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>    
                    
                
            <!-- END PAGE CONTENT -->
            <?php $this->load->view('common/footer')?> 
            <!-- END FOOTER -->
        </div>
        
       <?php $this->load->view('common/footer_scripts')?> 
       <script src="<?php echo site_url() ?>assets/pages/scripts/refForm.js" type="text/javascript"></script>
    </body>

</html>