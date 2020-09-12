<?php
/**
 * Template Name: Home Page
 *
 **/
 
get_header();
$fields = get_fields(get_the_ID());
$btn = $fields['two_buttons'];
?>

<section class="top_wrap">
	<div class="main_nav">
		<div class="container">
            <div id="nav-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu' => 'Header Menu',
						'container' => 'ul', 
						'menu_class' => 'top_nav wow fadeIn',
						'items_wrap' => '<ul class="%2$s">%3$s</ul>',
					)
				);
			?>
    	</div>
    </div>
     <div class="middle_cls">
    	<div class="container container-large">
        	<div class="middle_first wow fadeIn">
            	<?php echo $fields['top_heading'];?>
            </div>
        	<div class="middle_second wow fadeIn">
            	<?php echo $fields['middle_heading'];?>
            </div>
        	<div class="middle_third wow fadeIn">
            	<div class="logo">
                	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
						<?php $logo_id = get_theme_mod( 'custom_logo' );
						$logo = wp_get_attachment_image_src( $logo_id , 'full' );
						if ( has_custom_logo() ) { echo '<img src="'. esc_url( $logo[0] ) .'" class="logo-img-1">';	}
						else { echo '<h4>'. get_bloginfo( 'name' ) .'</h4>'; }
					?>
					</a>
                </div>
                <div class="hedaer_btn">
                	<a href="<?php echo $btn['button_1_link'];?>" class="btn_border" target="_blank"><?php echo $btn['button_1_text'];?></a>
                	<a href="<?php echo $btn['button_2_link'];?>" class="btn_border" target="_blank"><?php echo $btn['button_2_text'];?></a>                    
                </div>
            </div>  
            <div class="middle_forth">
            	<ul class="list_wrap" id="line-up">
                <?php 
					$crd = $fields['information'];
					for($i=0; $i<sizeof($crd);$i++) {?>
					<li>
                    	<div class="list_inr wow fadeIn">
                        	<figure>
                            	<img src="<?php echo $crd[$i]['image'];?>" alt="<?php echo $crd[$i]['title'];?>" />
                            </figure>
                            <div class="list_right">
                            	<h3><?php echo $crd[$i]['title'];?></h3>
                                <p><?php echo $crd[$i]['text'];?></p>
                            </div>
                        </div>
                    </li>
				<?php } ?>
                </ul>
            </div>                      
        </div>
    </div>
</section>

<section class="middle_wrap">
	<div class="container">
    	<div class="m_cls_first wow fadeIn" id="events">
            <h2><?php echo $fields['new_year_title'];?></h2>                    
            <?php echo $fields['new_year_text'];?>
        </div>
        <ul class="video_list">
		<?php 
			$video = $fields['video_list'];
			for($i=0; $i<sizeof($video);$i++) {?>
        	<li class="wow fadeIn">
            	<div class="video_inr">
            		<?php echo $video[$i]['video_iframe'];?>
                </div>
            </li>
        	<?php } ?>                    
        </ul>
    </div>
    <div class="ticket_info" id="tickets">
    	<div class="m_cls_first wow fadeIn">
	    	<h2><?php echo $fields['section_title'];?></h2>
    	    <?php echo $fields['ticket_info'];?>
        </div>
    </div>
</section>

<?php get_footer(); ?>