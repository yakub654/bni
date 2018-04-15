<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <?php $this->load->view('common/header_styles')?> 
    </head>
    <!-- END HEAD -->
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
              <?php $this->load->view('common/header')?>  
            <!-- BEGIN PAGE TITLE-->
            <!-- BEGIN CONTENT -->
                
                    <div class="row">
            <div class="col-md-6" >
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-bubble font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase">Ask Reference</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form role="form" id="Ask" method="post">
                                        <div class="form-body">
                                           <!-- Main form--> 
                                           <div class="form-group">
                                                <label>Name</label>
                                                    <input type="text" class="form-control " placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Company Name</label>
                                                <input type="input" class="form-control " placeholder="Company name"> 
                                            </div>
                                            <div class="form-group">
                                                <label>Department</label>
                                                <input type="input" class="form-control " placeholder="Department"> 
                                            </div>
                                            <div class="form-group">
                                                <label>Remark</label>
                                                <input type="input" class="form-control " placeholder="Remark"> 
                                            </div>
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="input" class="form-control " placeholder="Title"> 
                                            </div>
                                            
                                            
             
                                            <!-- Main form End--> 
                                           
                                        <div class="form-actions">
                                            <button type="submit" class="btn green">Submit</button>
                                            <button type="button" class="btn default red">Cancel</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" >
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-bubble font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase">Give Reference</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form role="form" id="give" method="post">
                                        <div class="form-body">
                                           <!-- Main form--> 
                                           <div class="form-group">
                                                <label>Name</label>
                                                    <input type="text" class="form-control " placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Company Name</label>
                                                <input type="input" class="form-control " placeholder="Company name"> 
                                            </div>
                                            <div class="form-group">
                                                <label>Department</label>
                                                <input type="input" class="form-control " placeholder="Department"> 
                                            </div>
                                            <div class="form-group">
                                                <label>Remark</label>
                                                <input type="input" class="form-control " placeholder="Remark"> 
                                            </div>
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="input" class="form-control " placeholder="Title"> 
                                            </div>
             
                                            <!-- Main form End--> 
                                           
                                        <div class="form-actions">
                                            <button type="submit" class="btn green">Submit</button>
                                            <button type="button" class="btn default red">Cancel</button>
                                        </div>
                                    </div>
                                    </form>
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