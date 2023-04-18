<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Labb 1</title>

    <?php wp_head(); ?> <!-- wp function that loads scripts and styles in the head section of the HTML document -->
</head>
<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href="<?php echo get_home_url(); ?>">Labb 1</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<form id="searchform" class="searchform">
							<div>
							<?php get_search_form(); ?> <!-- Wp built in function for search form -->
							</div>
						</form>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i> <!-- icon for mobile -->
							<i class="fa fa-bars menu-icon"></i> <!-- icon for mobile -->
						</div>
					</div>
				</div>
			</div>
		</header>

        
		<div class="mobile-search">
			<form id="searchform" class="searchform">
			<?php get_search_form(); ?> <!-- Wp built in function for search form -->
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
					<!-- Retrieves navigation menu from wp -->
                    <?php wp_nav_menu( array( 'Navigation', 'container' => 'ul', 'menu_class' => 'menu' ) ); ?>
					</div>
				</div>
			</div>
		</nav>