<?php
/*
	Template Name: Full Width
 	design Theme's Full Width Page to show the Pages Selected Full Width
	Copyright: 2012-2013, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Design 1.0
*/
?>

<?php get_header(); ?>
<div class="pagenev"><div class="conwidth"><?php design_breadcrumbs() ?></div></div>
<div id="container">
<div id="content-full">
 <?php if (have_posts()) : while (have_posts()) : the_post();?>
 
 <h1 id="post-<?php the_ID(); ?>" </h1>
 <div class="entrytext">
 <?php the_content(); ?>
 </div><div class="clear"> </div>

 <?php endwhile; endif; ?>
 



</div>
<?php get_footer(); ?>