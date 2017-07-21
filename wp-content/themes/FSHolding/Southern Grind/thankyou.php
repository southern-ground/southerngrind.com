<?php
/*
	Template Name: Thank You page
	Design Theme's Story Page to Display the Story Page if Selected

*/

get_header(); ?>
<div class="pagenev"><div class="conwidth"><?php design_breadcrumbs() ?></div></div>
<div id="container" style="padding:50px 0px 50px 100px;background-color:#010101; opacity:0.8; width:850px;">
<div style="width:700px;">
	
 <?php if (have_posts()) : while (have_posts()) : the_post();?>
 
 <h1 id="post-<?php the_ID(); ?>" </h1>
 <div class="entrytext">
 <?php the_content(); ?>
 </div><div class="clear"> </div>

 <?php endwhile; endif; ?>
 
</div>
      <?php  
      	// Authentication Variables  instruction from http://api.myemma.com/
      	$account_id = "1721589";
      	$public_api_key = "b1feae877699170d1467";
      	$private_api_key = "bacb4eaeec2d5e353cb0";
	
      	// Member data other than email should be passed in an array called "fields"
      	$member_data = array( "email" => $_POST['email'] );
	
      	// Set URL
      	$url = "https://api.e2ma.net/".$account_id."/members/add";

      	// Open connection
      	$ch = curl_init();
	
      	// Set the url, number of POST vars, POST data
      	curl_setopt($ch, CURLOPT_USERPWD, $public_api_key . ":" . $private_api_key);
      	curl_setopt($ch, CURLOPT_URL, $url);
      	curl_setopt($ch, CURLOPT_POST, count($member_data));
      	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($member_data));
      	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
      	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      	$head = curl_exec($ch);
      	$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
      	curl_close($ch);	

	
      ?>


<?php get_footer(); ?>