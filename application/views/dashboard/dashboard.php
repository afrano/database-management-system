<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>KONE - Indo Elevator</title>
        <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/x-icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <!-- Bootstrap Core Css -->
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="<?php echo base_url(); ?>assets/plugins/node-waves/waves.css" rel="stylesheet" />
        <!-- JQuery DataTable Css -->
        <link href="<?php echo base_url(); ?>assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

        <!-- Animation Css -->
        <link href="<?php echo base_url(); ?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

        <!-- Morris Chart Css-->
        <link href="<?php echo base_url(); ?>assets/plugins/morrisjs/morris.css" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="<?php echo base_url(); ?>assets/css/themes/all-themes.css" rel="stylesheet" />
    </head>

    <body class="theme-indigo">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>PT. Kone Indo Elevator ....</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->

        <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="index.html">PT. Kone Indo Elevator</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">

                    <div class="info-container">
                        <div class="btn-group user-helper-dropdown">
                            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                                <li role="seperator" class="divider"></li>

                                <li><a href="<?php echo base_url('login/logout'); ?>"><i class="material-icons">input</i>Sign Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #User Info -->
                <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                        <li class="header">Menu Admin</li>
                        <li class="active">
                            <a href="<?php echo base_url('Dashboard'); ?>">
                                <i class="material-icons">home</i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">assignment</i>
                                <span>Data Peserta</span>
                            </a>
                            <ul class="ml-menu">

                                <li>
                                    <a href="<?php echo base_url('Dashboard'); ?>"><i class="material-icons col-red">donut_large</i><span> Data Peserta</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('Peserta'); ?>"><i class="material-icons col-amber">donut_large</i><span> Tambah Peserta</span></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">people</i>
                                <span>Data User</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="<?php echo base_url('User'); ?>"><i class="material-icons col-red">donut_large</i><span> Lihat User</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('Dashboard'); ?>"><i class="material-icons col-amber">donut_large</i><span> Tambah User</span></a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright"><center>
                            &copy; 2018 <a href="javascript:void(0);">Nano.com</a>.
                        </center></div>
                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
            <!-- Right Sidebar -->
            <aside id="rightsidebar" class="right-sidebar">
                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                    <li role="presentation" class="active"><a>ACCOUNT</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active in active" id="settings">
                        <div class="demo-settings">

                            <ul class="setting-list">
                                <li>
                                    <a href="<?php echo base_url(); ?>login/logout">
                                        <span><b>Logout</b></span>
                                        <div class="switch">
                                            <label><i class="material-icons col-red">settings_power</i></label>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
        </section>
        
        <section class="content">
            <?php
            if (isset($konten)) {
                $this->load->view($konten);
            }
            ?>  
        </section>
        
        <!-- Jquery Core Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap Core Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.js"></script>
        <!-- Select Plugin Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>
        <!-- Slimscroll Plugin Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <!-- Waves Effect Plugin Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/node-waves/waves.js"></script>
        <!-- Jquery CountTo Plugin Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-countto/jquery.countTo.js"></script>
        <!-- Morris Plugin Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/raphael/raphael.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/morrisjs/morris.js"></script>
        <!-- Jquery DataTable Plugin Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
        <!-- Custom Js -->
        <script src="<?php echo base_url(); ?>assets/js/admin.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/pages/tables/jquery-datatable.js"></script>
        <!-- Demo Js -->
        <script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
    </body>

</html>