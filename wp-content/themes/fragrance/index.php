<?php
/**
* Index template used by Fragrance.
*
* Authors: wpart
* Copyright: 2012
* {@link http://wpart.org/}
*
* Released under the terms of the GNU General Public License.
* You should have received a copy of the GNU General Public License,
* along with this software. In the main directory, see: /licensing/
* If not, see: {@link http://www.gnu.org/licenses/}.
*
* @package Fragrance.
* @since 1.0
*/

get_header(); ?>

<div id="lastestpost">
  <?php $i=1;
	if (have_posts() ||!isset($_GET['paged'])) :
		while (have_posts()) : the_post();

	 ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="top">
      <h2><a href="<?php the_permalink() ?>" rel="bookmark" title=" <?php the_title_attribute(); ?>">
        <?php if(the_title( '', '', false ) !='') the_title(); else _e('Untitled','Fragrance');?>
        </a></h2>
      <div class="postinfo"><span class="orange">
        <?php the_time('F jS, Y') ?>
        </span><span class="gray">
         <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_author(); ?></a>
        </span> | <span class="orange">
        <?php comments_popup_link( '<span class="leave-reply">' . __( 'Reply', 'Fragrance' ) . '</span>', _x( '1', 'comments number', 'Fragrance' ), _x( '%', 'comments number', 'Fragrance' ) ); ?>
        </span> </div>
      <div class="cb"></div>
      <div class="entry">
        <?php 
//This must be in one loop

if(has_post_thumbnail()) { ?>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="block">
        <?php 
	the_post_thumbnail();
	?>
        </a>
        <?php
} 
elseif ( ( function_exists( 'get_post_format' ) && 'gallery' == get_post_format( $post->ID ) ) || in_category( _x('gallery', 'gallery category slug','Fragrance') ) ) { ?>
        <a href="<?php echo get_post_format_link( 'gallery' ); ?>" title="<?php _e('View Galleries','Fragrance');?>">
        <?php _e('     More Galleries
','Fragrance');?>
        </a>
        <?php
   } 
else {
?>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="block">
        <?php 	
    echo '<span class="newpost'.$i.'"></span>'; 

	?>
        </a>
        <?php

}
?>
        <?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'Fragrance' ) ); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'Fragrance' ) . '</span>', 'after' => '</div>' ) ); ?>
      </div>
    </div>
    <div class="bottom"> </div>
  </div>
  <?php $i++; endwhile; ?>
  <?php else : ?>
  <?php endif; ?>
</div>
<div class="navigation cb">
  <div class="alignleft">
    <?php next_posts_link( __( '&laquo; Older Entries', 'Fragrance' )) ?>
  </div>
  <div class="alignright">
    <?php previous_posts_link(__( 'Newer Entries &raquo;', 'Fragrance' )) ?></div>
</div>
<div class="cb"></div>
</div>
</div>
<?php get_template_part('bottombar'); ?>
<!-- /content -->
<?php get_footer(); ?>
