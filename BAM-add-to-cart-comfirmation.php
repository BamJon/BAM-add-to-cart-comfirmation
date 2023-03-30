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




add_filter('wc_add_to_cart_message_html', function($messages, $products, $show_qty) {
$messages = __('<div class="Success-add-to-basket">Great choice! Items(s) add to basket.  <a class="View_Basket button>View Basket</a></div>');

return $messages;
},10,3);


add_action("");

function bam_haf_Comfirmations_Add_To_Baskets

?>