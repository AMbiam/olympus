<!-- Footer -->
<div id="footer" class="row theme-primary-bg">
	<div class="col-xs-6 tp-btm-padding-lg">
		<?= wp_nav_menu(array("theme_location"=>"secondary-menu", "menu_class" => "footer-menu  font-style2")) ?>
	</div>
	<div class="col-xs-6 tp-btm-padding-lg">
		<?php dynamic_sidebar('footer-1'); ?>
	</div>
</div>
<div class="row">
	<div class="col-md-3 font-style2 small-text">
		&copy; <?= date('Y',time()) ?>-<?= date('y',time())+1 ?> <?= get_bloginfo( 'name' ) ?>. All Rights Reserved.
	</div>

	<div class="col-md-2 col-md-offset-7 font-style2 small-text">
		Built by: Andrew Mbiam
	</div>
</div>

<!-- Closing Body DIV --> 
</div>
<?php wp_footer();?>
</body>
</html>