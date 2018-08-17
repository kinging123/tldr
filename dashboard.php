<?php
function tldr_setup_admin_menus() {
	$parent_slug = "tldr-settings-page";
	$page_title = "TL;DR Plugin Settings";
	$menu_title = "TL;DR Settings";
	$capability = "manage_options";


	add_menu_page( $page_title, $menu_title, $capability,
		$parent_slug, 'get_settings_page', 'dashicons-visibility');
}

add_action("admin_menu", "tldr_setup_admin_menus");


function get_settings_page () {


	if (isset($_POST["update_settings"])) {
        // Save all keys
		$keys = array("reading_speed", "image_staring_time", "format", "force_title", "force_date");
		foreach($keys as $key) {
			update_option("tldr_" . $key, esc_attr($_POST[$key]));
		}

	}

	include 'settings.php';
}