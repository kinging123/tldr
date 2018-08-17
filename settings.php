<?php
if (!current_user_can('manage_options')) {
	wp_die('You do not have sufficient permissions to access this page.');
}
?>

<div class="wrap">
	 <h2>TLDR Settings</h2>

	<form method="POST" action="">
		<table class="form-table">
			<tr valign="top">
				<th scope="row">
					<label for="words_min">
						Words / min.
					</label>
				</th>
				<td>
					<input type="text" name="reading_speed" id="reading_speed" size="25" value="<?php if(class_exists('TLDR'))echo TLDR::get_var('reading_speed'); ?>" />
				</td>
			</tr>

			<tr valign="top">
				<th scope="row">
					<label for="image_staring">
						Image staring time (mins)
					</label>
				</th>
				<td>
					<input type="text" name="image_staring_time" id="image_staring_time" size="25" value="<?php if(class_exists('TLDR'))echo TLDR::get_var('image_staring_time'); ?>" />
				</td>
			</tr>

			<tr valign="top">
				<th scope="row">
					<label for="format">
						Format (include %% as the min. number)
					</label>
				</th>
				<td>
					<input type="text" name="format" id="format" size="25" value="<?php if(class_exists('TLDR'))echo TLDR::get_var('format'); ?>" />
				</td>
			</tr>

			<tr valign="top">
				<th scope="row">
					<label for="force_title">
						Force TL;DR on post title (use only if your theme does not support TL;DR!)
					</label>
				</th>
				<td>
					<input type="checkbox" name="force_title" id="force_title" value="yes" <?php if(class_exists('TLDR') && TLDR::get_var('force_title') == 'yes'){echo 'checked';}?> />
				</td>
			</tr>

			<tr valign="top">
				<th scope="row">
					<label for="force_date">
						Force TL;DR on post date (use only if your theme does not support TL;DR!)
					</label>
				</th>
				<td>
					<input type="checkbox" name="force_date" id="force_date" value="yes" <?php if(class_exists('TLDR') && TLDR::get_var('force_date') == 'yes'){echo 'checked';}?> />
				</td>
			</tr>
		</table>
		<p>
			<input type="submit" value="Save settings" class="button-primary"/>
		</p>

		<input type="hidden" name="update_settings" value="Y" />
	</form>
</div>
