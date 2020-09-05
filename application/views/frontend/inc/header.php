<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= (isset($title)) ? $title : "Found Nothing"; ?></title>

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/');?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/');?>css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/');?>css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/');?>css/style.css"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/');?>css/animate.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="icon" type="image/png" href="<?= base_url('assets/frontend/');?>images/favicon.png" sizes="16x16"/>

    <!-- Style-CSS -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Font-Awesome-Icons -->

</head>

<body>

<!--Begin: Top Header-->
<section class="header-wrapper">
    <div class="container">
        <div class="col-md-1 col-sm-1 col-xs-1 no-padding">
        	<div class="liner" style="background:#5798ff"></div>
        </div>
        <div class="col-md-1 col-sm-1 col-xs-1 no-padding">
        	<div class="liner" style="background:#0d3980"></div>
        </div>
        <div class="col-md-1 col-sm-1 col-xs-1 no-padding">
        	<div class="liner" style="background:#5798ff"></div>
        </div>
        <div class="col-md-1 col-sm-1 col-xs-1 no-padding">
        	<div class="liner" style="background:#0d3980"></div>
        </div>
        <div class="col-md-1 col-sm-1 col-xs-1 no-padding">
        	<div class="liner" style="background:#5798ff"></div>
        </div>
        <div class="col-md-1 col-sm-1 col-xs-1 no-padding">
        	<div class="liner" style="background:#0d3980"></div>
        </div>
        <div class="col-md-1 col-sm-1 col-xs-1 no-padding">
        	<div class="liner" style="background:#5798ff"></div>
        </div>
        <div class="col-md-1 col-sm-1 col-xs-1 no-padding">
        	<div class="liner" style="background:#0d3980"></div>
        </div>
        <div class="col-md-1 col-sm-1 col-xs-1 no-padding">
        	<div class="liner" style="background:#5798ff"></div>
        </div>
        <div class="col-md-1 col-sm-1 col-xs-1 no-padding">
        	<div class="liner" style="background:#0d3980"></div>
        </div>
        <div class="col-md-1 col-sm-1 col-xs-1 no-padding">
        	<div class="liner" style="background:#5798ff"></div>
        </div>
        <div class="col-md-1 col-sm-1 col-xs-1 no-padding">
        	<div class="liner" style="background:#0d3980"></div>
        </div>
    </div>
</section>

<!--Begin: Middle Header-->
<div class="middle-header">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-7 col-xs-12">
				<div class="logo">
					<a href="#">
						<img alt="" src="<?= base_url('assets/frontend/');?>images/interface/logo-name.png">
					</a>
				</div>
			</div>
			<div class="col-md-5 col-sm-5 col-xs-12">
				<div class="top-social">
	                <ul>
	                    <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
	                    <li><a target="_blank" href="#"><i class="fa fa-youtube-play"></i> </a></li>
	                    <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
	                    <li><a target="_blank" href="#"><i class="fa fa-google"></i></a></li>
	                </ul>
	            </div>
	            <div class="contact-area">
	            	<h3>
	            		<i class="fa fa-envelope"></i>info@nobojibon.org
            			<a href="<?= base_url('Contact-Us'); ?>" class="btn btn-contact">Contact Us</a>
	            	</h3>
	            </div>
	        </div>
		</div>
	</div>
</div>

<section class="navigation">
	<nav class="navbar navbar-default" data-spy="affix" data-offset-top="110"> 
		<div class="navbar-header">  
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul id="myDiv" class="nav navbar-nav">
				<li><a href="<?= base_url('NoboJibon'); ?>">Home</a></li>
				<li><a href="<?= base_url('About-Us'); ?>">About Us</a></li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Programs<i class="fa fa-angle-double-down"></i></a>
                    <ul class="dropdown-menu">
                        <?php
                            foreach($allProgram as $value){
                        ?> 
                            <li><a href="<?= base_url('Program-Details/'.$value->type_id);?>"><?= $value->type_name?></a></li>
                        <?php } ?>
                    </ul>
                </li>            
				<li><a href="<?= base_url('Publication'); ?>">Publication</a></li>   
				<li><a href="<?= base_url('Our-Gallery'); ?>">Gallery</a></li>     
				<li><a href="<?= base_url('Our-Partner'); ?>">Partners</a></li>        
				<li><a href="<?= base_url('Achievements'); ?>">Achievements</a></li>        
				<li><a href="<?= base_url('UsefulLink'); ?>">Useful Links</a></li>    
			</ul>
		</div>
	</nav>
</section>






    
    
    
    
    
    



