<?php

/*
Plugin Name: BAM add to cart comfirmations
Version: 1.0
Author: Jon Barton 
Description: Changing the add to basket comfirmations on the PDP
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

 
 
/* adding a filter to change it add to cart messaging on PDP using local host media wordpress for the image. */ 
add_filter('wc_add_to_cart_message_html', function($messages, $products, $show_qty) {
$messages = __('<div class="Success-add-to-basket"><span><img alt="comfirmation_tick" src="http://localhost:8888/wordpress/wp-content/uploads/2023/03/tick-icon@2x.png" width="25" height="25"> <p class="Message-cart">Great choice! Item(s) added to basket.</p></span> <a class="View_Basket" href="/http://localhost:8888/wordpress/basket/"> View Basket</a></div>');
return $messages;
},10,3);


add_action('woocommerce_single_product_summary', 'bam_haf_Comfirmations_Add_To_Baskets', 1);

function bam_haf_Comfirmations_Add_To_Baskets() {

    if (is_product()) {
        /* css for the new UI conformation  */
    wp_register_style("bam_PDP_styles", plugins_url('BAM-add-to-cart-comfirmation/assets/css/PDP.css'));
    wp_enqueue_style("bam_PDP_styles");
    }
}

/* hiding the check mark as it flashes when you clicked the button*/
add_action('flatsome_before_product_page','bam_haf_hide_old_tick', 1 );
function bam_haf_hide_old_tick() {
    if (is_product()) {
        wp_register_style("bam_PDP_check_styles", plugins_url('BAM-add-to-cart-comfirmation/assets/css/hide_check_mark.css'));
        wp_enqueue_style("bam_PDP_check_styles");
        }

}


 


?>