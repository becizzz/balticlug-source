<?php
/**
* Archive template used by Fragrance.
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

<div class="SinglePage">
  <div id="left" class="archive">
    <div class="content">
      <?php if (have_posts()) : ?>
      <h1 class="pagetitle">
        <?php if ( is_day() ) : ?>
        <?php printf( __( 'Daily Archives: %s', 'Fragrance' ), '<span>' . get_the_date() . '</span>' ); ?>
        <?php elseif ( is_month() ) : ?>
        <?php printf( __( 'Monthly Archives: %s', 'Fragrance' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'Fragrance' ) ) . '</span>' ); ?>
        <?php elseif ( is_year() ) : ?>
        <?php printf( __( 'Yearly Archives: %s', 'Fragrance' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'Fragrance' ) ) . '</span>' ); ?>
        <?php else : ?>
        <?php _e( 'Blog Archives', 'Fragrance' ) ?>
        <?php endif; ?>
      </h1>
      <?php while (have_posts()) : the_post(); ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="articletitle">
      <h2><a href="<?php the_permalink() ?>" rel="bookmark" title=" <?php the_title_attribute(); ?>">
        <?php if(the_title( '', '', false ) !='') the_title(); else _e('Untitled','Fragrance');?>
        </a></h2>          <div class="postinfo">
            <?php the_author(); ?>
            |
            <?php the_time('F jS, Y') ?>
          </div>
        </div>
        <div class="comentnum">
          <?php comments_popup_link( '<span class="leave-reply">' . __( 'Reply', 'Fragrance' ) . '</span>', _x( '1', 'comments number', 'Fragrance' ), _x( '%', 'comments number', 'Fragrance' ) ); ?>
        </div>
        <div class="cb">
          <hr />
        </div>
        <div class="entry">
          <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'Fragrance' ) ); ?>
          <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'Fragrance' ) . '</span>', 'after' => '</div>' ) ); ?>
          <div class="tags">
            <p>
              <?php edit_post_link( __( 'Edit', 'Fragrance' ), '', ''); ?>
            </p>
            <p>
              <?php _e('Category: ', 'Fragrance'); the_category(', ') ?>
            </p>
            <p>
              <?php the_tags( __( 'TAG', 'Fragrance' ), ' , ' , ''); ?>
            </p>
          </div>
          </div>
          <div class="navigation cb">
            <div class="alignleft">
              <?php next_posts_link( __( '&laquo; Older Entries', 'Fragrance' )) ?>
            </div>
            <div class="alignright">
              <?php previous_posts_link(__( 'Newer Entries &raquo;', 'Fragrance' )) ?>
            </div>
          </div>
        </div>
        <?php endwhile;?>
        <?php else : ?>
        <?php endif; ?>
      </div>
    </div>
    <!-- /content -->
    <?php get_sidebar(); ?>
  </div>
</div>
</div>
<?php get_footer(); ?>
