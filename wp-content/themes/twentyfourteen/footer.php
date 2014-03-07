<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
                            © Newland Travel Pty Ltd. All rights reserved.
                           <!-- <div class="left-footer">
                                <span>Newland Travel & Immigration</span><br/>
                                Level 1, 42-44 Arthur street, Cabramatta NSW 2166<br/>
                                Tel: 02 9725 7922<br/>
                                Mob: 0417 422 849
                            </div>
                            <div style="width: 30%; float: left">&nbsp;</div>
                            <div class="right-footer">
                                <span>Trading hours</span><br/>
                                Monday - Friday: 9 30am - 5pm<br/>
                                Saturday: Close<br/>
                                Sunday: 10am - 3pm<br/>
                            </div>-->
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>