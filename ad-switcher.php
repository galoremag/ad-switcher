<?php

/*
Plugin Name: Ad Switcher
Description: Toggle between ad unit setups
Version: 0.1.0
License: GPL
Author: Aaron Smulktis
Author URI: http://thickmaterial.com
*/

if ( is_admin() ){
  add_action( 'admin_menu', 'ad_switcher' );
  add_action('admin_init', 'ad_switcher_init');
  // add_action( 'admin_init', 'register_mysettings' );
} else {
  // non-admin enqueues, actions, and filters
}

// 1) Link 2) Page title 3) capability [admin only] 4) slug 5) callback
function ad_switcher() {
    add_options_page(
        'Ad Switcher',
        'Ad Switcher',
        'manage_options',
        'ad-switcher',
        'ad_switcher_page'
    );
}

// Make the options page
function ad_switcher_page() {
    ?>
    <div class="wrap">
        <h2>Ad Switcher Options</h2>
        <form action="options.php" method="post">
        <?php settings_fields('ad_switcher_init'); ?>
        <?php do_settings_sections('ad-switcher'); ?>

        <input name="Submit" type="submit" value="<?php esc_attr_e('Save Changes'); ?>" />
        </form></div>
    </div>
    <?php
}

// Initialize
function ad_switcher_init() {
  // DB field, stored in one field as array
  register_setting( 'ad_switcher_options', 'ad_switcher_options', 'ad_switcher_options_validate' );

  // Add section of settings
  // 1) unique ID 2) title output 3) callback 4) page name
  add_settings_section('ad_switcher_wallpaper', 'Wallpaper Options', 'ad_switcher_wallpaper_text', 'ad-switcher');

  // 1) unique ID 2) title output 3) callback 4) page attached 5) ID of settings section
  add_settings_field('ad_switcher_text_string', 'Ad Switcher Text Input', 'ad_switcher_setting_string', 'ad-switcher', 'ad_switcher_wallpaper');

  add_settings_field(
      'wallpaper',
      'Is the wallpaper visible?',
      'ad_switcher_wallpaper_callback',
      'ad-switcher',
      'ad_switcher_wallpaper'
  );

}

// Wallpaper paragraph
function ad_switcher_wallpaper_text() {
  echo '
    <p>
      This controls whether or not the wallpaper is visible on the site or not. The mobile wallpaper is currently only visible on mobile devices, and it appears as the very first thing on the site, fullscreen, above the main carousel.
    </p>
  ';
}

// Add input element option
function ad_switcher_setting_string() {
  $options = get_option('ad_switcher_options');
  echo "<input id='ad_switcher_text_string' name='ad_switcher_options[text_string]' size='40' type='text' value='{$options['text_string']}' />";
}

// TEST CHECKBOX OPTION
function ad_switcher_wallpaper_callback() {

    $options = get_option( 'ad_switcher_options' );

    $html = '<input type="checkbox" id="wallpaperCheckbox" name="ad_switcher_options[checkbox_example]" value="1"' . checked( 1, $options['checkbox_example'], false ) . '/>';
    $html .= '<label for="wallpaperCheckbox">Mobile</label>';

    echo $html;

}

// Validate all the options
function plugin_options_validate($input) {
  $options = get_option('ad_switcher_options');
  $options['text_string'] = trim($input['text_string']);
  if(!preg_match('/^[a-z0-9]{32}$/i', $options['text_string'])) {
    $options['text_string'] = '';
  }
  return $options;
}

?>
