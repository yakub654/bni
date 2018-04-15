<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('common/header_styles')?>
	
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
	<div class="page-wrapper">
		<?php $this->load->view('common/header')?>

		<!-- <h1 class="text-center">User profile detail with edit option</h1> -->
		 <div class="row" style="background-color: #eef1f5 !important">
                            <div class="col-md-12">
                                <!-- BEGIN PROFILE SIDEBAR -->
                                <div class="profile-sidebar">
                                    <!-- PORTLET MAIN -->
                                    <div class="portlet light profile-sidebar-portlet ">
                                        <!-- SIDEBAR USERPIC -->
                                        <div class="profile-userpic">
                                            <img src="<?php echo base_url()?>assets\pages\img\profile-pic\<?php echo $this->session->userdata('usr_profilePic')?>" class="img-responsive" alt=""> </div>
                                        <!-- END SIDEBAR USERPIC -->
                                        <!-- SIDEBAR USER TITLE -->
                                        <div class="profile-usertitle">
                                            <div class="profile-usertitle-name"><?php echo $this->session->userdata('usr_name') ?></div>
                                            <div class="profile-usertitle-job">  </div>
                                        </div>
                                        <!-- END SIDEBAR USER TITLE -->
                                        <!-- SIDEBAR BUTTONS -->
                                        
                                        <!-- END SIDEBAR BUTTONS -->
                                        <!-- SIDEBAR MENU -->
                                        <div class="profile-usermenu">
                                            <ul class="nav">
                                                
                                                <li class="active">
                                                    <a href="page_user_profile_1_account.html">
                                                        <i class="icon-settings"></i> Profile Settings </a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                        <!-- END MENU -->
                                    </div>
                                    <!-- END PORTLET MAIN -->
                                    <!-- PORTLET MAIN -->
                                    <div class="portlet light">
                                        <!-- STAT -->  
                                        <!-- END STAT -->
                                        <div>
                                            <h4 class="profile-desc-title">Address </h4>
                                            <span class="profile-desc-text"> <?php  echo $this->session->userdata('usr_address')?> </span>
                                         </div>
                                         <div>
                                            <h4 class="profile-desc-title">Mobile Number</h4>
                                            <span class="profile-desc-text"> +91 - <?php  echo $this->session->userdata('usr_mobile') ?>  </span>
                                         </div>

                                    </div>
                                    <!-- END PORTLET MAIN -->
                                </div>
                                <!-- END BEGIN PROFILE SIDEBAR -->
                                <!-- BEGIN PROFILE CONTENT -->
                                <div class="profile-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="portlet light ">
                                                <div class="portlet-title tabbable-line">
                                                    <div class="caption caption-md">
                                                        <i class="icon-globe theme-font hide"></i>
                                                        <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                                    </div>
                                                    <ul class="nav nav-tabs">
                                                        <li class="active">
                                                            <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab_1_2" data-toggle="tab">Change Profile Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="tab-content">
                                                        <!-- PERSONAL INFO TAB -->
                                                        <div class="tab-pane active" id="tab_1_1">
                                                            <form role="form" id="prf_detail">
                                                                <div class="form-group">
                                                                    <label>Name<span style="color:red">*</span></label>
                                                                    <div class="input-icon ">
                                                                    <i class="fa fa-user font-green input-circle-left"></i>
                                                                    <input type="text" class="form-control " placeholder="Name" name="name" id="name" value="<?php  echo $this->session->userdata('usr_name') ?>">
                                                                    <?php echo form_error('name','<div style="color:red">', '</div>'); ?> 
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Company Name<span style="color:red">*</span></label>
                                                                    <div class="input-icon">
                                                                    <i class="fa fa-building font-green "></i>
                                                                    <input type="text" class="form-control "  name="cmp_name" id="cmp_name" value="<?php  echo $this->session->userdata('usr_companyName')?>"> </div>
                                                                </div>    
                                                                <div class="form-group">
                                                                    <label>Mobile<span style="color:red">*</span></label>
                                                                    <div class="input-icon">
                                                                    <i class="fa fa-mobile font-green"></i>
                                                                    <input type="text" class="form-control "  name="mob_no" id="mob_no" value="<?php  echo $this->session->userdata('usr_mobile') ?>"></div>
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
                                                                    <label>Email<span style="color:red">*</span></label>
                                                                    <div class="input-group">
                                                                    <span class="input-group-addon ">
                                                                    <i class="fa fa-envelope font-green"></i>
                                                                    </span>
                                                                    <input type="email" class="form-control "  name="email" id="email" value="<?php  echo $this->session->userdata('usr_email') ?>"> </div>
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
                                                                    <label class="control-label">Address</label>
                                                                    <textarea class="form-control" rows="3" ><?php  echo $this->session->userdata('usr_address') ?></textarea>
                                                                </div>
                                                                
                                                                <div class="margiv-top-10">
                                                                    <a href="javascript:;" class="btn green"> Save Changes </a>
                                                                    <a href="javascript:;" class="btn default"> Cancel </a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- END PERSONAL INFO TAB -->
                                                        <!-- CHANGE AVATAR TAB -->
                                                        <div class="tab-pane" id="tab_1_2">
                                                            <p> Change your profile image </p>
                                                            <form  role="form" id="prf_imgchange">
                                                                <div class="form-group">
                                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                            <img src="<?php echo base_url()?>assets\pages\img\profile-pic\<?php echo $this->session->userdata('usr_profilePic')?>" alt="" /> </div>
                                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                        <div>
                                                                            <span class="btn default btn-file">
                                                                                <span class="fileinput-new"> Select image </span>
                                                                                <span class="fileinput-exists"> Change </span>
                                                                                <input type="file" name="..."> </span>
                                                                            <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                        </div>
                                                                    </div> 
                                                                </div>
                                                                <div class="margin-top-10">
                                                                    <a href="javascript:;" class="btn green"> Submit </a>
                                                                    <a href="javascript:;" class="btn default"> Cancel </a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- END CHANGE AVATAR TAB -->
                                                        <!-- CHANGE PASSWORD TAB -->
                                                        <div class="tab-pane" id="tab_1_3">
                                                            <form role="form" id="prf_passchange">
                                                                <div class="form-group">
                                                                    <label class="control-label">Current Password</label>
                                                                    <input type="password" class="form-control" /> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">New Password</label>
                                                                    <input type="password" class="form-control" /> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Re-type New Password</label>
                                                                    <input type="password" class="form-control" /> </div>
                                                                <div class="margin-top-10">
                                                                    <!-- <a href="" class="btn green"> Change Password </a> -->
                                                                    <button type="submit" class="btn green">Change Password</button>
                                                                    <a href="javascript:;" class="btn default"> Cancel </a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- END CHANGE PASSWORD TAB -->  
                                                        <!-- END PRIVACY SETTINGS TAB -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PROFILE CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
		<?php $this->load->view('common/footer')?>
	</div>
    <?php $this->load->view('common/footer_scripts')?>
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
    <script src="<?php echo site_url() ?>assets/pages/scripts/user_profile_detail.js" type="text/javascript"></script>
    <script src="<?php echo site_url() ?>assets/pages/scripts/user_image_change.js" type="text/javascript"></script>
    <script src="<?php echo site_url() ?>assets/pages/scripts/user_password_change.js" type="text/javascript"></script>
</body>
</html>