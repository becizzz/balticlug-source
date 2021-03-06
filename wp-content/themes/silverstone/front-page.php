<?php
/**
 * The template part for displaying frontpage.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package SilverStone
 */

get_header(); ?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

            <div class="frontpage-products">
            	
                <div class="frontpage-products-item">
                
                	<div class="frontpage-products-img">
						<?php 
                            if( get_theme_mod('SilverStone_frontpage_left_large') ){   
								echo '<img src="'.esc_url(get_theme_mod('SilverStone_frontpage_left_large')).'" />';
							}else{
								echo '<img src="'.get_template_directory_uri().'/skins/images/01.jpg" />';
							}
						?>
                    </div><!-- .frontpage-products-img -->
                    
                    <div class="frontpage-products-name">
						<?php 
                            if( get_theme_mod('SilverStone_frontpage_left_cta_link') ){
								echo '<a href="'.esc_url(get_theme_mod('SilverStone_frontpage_left_cta_link')).'">';
								if( get_theme_mod('SilverStone_frontpage_left_name') ){   
									echo '<p>'.esc_attr(get_theme_mod('SilverStone_frontpage_left_name')).'</p>';
								}else{
									echo '<p>'.__('Web Design',  'silverstone').'</p>';
								}								
								echo '</a>';
							}else{
								if( get_theme_mod('SilverStone_frontpage_left_name') ){   
									echo '<p>'.esc_attr(get_theme_mod('SilverStone_frontpage_left_name')).'</p>';
								}else{
									echo '<p>'.__('Web Design',  'silverstone').'</p>';
								}
							}
						?>                    
                    </div><!-- .frontpage-products-name -->
                    
                    <div class="frontpage-products-description">
						<?php 
                            if( get_theme_mod('SilverStone_frontpage_left_text') ){   
								echo '<p>'.esc_attr(get_theme_mod('SilverStone_frontpage_left_text')).'</p>';
							}else{
								echo '<p>'.__('Left section description comes here, you can change it in front page options tab of customizer in Appearance section of dashboard. Write something awesome.',  'silverstone').'</p>';
							}
						?>  
                    </div><!-- .frontpage-products-description -->
                    
                </div><!-- .frontpage-products-item -->
                
                <div class="frontpage-products-item">
                
                	<div class="frontpage-products-img">
						<?php 
                            if( get_theme_mod('SilverStone_frontpage_center_large') ){   
								echo '<img src="'.esc_url(get_theme_mod('SilverStone_frontpage_center_large')).'" />';
							}else{
								echo '<img src="'.get_template_directory_uri().'/skins/images/03.jpg" />';
							}
						?>
                    </div><!-- .frontpage-products-img -->
                    
                    <div class="frontpage-products-name">
						<?php 
                            if( get_theme_mod('SilverStone_frontpage_center_cta_link') ){
								echo '<a href="'.esc_url(get_theme_mod('SilverStone_frontpage_center_cta_link')).'">';
								if( get_theme_mod('SilverStone_frontpage_center_name') ){   
									echo '<p>'.esc_attr(get_theme_mod('SilverStone_frontpage_center_name')).'</p>';
								}else{
									echo '<p>'.__('Web Development',  'silverstone').'</p>';
								}							
								echo '</a>';
							}else{
								if( get_theme_mod('SilverStone_frontpage_center_name') ){   
									echo '<p>'.esc_url(get_theme_mod('SilverStone_frontpage_center_name')).'</p>';
								}else{
									echo '<p>'.__('Web Development',  'silverstone').'</p>';
								}
							}                            
						?>                    
                    </div><!-- .frontpage-products-name -->
                    
                    <div class="frontpage-products-description">
						<?php 
                            if( get_theme_mod('SilverStone_frontpage_center_text') ){   
								echo '<p>'.esc_attr(get_theme_mod('SilverStone_frontpage_center_text')).'</p>';
							}else{
								echo '<p>'.__('center section description comes here, you can change it in front page options tab of customizer in Appearance section of dashboard. Write something awesome.',  'silverstone').'</p>';
							}
						?>  
                    </div><!-- .frontpage-products-description -->
                    
                </div><!-- .frontpage-products-item -->
                
                <div class="frontpage-products-item">
                
                	<div class="frontpage-products-img">
						<?php 
                            if( get_theme_mod('SilverStone_frontpage_right_large') ){   
								echo '<img src="'.esc_url(get_theme_mod('SilverStone_frontpage_right_large')).'" />';
							}else{
								echo '<img src="'.get_template_directory_uri().'/skins/images/02.jpg" />';
							}
						?>
                    </div><!-- .frontpage-products-img -->
                    
                    <div class="frontpage-products-name">
						<?php 
                           
                            if( get_theme_mod('SilverStone_frontpage_right_cta_link') ){
								echo '<a href="'.esc_url(get_theme_mod('SilverStone_frontpage_right_cta_link')).'">';
									if( get_theme_mod('SilverStone_frontpage_right_name') ){   
										echo '<p>'.esc_attr(get_theme_mod('SilverStone_frontpage_right_name')).'</p>';
									}else{
										echo '<p>'.__('Web Hosting',  'silverstone').'</p>';
									}						
								echo '</a>';
							}else{
								if( get_theme_mod('SilverStone_frontpage_right_name') ){   
									echo '<p>'.esc_attr(get_theme_mod('SilverStone_frontpage_right_name')).'</p>';
								}else{
									echo '<p>'.__('Web Hosting',  'silverstone').'</p>';
								}
							}						   
						   
						?>                    
                    </div><!-- .frontpage-products-name -->
                    
                    <div class="frontpage-products-description">
						<?php 
                            if( get_theme_mod('SilverStone_frontpage_right_text') ){   
								echo '<p>'.esc_attr(get_theme_mod('SilverStone_frontpage_right_text')).'</p>';
							}else{
								echo '<p>'.__('right section description comes here, you can change it in front page options tab of customizer in Appearance section of dashboard. Write something awesome.',  'silverstone').'</p>';
							}
						?>  
                    </div><!-- .frontpage-products-description -->
                
                </div><!-- .frontpage-products-item -->                               
                
            </div><!-- .frontpage-products -->
            
		</main><!-- #main -->
	</div><!-- #primary -->
    
    <?php if( get_theme_mod('SilverStone_show_frontpage_posts', 'no') == 'no' ) : ?>
	<div class="front-posts">
    
    	<div class="front-posts-content">

            <div class="content-area-full">
                <main class="site-main" role="main">
        			<?php if( 'page' == get_option( 'show_on_front' ) ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
        
                        <?php get_template_part( 'content', 'page' ); ?>
        
                        <?php
                            // If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || '0' != get_comments_number() ) :
                                comments_template();
                            endif;
                        ?>
        
                    <?php endwhile; // end of the loop. ?>
                    <?php else : ?>
                    
						<?php if ( have_posts() ) : ?>
                
                            <?php /* Start the Loop */ ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                
                                <?php
                                    /* Include the Post-Format-specific template for the content.
                                     * If you want to override this in a child theme, then include a file
                                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                     */
                                    get_template_part( 'content', get_post_format() );
                                ?>
                
                            <?php endwhile; ?>
                
                            <?php SilverStone_paging_nav(); ?>
                
                        <?php else : ?>
                
                            <?php get_template_part( 'content', 'none' ); ?>
                
                        <?php endif; ?>                    
                    
        			<?php endif; ?>
                </main><!-- #main -->
            </div><!-- #primary -->
                    
        </div>
    
    </div><!-- .front-posts -->
	<?php endif; ?>    

<?php get_footer(); ?>            