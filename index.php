<?php get_header(); ?>

<!-- Nav Bar Goes Here -->
<?php get_sidebar(); ?>

<div id="wp_content" class="container-fluid">

	<!-- Body -->
	<!-- Word Press Content -->
	<div id="wp_content" class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- contents of the loop -->
		<div class="blog-post">
			<?php
				get_template_part( 'content', get_post_format() );
			?>
		</div>

		<?php endwhile; endif; ?>
	</div>

<!-- Closing Body DIV --> 
</div>
<?php get_footer(); ?>