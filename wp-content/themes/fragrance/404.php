<?php 
/**
* 404 template used by Fragrance.
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

<div id="left">
  <header class="page-header">
    <h1 class="page-title">
      <?php _e('404 error','Fragrance');?>
    </h1>
  </header>
  <div class="post SearchResults">
    <h2 class="title2">
      <?php _e('Not Found','Fragrance');?>
    </h2>
    <p class="aligncenter">
      <?php _e('Sorry, but you are looking for something that is not here.','Fragrance');?>
    </p>
    <?php get_search_form(); ?>
  </div>
</div>
<!-- /content -->
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
