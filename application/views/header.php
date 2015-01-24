<!DOCTYPE html>
<html>
	<head>
		<title>KMI</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?php echo base_url('/assets/css/bootstrap.css'); ?>" rel="stylesheet" media="screen">
		<link href="<?php echo base_url('/assets/css/fontello.css'); ?>" rel="stylesheet" media="screen">
		<link href="<?php echo base_url('/assets/css/mystyle.css'); ?>" rel="stylesheet" media="screen">
		<link href="<?php echo base_url('/assets/css/shop_slider.css'); ?>" rel="stylesheet" media="screen">
		<link href="<?php echo base_url('/assets/css/slider.css'); ?>" rel="stylesheet" media="screen">
		<link href="<?php echo base_url('/assets/css/slider_2.css'); ?>" rel="stylesheet" media="screen">
		<link href="<?php echo base_url('/assets/css/sub_slider.css'); ?>" rel="stylesheet" media="screen">
		<link href="<?php echo base_url('/assets/css/twitter_slider.css'); ?>" rel="stylesheet" media="screen">
		<link href="<?php echo base_url('/assets/css/slide_background.css'); ?>" rel="stylesheet" media="screen">
		<link href="<?php echo base_url('/assets/css/shop_slider_background.css'); ?>" rel="stylesheet" media="screen">
		<link href="<?php echo base_url('/assets/css/subpage_banners.css'); ?>" rel="stylesheet" media="screen">
		<link href="<?php echo base_url('/assets/css/jrating.jquery.css'); ?>" rel="stylesheet" media="screen">
		<!--[if IE 9]><link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/ie9.css'); ?>"><![endif]-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="<?php echo base_url('/assets/js/modernizr.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.js'); ?>"></script>
		<!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&amp;sensor=false"></script>
		<script type="text/javascript" src="<?php echo base_url('/assets/js/google_map.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('/assets/js/jrating.jquery.js'); ?>"></script>-->
		<script type="text/javascript" src="<?php echo base_url('/assets/js/myscript.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('/assets/js/core.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('/assets/js/scrollspy.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('/assets/js/modal_effects.js'); ?>"></script>   
	</head>
	<body class="<?php echo ($current_view === 'home')? 'home': 'blog'; ?>" data-base-url="<?php echo base_url('/'); ?>">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col col-sm-12">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bars"></span>
								<span class="icon-bars"></span>
								<span class="icon-bars"></span>
							</button>
							<a class="navbar-brand" href="#"><img src="<?php echo base_url('/assets/images/krypton_logo.png'); ?>" alt="Logo"></a>
						</div>
						<div class="collapse navbar-collapse" id="mynavbar">
							<div class="left-cell">
								<ul class="nav navbar-nav">
									<?php
										foreach ($menu_list as $menu) {
											if ($menu['option_key'] === 'products') {
												echo "<li class='dropdown'>";
												echo "<a href='javascript:void(0);' class='dropdown-toggle' data-toggle='dropdown'>".$menu['option_value']."</a>";
												echo "<ul class='dropdown-menu'>";
												echo "<li><h5 class='menuTitle'>".$menu['option_value']."</h5></li>";
												foreach($product_type_list as $product_type) {
													echo "<li><a href='".site_url($current_language.'/product-type/'.$product_type['row_id'])."'>".$product_type['product_type_name_'.$current_language]."</a></li>";
												}
												echo "</ul>";
												echo "</li>";
											} else {
												echo "<li><a href='".site_url($current_language.'/'.$menu['option_key'])."'>".$menu['option_value']."</a></li>";
											}
										}
									?>
								</ul>
							</div>
							<div class="right-cell">
								<div style="margin: 25px 0; text-align: right;">
									<?php
										if(isset($row_id)) {
											echo "<a href='".base_url('/th/'.$current_view.'/'.$row_id)."'>TH</a>";
											echo " | ";
											echo "<a href='".base_url('/en/'.$current_view.'/'.$row_id)."'>EN</a>";
										} else {
											echo "<a href='".base_url('/th/'.$current_view)."'>TH</a>";
											echo " | ";
											echo "<a href='".base_url('/en/'.$current_view)."'>EN</a>";
										}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav><!-- Main Navigation -->