<?php

/*

	Template Name: Resources Page

	Design Theme's Story Page to Display the Story Page if Selected



*/

?>

<?php get_header(); ?>

	<div class="pagenev">

		<div class="conwidth-resources">

			<div class="floatleft">

			<a href="http://southerngrind.com/fixedBlades.html" class="fancybox-iframe"><span class="subNavSmall">KNIFE CARE</span><br/>

			<span class="subNavBig">/FIXED BLADES</span></a>

			</div>

			<div class="floatleft">

			<a href="http://southerngrind.com/foldingBlades.html" class="fancybox-iframe"><span class="subNavSmall">KNIFE CARE</span><br/>

			<span class="subNavBig">/FOLDING BLADES</span></a>

			</div>

			<div class="floatleft">

			<a href="http://southerngrind.com/SouthernGrindWarranty.pdf" class="fancybox-iframe"><span class="subNavSmall"></span><br/>

			<span class="subNavBig">/WARRANTY INFO</span></a>

			</div>

			<div class="floatleft">

			<a href="http://southerngrind.com/laws.html" class="fancybox-iframe"><span class="subNavSmall"></span><br/>

			<span class="subNavBig">/KNIFE LAWS & RIGHTS</span></a>

			</div>

		<?php design_breadcrumbs() ?>

		</div>

	</div>



	<div id="container">

		<?php if (have_posts()) : while (have_posts()) : the_post();?>

		<?php the_content(); ?>

		<?php endwhile; endif; ?>

		<?php get_footer(); ?>

		<?php get_header(); ?>

