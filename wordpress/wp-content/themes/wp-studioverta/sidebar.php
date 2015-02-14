<div class="col-left">
	
	<?php if ( is_active_sidebar('widgetarea1') ) : ?>
		<?php dynamic_sidebar( 'widgetarea1' ); ?>
	<?php else : ?>
		<!-- nothing -->
	<?php endif; ?>

	<div class="module">
		<div class="module-title">
			<h3>Онлайн-расчет</h3>
<!-- 			<span>шаг 1 из 2</span>
<div class="module-nav">
	<a class="mn-prev" href="#"></a>
	<a class="mn-next" href="#"></a>
</div> -->
		</div>
		<div class="form-onlinecalc clearfix">
			<?php echo do_shortcode( '[contact-form-7 id="81" title="Two Step Widget Form"]' ); ?>
		</div><!-- form-onlinecalc -->
	</div><!-- .module -->

	<div class="module">
		<div class="module-title">
			<h3>продвинули</h3>
			<div class="module-nav">
				<a class="mn-prev" href="#"></a>
				<a class="mn-next" href="#"></a>
			</div>
		</div>
		<div class="slider1">
			<?php query_posts("showposts=5&cat=74"); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="slide m-promoted">
				<table class="mp-table">
					<tr>
						<th class="mp-option">Запрос</th>
						<th class="mp-value">Позиция</th>
					</tr>
					<tr>
						<td><a href="#">st-verta.ru</a></td>
						<td><img src="<?php echo get_template_directory_uri(); ?>/images/pos-yandex.jpg" alt=""></td>
					</tr>
					<?php if(get_field('seoyandex')): while( have_rows('seoyandex') ): the_row(); $keyword = get_sub_field('keyword'); $position = get_sub_field('position'); ?>
					<tr>
						<td><?php echo $keyword; ?></td>
						<td><?php echo $position; ?></td>
					</tr>
					<?php endwhile; endif; ?>
				</table>
			</div><!-- m-promoted -->
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
		
			<?php query_posts("showposts=5&cat=74"); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="slide m-promoted">
				<table class="mp-table">
					<tr>
						<th class="mp-option">Запрос</th>
						<th class="mp-value">Позиция</th>
					</tr>
					<tr>
						<td><a href="#">st-verta.ru</a></td>
						<td><img src="<?php echo get_template_directory_uri(); ?>/images/pos-google.jpg" alt=""></td>
					</tr>
					<?php if(get_field('seogoogle')): while( have_rows('seogoogle') ): the_row(); $keyword = get_sub_field('keyword'); $position = get_sub_field('position'); ?>
					<tr>
						<td><?php echo $keyword; ?></td>
						<td><?php echo $position; ?></td>
					</tr>
					<?php endwhile; endif; ?>
				</table>
			</div><!-- m-promoted -->
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
		</div><!-- slider1 -->
	</div><!-- .module -->
</div><!-- .col-left -->