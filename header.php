<?php
	add_theme_support( 'post-thumbnails' );
	require('config.php');
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

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	

	<!-- Custom Font -->
	<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">

	<!-- Styles -->
	<link href="<?= CSS_STYLES; ?>olympus.css" rel="stylesheet">
	<?php wp_head();?>
</head>
<body>
<div id="wpcontent" class="container-fluid">
