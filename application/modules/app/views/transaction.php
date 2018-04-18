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
 <!-- porlet tab start -->
        <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-bubble font-green-sharp"></i>
                                        <span class="caption-subject font-green-sharp bold uppercase">Reference list</span>
                                    </div> 
                                    <div>                                                      
                                        <a href="<?php echo site_url('app/transform') ?>">
                                         <button id="newlead"  class="btn green">Reference   <i class="fa fa-plus"></i></button>      
                                        </a>
                                </div>
                    <div class="tools"></div> 
                                </div>
                                <div class="portlet-body">
                                    <ul class="nav nav-pills">
                                        <li class="active">
                                            <a href="#tab_2_1" data-toggle="tab"> Ask </a>
                                        </li>
                                        <li>
                                            <a href="#tab_2_2" data-toggle="tab"> Give </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active in" id="tab_2_1">
                                            <!-- datatable ask start-->
                                             <table class="table table-striped table-bordered table-hover" id="sample_1">
                                                    <thead>
                                                        <tr>
                                                          
                                                            <th>Title</th>
                                                            <th>Name</th>
                                                            <th>Date</th>
                                                            <th>Company Name</th>
                                                            <th>Department</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($refask as $key) {?>
                                                        <tr>
                                                            <td><?php   echo $key->usr_trans_title ?></td> 
                                                            <td><?php   echo $key->usr_trans_psrname ?></td>
                                                            <td><?php   echo date("m/d/Y",strtotime($key->usr_trans_date)) ?></td>
                                                            <td><?php   echo $key->usr_trans_cmpname ?></td>
                                                            <td><?php   echo $key->usr_trans_dept ?></td>
                                                            <td><a data-toggle="modal" href="#askedit" class="btn green btn-outline openmodel"  data-name='<?php echo $key->usr_trans_psrname?>' data-title='<?php echo $key->usr_trans_title ?>' data-company='<?php echo $key->usr_trans_cmpname ?>' data-department='<?php echo $key->usr_trans_dept ?>'  data-date='<?php echo date("m/d/Y",strtotime($key->usr_trans_date)) ?>' data-remark='<?php echo $key->usr_trans_remark ?>' >Edit</a><button  class="btn red btn-dafault pull pull-right" onclick=" return deleteUser(<?php echo $key->usr_trans_id ?>)">Delete</button></td>
                                                        </tr>
                                                        <?php   } ?>
                                                    </tbody>
                                                </table>

                                            <!-- datatable ask end-->
                                        </div>
                                        <div class="tab-pane fade" id="tab_2_2">
                                            <table class="table table-striped table-bordered table-hover" id="sample_3">
                                                    <thead>
                                                        <tr>
                                                          
                                                            <th>Title</th>
                                                            <th>Name</th>
                                                            <th>Date</th>
                                                            <th>Company Name</th>
                                                            <th>Department</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($refgive as $key) {?>
                                                        <tr>
                                                            <td><?php   echo $key->usr_trans_title ?></td> 
                                                            <td><?php   echo $key->usr_trans_psrname ?></td>
                                                            <td><?php   echo date("m/d/Y",strtotime($key->usr_trans_date)) ?></td>
                                                            <td><?php   echo $key->usr_trans_cmpname ?></td>
                                                            <td><?php   echo $key->usr_trans_dept ?></td>
                                                            <td><a data-toggle="modal" href="#givedit" class="btn green btn-outline openmodel"  data-name='<?php echo $key->usr_trans_psrname?>' data-title='<?php echo $key->usr_trans_title ?>' data-company='<?php echo $key->usr_trans_cmpname ?>' data-department='<?php echo $key->usr_trans_dept ?>'  data-date='<?php echo date("m/d/Y",strtotime($key->usr_trans_date)) ?>' data-remark='<?php echo $key->usr_trans_remark ?>' >Edit</a><button  class="btn red btn-dafault pull pull-right" onclick=" return deleteUser(<?php echo $key->usr_trans_id ?>)">Delete</button></td>
                                                        </tr>
                                                        <?php   } ?>
                                                    </tbody>
                                                </table>
                                        </div>
                                        
                                         
                                    </div>
                                </div>
                            </div>


  <!-- porlet tab end --> 


