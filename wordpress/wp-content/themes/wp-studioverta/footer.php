		</div><!-- .c-center -->
	</main><!-- .content -->
</div><!-- .wrapper -->
<footer class="footer">
	<div class="footer-inner">

		<?php if ( is_active_sidebar('widgetareaf1') ) : ?>
			<?php dynamic_sidebar( 'widgetareaf1' ); ?>
		<?php else : ?>
			<div class="f-block"><br></div><!-- .f-block -->
		<?php endif; ?>

		<?php if ( is_active_sidebar('widgetareaf2') ) : ?>
			<?php dynamic_sidebar( 'widgetareaf2' ); ?>
		<?php else : ?>
			<div class="f-block"><br></div><!-- .f-block -->
		<?php endif; ?>

		<?php if ( is_active_sidebar('widgetareaf3') ) : ?>
			<?php dynamic_sidebar( 'widgetareaf3' ); ?>
		<?php else : ?>
			<div class="f-block"><br></div><!-- .f-block -->
		<?php endif; ?>

		<div class="f-block">
			<h3>Мы в соцсетях</h3>
			<ul class="soc-menu">
				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/soc-vk.png" alt=""></a></li>
				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/soc-rss.png" alt=""></a></li>
				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/soc-facebook.png" alt=""></a></li>
				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/soc-twitter.png" alt=""></a></li>
			</ul>
			<div class="copyright">
				<span>&copy; 2014  StudioVerta</span>
				<p>Агентство интернет-маркетинга создание, продвижение и поддержка сайтов</p>
			</div>
		</div><!-- .f-block -->

	</div><!-- .footer-inner -->
</footer><!-- .footer -->
	<?php wp_footer(); ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle.all.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fitvids.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js" type="text/javascript"></script>

	<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

</body>
</html>