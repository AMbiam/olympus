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
			<h1 class="small-text font-2 font-style2 no-space text-center small-text-padding "><?= get_bloginfo( 'description' ) ?></h1>
		</div>
	</div>
	<div class="row sticky">
		<div class="col-md-2">
			<h1 align="left">
				<div>
					<img class="logo-img" src="<?= get_header_image() ?>" />
				</div>
				<div>
					<p class="small-text"><?= get_bloginfo( 'name' ) ?></p>
				</div>
			</h1>
		</div>
	  <div class="col-md-8 hidden-sm hidden-xs">
		<?php foreach($pages as $key=>$page): ?>
			<div class="col-xs-2">
				<a href="<?= get_page_link($page->ID) ?>" class="nav-link">
				<p class="medium-top-margin font-style2 medium-text">
				<?= $page->post_title ?>
				</p>
				</a>
			</div>
		<?php endforeach; ?>
	  </div>
		<div class="col-md-2">
			<h1 align="left"><span class="theme-color-font glyphicon glyphicon-search hidden"></span></h1>
		</div>
		<div class="col-md-2 hidden-md hidden-lg theme-primary-bg">
		  <h1 align="left"><span class="font-2 glyphicon glyphicon-align-justify"></span></h1>
		</div>	
	</div>