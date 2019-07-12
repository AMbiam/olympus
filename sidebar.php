<?php
function custom_theme_page_menu( $args = '' ) {
    $args = array(
		'sort_order' => 'asc',
		'sort_column' => 'menu_order, post_title',
		'hierarchical' => 1,
		'exclude' => '',
		'include' => '',
		'meta_key' => '',
		'meta_value' => '',
		'authors' => '',
		//'child_of' => 0,
		'parent' => 0,
		'exclude_tree' => '',
		'number' => '',
		'offset' => 0,
		'post_type' => 'page',
		'post_status' => 'publish'
	);
	return get_pages($args);
}

$pages = custom_theme_page_menu();
$half_pages = count($pages)/2;
?>
	<div class="row">
		<div class="col-lg-12 theme-primary-bg">
			<h1 class="small-text theme-secondary-fc font-style2 no-space text-center small-text-padding "><?= get_bloginfo( 'description' ) ?></h1>
		</div>
	</div>
	<div id="mobile-menu"  ng-app="myNav" class="row sticky">
		<navigate>
		<div class="col-md-2 hidden-sm hidden-xs">
			<h1 align="left">
				<div>
					<a href="/">
						<img class="logo-img" src="<?= get_header_image() ?>" />
					</a>
				</div>
				<?php if(display_header_text()): ?>
					<div>
						<p class="small-text"><?= get_bloginfo( 'name' ) ?></p>
					</div>
				<?php endif?>
			</h1>
		</div>
		<div class="col-xs-8  col-xs-offset-2 hidden-md hidden-lg">
			<h1 align="center">
				<div>
					<a href="/">
						<img class="logo-img" src="<?= get_header_image() ?>" />
					</a>
				</div>
				<?php if(display_header_text()): ?>
					<div>
						<p class="small-text"><?= get_bloginfo( 'name' ) ?></p>
					</div>
				<?php endif?>
			</h1>
		</div>
	  <div class="va-bottom col-md-7 col-md-offset-5 hidden-sm hidden-xs">
		<div class="medium-top-margin">
			<?= wp_nav_menu(array("theme_location"=>"primary-menu", "menu_class" => "horizontal-top-menu font-style2")) ?>
		</div>
	  </div>
	  <div class="va-bottom col-xs-2 col-xs-offset-10 hidden-md hidden-lg">
			<h1 align="left" ng-click="toggle()">
				<span id="hamburgernav" ng-class="{'glyphicon-download': hidden, 'glyphicon-upload': !hidden}" class="nav-link glyphicon "></span>
			</h1>
		</div>
		<div class="col-xs-10 hidden-md hidden-lg">
			<div ng-class="{'hidden': hidden}">
				<?= wp_nav_menu(array("theme_location"=>"primary-menu", "menu_class" => "vertical-top-menu font-style2")) ?>
			</div>
		</div>
		</navigate>
	</div>