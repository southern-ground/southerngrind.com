<?php

/* 	Design Theme's Featured Box to show the Featured Items of Front Page

	Copyright: 2012-2013, D5 Creation, www.d5creation.com

	Based on the Simplest D5 Framework for WordPress

	Since Design 1.0

*/

?>



<div class="featured-boxs">



<span class="featured-box">

<a href="<?php echo of_get_option('featured-link1', '#'); ?>" target="_blank">

<img src="<?php echo of_get_option('featured-image1', get_template_directory_uri() . '/images/featured-image1.jpg') ?>"/>

<span class="learn-more">Read more...</span>

</a>

</span>

<span class="featured-box">

<a href="<?php echo of_get_option('featured-link2', '#'); ?>">

<img src="<?php echo of_get_option('featured-image2', get_template_directory_uri() . '/images/featured-image2.jpg') ?>"/>

<!-- <span class="learn-more">Read more...</span> -->

</a>

</span>



</div> <!-- featured-boxs -->



