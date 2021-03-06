<?php

/* 	Design Theme's Single Page to display Single Page or Post
	Copyright: 2012-2013, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Design 1.0
*/


get_header(); ?>

<div id="container" style="padding-top:0;">

<div id="contentPost">
          
		  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          
            <h1 class="page-title"><?php the_title(); ?></h1>
            <span class="postmetadata"><h3><?php the_time('F j, Y'); ?></h3><div class="content-ver-sep"> </div><h2>By: <?php the_author_posts_link() ?></h2>Posted in <?php the_category(', ') ?><?php the_tags('<br />Tags: ', ', ', ''); ?><br /><h5><?php edit_post_link('Edit'); ?></h5></span>	
            <div class="entrytext"><div class="thumb"><?php the_post_thumbnail(); ?></div>
			<?php the_content(); ?>
            </div>
            <div class="clear"> </div>
            <div class="up-bottom-border">
            <div class="content-ver-sep"></div><br />
			<?php  wp_link_pages( array( 'before' => '<div class="page-link"><span>' . 'Pages:' . '</span>', 'after' => '</div>' ) ); ?>
            <div class="floatleft"><?php previous_post_link('&laquo; %link (Previous Post)'); ?></div>
			<div class="floatright"><?php next_post_link('(Next Post) %link &raquo;'); ?></div><br />
          	</div>
			 <div class="content-ver-sep"></div><br />
			<?php endwhile;?>
          	            
          <!-- End the Loop. -->          
        	
		
            
</div>			

<?php get_footer(); ?>