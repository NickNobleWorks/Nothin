<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Keywords">
	<meta name="author" content="Name">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!--Links needed go here -->

	<title><?php wp_title(); ?> - <?php bloginfo('name');?></title>

	<?php wp_head(); ?>
</head>
<body>
	
	<header>

		<h1><a href="<?php the_permalink();?>"><?php bloginfo('name');?></a></h1>

		<nav>
			<?php wp_nav_menu(array('menu' => 'primary_menu')); ?>
		</nav>
		
	</header><!-- /header -->
