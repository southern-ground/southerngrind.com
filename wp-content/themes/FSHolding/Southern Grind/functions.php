<?php

/* 	Design Theme's Functions

	Copyright: 2012-2013, D5 Creation, www.d5creation.com

	Based on the Simplest D5 Framework for WordPress

	Since Design 1.0

*/





// BEGIN BAD MONKEY META BOX



function bm_get_combos( $page_id ) {

  // while the_repeater_field

  // get_sub_field, etc

  $arr = array();

  

  if( get_field( 'blade_options', $page_id ) ) {

    while( the_repeater_field( 'blade_options', $page_id ) ) {

      $blade = str_replace( " ", "-", get_sub_field( 'title' ) );

      

      if( get_field( 'handle_options', $page_id ) ) {

        while( the_repeater_field( 'handle_options', $page_id ) ) {

          $handle = str_replace( " ", "-", get_sub_field( 'title' ) );

            

          if( get_field( 'finish_options', $page_id ) ) {

            while( the_repeater_field( 'finish_options', $page_id ) ) {

              $finish = str_replace( " ", "-", get_sub_field( 'title' ) );

              

              array_push( $arr, $blade."_".$handle."_".$finish );

            }

          } // end finish

        }

      } // end handle

    }

  } // end blade



  return $arr;

}





function add_iumb_metabox($post_type) {





  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;

  $template_file = get_post_meta($post_id,'_wp_page_template',TRUE);



  if( $template_file == 'bad_monkey.php' ) {

    add_meta_box(

      'image-uploader-meta-box',

      'Bad Monkey Combination Images',

      'iumb_meta_callback',

      'page',

      'normal',

      'low'

    );

  }

}

add_action('add_meta_boxes', 'add_iumb_metabox');



function iumb_meta_callback($post) {

  wp_nonce_field( basename(__FILE__), 'iumb_meta_nonce' );

  ?> 

  <p><em>Select an image and enter the store link for each of the following combinations of options.</em></p>

  <p><em>Make sure to save the page first if any new options were added.</em></p>

  <?php

  // foreach combo

  foreach( bm_get_combos($post->ID) as $input_name ) {

  

    $id = get_post_meta($post->ID, $input_name, true);

    $link = get_post_meta($post->ID, $input_name."_link", true);

  	$image = wp_get_attachment_image_src($id, 'full-size');

    ?>

    <div class="iumb_wrapper" data-name="<?php echo $input_name; ?>">

      <h4><?php echo str_replace( "-", " ", str_replace( "_", ", ", $input_name ) ); ?></h4>

    	<?php if($id == ''){ ?> 

        <input style="display:none;" class="<?php echo $input_name; ?>" type="text" name="<?php echo '_'.$input_name; ?>" value="<?php echo $image ? $image[0] : ''; ?>"/>

        <a class="iumb-add button" href="#" data-uploader-title="Select an image" data-uploader-button-text="Select an image">Upload Image</a>

        <a class="change-image button none" href="#" data-uploader-title="Select an image" data-uploader-button-text="Select an image">Change</a>

        <a class="remove-image button none" href="#">Remove</a>

    	<?php } else { ?>

        <input style="display:none;" class="<?php echo $input_name; ?> iumb" type="text" name="<?php echo '_'.$input_name; ?>" value="<?php echo $image ? $image[0] : ''; ?>"/>

        <a class="iumb-add button none" href="#" data-uploader-title="Select an image" data-uploader-button-text="Select an image">Upload Image</a>

        <a class="change-image button" href="#" data-uploader-title="Select an image" data-uploader-button-text="Select an image">Change</a> 

        <a class="remove-image button" href="#">Remove</a>

      <?php } ?>



      <ul class="image-uploader-meta-box-list" id="image-uploader-meta-box-list_<?php echo $input_name; ?>">

        <?php if ($id) : ?>

    		  <input type="hidden" name="<?php echo $input_name; ?>" value="<?php echo $id; ?>">	

          <li>

          <img class="image-preview" src="<?php echo $image[0]; ?>">

          </li>

        <?php endif; ?>

      </ul>

      <input style="display:block;width:100%" placeholder="Enter store url for this combo" name="<?php echo $input_name."_link" ?>" value="<?php echo $link?>" type="text"/>

    </div>

<?php }

}



