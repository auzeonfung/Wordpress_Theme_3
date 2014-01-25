	<?php wp_footer(); ?>
<footer>

	<section id="footer-widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?>
		<?php endif; ?>
	</section>
	<div id="footer-copyright">
		<p>&copy <?php bloginfo('name'); ?></p>
	</div>
	<div id="version">
		<p id="wp-version">Wordpress Version:<?php bloginfo('version'); ?></p>
	</div>
	
</footer>
</body>
</html>