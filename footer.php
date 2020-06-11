<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
			<?php _e('&copy;', 'twentyfifteen'); ?> <?php _e(date('Y'), 'twentyfifteen'); ?> <a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">Stowarzyszenie "Nasz czysty i zdrowy Rzeszów".</a>
		</div><!-- .site-info -->
		
		<?php if (is_active_sidebar('site-keywords')) : ?>
		<div class="widget-area" role="complementary">
			<?php dynamic_sidebar('site-keywords'); ?>
		</div> <!-- .widget-area -->
		<?php endif; ?>
			
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>