function iumb_meta_save($post_id) {

  if (!isset($_POST['iumb_meta_nonce']) || !wp_verify_nonce($_POST['iumb_meta_nonce'], basename(__FILE__))) return;



  if (!current_user_can('edit_post', $post_id)) return $post_id;



  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;



  foreach( bm_get_combos( $post_id ) as $input_name ) {

    if(isset($_POST[$input_name])) {

      update_post_meta($post_id, $input_name, $_POST[$input_name]);

    }

    if(isset($_POST[$input_name."_link"])) {

      update_post_meta($post_id, $input_name."_link", $_POST[$input_name."_link"]);

    }

  }

}

add_action('save_post', 'iumb_meta_save');



// CSS



function iumb_css(){

global $typenow; 

if ( 'page.php' || 'page-new.php' || $typenow == 'page' ) {

?>



<style type="text/css">

  #image-uploader-meta-box h4 {

    margin: 0;

    font-size: 1.1em;

    line-height: 1.5em;

  }

  .iumb_wrapper {

    display: inline-block;

    padding: 0 10px 10px;

    border: 1px solid rgb(238, 238, 238);

    min-height: 224px;

    margin: 5px;

    width: 46%;

  }

	.image-uploader-meta-box-list:after{

	  display:block;

	  content:'';

	  clear:both;	

	}

	.image-uploader-meta-box-list li {

	  float: left;

	  height:auto;

	  text-align: center;

	  margin: 10px 10px 10px 0;

	}

	input.iumb{

		width:50%;

	}

	.image-uploader-meta-box-list li img{

		max-width:400px;

	}

  .image-uploader-meta-box-list {

    margin: 0;

  }

	a.iumb-add.none, a.change-image.none, a.remove-image.none{

		display:none;

		visibility:hidden;

	}

</style>



<?php }

}
add_action('admin_head', 'iumb_css'); 



// JS  

function iumb_js(){

global $typenow; 

if ( $typenow == 'page' ) {

?>



<script type="text/javascript">



jQuery(function($) {



  var file_frame,

      input_name;



  $(document).on('click', '#image-uploader-meta-box a.iumb-add', function(e) {

    

  input_name = $( this ).parent( '.iumb_wrapper' ).attr( 'data-name' );



	e.preventDefault();



	if (file_frame) file_frame.close();



	file_frame = wp.media.frames.file_frame = wp.media({

	  title: $(this).data('uploader-title'),

		// Tell the modal to show only images.

		library: {

			type: 'image'

		},	  

	  button: {

		text: $(this).data('uploader-button-text'),

	  },

	  multiple: false

	});

  

	file_frame.on('select', function() {

	  var listIndex = $('#image-uploader-meta-box-list_' + input_name + ' li').index($('#image-uploader-meta-box-list_' + input_name + ' li:last')),

		  selection = file_frame.state().get('selection');



	  selection.map(function(attachment) {

		attachment = attachment.toJSON(),

		

		index      = listIndex;



		$('#image-uploader-meta-box-list_' + input_name).append('<li><input type="hidden" name="' + input_name + '" value="' + attachment.id + '"><img class="image-preview" src="' + attachment.sizes.thumbnail.url + '"></li>');

		

		$('input[name="_' + input_name + '"]').val(attachment.url);

		

		$('.iumb_wrapper[data-name="' + input_name + '"] a.iumb-add').addClass('none');

		$('.iumb_wrapper[data-name="' + input_name + '"] a.change-image').removeClass('none').show();

		$('.iumb_wrapper[data-name="' + input_name + '"] a.remove-image').removeClass('none').show();

		

	  });

	});



	makeSortable();

	

	file_frame.open();



  });



  $(document).on('click', '#image-uploader-meta-box a.change-image', function(e) {



  input_name = $( this ).parent( '.iumb_wrapper' ).attr( 'data-name' );



	e.preventDefault();



	var that = $(this);



	if (file_frame) file_frame.close();



	file_frame = wp.media.frames.file_frame = wp.media({

	  title: $(this).data('uploader-title'),

	  button: {

		text: $(this).data('uploader-button-text'),

	  },

	  multiple: false

	});



	file_frame.on( 'select', function() {

	  attachment = file_frame.state().get('selection').first().toJSON();



	  that.parent().find('input:hidden').attr('value', attachment.id);

	  that.parent().find('img.image-preview').attr('src', attachment.sizes.thumbnail.url);

	});



	file_frame.open();



  });



  function resetIndex() {

	$('#image-uploader-meta-box-list_' + input_name + ' li').each(function(i) {

	  $(this).find('input:hidden').attr('name', 'iumb');

	});

  }



  function makeSortable() {

	$('#image-uploader-meta-box-list_' + input_name).sortable({

	  opacity: 0.6,

	  stop: function() {

		resetIndex();

	  }

	});

  }



  $(document).on('click', '#image-uploader-meta-box a.remove-image', function(e) {

	

  input_name = $( this ).parent( '.iumb_wrapper' ).attr( 'data-name' );

	

	$('.iumb_wrapper[data-name="' + input_name + '"] a.iumb-add').removeClass('none');

	$('.iumb_wrapper[data-name="' + input_name + '"] a.change-image').hide();

	$(this).hide();

	

	$('input[name="' + input_name + '"]').val('');

	$('input[name="_' + input_name + '"]').val('');

	

	$('#image-uploader-meta-box-list_' + input_name + ' li').animate({ opacity: 0 }, 200, function() {

	  $(this).remove();

	  resetIndex();

	});

	

	e.preventDefault();

	

  });

  

  makeSortable();



});	



</script>



<?php }

}

