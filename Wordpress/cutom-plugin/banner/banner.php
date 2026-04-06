<?php

/*
Plugin Name: Banner
Plugin URI: http://example.com
Description: This is just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Sarah Jensen 
Version: 1.0
Author URI: 
Text Domain: Sarah Jensen
*/


function lemonade_footer_text()
{
    echo '<p>&copy; ' . date('Y') . ' Lemonade Stand. All rights reserved.</p>';
}

add_action('wp_footer', 'lemonade_footer_text');

?>