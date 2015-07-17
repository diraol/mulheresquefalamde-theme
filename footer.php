<?php
/**
 * The template for displaying the footer
 *
 */

?>
		</div><!-- #main -->
	</div><!-- #page -->

	<footer id="gk-footer" role="contentinfo">
		<?php if (is_active_sidebar('bottom')) : ?>
		<div id="gk-bottom" role="complementary">
			<div class="widget-area">
				<?php dynamic_sidebar('bottom'); ?>
			</div>
		</div>
		<?php endif; ?>

		<div id="gk-social">
			<?php wp_nav_menu(array('theme_location' => 'footer', 'menu_class' => 'social-menu')); ?>
		</div>

		<div id="gk-copyrights">
			<?php do_action('portfolio_credits'); ?>

			<p class="copyright">Tema adaptado disponível no <a href="https://github.com/diraol/mulheresquefalamde-theme">GitHub</a></p>
      <p class="poweredby"><a href="https://github.com/diraol"><i class="fa fa-github"></i></a> | <a href="https://br.linkedin.com/in/diraol"><i class="fa fa-linkedin"></i></a></p>
		</div><!-- .site-info -->
	</footer><!-- end of #gk-footer -->

	<?php wp_footer(); ?>
</body>
</html>
