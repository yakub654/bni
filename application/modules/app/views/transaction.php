<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('common/header_styles')?>
  <link href="<?php echo site_url() ?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo site_url() ?>assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo site_url() ?>assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
  <div class="page-wrapper">
    <?php $this->load->view('common/header')?>
    <div class="portlet light " >
        <div class="portlet-title">
            <div class="caption font-red-sunglo">
                <i class="icon-settings font-red-sunglo"></i>
                <span class="caption-subject bold uppercase">Transaction</span>
            </div>
        </div>

    <div class="portlet-body form">
      <!-- BEGIN FORM-->
      <form action="#" class="horizontal-form">
      <div class="form-body">
        
        <div class="row">
          <div class="col-md-6">
                <div class="form-group">
                    <label>Name</label>
                    <div class="input-icon">
                    <i class="fa fa-user font-green"></i>
                    <input type="input" class="form-control " placeholder="Company name" id="name" name="name"></div>
                </div>
            </div>
            <!--/span-->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Company name</label>
                    <div class="input-icon">
                    <i class="fa fa-building font-green"></i>
                    <input type="input" class="form-control " placeholder="Company name" id="cmpname" name="cmpname"></div>
                </div>
            </div>
            
            <!--/span-->
        </div>
        <!--/row-->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Department</label>
                    <div class="input-icon">
                    <i class="fa fa-building font-green"></i>
                    <input type="input" class="form-control " placeholder="Department name" id="dptname" name="dptname"></div>
                </div>
            </div>
            <!-- span -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Reference</label>
                    <select class="form-control" placeholdert="Select the type">
                        <option></option> 
                        <option value="1">Ask</option>
                        <option value="2">Give</option>
                    </select>
                    <span class="help-block"> Select your reference type </span>
                </div>
            </div>
           <!--/span-->
        </div>
        <!--/row-->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Title</label>
                    <div class="input-icon">
                    <i class="fa fa-user font-green"></i>
                    <input type="input" class="form-control " placeholder="Title" id="title" name="title"></div>
                </div>
            </div>
            <!--/span-->
            <div class="col-md-6">
                  <div class="form-group">
                      <label>Remark</label>
                      <div class="input-icon">
                      <i class="fa fa-user font-green"></i>
                      <input type="input" class="form-control " placeholder="Company name" id="remark" name="remark"></div>
                  </div>
            </div>
            <!--/span-->
        </div>
        <div class="row">
          <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Date</label>
                    <div class="input-icon">
                    <i class="fa fa-calendar font-green"></i>
                    <input class="form-control input-large date-picker " size="16" type="text"  id="datedit" name="datedit"  /></div>
                    <span class="help-block"> Select date </span>
                </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

        
    <?php $this->load->view('common/footer')?>
  </div>
    <?php $this->load->view('common/footer_scripts')?>
    <!-- BEGIN PAGE LEVEL PLUGINS -->
       
       
       <script src="<?php echo site_url() ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
       <script src="<?php echo site_url() ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
       <script src="<?php echo site_url() ?>assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
       <!-- END PAGE LEVEL PLUGINS -->
</body>
</html>