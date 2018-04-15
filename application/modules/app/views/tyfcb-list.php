<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('common/header_styles')?>
	<style type="text/css">
		.img{
			float-right:0;
		}
        .my-error-class {
            color:red;
        }
        span.select2-container {
            z-index:10050;
        }
        
	</style>
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
	<div class="page-wrapper">
		<?php $this->load->view('common/header')?>
		<link href="<?php echo site_url() ?>assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo site_url() ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        
        <link href="<?php echo site_url() ?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo site_url() ?>assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo site_url() ?>assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" /> 


		<!-- <h1 class="text-center">User List View</h1> -->
		
		<div class="row">
                    <div class="col-sm-12">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption font-dark">
                                    <i class="fa fa-users font-dark"></i>
                                    <span class="caption-subject bold uppercase">Tyfcb List</span>
                                </div>
                                <div class="">                                                      
                                        <a class="btn green btn-outline sbold" data-toggle="modal" href="#basic"> Add TYFCB
                                         <!-- <button id="newlead"  class="btn green">Add New User <i class="fa fa-plus"></i></button> -->      
                                        </a>
                                  </div>
                                <div class="tools"></div>
                                 
                            </div>
                            <div class="modal fade" id="basic"  role="basic" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title"></h4>
                                                </div>
                                                <div class="modal-body"> 
                                                    <div class="portlet light bordered">
                                                        <div class="portlet-title">
                                                            <div class="caption font-red-sunglo">
                                                                <i class="icon-bubble font-red-sunglo"></i>
                                                                <span class="caption-subject bold uppercase">Tyfcb</span>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <form role="form" id="tyfcbForm" method="post">
                                                                <!-- validaton form open -->
                                                                <div class="form-body">
                                                                   <!-- Main form--> 
                                                                   <div class="form-group">
                                                                        <label >User </label>
                                                                        <select id="user" class="form-control select2" name="user">
                                                                            <option></option>                                        
                                                                                 <?php  foreach($users as $key) { ?>
                                                                                <option value="<?php echo $key->usr_id?>"><?php echo $key->usr_name?></option>
                                                                                <?php } ?> 
                                                                        </select>
                                                                            
                                                                       
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Amount</label>
                                                                        <input type="input" class="form-control " placeholder="Amount" id="amount" name="amount" > 
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label">Date</label>
                                                                            <input class="form-control input-large date-picker " size="16" type="text"  id="date" name="date" />
                                                                            <span class="help-block"> Select date </span>
                                                                     
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Remark</label>
                                                                        <input type="input" class="form-control " placeholder="Remark" id="remark" name="remark"> 
                                                                    </div>
                                                                    
                                                                    
                                                                    
                                     
                                                                    <!-- Main form End--> 
                                                                   
                                                                <!-- <div class="form-actions">
                                                                    <button type="submit" class="btn green">Submit</button>
                                                                    <button type="button" class="btn default red">Cancel</button>
                                                                </div>
 -->                                                            </div>

                                                            
                                                        </div>
                                                    </div>      
                                                    <!-- asass -->
                                                </div>
                                                <div class="modal-footer form-actions">
                                                                <button type="button" class="btn red btn-outline" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn green">Add</button>
                                                            </div>
                                                        </form>`
                                                
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
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
       <script src="<?php echo site_url() ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
       <script src="<?php echo site_url() ?>assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
       <!-- END PAGE LEVEL PLUGINS -->
       <!-- BEGIN PAGE LEVEL SCRIPTS -->
       <script src="<?php echo site_url() ?>assets/pages/scripts/table-datatables-buttons.js" type="text/javascript"></script>
       <script src="<?php echo site_url() ?>assets/pages/scripts/tyfcbForm.js" type="text/javascript"></script>
       <!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>