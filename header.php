<?php
	add_theme_support( 'post-thumbnails' );
	require('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?= get_bloginfo( 'name' ) ?></title>
	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>" />

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<!-- Custom Font -->
	<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">

	<!-- Styles -->
	<link href="<?= CSS_STYLES; ?>default.css" rel="stylesheet">
	<?php wp_head();?>
</head>
<body>