<?php

/*

	Template Name: News

	Design Theme's Story Page to Display the Story Page if Selected



*/

?>

<?php get_header(); ?>



<div id="slide-container2">

	<div id="slide2">

		<!-- Large Image slider begin-->

    <a href="https://shop.southerngrind.com/ProductDetails.asp?ProductCode=G2-101-K"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-hero-G2.jpg"></a>		<!-- Large Image slider end-->

		<h2 class="newsHeroTitle">SOUTHERN GRIND IN THE NEWS</h2>			

	</div>

</div>



<div id="container">

	<div id="content-news">

		<ul id="newsBlogPara">			<!-- wp_Query('showposts=5') ... use to show sticky-->

		<?php $the_query = new WP_Query( array( 'post__not_in' => get_option( 'sticky_posts' ) )  ); ?>

		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

			<li>

				<a href="<?php the_permalink() ?>" target="_blank">

				<div class="newsThumbnail"><?php the_post_thumbnail(); ?>

				</div>

				<span class="newsTitle"><?php the_title(); ?></span>

				</a> 

				<?php the_excerpt(); ?>

			</li>

		<div class="clearDiv30"></div>

		<?php endwhile;?>

		</ul>

	</div>	

	

	<span class="featured-box" style="float:right;">

		<a href="<?php echo of_get_option('featured-link2', '#'); ?>">

		<img src="<?php echo of_get_option('featured-image2', get_template_directory_uri() . '/images/featured-image2.jpg') ?>"/>

		<!-- <span class="learn-more"></span> -->

		</a>

	</span>





	<?php get_footer(); ?>