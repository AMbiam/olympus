<?php get_header(); ?>
<!-- Nav Bar Goes Here -->
	<?php get_sidebar(); ?>

<!-- Body -->
<div class="container-fluid">
	<!-- Word Press Content -->
	<div id="wp_content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- contents of the loop -->
		<?php
			get_template_part( 'content', get_post_format() );
		?>

		<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>