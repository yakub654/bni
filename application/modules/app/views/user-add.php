<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('common/header_styles')?>
  <style type="text/css">
    .my-error-class {
    color:red;
    }
    .my-valid-class {
        color:green;
    }
  </style>
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
	<div class="page-wrapper" >
		<?php $this->load->view('common/header')?>
		<div class="row" >
      <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light " >
              <div class="portlet-title">
                  <div class="caption font-red-sunglo">
                      <i class="icon-settings font-red-sunglo"></i>
                      <span class="caption-subject bold uppercase">User Add</span>
                  </div>
              </div>
              <div class="portlet-body form" >
                  <form role="form" id="user_add_form" method="post" >
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('form'); ?>
                      <div class="form-body">
                         <!-- Main form--> 
                         <div class="row">
                             <div class="col-md-6 ">
                                 <div class="form-group">
                                   <label>Name<span style="color:red">*</span></label>
                                   <div class="input-icon ">
                                  <i class="fa fa-user font-green input-circle-left"></i>
                                  <input type="text" class="form-control " placeholder="Name" name="name" id="name">
                                  <?php echo form_error('name','<div style="color:red">', '</div>'); ?> 
                                   </div>
                                  </div>
                                  <div class="form-group">
                                   <label>Category<span style="color:red">*</span></label>
                                   <div class="input-icon">
                                  <i class="fa fa-tags font-green"></i>
                                  <input type="text" class="form-control " placeholder="Category" name="category" id="category">
                                   </div>
                                  </div>
                                  <div class="form-group">
                                      <label>Mobile<span style="color:red">*</span></label>
                                      <div class="input-icon">
                                      <i class="fa fa-mobile font-green"></i>
                                      <input type="text" class="form-control " placeholder="Mobile No" name="mob_no" id="mob_no"></div>
                                  </div>
                                  <div class="form-group repeater">
                                  <div data-repeater-list="Mobile-Group">
                                    <input type="hidden" class="input_count" name="">
                                  <div data-repeater-item >
                                      <div class="input-group">
                                          <input type="text" name="mobileAdd" class="form-control" value="Add mobile No" />
                                          <span class="input-group-addon ">
                                             
                                             <button class="btn btn-xs red " data-repeater-delete>delete</button>
                                             
                                          </span>
                                      </div>
                                  </div>
                                  </div>
                                  <input data-repeater-create type="button" class="btn btn-sm green" value="Add"/>
                                  </div>
                                  <div class="form-group">
                                      <label>Website</label>
                                      <div class="input-icon">
                                      <i class="fa fa-globe font-green"></i>
                                      <input type="text" class="form-control " placeholder="Website" name="website" id="website"> 
                                      </div>
                                  </div>
                                  <div class="form-group">
                                   <label for="prf_image" class="control-label col-sm-12" style="padding-left: 0px">Profile Photo</label>  
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                          <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/> </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                            <div>
                                              <span class="btn red btn-outline btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <!-- <input type="file" id="exampleInputFile1" class="form-control"> -->
                                                <input  type="file" accept="image"  name="prf_img" id="prf_img"  />
                                              </span>
                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                            </div>                                                     
                                    </div>
                                  </div> 
                                  <div class="form-group">
                                   <label for="logo" class="control-label col-sm-12" style="padding-left: 0px">Logo</label>  
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                          <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/> </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                            <div>
                                              <span class="btn red btn-outline btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                
                                                <input  type="file" accept="image"  name="logo_img" id="file"  />
                                              </span>
                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                            </div>                                                     
                                    </div>
                                  </div>
                                                                                      
                                  <!--//-->
                             </div>
                             <div class="col-md-6 ">
                                <div class="form-group">
                                      <label>Company Name<span style="color:red">*</span></label>
                                      <div class="input-icon">
                                      <i class="fa fa-building font-green "></i>
                                      <input type="text" class="form-control " placeholder="Company Name" name="cmp_name" id="cmp_name"> </div>
                                </div>
                                <div class="form-group">
                                      <label>Tag Line<span style="color:red">*</span></label>
                                      <input type="text" class="form-control " placeholder="Tag Line" name="tg_line" id="tg_line"> 
                                </div>
                                <div class="form-group">
                                      <label>Email<span style="color:red">*</span></label>
                                      <div class="input-group">
                                      <span class="input-group-addon ">
                                      <i class="fa fa-envelope font-green"></i>
                                      </span>
                                      <input type="email" class="form-control " placeholder="Email Address" name="email" id="email"> </div>
                                </div>
                                 <div class="form-group repeater">
                                  <div data-repeater-list="Email-Group">
                                    <input type="hidden" class="input_count" name="">
                                  <div data-repeater-item>
                                      <div class="input-group">
                                          <input type="email" name="emailAdd" class="form-control" value="Add Email" />
                                          <span class="input-group-addon ">
                                             <button class="btn btn-xs red " data-repeater-delete>delete</button>
                                          </span>
                                      </div>
                                  </div>
                                  </div>
                                  <input data-repeater-create type="button" class="btn btn-sm green" value="Add"/>
                                  </div>                                                    
                                  <div class="form-group">
                                      <label>Password<span style="color:red">*</span></label>
                                      <div class="input-group">
                                      <span class="input-group-addon">
                                      <i class="fa fa-key font-green"></i>
                                      </span>
                                      <input type="password" class="form-control " placeholder="Enter your password" name="password" id="password"> 
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label>Confirm-Password<span style="color:red">*</span></label>
                                      <div class="input-group">
                                      <span class="input-group-addon">
                                      <i class="fa fa-key font-green"></i>
                                      </span>
                                      <input type="password" class="form-control " placeholder="Confirm Password" name="cnf_password" id="cnf_password"> 
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label>Address</label>
                                      <textarea class="form-control" rows="5" name="address" id="address" ></textarea>
                                 </div>
                                  
                             </div>
                         </div>
                          
                          <!-- Main form End--> 
                         
                      <div class="form-actions">
                          <button type="submit" class="btn green">Submit</button>
                          <button type="button" class="btn red">Cancel</button>
                      </div>
                  </div>
                  </form>
              </div>
      </div>
                        
      </div>
		</div>
		<?php $this->load->view('common/footer')?>
	
    <?php $this->load->view('common/footer_scripts')?>
    
    
    <script >var base_url = '<?php echo base_url()?>';</script>
    
    <script type="text/javascript">

        $(document).ready(function(){

                     $('.repeater').repeater(
                          {
                            initEmpty: true,
                            defaultValues: 
                            {
                                    'text-input': 'Provide your alernate email'
                                      
                            },
                            show: function () 
                            {
                                    $(this).slideDown();
                                    
                            },
                            hide: function (deleteElement) 
                            {
                                        if(confirm('Are you sure you want to delete this element?')) 
                                        {
                                          $(this).slideUp(deleteElement);
                                        }
                            },
                                    ready: function (setIndexes)  
                                    {

                                    },
                                    
                                        
                          });
                 });
    </script>
    <script src="<?php echo site_url() ?>assets/pages/scripts/form_validation_user_add.js" type="text/javascript"></script>
</body>
</html>