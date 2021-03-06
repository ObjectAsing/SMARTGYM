<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="<?=base_url()?>asset/images/favicon_2.ico" type="image/x-icon">
        <title>Home</title>
        <link href="<?php echo base_url() ?>asset/lib/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>


        <link rel="stylesheet" href="<?php echo base_url() ?>asset/lib/select2/select2.css"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>asset/lib/select2/select2-bootstrap.css"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>asset/lib/alertify/alertify.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>asset/lib/alertify/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>asset/lib/jquery_ui/jquery-ui.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>asset/lib/jquery_ui/jquery-ui.theme.min.css"/>
        <script src="<?php echo base_url() ?>asset/lib/jquery_ui/jquery.min.js"/></script>
        <script type="text/javascript" src="<?php echo base_url() ?>asset/lib/jquery_ui/loader.js"/></script>



        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/eksternal/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/skin-blue.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/all.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">



        <link href="<?php echo base_url() ?>asset/lib/css/style.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo base_url() ?>asset/lib/js/jquery-latest.min.js"></script>
     <script src="<?php echo base_url() ?>asset/lib/jquery_ui/jquery-ui.min.js"></script>
    </head>
    <body>
        <div id="loaderkender" style=""><div><button class="btn btn-info"><i class="glyphicon glyphicon-refresh"></i>&nbsp;&nbsp;Loading...</button></div></div>

        <div class="toprow"></div>
        <div style="background: #000;" class="fullheader">
            <div class="container">
                <div class="row">
                    <a href="<?php echo base_url()?>admin/" class="navbar-brand pull-left">
                        <img class="logo" src="<?php echo base_url() ?>asset/images/logogym.jpg" alt="GYM" style="height: 50px; width: 200px"/>
                    </a>
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="glyphicon glyphicon-align-justify"></span>
                    </button>
                    <nav class="navbar-collapse navbar-collapse-cus navbar-inverse  collapse" role="navigation">
                        <ul class="navbar-nav nav">
                            <li><a href="<?php echo base_url()?>"><strong>GYM MEMBER MANAGEMENT</strong></a></li>
                        </ul>
                        <ul class="navbar-nav nav pull-right">
                            <li><a href="<?php echo base_url()?>auth/logout">&nbsp;LOGOUT&nbsp;&nbsp;<i class="glyphicon glyphicon-off"></i> <b></b></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container-fluid scrollheader" style="background: #000;">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">FTMK DEVELOPER</p>
                </div>
            </div>
        </div>

        <div class="container" style="background: #f5f5f5; height: 40px;">
            <div row>
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li class="active"><a href="<?php echo base_url() ?>admin/">Home</a></li>
                        <li><a href="#"><?php echo $this->uri->segment(0)?></a></li>
                        <li class="pull-right"><a class="btn btn-sm btn-info" href="#" onclick="javascript: window.history.back()">Back</a></li>
                    </ol>
                </div>
            </div>
        </div>
