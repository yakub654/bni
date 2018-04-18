<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('common/header_styles')?>
    <link href="<?php echo site_url() ?>assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
    
    <link href="<?php echo site_url() ?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" /> 
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
                                <a class="btn green btn-outline " data-toggle="modal" href="#tyfadd"> Add TYFCB
                                 <!-- <button id="newlead"  class="btn green">Add New User <i class="fa fa-plus"></i></button> -->   
                                </a>
                                <div class="tools"></div>
                            </div>
                            <div class="modal fade" id="tyfadd"  role="basic" aria-hidden="true"> <!-- tyfcb add model -->
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title"><div class="caption font-red-sunglo">
                                                        <i class="icon-bubble font-red-sunglo"></i>
                                                        <span class="caption-subject bold uppercase">Tyfcb</span>
                                                    </div>
                                                </h4>
                                        </div>
                                        <div class="modal-body">
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
                            <div class="modal fade" id="tyfedit"  role="basic" aria-hidden="true"> <!-- tyfcb edit model -->
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title"><div class="caption font-red-sunglo">
                                                                <i class="icon-bubble font-red-sunglo"></i>
                                                                <span class="caption-subject bold uppercase">Edit</span>
                                                            </div>
                                                        </h4>
                                                </div>
                                                <div class="modal-body">
                                                        <form role="form" id="tyfcbEdit" method="post">
                                                            <!-- validaton form open -->
                                                            <div class="form-body">
                                                               <!-- Main form--> 
                                                               <div class="form-group">
                                                                    <label >User </label>
                                                                    <input type="input" name="useredit" id="useredit" class="form-control" placeholder="" disabled="">
                                                                    <input type="hidden" name="id"  id="id">
                                                                    <!-- <select id="user" class="form-control select2" name="user" >
                                                                        <option></option>                                        
                                                                             <?php  foreach($users as $key) { ?>
                                                                            <option value="<?php echo $key->usr_id?>"><?php echo $key->usr_name?></option>
                                                                            <?php } ?> 
                                                                    </select> -->
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Amount</label>
                                                                    <input type="input" class="form-control " placeholder="" id="amtedit" name="amount" > 
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Date</label>
                                                                        <input class="form-control input-large date-picker" size="16" type="text"  id="datedit" name="date" />
                                                                        <span class="help-block"> Select date </span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Remark</label>
                                                                    <input type="input" class="form-control " placeholder="" id="rmkedit" name="remark"> 
                                                                </div>
                                                                <!-- Main form End-->
                                                            </div>
                                                                <div class="modal-footer form-actions">
                                                                    <button type="button" class="btn red btn-outline" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn green">Edit</button>
                                                                </div>
                                                        </form>       
                                                </div>     
                                            </div>    
                                        </div>
                                       
                            </div>     
                    </div>
                            <div class="portlet-body">
                                <table class="table table-striped table-bordered table-hover" id="sample_1">
                                    <thead>
                                        <tr>
                                        	
                                            <th>User</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Remark</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($tyf as $key) {?>
                                        <tr>
                                        	
                                            <td><?php echo $key->user_name ?></td> 
                                            <td><?php echo $key->tyfcb_amt ?></td>
                                            <td><?php echo date("m/d/Y",strtotime($key->tyfcb_date)) ?></td>
                                            <td><?php echo $key->tyfcb_remark?></td>
                                            
                                            <td><a data-toggle="modal" href="#tyfedit" data-id='<?php echo $key->tyfusr_id?>' data-user='<?php echo $key->user_name?>' class="btn green btn-outline openmodel" data-amt='<?php echo $key->tyfcb_amt ?>' data-rmk='<?php echo $key->tyfcb_remark ?>' data-date='<?php echo date("m/d/Y", strtotime($key->tyfcb_date)) ?>'>Edit</a><button onclick=" return deleteTyf('<?php echo $key->tyfusr_id;?>')" class="btn red btn-dafault pull pull-right">Delete</button></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
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
       <script src="<?php echo site_url() ?>assets/pages/scripts/tyfcbEditForm.js" type="text/javascript"></script>
       <!-- END PAGE LEVEL SCRIPTS -->

       <script type="text/javascript">
           function deleteTyf(id)
            {
                
                var cnf = confirm("Are you Sure");
                if(cnf)
                {
                    data = 
                    {
                        usr_id:id
                    }
                    $.ajax({
                        type: "POST",
                        url: "Tyfcb/tyfdelete",
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
            var tyf_id = $(this).data('id');
            var tyfcb_amt = $(this).data('amt');
            var tyfcb_remark = $(this).data('rmk');
            var tyfcb_date = $(this).data('date');
            var tyfcb_name = $(this).data('user');
            $(" #amtedit").val(tyfcb_amt);
            $(" #rmkedit").val(tyfcb_remark);
            $(" #datedit").val(tyfcb_date);
            $(" #id").val(tyf_id);
            $(" #useredit").val(tyfcb_name);

           });
       </script>
</body>
</html>