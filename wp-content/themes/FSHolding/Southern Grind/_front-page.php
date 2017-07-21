<?php

/*

	Template Name: Front Page

	Design Theme's Front Page to Display the Home Page if Selected

	Copyright: 2012-2013, D5 Creation, www.d5creation.com

	Based on the Simplest D5 Framework for WordPress

	Since Design 1.0

*/

?>

<?php get_header(); ?>



<div id="slide-container">	

	<div id="slide">

		<!-- Large Image slider begin-->

	

		 <?php echo do_shortcode("[metaslider id=269]"); ?> <!-- was id=67--> 

		

		<!-- Large Image slider end-->	

		<div style="position:relative;">

			<div style="position:absolute; left:1.5%;">

				<h2>IN THE NEWS</h2>

			</div>

			

			<h2 style="float:left; position:absolute;left:61%;">THE DAILY GRIND</h2>

			<h5 style="float:right; padding-top:4px;" >FOLLOW US ON <a href="https://www.facebook.com/pages/Southern-Grind/321500161203398?fref=ts" target="_blank">

			<img src="wp-content/themes/d5-design/images/socialFBsmall.png"></a></h5>

			

		</div>

	</div>

</div>







<div id="container" >

	<div id="frontPagePost">

	<?php $the_query = new WP_Query( 'showposts=1' ); ?>

	<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

		<li>

			<a href="<?php the_permalink() ?>">

			<div style="float:left;  display: inline; margin: 10px 10px 5px 10px;">

			<?php the_post_thumbnail(); ?>

			</div> 

			</a> 

			<p><?php the_excerpt(); ?></p>

		</li>

	<?php endwhile;?>

	<a href="<?php the_permalink() ?>"><b class="read-more">Read More</b></a>

	<img id="frontPagePostBottomBorder"src="<?php echo get_stylesheet_directory_uri(); ?>/images/postFooter.jpg">	

	</div>



<?php get_sidebar('right'); ?>



<?php get_template_part( 'featured-box' ); ?>

</div>

<?php get_footer(); ?>