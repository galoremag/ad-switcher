<?php

/*
Plugin Name: Ad Switcher
Description: Toggle native ad unit slots on & off.
Version: 0.1.0
License: GPL
Author: Aaron Smulktis
Author URI: http://thickmaterial.com
*/


function hook_header_scripts() {
    ?>
			<script type='text/javascript'>

				var isMobile = false; //initiate as false
				// device detection
				if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
				|| /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;
				console.log(isMobile);

				googletag.cmd.push(function() {
					googletag.defineSlot('/60899964/Home_300x250', [300, 250], 'div-gpt-ad-1465835581876-9').addService(googletag.pubads());
					googletag.defineSlot('/60899964/Article_300x250_970x250', [[970, 250], [300, 250]], 'div-gpt-ad-1465835581876-0').addService(googletag.pubads());
					googletag.defineSlot('/60899964/Article_300x250_970x250_pos2', [[970, 250], [300, 250]], 'div-gpt-ad-1465835581876-1').addService(googletag.pubads());
					googletag.defineOutOfPageSlot('/60899964/Article_Interstitial', 'div-gpt-ad-1465835581876-2').addService(googletag.pubads());
					googletag.defineOutOfPageSlot('/60899964/Article_OOP', 'div-gpt-ad-1467924264305-1').addService(googletag.pubads());
					googletag.defineSlot('/60899964/Home_300x250_970x250_pos2', [[970, 250], [300, 250]], 'div-gpt-ad-1465835581876-10').addService(googletag.pubads());
					googletag.defineSlot('/60899964/Home_300x250_970x250_pos3', [[970, 250], [300, 250]], 'div-gpt-ad-1465835581876-11').addService(googletag.pubads());
					googletag.defineSlot('/60899964/Home_300x250_970x250_pos4', [[300, 250], [970, 250]], 'div-gpt-ad-1467230007625-0').addService(googletag.pubads());
					googletag.defineOutOfPageSlot('/60899964/Home_Interstitial', 'div-gpt-ad-1465835581876-12').addService(googletag.pubads());
					googletag.defineOutOfPageSlot('/60899964/Home_OOP', 'div-gpt-ad-1467924264305-3').addService(googletag.pubads());

					googletag.defineSlot('/60899964/Galore_Medium_Native', ['fluid'], 'div-gpt-ad-1470080205208-0').addService(googletag.pubads());
					googletag.defineSlot('/60899964/Galore_InContent_Medium_Native', ['fluid'], 'div-gpt-ad-1486941865725-0').addService(googletag.pubads());

					googletag.defineSlot('/60899964/Galore_Small_Native', [[240, 340], [260, 360]], 'div-gpt-ad-1486418137570-0').addService(googletag.pubads());

					// Mobile ad units
					if (isMobile) {
						googletag.defineSlot('/60899964/Galore_Mobile_Wallpaper', ['fluid'], 'div-gpt-ad-1470080205208-1').addService(googletag.pubads());
						googletag.defineSlot('/60899964/Article_Mobile_300x250', [300, 250], 'div-gpt-ad-1465835581876-3').addService(googletag.pubads());
						googletag.defineSlot('/60899964/Article_Mobile_300x250_pos2', [300, 250], 'div-gpt-ad-1465835581876-4').addService(googletag.pubads());
						googletag.defineOutOfPageSlot('/60899964/Article_Mobile_Interstitial', 'div-gpt-ad-1465835581876-5').addService(googletag.pubads());
						googletag.defineSlot('/60899964/Article_Mobile_Leaderboard', [[300, 50], [320, 50]], 'div-gpt-ad-1465835581876-6').addService(googletag.pubads());
						googletag.defineOutOfPageSlot('/60899964/Article_Mobile_OOP', 'div-gpt-ad-1467924264305-0').addService(googletag.pubads());
						googletag.defineSlot('/60899964/Home_Mobile_300x250', [300, 250], 'div-gpt-ad-1465835581876-13').addService(googletag.pubads());
						googletag.defineSlot('/60899964/Home_Mobile_300x250_pos2', [300, 250], 'div-gpt-ad-1465835581876-14').addService(googletag.pubads());
						googletag.defineSlot('/60899964/Home_Mobile_300x250_pos3', [300, 250], 'div-gpt-ad-1465835581876-15').addService(googletag.pubads());
						googletag.defineSlot('/60899964/Home_Mobile_300x250_pos4', [300, 250], 'div-gpt-ad-1467230007625-1').addService(googletag.pubads());
						googletag.defineOutOfPageSlot('/60899964/Home_Mobile_Interstitial', 'div-gpt-ad-1465835581876-16').addService(googletag.pubads());
						googletag.defineSlot('/60899964/Home_Mobile_Leaderboard', [[300, 50], [320, 50]], 'div-gpt-ad-1465835581876-17').addService(googletag.pubads());
						googletag.defineOutOfPageSlot('/60899964/Home_Mobile_OOP', 'div-gpt-ad-1467924264305-2').addService(googletag.pubads());
					}

					googletag.pubads().enableSingleRequest();
					googletag.pubads().collapseEmptyDivs();
					googletag.pubads().setTargeting('Category', ['beauty', 'pop', 'fashion', 'health', 'sex-dating']);
					googletag.enableServices();
				});
			</script>
			<!-- END DFP script -->
    <?php
}

add_action('wp_head', 'hook_header_scripts');

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
				<div id='div-gpt-ad-1486418137570-0'>
				<script>
				googletag.cmd.push(function() { googletag.display('div-gpt-ad-1486418137570-0'); });
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
				<hr />
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
