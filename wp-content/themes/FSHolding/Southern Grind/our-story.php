<?php

/*

	Template Name: Our Story Page

	Design Theme's Story Page to Display the Story Page if Selected



*/

?>

<?php get_header(); ?>



<div id="slide-container2">

	<div id="slide2">

		<div class="our-story-hero">

      <a href="Javascript:void(0);" class="video_clicker"><img class="video_thumb" src="<?php echo get_stylesheet_directory_uri(); ?>/images/videothumb.jpg" /></a>

      <iframe style="display:none;" src="" class="our_story_video" frameborder="0" width="500" height="281" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

    </div>

	<div>

		<h2 class="ourStoryHeroSubTitle">CUTTING-EDGE BLADES. ONE-OF-A-KIND CAUSE.</h2>			

	</div>

</div>



<p class="clearDiv20"></p>

<div id="container">

	<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

			<div class="entrytext">

 				<?php if (of_get_option('tpage', '') != '1' ): ?><div class="thumb"><?php the_post_thumbnail(); ?></div><?php endif; ?>

 				<?php the_content('<span class="read-more">Read the rest of this page &raquo;</span>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>

		</div>

        <?php endwhile; ?>

        <div class="clear"> </div>

		<?php else: ?>

		<?php endif; ?>

	</div>

	<p class="clearDiv40"></p>

	

	<?php get_sidebar('ourstory'); ?>



	<?php get_footer(); ?>