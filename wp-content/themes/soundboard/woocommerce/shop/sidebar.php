<?php
/**
 * Sidebar
 *
 * @author 	WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
   
if ( is_active_sidebar( 'woocommerce_sidebar' ) ) :  ?>

<div id="sidebar" class="grid_3">  
         <div id="woocommerce_sidebar" class="widget-area">
              <?php dynamic_sidebar( 'woocommerce_sidebar' ); ?>
         </div><!-- #woocommerce_sidebar .widget-area -->
</div><!-- #sidebar-->

<?php endif;                        
        
?>    