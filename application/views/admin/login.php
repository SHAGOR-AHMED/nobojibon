<!DOCTYPE html>
<html>
<head>
<title>Mundane Chem Website Control Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Magical Login Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="<?= base_url('assets/admin/login/'); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Text+Me+One' rel='stylesheet' type='text/css'>
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Please Enter Your Information</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<?php
					$msg = $this->session->userdata('message');
				?>
				<span style="color:red; font-size: 22px;">
			        <?php 
			        	echo $msg; 
			        	$this->session->unset_userdata('message');
			        ?>
		        </span>
				<form name="login_panel" id="login_panel" action="<?= base_url('Admin/admin_login_check'); ?>" method="post">
					<input class="text" type="text" name="admin_email" placeholder="User Email" required="">
					<input class="text" type="password" name="admin_pass" placeholder="Password" required="">
					<!-- <div class="wthree-text"> 
						<ul> 
							<li>
								<label class="anim">
									<input type="checkbox" class="checkbox">
									<span> Remember me ?</span> 
								</label> 
							</li>
							<li><a href="#">Forgot password?</a> </li>
						</ul>
						<div class="clear"> </div>
					</div> -->   
					<input type="submit" value="LOGIN">
				</form>
			</div>	 
		</div>	
		<!-- copyright -->
		<div class="w3copyright-agile">
			<p>© 2020 . All rights reserved | Design by <a href="http://wanitltd.com/" target="_blank">WAN IT</a></p>
		</div>
		<!-- //copyright -->
		<ul class="w3lsg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>	
	<!-- //main --> 
</body>
</html>