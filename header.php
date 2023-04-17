<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Labb 1</title>
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery.js"></script>

    <?php wp_head(); ?>
</head>
<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href="http://localhost/henriks/assingment_01/wordpress/">Labb 1</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<form id="searchform" class="searchform">
							<div>
							<?php get_search_form(); ?>
							</div>
						</form>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

        
		<div class="mobile-search">
			<form id="searchform" class="searchform">
			<?php get_search_form(); ?>
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">

                    <?php wp_nav_menu( array( 'Navigation', 'container' => 'ul', 'menu_class' => 'menu' ) ); ?>
					</div>
				</div>
			</div>
		</nav>