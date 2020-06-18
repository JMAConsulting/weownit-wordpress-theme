<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<footer class="layout-footer">
    <div class="region region-footer">


        <div id="block-footerlogo" class="block block-block-content block-block-content5142afcf-2ba4-4e75-baf7-e5d3cbe6dcb0 block-footer-logo">
            <div class="formattedText field fieldName-body fieldType-text-with-summary layout-fieldLabel-hidden field-item"><a href="/"><img alt="We own it" src="<?php echo get_stylesheet_directory_uri(); ?>/img/WOI%20-%20Footer%20Logo.png"></a>
            </div>

        </div>
        <nav role="navigation" aria-labelledby="block-woi-footer-menu" id="block-woi-footer" class="block blockMenu navigation menu-footer block-woi-footer-menu">
            <h2 class="visuallyHidden" id="block-woi-footer-menu">Footer menu</h2>
          <?php wp_nav_menu( array( 'menu' => 'Footer Menu', 'container' => '', ) ); ?>
        </nav>


        <div id="block-copyright" class="block block-block-content block-block-contentdab75143-7771-4d1b-80d0-7a6fd4fc499c block-copyright">

            <div class="formattedText field fieldName-body fieldType-text-with-summary layout-fieldLabel-hidden field-item"><p class="copyright-footer">Copyright © 2019&nbsp;We Own It. All rights reserved.</p>
            </div>

        </div>
        <div class="clear-all" style="clear: both; height: 0px;">&nbsp;</div>
    </div>

</footer>

		<?php wp_footer(); ?>

	</body>
</html>
