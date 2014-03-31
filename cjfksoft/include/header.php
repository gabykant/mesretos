<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>World Wide last news</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Stylesheets -->
        <link href="<?php echo base_url()?>cjfksoft/css/bootstrap.css" rel="stylesheet">
        <!-- Include custom design -->
        <link href="<?php echo base_url()?>cjfksoft/css/ksoft.css" rel="stylesheet">
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url()?>cjfksoft/images/favicon.png">
        
    </head>
    
<body>
    <!-- Include the header, the menu bar -->
    <div class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="" class="navbar-brand"><i class="glyphicon glyphicon-home"></i></a>
            </div>
            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">     
            <!-- Links -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="glyphicon glyphicon-th-list"></i>English <span class="caret"></span></a></li>
                    <?php if(isset($notice)) {
                        echo '<li><a href="'.base_url().'index.php/users/logout"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>';
                    } else {
                        echo '
                    <li><a href="'.base_url().'index.php/users/register"><i class="glyphicon glyphicon-user"></i> Create account</a></li>
                    <li><a href="'.base_url().'index.php/users/login"><i class="glyphicon glyphicon-log-in"></i> Log In <span class="caret"></span></a></li>';
                    } ?>
                </ul>
            </nav>
        </div>
        
    </div>
    
    <div class="container">
        <div class="header-logo col-xs-12">
            <div class="pull-left col-xs-6">
                <img src="<?php echo base_url() ?>cjfksoft/images/logo-Big.png" class="img-responsive">
            </div>
            <div class="input-group pull-right col-xs-6">
                <input type="text" class="form-control">
                <span class="input-group-addon glyphicon glyphicon-search"></span>
            </div>
        </div>
    </div>
    
    <div class="clearfix"></div>
    
    <div class="container">
        <div class="maincontent col-xs-12">