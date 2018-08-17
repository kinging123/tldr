<?php
/**
 * @package TLDR
 */

/**
* 
*/
class TLDR
{
    /*** Defaults ***/
	private static 	$reading_speed = 170, // Words per minute
					$image_staring_time = 0.1, /* 2 sec */ // The time it takes you to look at an image (mins)
					$format = "(%% min. read)", // The format of the text
					$force_title = "no", // Forcing minutes to title
					$force_date = "no"; // Forcing minutes to fate


	
	public static function get_mins_read($post_id = 0)
	{
		if(!$post_id || $post_id == 0)$post_id = get_the_ID();

		$thepost = get_post($post_id);
		$post_content = $thepost->post_content;

		$img_count = substr_count($post_content, '<img');

		$post_content = apply_filters('the_content', strip_tags(strip_shortcodes($post_content)));
		$post_content = str_replace(']]>', ']]&gt;', $post_content);


		$post_content = explode(' ', $post_content);
		$word_count = count( $post_content );


		$mins_read = $word_count/ self::get_var('reading_speed');

		// Add images
		$mins_read += $img_count * self::get_var('image_staring_time');

		$mins_read = ceil($mins_read);
		return $mins_read;
	}


	public static function mins_read($post_id = 0)
	{
		echo self::get_mins_read($post_id);
	}


	public static function mins_read_text($post_id = 0)
	{
		echo self::get_mins_read_text($post_id);

	}

	public static function get_mins_read_text($post_id = 0){
		return sprintf(str_replace('%%','%s',self::get_var('format')), self::get_mins_read($post_id));
	}

	public static function get_var($varname) {
		if(get_option('tldr_'.$varname))
			return get_option('tldr_'.$varname);
		else
			return self::$$varname;

	}
}