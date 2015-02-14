<?php get_header(); ?>
<div class="cols-wrapper">
	<?php get_sidebar(); ?>
	
	<div class="col-right">
		<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>

<!-- 		<h1 class="cat-title inner-title"><?php the_category(', '); ?></h1> -->
		<?php get_template_part('loop'); ?>
		<?php get_template_part('pagination'); ?>

	</div><!-- .col-right -->
</div><!-- .cols-wrapper -->
<?php get_footer(); ?>