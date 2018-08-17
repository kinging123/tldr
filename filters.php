<?php

if(!class_exists('TLDR'))wp_die('TL;DR error number 443: No class on filters.php');


// Title
if(TLDR::get_var('force_title') == 'yes') {

	function tldr_add_to_title($title) {
		if(get_post_type() == 'post') // only for posts
			return $title . ' ' . TLDR::get_mins_read_text();
		else
			return $title;
	}

	add_filter('the_title', 'tldr_add_to_title');

}



// Date
if(TLDR::get_var('force_date') == 'yes') {

	function tldr_add_to_date($date) {
		if(get_post_type() == 'post')  // only for posts
			return $date . ' ' . TLDR::get_mins_read_text();
		else
			return $date;
	}

	add_filter('the_time', 'tldr_add_to_date');
	add_filter('the_date', 'tldr_add_to_date');

}