<!DOCTYPE html>
<html lang="en-US">


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.6/dashboard_4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Sep 2016 12:30:16 GMT -->
<head>
    <link rel="shortcut icon" type="image/png" href="<?=base_url()?>assets/img/logo.gif"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>eSchool | Institute</title>

    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/datepicker.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/plugins/fullcalendar/fullcalendar.print.css" rel='stylesheet' media='print'>
    <link href="<?=base_url()?>assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/plugins/select2/select2.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <!-- Google Lat-Long Picker -->
    <link href="<?=base_url()?>assets/css/plugins/lat_long_picker/jquery-gmaps-latlon-picker.css" rel="stylesheet">
    <style type="text/css">
        .open>.dropdown-menu {
            display: block;
            width: max-content;
        }
    </style>
</head>

<body class="top-navigation">

    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom white-bg">
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="navbar-header">
                <img class="img-responsive" src="<?=base_url()?>assets/img/eschool_logo.gif" style="height:74px;">
            </div>
            <div class="navbar-collapse collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li id="school_header">
                       <a href="<?=site_url('Institute')?>"><img src="<?=base_url()?>assets/img/icon/dashboard.png" style="display: -webkit-box;font-size: initial;padding-left: 24px;"></i> Dashboard </a>
                    </li>
                    <li id="school"><a href="<?=site_url('School/view_school');?>"><img src="<?=base_url()?>assets/img/icon/school.png" style="display: -webkit-box;font-size: initial;padding-left: 4px;"></i> School</a>
                    </li>
                    <li id="tracking"><a href="<?=site_url('Tracking/assign_client_id');?>"><img src="<?=base_url()?>assets/img/geo_details.png" style="display: -webkit-box;font-size: initial;padding-left: 10px;"></i> Tracking</a>
                    </li>
                    <!-- <div id="google_translate_element"></div> -->
                </ul>
                <ul class="nav navbar-top-links navbar-right"> 
                    <div class="dropdown profile-element">
                        <center>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false" style="padding: 0px 0px;">
                                <span class="clear">
                                    <img alt="image" class="img-circle" src="<?php echo $photo ?>" style="height:61px;width:61px;padding: 10px;"></span> 
                                </span>
                            </a>
                            <div class="dropdown-menu fadeInLeft" style="">
                                <div class="contact-box" style="margin: 0 0 0 0;">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <img alt="image" class="img-circle img-responsive"  src="<?php echo $photo ?>" style="height:81px;width:81px;">
                                        </div>
                                        <div class="col-sm-8" style="padding:0%;">
                                            <h3><strong><?php echo $first_name." ".$last_name; ?></strong></h3>
                                            <h4><?php echo $email_id; ?></h4>
                                            <h5><span>Username: </span><?php echo $username; ?></h5>
                                            <!-- <a href="<?=site_url('Institute/edit_profile')?>">My Account</a> -->
                                        </div>       
                                    </div>
                                </div>

                                <div style="background-color:#000000;">
                                    <div style="padding:3%;">
                                        <a href="<?=site_url('Institute/forgot_password')?>" style="color:#ffffff;">Change Password?</a>
                                        <a href="<?=site_url('Authentication/logout')?>" class="btn btn-xs btn-primary pull-right" style:"color:#000000; padding-bottom:2%;">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </center>
                    </div>
                </ul>
            </div>
        </nav>
        </div>