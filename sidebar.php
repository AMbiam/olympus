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
		'parent' => -1,
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
		<div class="col-lg-12 bg-1">
			<h1 class="small-text font-2 no-space text-center small-text-padding">An Alert about something.</h1>
		</div>
	</div>
	<div class="row">
	  <div class="col-md-3">
	  	<div class="row">
	  		<?php foreach($pages as $key=>$page): ?>
	  			<?php if($key < $half_pages): ?>
				    <div class="col-xs-3 text-center">
				    	<a href="<?= get_page_link($page->ID) ?>">
					    		<p href="<?= get_page_link($page->ID) ?>" class="medium-top-margin">
					    		<?= $page->post_title ?>
					    	</p>
					    </a>
				    </div>
				<?php endif; ?>
		    <?php endforeach; ?>
	  	</div>
	  </div>
	  <div class="col-md-6">
	  	<h1 align="center"><?= get_bloginfo( 'name' ) ?></h1>
	  </div>
	  <div class="col-md-3">
	  		<!--<div class="col-xs-6"><p class="medium-top-margin">Olympus Effect</p></div>
	  		<div class="col-xs-3"><p class="medium-top-margin"><span class="glyphicon glyphicon-shopping-cart"></span></p></div>
	  		<div class="col-xs-3"><p class="medium-top-margin"><span class="glyphicon glyphicon-search"></span></p></div>-->
	  		<?php foreach($pages as $key=>$page): ?>
	  			<?php if($key > $half_pages): ?>
				    <div class="col-xs-3 text-center">
				    	<a href="<?= get_page_link($page->ID) ?>">
					    		<p href="<?= get_page_link($page->ID) ?>" class="medium-top-margin">
					    		<?= $page->post_title ?>
					    	</p>
					    </a>
				    </div>
				<?php endif; ?>
		    <?php endforeach; ?>
	  </div>
	</div>