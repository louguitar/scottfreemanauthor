<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Scott_Freeman_Author
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
            <div class="social-media">
            <a href="https://www.facebook.com/ScottFreemanAuthorTeacher/" target="_blank" class="social-link"><h3>Follow Scott and the Project on <i class="fa fa-facebook-official" aria-hidden="true"></i>
                FACEBOOK.</h3></a>
            
            </div>
           <div class="footer-copyright"> © Scott Freeman. All rights reserved.  </div>
<!-- 
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'scott-freeman-author' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'scott-freeman-author' ), 'WordPress' );
			?></a>
-->
<!--
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'scott-freeman-author' ), 'scott-freeman-author', '<a href="http://www.ghaddar.pro">Lou Ghaddar</a>' );
			?>
-->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
