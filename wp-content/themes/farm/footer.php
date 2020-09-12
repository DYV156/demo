<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<footer>


	<div class="newsletter-secttion" id="nesletter">
        <div class="container">
            <div class="newsletter-part">
                <h2 class="wow fadeIn">sign up for the latest updates</h2>
                <div class="newsletter-form-part">
                    <?php echo do_shortcode('[contact-form-7 id="5" title="Sign Up Form"]');?>
                </div>
            </div>
        </div>
     </div>
     <div class="footer-part">
       <div class="container">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'menu' => 'Footer Menu',
						'container' => 'ul', 
						'menu_class' => 'wow fadeIn',
						'items_wrap' => '<ul class="%2$s">%3$s</ul>',
					)
				);
			?>
    	</div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
