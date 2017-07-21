<?php
/**
 * Design Options Page
 * @ Copyright: D5 Creation, All Rights, www.d5creation.com
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = 'design';
	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'design'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {
	
	add_filter( 'wp_default_editor', create_function('', 'return "html";') );
	
	$options[] = array(
		'name' => 'Design Theme Options',
		'type' => 'heading');
		
	$options[] = array(
		'desc' => '<span class="donation">If you like this FREEE Theme You can consider for a small Donation to us. Your Donation will be spent for the Disadvantaged Children and Students. You can visit our <a href="http://d5creation.com/donate/" target="_blank"><strong>DONATION PAGE</strong></a> and Take your decision.</span><br /><br /><span class="donation">Need More Features and Options? Try <a href="http://d5creation.com/theme/design" target="_blank"><strong>Design Extend</strong></a>. Design Extend has more than 100 Theme Options and Features including Exciting Slide Images or Video. You can control almost everything within WordPress Dashboard. Please visit to see the working of Design Theme <a href="http://demo.d5creation.com/wp/themes/design/" target="_blank"><strong>HERE (Demo)</strong></a>.</span>',
		'type' => 'info');
		

	
// Quotation	

		
	$options[] = array(
		'name' => 'Show the Footer Sidebar.',
		'desc' => 'Uncheck this if you do not want to show the footer sidebar (Widgets) automatically.',
		'id' => 'fsidebar',
		'std' => '1',
		'type' => 'checkbox');
		
// Front Page Fearured Images

	$fbsin=array("1","2");
	foreach ($fbsin as $fbsinumber) {
	
	$options[] = array(
		'desc' => '<span class="featured-area-title">' . 'Front Page Featured Image: 0' . $fbsinumber . '</span>',
		'type' => 'info');
		
	$options[] = array(
		'name' => 'Featured Image',
		'desc' => 'Upload an image for the Featured Box. 270px X 200px image is recommended. If you do not want to show anything here leave the box blank.',
		'id' => 'featured-image' . $fbsinumber,
		'std' => get_template_directory_uri() . '/images/featured-image' . $fbsinumber . '.jpg',
		'type' => 'upload');	
	
	$options[] = array(
		'name' => 'Featured Link',
		'desc' => 'Input your Featured Image Link here.',
		'id' => 'featured-link' . $fbsinumber,
		'std' => '#',
		'type' => 'text');

	}
	
// Front Page Fearured Contents
	
	$fbsind=array("1","2");
	foreach ($fbsind as $fbsinumberd) {
	


	}
	
	$options[] = array(
		'name' => 'Do not show any Posts or Page in the Front Page ', 
		'desc' => 'Check the Box if you do not want to show any Posts or Page in the Front Page', 
		'id' => 'fpost',
		'std' => '0',
		'type' => 'checkbox');
		
	$options[] = array(
		'name' => 'Featured Image Background with Posts/Pages', 
		'desc' => 'Upload an image for the Featured Image Background.600px X 200px image is recommended.', 
		'id' => 'feat-image',
		'std' => get_template_directory_uri() . '/images/thumb-back.jpg',
		'type' => 'upload');
	
	return $options;
}

/*
 * This is an example of how to add custom scripts to the options panel.
 * This example shows/hides an option when a checkbox is clicked.
 */

add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');

function optionsframework_custom_scripts() { ?>

<?php
}