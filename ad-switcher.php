<?php

/*
Plugin Name: Ad Switcher
Description: Toggle native ad unit slots on & off.
Version: 0.1.0
License: GPL
Author: Aaron Smulktis
Author URI: http://thickmaterial.com
*/

add_action( 'admin_menu', 'ads_switcher_add_admin_menu' );
add_action( 'admin_init', 'ads_switcher_settings_init' );

add_action('sm_unit', 'sm_script', 1);
add_action('md_unit', 'md_script', 1);
add_action('lg_unit', 'lg_script', 1);

function ads_switcher_add_admin_menu(  ) {

	add_options_page( 'Ad Switcher', 'Ad Switcher', 'manage_options', 'ad_switcher', 'ads_switcher_options_page' );

}


function ads_switcher_settings_init(  ) {

	register_setting( 'pluginPage', 'ads_switcher_settings', 'validate' );

	add_settings_section(
		'ads_switcher_pluginPage_section',
		__( 'Native Ad Units', 'wordpress' ),
		'ads_switcher_settings_section_callback',
		'pluginPage'
	);

	add_settings_field(
		'ads_switcher_checkbox_field_0',
		__( 'Small (The Daily Dish)', 'wordpress' ),
		'ads_switcher_checkbox_field_0_render',
		'pluginPage',
		'ads_switcher_pluginPage_section'
	);

	add_settings_field(
		'ads_switcher_checkbox_field_1',
		__( 'Medium (page feeds)', 'wordpress' ),
		'ads_switcher_checkbox_field_1_render',
		'pluginPage',
		'ads_switcher_pluginPage_section'
	);

	add_settings_field(
		'ads_switcher_checkbox_field_2',
		__( 'Large (mobile wallpaper)', 'wordpress' ),
		'ads_switcher_checkbox_field_2_render',
		'pluginPage',
		'ads_switcher_pluginPage_section'
	);


}


function ads_switcher_checkbox_field_0_render(  ) {

	$options = get_option( 'ads_switcher_settings' );
	?>
	<input type='checkbox' name='ads_switcher_settings[ads_switcher_checkbox_field_0]' <?php checked( $options['ads_switcher_checkbox_field_0'], 1 ); ?> value='1'>
	<?php

}


function ads_switcher_checkbox_field_1_render(  ) {

	$options = get_option( 'ads_switcher_settings' );
	?>
	<input type='checkbox' name='ads_switcher_settings[ads_switcher_checkbox_field_1]' <?php checked( $options['ads_switcher_checkbox_field_1'], 1 ); ?> value='1'>
	<?php

}


function ads_switcher_checkbox_field_2_render(  ) {

	$options = get_option( 'ads_switcher_settings' );
	?>
	<input type='checkbox' name='ads_switcher_settings[ads_switcher_checkbox_field_2]' <?php checked( $options['ads_switcher_checkbox_field_2'], 1 ); ?> value='1'>
	<?php

}


function ads_switcher_settings_section_callback(  ) {

	echo __( 'Toggle the visibility of these ad units on & off', 'wordpress' );

}

// Validate all the options
function ad_switcher_settings_validate($input) {
	$options = get_option( 'ad_switcher_settings' );
  if ( ! isset( $input['checkbox'] ) || $input['checkbox'] != '1' )
    $options['checkbox'] = 0;
  else
    $options['checkbox'] = 1;
  return $options;
}

function validate($input) {
	// All checkboxes inputs
	$valid = array();

	//Cleanup
	$valid['ads_switcher_checkbox_field_0'] = (isset($input['ads_switcher_checkbox_field_0']) && !empty($input['ads_switcher_checkbox_field_0'])) ? 1 : 0;
	$valid['ads_switcher_checkbox_field_1'] = (isset($input['ads_switcher_checkbox_field_1']) && !empty($input['ads_switcher_checkbox_field_1'])) ? 1 : 0;
	$valid['ads_switcher_checkbox_field_2'] = (isset($input['ads_switcher_checkbox_field_2']) && !empty($input['ads_switcher_checkbox_field_2'])) ? 1 : 0;

	return $valid;
}

// DEBUGGIN' & console loggin
function debug_to_console( $data ) {

	if ( is_array( $data ) ) {
			$output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
	} else {
			$output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";
	}

	echo $output;
}

function sm_unit() {
    do_action('sm_unit');
}

function md_unit() {
    do_action('md_unit');
}

function lg_unit() {
    do_action('lg_unit');
}

function sm_script() {
	$options = get_option('ads_switcher_settings');
	if ($options['ads_switcher_checkbox_field_0'] == '1') {
		echo __(
			"
				<!-- /60899964/Galore_Small_Native -->
				<div id='div-gpt-ad-1475101281851-0'>
				<script>
				googletag.cmd.push(function() { googletag.display('div-gpt-ad-1475101281851-0'); });
				</script>
				</div>
			"
		);
	}
}

function md_script() {
	$options = get_option('ads_switcher_settings');
	if ($options['ads_switcher_checkbox_field_1'] == '1') {
		echo __(
			"
				<!-- /60899964/Galore_Medium_Native -->
				<div id='div-gpt-ad-1470080205208-0'>
				<script>
				googletag.cmd.push(function() { googletag.display('div-gpt-ad-1470080205208-0'); });
				</script>
				</div>
				<hr />
			"
		);
	}
}

function lg_script() {
	$options = get_option('ads_switcher_settings');
	if ($options['ads_switcher_checkbox_field_2'] == '1') {
		echo __(
			"
				<!-- /60899964/Galore_Mobile_Wallpaper -->
				<div id='div-gpt-ad-1470080205208-1'>
				<script>
				googletag.cmd.push(function() { googletag.display('div-gpt-ad-1470080205208-1'); });
				</script>
				</div>
			"
		);
	}
}

// Add the page in backend
function ads_switcher_options_page(  ) {

	?>
	<form action='options.php' method='post'>

		<h2>Ad Switcher</h2>

		<?php
		settings_fields( 'pluginPage' );
		do_settings_sections( 'pluginPage' );
		submit_button();
		?>

	</form>
	<?php

}

?>
