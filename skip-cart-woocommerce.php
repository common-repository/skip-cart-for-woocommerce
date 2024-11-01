<?php
/** * Plugin Name: Skip Cart for WooCommerce 
	* Version: 1.0.0 
	* Plugin URI: https://gplchimp.com/
	* Author: toddgassaway 
	* Author URI: https://gplchimp.com/
	* Description: Automatically redirects to checkout page after adding product to cart.
	* Requires at least: 3.7 
	* Tested up to: 4.9.4  */
	
add_filter ('add_to_cart_redirect', 'easy_skw_redirect_to_checkout');
function easy_skw_redirect_to_checkout() {return WC()->cart->get_checkout_url();}
?>