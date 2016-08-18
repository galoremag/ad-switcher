<?php

/*
Plugin Name: Ad Switcher
Description: Toggle between ad unit setups
Version: 0.1.0
License: GPL
Author: Aaron Smulktis
Author URI: http://thickmaterial.com
*/

add_action( 'admin_menu', 'ad_switcher' );

function ad_switcher() {
    add_options_page(
        'Ad Switcher',
        'Ad Switcher',
        'manage_options',
        'ad-switcher',
        'ad_switcher_page'
    );
}

function ad_switcher_page() {
    ?>
    <div class="wrap">
        <h2>My Plugin Options</h2>
        <p>your form goes here</p>
    </div>
    <?php
}

?>
