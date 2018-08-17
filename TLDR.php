<?php
/**
 * @package TLDR
 */
/*
Plugin Name: TL;DR Smart Reading Timer
Plugin URI: http://projects.karasik.org/tldr
Description: TL;DR (Too long, Don't read) is a simple plugin that adds to your website a min-read count, just like in Medium.com.
Version: 0.0.2
Author: Reuven Karasik (kinging123)
Author URI: http://reuven.karasik.org/
Text Domain: tldr
*/


require_once(plugin_dir_path(__FILE__) . 'class.php'); // import class
require_once(plugin_dir_path(__FILE__) . 'filters.php'); // import filters for non-supportive themes

require_once(plugin_dir_path(__FILE__) . 'dashboard.php'); // import dashboard settings


