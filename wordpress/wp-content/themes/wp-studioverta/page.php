<?php get_header(); ?>
<div class="cols-wrapper">
	<?php get_sidebar(); ?>
	
	<div class="col-right">
		<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
			<?php edit_post_link(); ?>
		<?php endwhile; else: // If 404 page error ?>
			<h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
		<?php endif; ?>

	</div><!-- .col-right -->
</div><!-- .cols-wrapper -->
<?php get_template_part('postcontent'); ?>
<?php get_footer(); ?>