<?php
/**
* Comments template used by Fragrance.
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



if ( post_password_required() )
	return;
	 ?>
<!-- You can start editing here. -->
<?php if ( have_comments() ) : ?>

<h3 class="commenttitle">  
    <?php comments_number( __('no responses','Fragrance'), __('one responses','Fragrance'), __('% responses','Fragrance') ); ?>
</h3>
<div id="comments">
  <ol class="commentlist">
    <?php wp_list_comments(); ?>
  </ol>
</div>
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :  ?>
<div class="navigation">
  <div class="alignleft">
    <?php previous_comments_link() ?>
  </div>
  <div class="alignright">
    <?php next_comments_link() ?>
  </div>
</div>
<?php endif;  ?>
<?php	if ( ! comments_open() && get_comments_number() ) : ?>
<p class="nocomments">
  <?php _e( 'Comments are closed.' , 'Fragrance' ); ?>
</p>
<?php endif; ?>
<?php endif; // have_comments() ?>
<?php comment_form(); ?>
