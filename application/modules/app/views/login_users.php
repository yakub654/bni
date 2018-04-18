<!DOCTYPE html>
<html lang="en">
   
    <head>
        <?php $this->load->view('common/header_styles')?>
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url()?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url()?>/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url()?>assets/pages/css/login.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />

        <style type="text/css">
        .my-error-class {
        color:red;
        }
        .my-valid-class {
            color:green;
        }
        </style> 
    </head>

    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN LOGO -->
       <!--  <div class="logo">
            <a href="">
                <img src="../assets/pages/img/logo-big.png" alt="" /> </a>
        </div> -->
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form"  method="post" id="Login">
                <h3 class="form-title font-green">Sign In</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter any username and password. </span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="email" autocomplete="off" placeholder="Email" name="email" id="email" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" id="password" /> </div>
                <div class="form-actions">
                    <button type="submit" class="btn green uppercase">Login</button>
                    <label class="rememberme check mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" class="ischecked" />Remember
                        <span></span>
                    </label>
                    <a href="#fpass" data-toggle="modal" id="forgot-password" class="forget-password">Forgot Password?</a>
                </div>
                
            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <!-- <form class="forget-form" action="index.html" method="post">
                <h3 class="font-green">Forget Password ?</h3>
                <p> Enter your e-mail address below to reset your password. </p>
                <div class="form-group">
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                <div class="form-actions">
                    <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                    <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                </div>
            </form> -->
            <!-- END FORGOT PASSWORD FORM -->
            <!-- BEGIN REGISTRATION FORM -->
            <!-- END REGISTRATION FORM -->
        </div>
        <!-- remember me modal -->
        <div class="modal fade " id="fpass" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title font-green">Forget Password ?</h4>
                    </div>
                    <div class="modal-body">
                    <form class="forget-form"  method="post" id="fpassword">
                            <p> Enter your e-mail address below to reset your password. </p>
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input class="form-control placeholder-no-fix" type="email"  placeholder="Email" name="emailforget" id="emailforget" /> 
                            </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-actions">
                            <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                            <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                        </div>
                        </form>
                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <!-- /.modal -->

        <!-- modal End -->
        <?php $this->load->view('common/footer')?> 
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        
        <!-- END CORE PLUGINS -->
        <?php $this->load->view('common/footer_scripts')?> 
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url() ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url() ?>assets/pages/scripts/login.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/pages/scripts/loginData.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/pages/scripts/forgetEmail.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
        <script >var base_url = '<?php echo base_url()?>';</script>
    </body>

</html>