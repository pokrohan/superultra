<?php
/**
 * The template for displaying the footer
 */

?>
</div>
	<footer id="colophon" class="site-footer row">
        <div class="col-md-4">
            <?php dynamic_sidebar('superultra-footer1'); ?>
        </div>
        <div class="col-md-4">
            <?php dynamic_sidebar('superultra-footer2'); ?>
        </div>
        <div class="col-md-4">
            <?php dynamic_sidebar('superultra-footer3'); ?>
        </div>
		<div class="site-info col-md-12" style="display: flex;">
			<span>
				&copy; <?php echo __('2018 Super Ultra Light - All Rights Reserved. Super Ultra Light by Rara Themes. Powered by WordPress. Privacy Policy', 'superultra'); ?>
			</span>
			<div>
            <?php
                wp_nav_menu( array( 
                    'theme_location' => 'my-custom-menu', 
                    'container_class' => 'footer-menu' ) ); 
            ?>  
            </div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
