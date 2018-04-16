<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('common/header_styles')?>
	<style type="text/css">
		.img{
			float-right:0;
		}
	</style>
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
	<div class="page-wrapper">
		<?php $this->load->view('common/header')?>
		<link href="<?php echo site_url() ?>assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo site_url() ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo site_url() ?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" /> 

		<!-- <h1 class="text-center">User List View</h1> -->
		
		<div class="row">
                    <div class="col-sm-12">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption font-dark">
                                    <i class="fa fa-users font-dark"></i>
                                    <span class="caption-subject bold uppercase">User List</span>
                                </div>
                                <div class="">                                                      
                                        <a href="<?php echo site_url('app/user-add') ?>">
                                         <button id="newlead"  class="btn green">Add New User <i class="fa fa-plus"></i></button>      
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

		<?php $this->load->view('common/footer')?>
	</div>
    <?php $this->load->view('common/footer_scripts')?>
    <!-- BEGIN PAGE LEVEL PLUGINS -->
       <script src="<?php echo site_url() ?>assets/global/scripts/datatable.js" type="text/javascript"></script>
       <script src="<?php echo site_url() ?>assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
       <script src="<?php echo site_url() ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
       <script src="<?php echo site_url() ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
       <!-- END PAGE LEVEL PLUGINS -->
       <!-- BEGIN PAGE LEVEL SCRIPTS -->
       <script src="<?php echo site_url() ?>assets/pages/scripts/table-datatables-buttons.js" type="text/javascript"></script>
       <!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>