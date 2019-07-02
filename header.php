<?php
	require('config.php');
	$theme_color = "#594173";
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
	<link href="<?= CSS_STYLES; ?>social-icons.css?id=12" rel="stylesheet">
	<style>
		/*blue*/
		.theme-color-bg{ background-color: <?= $theme_color ?>; }
		.theme-color-font{ color: <?= $theme_color ?>; }

		.nav-link,
		.nav-link:visited{
			text-decoration: none;
			color: <?= $theme_color ?>;
		}

		.nav-link:hover,
		.nav-link:active{
			text-decoration: none;
			color: #000;
		}
	</style>
	<?php wp_head();?>
</head>
<body>
<div id="wpcontent" class="container-fluid">