<!-- model edit ask start-->
 <div class="modal fade" id="askedit"  role="basic" aria-hidden="true"> 
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
                                <form role="form" id="askeditform" method="post">
                                    <!-- validaton form open -->
                                    <div class="form-body">
                                       <!-- Main form--> 
                                        
                                        <div class="form-group">
                                            <label>Title</label>
                                            <div class="input-icon">
                                            <i class="fa fa-user font-green"></i>
                                            <input type="input" class="form-control " placeholder="reference name" id="titleask" name="titleask"></div>
                                        </div>

                                        <div class="form-group">
                                            <label>Name</label>
                                            <div class="input-icon">
                                            <i class="fa fa-envelope font-green"></i>
                                            <input type="input" class="form-control " placeholder="Email" id="nameask" name="nameask" > 
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label class="control-label">Date</label>
                                            <div class="input-icon">
                                            <i class="fa fa-calendar font-green"></i>
                                            <input class="form-control input-large date-picker " size="16" type="text"  id="dateask" name="dateask"  /></div>
                                            <span class="help-block"> Select date </span>
                                        </div>
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="input" class="form-control " placeholder="" id="cmpask" name="cmpask"> 
                                        </div>
                                        <div class="form-group">
                                            <label>Department</label>
                                            <input type="input" class="form-control " placeholder="" id="dptask" name="dptask"> 
                                        </div>
                                        <div class="form-group">
                                            <label>Remark</label>
                                            <input type="input" class="form-control " placeholder="" id="remarkask" name="remarkask"> 
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
                       <!-- /.modal-content -->
            </div>

<!-- model edit start-->

<!-- model edit give start-->
 <div class="modal fade" id="givedit"  role="basic" aria-hidden="true"> 
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
                                <form role="form" id="giveditform" method="post">
                                    <!-- validaton form open -->
                                    <div class="form-body">
                                       <!-- Main form--> 
                                        
                                        <div class="form-group">
                                            <label>Title</label>
                                            <div class="input-icon">
                                            <i class="fa fa-user font-green"></i>
                                            <input type="input" class="form-control " placeholder="reference name" id="titlegive" name="titlegive"></div>
                                        </div>

                                        <div class="form-group">
                                            <label>Name</label>
                                            <div class="input-icon">
                                            <i class="fa fa-envelope font-green"></i>
                                            <input type="input" class="form-control " placeholder="Email" id="namegive" name="namegive" > 
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label class="control-label">Date</label>
                                            <div class="input-icon">
                                            <i class="fa fa-calendar font-green"></i>
                                            <input class="form-control input-large date-picker " size="16" type="text"  id="dategive" name="dategive"  /></div>
                                            <span class="help-block"> Select date </span>
                                        </div>
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="input" class="form-control " placeholder="" id="cmpgive" name="cmpgive"> 
                                        </div>
                                        <div class="form-group">
                                            <label>Department</label>
                                            <input type="input" class="form-control " placeholder="" id="dptgive" name="dptgive"> 
                                        </div>
                                        <div class="form-group">
                                            <label>Remark</label>
                                            <input type="input" class="form-control " placeholder="" id="remarkgive" name="remarkgive"> 
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
                       <!-- /.modal-content -->
            </div>

<!-- model edit start-->
       
    </div>

    <?php $this->load->view('common/footer')?>
  </div>
    <?php $this->load->view('common/footer_scripts')?>
    <script >
        function deleteUser(id)
            {
                
                var cnf = confirm("Are you Sure");
                if(cnf)
                {
                    data = 
                    {
                        usr_trans_id:id
                    }
                    console.log(data);
                    $.ajax({
                        type: "POST",
                        url: "References/deleteTrans",
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
            

            var name                = $(this).data('name');
            var title               = $(this).data('title');
            var date                = $(this).data('date');            
            var company             = $(this).data('company');
            var department          = $(this).data('department');
            var remark              = $(this).data('remark');

            $("#nameask").val(name);
            $("#titleask").val(title);
            $("#dateask").val(date);
            $("#cmpask").val(company);
            $("#dptask").val(department);
            $("#remarkask").val(remark);

           });
        $(document).on("click",".openmodel" , function() {
            

            var name                = $(this).data('name');
            var title               = $(this).data('title');
            var date                = $(this).data('date');            
            var company             = $(this).data('company');
            var department          = $(this).data('department');
            var remark              = $(this).data('remark');

            $("#namegive").val(name);
            $("#titlegive").val(title);
            $("#dategive").val(date);
            $("#cmpgive").val(company);
            $("#dptgive").val(department);
            $("#remarkgive").val(remark);

           });
    </script>
    <!-- BEGIN PAGE LEVEL PLUGINS -->
       <script src="<?php echo site_url() ?>assets/pages/scripts/askGiveEdit.js" type="text/javascript"></script>
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