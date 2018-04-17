<!-- BEGIN SIDEBAR -->
<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <li class="sidebar-toggler-wrapper hide">
            <div class="sidebar-toggler">
                <span></span>
            </div>
        </li>
        <li class="nav-item start active open">
            <a href="<?php echo site_url('app/dashboard') ?>" class="nav-link nav-toggle">
                <i class="icon-home"></i>
                <span class="title">Dashboard</span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo site_url('app/user-list')?>"  class="nav-link">
                <i class="fa fa-user"></i>
                <span class="title">User</span>
                <span class="selected"></span> 
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo site_url('app/tyfcb-list')?>"  class="nav-link">
                <i class="fa fa-user"></i>
                <span class="title">TYFCB</span>
                <span class="selected"></span> 
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo site_url('app/references')?>"  class="nav-link">
                <i class="fa fa-user"></i>
                <span class="title">References</span>
                <span class="selected"></span> 
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo site_url('app/transaction')?>"  class="nav-link">
                <i class="fa fa-user"></i>
                <span class="title">transaction</span>
                <span class="selected"></span> 
            </a>
        </li>
        
        
    </ul>


    <!-- END SIDEBAR MENU -->
    <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->