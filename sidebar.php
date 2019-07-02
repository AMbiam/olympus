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
		<div class="col-lg-12 theme-color-bg">
			<h1 class="small-text font-2 font-style2 no-space text-center small-text-padding ">An Alert about something.</h1>
		</div>
	</div>
	<div class="row sticky">
		<div class="col-md-2">
			<h1 align="left"><?= get_bloginfo( 'name' ) ?></h1>
		</div>
	  <div class="col-md-8">
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
			<h1 align="left"><span class="theme-color-font glyphicon glyphicon-search"></span></h1>
		</div>
	</div>