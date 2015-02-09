<?php
/**
 * @package SilverStone
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if( get_theme_mod('SilverStone_show_title_post', 'yes') == 'yes' ){ the_title( '<h1 class="entry-title">', '</h1>' ); } ?>
		<?php if( get_theme_mod('SilverStone_show_meta_post', 'yes') == 'yes' ):?>
		<div class="entry-meta">
			<?php SilverStone_posted_on(); ?>
		</div><!-- .entry-meta -->
        <?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'silverstone' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
			<?php
				if( get_theme_mod('SilverStone_show_cats_post', 'yes') == 'yes' ) :
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( ' ' );
				if ( $categories_list && SilverStone_categorized_blog() ) :
			?>
			<p class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'silverstone' ), $categories_list ); ?>
			</p>
			<?php endif;  endif; // End if categories ?>

			<?php
				if( get_theme_mod('SilverStone_show_tags_post', 'yes') == 'yes' ) :
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', '' );
				if ( $tags_list ) :
			?>
			<p class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'silverstone' ), $tags_list ); ?>
			</p>
			<?php endif; endif; // End if $tags_list ?>

			<?php edit_post_link( __( 'Edit', 'silverstone' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
