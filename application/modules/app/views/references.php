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
        <style >
            .my-error-class {
            color:red;
        }
        </style>
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
                                        <th>User</th>
                                        <th>Reference Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($ref as $key) { ?>
                                    <tr>
                                        <td><?php echo $key->user_name ?></td>
                                        <td><?php echo $key->ref_name ?></td> 
                                        <td><?php echo $key->ref_email ?></td>
                                        <td><?php echo $key->ref_mobile ?></td>
                                        <td><?php echo date("m/d/Y",strtotime($key->ref_date)) ?></td>
                                        <td><a data-toggle="modal" href="#refedit" class="btn green btn-outline openmodel" data-id='<?php echo $key->ref_usr_id?>' data-user='<?php echo $key->user_name?>' data-name='<?php echo $key->ref_name ?>' data-email='<?php echo $key->ref_email ?>' data-mobile='<?php echo $key->ref_mobile ?>'  data-date='<?php echo date("m/d/Y",strtotime($key->ref_date)) ?>' data-remark='<?php echo $key->ref_remark ?>' >Edit</a><button onclick=" return deleteRef('<?php echo $key->ref_id;?>')" class="btn red btn-dafault pull pull-right">Delete</button></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> 

            <!--- reference add modal start -->   
            <div class="modal fade" id="refadd"  role="basic" aria-hidden="true"> <!-- reference add model -->
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
                                <form role="form" id="refAddForm" method="post">
                                    <!-- validaton form open -->
                                    <div class="form-body">
                                       <!-- Main form--> 
                                        <div class="form-group">
                                            <label>User </label>
                                            <select id="users" class="form-control select2" name="users" placeholder="">
                                                <option selected="" value="">Select User</option>                                        
                                                     <?php  foreach($users as $key) { ?>
                                                    <option value="<?php echo $key->usr_id?>"><?php echo $key->usr_name?></option>
                                                    <?php } ?> 
                                            </select> 
                                        </div>
                                        <div class="form-group">
                                            <label>Reference name</label>
                                            <div class="input-icon">
                                            <i class="fa fa-user font-green"></i>
                                            <input type="input" class="form-control " placeholder="reference name" id="refname" name="refname"></div>
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <div class="input-icon">
                                            <i class="fa fa-envelope font-green"></i>
                                            <input type="email" class="form-control " placeholder="Email" id="email" name="email" > 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile<span style="color:red">*</span></label>
                                            <div class="input-icon">
                                            <i class="fa fa-mobile font-green"></i>
                                            <input type="text" class="form-control " placeholder="Mobile No" name="mobile" id="mobile"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Remark</label>
                                            <input type="input" class="form-control " placeholder="Remark" id="remark" name="remark"> 
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Date</label>
                                                <div class="input-icon">
                                                <i class="fa fa-calendar font-green"></i>
                                                <input class="form-control input-large date-picker " size="16" type="text"  id="date" name="date"  /></div>
                                                <span class="help-block"> Select date </span>
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
            
            <!-- ref add modal end  -->
            <!-- ref edit model start -->

            <div class="modal fade" id="refedit"  role="basic" aria-hidden="true"> <!-- reference edit model -->
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
                                <form role="form" id="refEditForm" method="post">
                                    <!-- validaton form open -->
                                    <div class="form-body">
                                       <!-- Main form--> 
                                        <div class="form-group">
                                            <label>User</label>
                                            <div class="input-icon">
                                            <i class="fa fa-user font-green"></i>
                                            <input type="input" class="form-control " placeholder="reference name" id="usersedit" name="usersedit" disabled=""></div>
                                            <input type="hidden" name="id"  id="id">
                                            <!-- <select id="usersedit" class="form-control select2" name="usersedit"  placeholder="" >
                                                <option></option>                                        
                                                     <?php  foreach($users as $key) { ?>
                                                    <option value="<?php echo $key->usr_id?>"><?php echo $key->usr_name?></option>
                                                    <?php } ?> 
                                            </select> --> 
                                        </div>
                                        <div class="form-group">
                                            <label>Reference name</label>
                                            <div class="input-icon">
                                            <i class="fa fa-user font-green"></i>
                                            <input type="input" class="form-control " placeholder="reference name" id="refnamedit" name="refnamedit"></div>
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <div class="input-icon">
                                            <i class="fa fa-envelope font-green"></i>
                                            <input type="email" class="form-control " placeholder="Email" id="emailedit" name="emailedit" > 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile<span style="color:red">*</span></label>
                                            <div class="input-icon">
                                            <i class="fa fa-mobile font-green"></i>
                                            <input type="text" class="form-control " placeholder="Mobile No" name="mobiledit" id="mobiledit"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Remark</label>
                                            <input type="input" class="form-control " placeholder="Remark" id="remarkedit" name="remarkedit"> 
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Date</label>
                                            <div class="input-icon">
                                            <i class="fa fa-calendar font-green"></i>
                                            <input class="form-control input-large date-picker " size="16" type="text"  id="datedit" name="datedit"  /></div>
                                            <span class="help-block"> Select date </span>
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
            <!-- ref edit model start -->
            <!-- END PAGE CONTENT -->
            <?php $this->load->view('common/footer')?> 
            <!-- END FOOTER -->
        </div>
        
       <?php $this->load->view('common/footer_scripts')?> 
       <script src="<?php echo site_url() ?>assets/pages/scripts/refForm.js" type="text/javascript"></script>
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
     
       <!-- END PAGE LEVEL SCRIPTS -->
       <script type="text/javascript">
           function deleteRef(id)
            {
                
                var cnf = confirm("Are you Sure");
                if(cnf)
                {
                    data = 
                    {
                        ref_id:id
                    }
                    $.ajax({
                        type: "POST",
                        url: "References/refdelete",
                        data:data,
                        dataType:"json",
                        success:function(response)
                        {
                            window.location.href = response.linkn;
                        }
                    });         
                }
                else
                {
                    console.log('NO');
                }
            }
            $(document).on("click",".openmodel" , function() {
            

            var ref_usr_name        = $(this).data('user');
            var ref_usr_id          = $(this).data('id');
            var ref_name            = $(this).data('name');
            var ref_mobile          = $(this).data('mobile');
            var ref_email           = $(this).data('email');
            var ref_date            = $(this).data('date');
            var ref_remark          = $(this).data('remark');

            $("#usersedit").val(ref_usr_name);
            $("#refnamedit").val(ref_name);
            $("#mobiledit").val(ref_mobile);
            $("#emailedit").val(ref_email);
            $("#datedit").val(ref_date);
            $("#remarkedit").val(ref_remark);
            $("#id").val(ref_usr_id);

           });



       </script>
    </body>

</html>