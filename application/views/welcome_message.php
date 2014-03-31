<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Recherchez, commandez, et mangez</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Stylesheets -->
        <link href="<?php echo base_url(); ?>cjfksoft/css/bootstrap.css" rel="stylesheet">
        <!-- Include custom design -->
        <link href="<?php echo base_url(); ?>cjfksoft/css/ksoft.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Candal' rel='stylesheet' type='text/css'>
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>cjfksoft/images/favicon.png">
    </head>
<body>
    <!-- Include the header, the menu bar -->
    <div class="navbar navbar-inverse navbar-fixed-top bs-docs-nav header-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="" class="navbar-brand">Logo here</a>
            </div>
            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">     
            <!-- Links -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="glyphicon glyphicon-user"></i> Ouvrir un compte</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-log-in"></i> Se connecter <span class="caret"></span></a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-phone"></i> Call center ( 227 63 631 )</a></li>
                </ul>
            </nav>
        </div>
    </div>
    
    <div class="container">
        <div class="content">
            <div class="col-xs-12 box">
                <div class="col-xs-9">
                    <div class="box-search alert alert-warning">
                        <div class="slogan">Recherchez, Commandez et mangez</div>
                        <div>
                            <form class="form-inline" role="form">
                                <div class="form-group">
                                    <select class="form-control  col-xs-3">
                                        <option value="">Ville</option>
                                        <option value="douala">Douala</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">Quartier</option>
                                        <option value="akwa">Akwa</option>
                                        <option value="bali">Bali</option>
                                        <option value="bonanjo">Bonanjo</option>
                                        <option value="bonpriso">Bonapriso</option>
                                        <option value="deido">Deido</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Quand ? Aujourd'hui" id='quand'>
                                </div>
                                <div class='form-group'>
                                    <input type='Submit' class='form-control btn btn-warning' value='Commandez'>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class='process'>
                        <div class='col-xs-3 box-process'>Choisir votre menu</div>
                        <div class='col-xs-3 box-process'>Commander</div>
                        <div class='col-xs-3 box-process'>Faites vous livrer</div>
                        <div class='col-xs-3 box-process'>Payez</div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div>
                        <img src="<?php echo base_url() ?>cjfksoft/images/banner-carre.gif" class="img-responsive" align="bottom" height="250">
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div>
        <footer>
            <div class="container-fluid">
                Copyright &COPY; 2014 MesRestos.Net
            </div>
        </footer>
    </div>
</body>
</html>