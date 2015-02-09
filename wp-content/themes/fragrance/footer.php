<?php
/**
* Footer template used by Fragrance.
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

 ?>
<div id="footer">
<div id="copyright">  <!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->


<a href="<?php echo home_url('/') ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
         <?php bloginfo('name'); ?></a> | <a href="<?php echo esc_url(__('http://www.wpart.org','Fragrance')); ?>" title="<?php esc_attr_e('wpart', 'Fragrance'); ?>"><?php printf('Fragrance'); ?></a> powered by <a href="<?php echo esc_url(__('http://wordpress.org','Fragrance')); ?>" title="<?php esc_attr_e('WordPress', 'Fragrance'); ?>"><?php printf('WordPress'); ?></a>


         
  <a href="#nav" id="backtop"></a></div>
            </div>
            <script language="javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js.js">
			</script>
  <?php wp_footer(); ?>
</body></html>