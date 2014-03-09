<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>FHD FILM</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Theme Stylesheets
	================================================== -->
	{{ HTML::style('/layouts/css/collection.css') }}
	
	<link rel="stylesheet" href="/layouts/css/colors/red.css" name="colors">
	<link rel="stylesheet" href="/layouts/css/layout/wide.css" name="layout">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="/layouts/images/favicon.ico">
	<link rel="apple-touch-icon" href="/layouts/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/layouts/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/layouts/images/apple-touch-icon-114x114.png">

</head>
<body>
	<!-- WRAP
	================================================== -->
	<div id="hdv-wrap" class="hdv-boxed">

		<!-- HEADER
		================================================== -->
  		<header class="hdv-fixed">
			<div class="hdv-top">
				<div class="container clearfix">
					<div class="hdv-one-half">
						<div class="hdv-contact">
							<div class="hdv-contactby hdv-phone">
								<i class="icon-call-in"></i><span><a href="#"> + 123456789</a></span>
							</div><!--End Phone -->
							<div class="hdv-contactby hdv-email">
								<i class="icon-envelope"></i><span><a href="#"> Info@yourdomain.com</a></span>
							</div><!--End Email -->
						</div><!--End Contact -->
					</div>
					
					<div class="hdv-one-half hdv-last">
						<div class="hdv-socials">
							<a href="#"><i class="zocial-icon-facebook"></i></a>
							<a href="#"><i class="zocial-icon-twitter"></i></a>
							<a href="#"><i class="zocial-icon-google"></i></a>
							<a href="#"><i class="zocial-icon-youtube"></i></a>
							<a href="#"><i class="zocial-icon-vimeo"></i></a>
						</div><!-- End Top Socials -->
					</div>
				</div>
			</div><!-- End Top Header -->
     
			<div class="hdv-header">
				<div class="container clearfix">
					<div class="hdv-one-fifth">
						<div class="hdv-logo">
							<a href="#">
								<img src="/layouts/images/logo.png" alt="UIM. Corporation Responsive Theme. Responsive and Clean layout" />
							</a>
						</div><!-- End Logo -->
					</div>

					<!-- MENU
					================================================== -->
					<?php // include '/menu.php';?>
					@include ('layouts.menu')
					<!-- End Main Header -->

				</div>
			</div><!-- End Main Header -->
		</header>
		<!-- END HEADER
		================================================== -->
		<div class="fhd-container">