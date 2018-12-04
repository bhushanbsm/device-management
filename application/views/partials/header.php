<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html class="no-js">

<head>
    <title>Device Management</title>
    <!-- Bootstrap -->
    <link href="<?=base_url()?>assets/admin-theme/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?=base_url()?>assets/admin-theme/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="<?=base_url()?>assets/admin-theme/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
    <link href="<?=base_url()?>assets/admin-theme/assets/styles.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?=base_url()?>assets/admin-theme/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
        <?php if (user_logged_in()) {
            $this->load->view('partials/navbar');
        }?>
    </div>
    