add_action('admin_footer', 'iumb_js');





// END BAD MONKEY META BOX

  

register_nav_menus( array( 

  'main-menu' => "Main Menu",

  'footer-1' => "Footer Menu 1",

  'footer-2' => "Footer Menu 2",

  'footer-3' => "Footer Menu 3",

  'footer-4' => "Footer Menu 4"

) );

//	Set the content width based on the theme's design and stylesheet.

	if ( ! isset( $content_width ) ) $content_width = 584;



// Load the D5 Framework Optios Page

  if ( !function_exists( 'optionsframework_init' ) ) {

   define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );

   require_once dirname( __FILE__ ) . '/inc/options-framework.php';

   }



// 	Tell WordPress for wp_title in order to modify document title content

	function design_filter_wp_title( $title ) {

    $site_name = get_bloginfo( 'name' );

    $filtered_title = $site_name . $title;

    return $filtered_title;

	}

	add_filter( 'wp_title', 'design_filter_wp_title' );

	

// 	Tell WordPress for the Feed Link

	add_editor_style();

	add_theme_support( 'automatic-feed-links' );

	

// 	This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images

	if ( function_exists( 'add_theme_support' ) ) { 

	add_theme_support( 'post-thumbnails' );

	set_post_thumbnail_size( 600, 200, true );

	add_image_size( 'slide-thumb', 950, 300 ); // default Post Thumbnail dimensions (cropped)

	}

		

// 	WordPress 3.4 Custom Background Support	

	$design_custom_background = array(

	'default-color'          => 'EDEEEE',

	'default-image'          => '',

	);

	add_theme_support( 'custom-background', $design_custom_background );

	

// 	WordPress 3.4 Custom Header Support				

	$design_custom_header = array(

	'default-image'          => get_template_directory_uri() . '/images/logo.png',

	'random-default'         => false,

	'width'                  => 300,

	'height'                 => 70,

	'flex-height'            => false,

	'flex-width'             => false,

	'default-text-color'     => '000000',

	'header-text'            => false,

	'uploads'                => true,

	'wp-head-callback' 		 => '',

	'admin-head-callback'    => '',

	'admin-preview-callback' => '',

	);

	add_theme_support( 'custom-header', $design_custom_header );





// 	Functions for adding script

function design_enqueue_scripts() { 

wp_enqueue_style('design-style', get_template_directory_uri() . '/style.css', false);	

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) { 

	wp_enqueue_script( 'comment-reply' ); 

}



// wp_enqueue_script( 'jquery');

// wp_enqueue_script( 'design-menu-style', get_template_directory_uri(). '/js/menu.js' );

// wp_enqueue_style('design-gfonts1', 'http://fonts.googleapis.com/css?family=Marvel:400', false );

}

add_action( 'wp_enqueue_scripts', 'design_enqueue_scripts' );



add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );



function remove_jquery_migrate( &$scripts)

