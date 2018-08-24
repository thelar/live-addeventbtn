<?php
/*
Plugin Name: Live Add Event
Description: Custom plugin to display the Add Event button - https://www.addevent.com/add-to-calendar-button
Author: Kevin Price-Ward
Version: 1.0
*/
function live_addevent_script()
{
	wp_enqueue_script('addevent/main.js', 'https://addevent.com/libs/atc/1.6.1/atc.min.js', [], null, true);
	wp_enqueue_style('addevent/theme7.css', plugin_dir_url(__FILE__) . 'css/theme7.css', false, null);
}
add_action('wp_enqueue_scripts', 'live_addevent_script');

function live_addevent_shortcode(){
	?>
	<div title="Add date to calendar" class="addeventatc" data-styling="none">
		Add date to calendar
		<span class="start">12/13/2018 09:00 AM</span>
		<span class="end">12/13/2018 05:00 PM</span>
		<span class="timezone">Europe/London
</span>
		<span class="title">Jewson Live 2018</span>
		<span class="description">The UK's biggest Merchant show</span>
		<span class="location">NEC, Birmingham</span>
	</div>
	<?php
}
add_shortcode('addevent', 'live_addevent_shortcode');