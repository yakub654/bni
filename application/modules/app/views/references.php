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
                                    <a class="btn green btn-outline " data-toggle="modal" href="#refadd">Add New Reference <i class="fa fa-plus"></i>
                                        
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

            <!--- reference add modal start -->   
            <div class="modal fade" id="refadd"  role="basic" aria-hidden="true"> <!-- tyfcb add model -->
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title"><div class="caption font-red-sunglo">
                                                        <i class="icon-bubble font-red-sunglo"></i>
                                                        <span class="caption-subject bold uppercase">Reference</span>
                                                    </div>
                                                </h4>
                                        </div>
                                        <div class="modal-body">
                                                <form role="form" id="refForm" method="post">
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
                                                            <label>Email</label>
                                                            <input type="email" class="form-control " placeholder="Email" id="email" name="email" > 
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Date</label>
                                                                <input class="form-control input-large date-picker " size="16" type="text"  id="date" name="date"  />
                                                                <span class="help-block"> Select date </span>
                                                         
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Remark</label>
                                                            <input type="input" class="form-control " placeholder="Remark" id="remark" name="remark"> 
                                                        </div>
                                                        <!-- Main form End-->
                                                    
                                                    </div>
                                                        <div class="modal-footer form-actions">
                                                            <button type="button" class="btn red btn-outline" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn green">Add</button>
                                                        </div>
                                                </form>       
                                        </div>     
                                    </div>    
                                </div>
                                       <!-- /.modal-content -->
                            </div>       
            

            <!-- ref modal end   
            <!-- END PAGE CONTENT -->
            <?php $this->load->view('common/footer')?> 
            <!-- END FOOTER -->
        </div>
        
       <?php $this->load->view('common/footer_scripts')?> 
       <script src="<?php echo site_url() ?>assets/pages/scripts/refForm.js" type="text/javascript"></script>
    </body>

</html>