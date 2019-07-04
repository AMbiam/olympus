<?php
	require('config.php');
	$primary_color = get_theme_mod( 'primary_color' );
	$secondary_color = get_theme_mod( 'secondary_color' );
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title><?= get_bloginfo( 'name' ) ?></title>
	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>" />

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	

	<!-- Custom Font -->
	<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">

	<!-- Styles -->
	<link href="<?= CSS_STYLES; ?>olympus.css" rel="stylesheet">
	<link href="<?= CSS_STYLES; ?>social-icons.css" rel="stylesheet">
	<link href="<?= CSS_STYLES; ?>navigation.css" rel="stylesheet">
	<style>
		/*Theme primary and Secondary colors
		bg = background
		fc = font color*/
		.theme-primary-bg{ background-color: <?= $primary_color ?>; }
		.theme-secondary-bg{ background-color: <?= $secondary_color ?>; }
		.theme-primary-fc{ color: <?= $primary_color ?>; }
		.theme-secondary-fc{ color: <?= $secondary_color ?>; }

		.nav-link,
		.nav-link:visited,
		.vertical-top-menu li a{
			text-decoration: none;
			color: <?= $primary_color ?>;
		}

		.nav-link:hover,
		.nav-link:active,
		.vertical-top-menu li a:hover{
			text-decoration: none;
			color: <?= $secondary_color ?>;
		}
	</style>

	<!-- Angular JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script src="<?= SCRIPTS; ?>angular-animate.min.js"></script>
	<script src="<?= SCRIPTS; ?>navigation.js"></script>
	<?php wp_head();?>
</head>
<body>
<div id="wpcontent" class="container-fluid">