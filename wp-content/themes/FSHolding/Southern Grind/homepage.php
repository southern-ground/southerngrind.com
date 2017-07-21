<?php

/*

	Template Name: Home Page

	Southern Grind Front Page

*/

?>

<?php get_header(); ?>

<?php $post = $wp_query->post; ?>

<div id="slide-container" class="home-page-slide">	

	<div id="index-slide-container">

		<div id="slide">

			<!-- Large Image slider begin-->

			 <?php echo do_shortcode("[metaslider id=".get_post_meta( $post->ID, "metaslider_id", true )."]"); ?> 

			<!-- Large Image slider end-->	

		</div>

		<div>

			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sliderRightSmall.jpg" usemap="#rightHero">

			<map name="rightHero">

			<area shape="rect" coords="200,300,371,357" href="http://southerngrind.com/our-story/" alt="Our Story">

			</map>

		</div>

	</div>

	<div id="content-header-wrapper">

    <h1 style="width:600px;">THE LEADING EDGE</h1>

    <h1>INDUSTRY CUTS</h1>

	</div>	

</div>





<div id="container">

  <div class="leading_edge">

    <?php echo get_post_meta( $post->ID, "leading_edge", true ); ?>

  </div>

  <div class="industry_cuts">

    <span class="quote open">“</span>

    <?php $cuts = get_field('industry_cuts'); ?>

  	<?php if( $cuts ): 

      $quote = $cuts[array_rand( $cuts, 1 )]; ?>

      <div class="quote_container"><?php echo $quote["industry_quote"]; ?> <span class="quote">”</span></div>

      <?php $link = $quote["industry_link"]; ?>

      <?php if( $link && $link ) { ?>

        <p class="source_name"><a href="<?php echo $link; ?>">- <?php echo $quote["industry_source"]; ?></a></p>

      <? } else { ?>

        <p class="source_name">- <?php echo $quote["industry_source"]; ?></p>

      <?php } ?>

  	<?php endif; ?>



  </div>

  <!--
  <h1 style="margin:20px 20px 0 0;display:inline-block;">THE DAILY GRIND</h1><p style="font-size:16px; display:inline-block;">See what people are saying about #SouthernGrind</p>

  <iframe src="http://ampsy.com/widget/439623?border=0" scrolling="no" style="border:none;overflow:hidden;width:100%;height:600px;"></iframe>
  -->



<?php get_footer(); ?>