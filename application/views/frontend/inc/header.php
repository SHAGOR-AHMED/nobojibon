 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?= $title; ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/')?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/')?>css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="<?= base_url('assets/frontend/')?>css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/')?>css/style.css"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/')?>css/client.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

<body>

<section class="header-all">
	<div class="container">
    	<div class="row">
        	<div class="col-md-3 col-sm-12 col-xs-12">
            	<div class="logo">
                	<a href="<?= base_url('Mundane'); ?>"><img src="<?= base_url('assets/frontend/')?>images/element/logo.png" alt="logo"/></a>
                </div>
            </div>
            <div class="col-md-6 col-sm-8 col-xs-12">
                <div class="contact-location">
                    <div class="left-location">
                        <i class="fa fa-phone" area-hidden="true"></i>
                        <h4>Call Us:</h4>
                        <h6>+880 2 9554010, 9550046</h6>
                    </div>
                    <div class="left-location right-info">
                        <i class="fa fa-envelope" area-hidden="true"></i>
                        <h4>Email:</h4>
                        <h6><?= $fcontact->email;?></h6>
                    </div>
                </div>
            </div>
        	<div class="col-md-3 col-sm-4 col-xs-12">
            	<div class="social-media">
                    <h5>Find Us On:</h5>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i> </a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i> </a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navigation">
        <nav class="navbar navbar-default navbar-inverse"> 
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul id="myDIV" class="nav navbar-nav">
                    <img alt="" src="<?= base_url('assets/frontend/')?>images/element/de.png">
                    <li><a href="<?= base_url('Mundane'); ?>"><i class="fa fa-home"></i></a></li>
                    <li><a href="<?= base_url('About-Us'); ?>">About Us</a></li> 
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Products<i class="fa fa-angle-double-down"></i></a>
                    <ul class="dropdown-menu">
                        <?php
                            foreach($allcategory as $value){
                        ?> 
                            <li><a href="<?= base_url('Product-Details/'.$value->type_id);?>"><?= $value->type_name?></a></li>
                        <?php } ?>
                    </ul>
                    </li> 
                    <li><a href="<?= base_url('Our-Principals'); ?>">Our Principals</a></li> 
                    <li><a href="<?= base_url('Support-Team'); ?>">Support Team</a></li> 
                    <li><a href="<?= base_url('Certificates'); ?>">Certificates</a></li>  
                    <li><a href="<?= base_url('Contact-Us'); ?>">Contact</a></li>          
                </ul>
            </div>
        </nav>
    </div>
</section>


