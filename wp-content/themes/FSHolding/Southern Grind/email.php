<?php
/*
	Template Name: Email Page
	Design Theme's Story Page to Display the Story Page if Selected

*/
?>
<?php 
get_header(); ?>


<div class="pagenev"><div class="conwidth"><?php design_breadcrumbs() ?></div></div>
<div id="container">
<div id="content">
<h2 style="text-align:center">Thanks for signing up for our newsletter. Please check your junk folder for correspondence.</h2>

<div id="page-nav">
<div class="alignleft"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
<div class="alignright"><?php next_posts_link('Next Entries &raquo;','') ?></div>
</div>
  
 
 <?php else: ?>
 

		 
<?php endif; ?>
 

</div>


<?php get_footer(); ?>