{

    if(!is_admin())

    {

        $scripts->remove( 'jquery');

    }

}

    

//	Enqueue comment replay script

	function design_enqueue_comment_reply() {

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) { 

		wp_enqueue_script( 'comment-reply' ); 

	}

	}

	add_action( 'wp_enqueue_scripts', 'design_enqueue_comment_reply' );



// 	Functions for adding some custom code within the head tag of site

	function design_custom_code() {

	if ( of_get_option ( 'feat-image' , get_template_directory_uri() . '/images/slide-image/thumb-back.jpg') != '' ) : 

	echo '<style>#container .thumb { background: url("' . of_get_option ( 'feat-image' , get_template_directory_uri() . '/images/thumb-back.jpg') . '") no-repeat scroll 0 0 #CCCCCC; }</style>' ;

	endif;

	}	

	add_action('wp_head', 'design_custom_code');





//	function tied to the excerpt_more filter hook.

	function design_excerpt_length( $length ) {

	global $dExcerptLength;

	if ($dExcerptLength) {

    return $dExcerptLength;

	} else {

    return 50; //default value

    } }

	add_filter( 'excerpt_length', 'design_excerpt_length', 999 );

	

	function design_excerpt_more($more) {

       global $post;

	return null;

	}

	add_filter('excerpt_more', 'design_excerpt_more');



// Content Type Showing

	function design_content() { the_content('<span class="read-more">Read More...</span>'); }



//	Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link

	function design_page_menu_args( $args ) {

	$args['show_home'] = true;

	return $args;

	}

	add_filter( 'wp_page_menu_args', 'design_page_menu_args' );

	

	function design_credit() {

		echo '&nbsp;| Design Theme by: <a href="http://d5creation.com" target="_blank"><img  src="' . get_template_directory_uri() . '/images/d5logofooter.png" /> D5 Creation</a> | Powered by: <a href="http://wordpress.org" target="_blank">WordPress</a>';

	}



//	Registers the Widgets and Sidebars for the site

	function design_widgets_init() {



	register_sidebar( array(

		'name' => 'Primary Sidebar', 

		'id' => 'sidebar-1',

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget' => "</aside>",

		'before_title' => '<h3 class="widget-title">',

		'after_title' => '</h3>',

	) );

	

	register_sidebar( array(

		'name' => 'Our Story Sidebar', 

		'id' => 'sidebar-2',

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget' => "</aside>",

		'before_title' => '<h3 class="widget-title">',

		'after_title' => '</h3>',

	) );

	

	register_sidebar( array(

		'name' => 'Footer Area One', 

		'id' => 'sidebar-4',

		'description' => __( 'An optional widget area for your site footer', 'design' ),

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget' => "</aside>",

		'before_title' => '<h3 class="widget-title">',

		'after_title' => '</h3>',

	) );



	register_sidebar( array(

		'name' => 'Footer Area Two', 

		'id' => 'sidebar-5',

		'description' => 'An optional widget area for your site footer', 

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget' => "</aside>",

		'before_title' => '<h3 class="widget-title">',

		'after_title' => '</h3>',

	) );



	register_sidebar( array(

		'name' => 'Footer Area Three', 

		'id' => 'sidebar-6',

		'description' => __( 'An optional widget area for your site footer', 'design' ),

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget' => "</aside>",

		'before_title' => '<h3 class="widget-title">',

		'after_title' => '</h3>',

	) );

	

	register_sidebar( array(

		'name' =>  'Footer Area Four', 

		'id' => 'sidebar-7',

		'description' => __( 'An optional widget area for your site footer', 'design' ),

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget' => "</aside>",

		'before_title' => '<h3 class="widget-title">',

		'after_title' => '</h3>',

	) );

	}

	add_action( 'widgets_init', 'design_widgets_init' );



	add_filter('the_title', 'design_title');

	function design_title($title) {

        if ( '' == $title ) {

            return '(Untitled)';

        } else {

            return $title;

        }

    }

	

	function design_breadcrumbs() { }

//	Remove WordPress Custom Header Support for the theme design

//	remove_theme_support('custom-header');







/* Disable the Admin Bar. */

add_filter( 'show_admin_bar', '__return_false' );



/* Remove the Admin Bar preference in user profile */

remove_action( 'personal_options', '_admin_bar_preferences' );

