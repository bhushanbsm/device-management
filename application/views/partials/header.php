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
    <link href="<?=base_url()?>assets/admin-theme/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?=base_url()?>assets/admin-theme/vendors/chosen.min.css" rel="stylesheet" media="screen">
    <link href="<?=base_url()?>assets/admin-theme/vendors/datepicker.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
    
