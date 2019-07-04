<!-- Footer -->
<div class="row theme-primary-bg">
	<div class="col-xs-6 tp-btm-padding-lg">
		<?= wp_nav_menu(array("theme_location"=>"secondary-menu", "menu_class" => "footer-menu")) ?>
	</div>
	<div class="col-xs-6 tp-btm-padding-lg">
		<?php dynamic_sidebar('footer-1'); ?>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 font-style2 small-text">
		&copy; <?= date('Y',time()) ?>-<?= date('y',time())+1 ?> <?= get_bloginfo( 'name' ) ?>. All Rights Reserved.
	</div>
</div>

<!-- Closing Body DIV --> 
</div>
<?php wp_footer();?>
</body>
</html>