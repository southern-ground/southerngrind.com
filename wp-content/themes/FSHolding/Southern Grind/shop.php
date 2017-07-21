<?php
/*
	Template Name: Shop
*/
?>
<?php get_header(); ?>
<div class="pagenev shop_page">
	<div class="conwidth-resources">	
		<div class="floatleft">
			<br/>
    	<?php if(get_field('links')): ?>
    		<?php while(the_repeater_field('links')): ?>
          <?php if( !get_sub_field( 'hide' ) ): ?>
            <a class="shop_link" href="<?php echo get_sub_field( 'url' ); ?>"><span class="subNavBig">/<?php echo get_sub_field( 'title' ); ?></a> 
          <?php endif; ?>
  	    <?php endwhile; ?>
    	<?php endif; ?>
		</div>
   	<div class="clearDiv50"></div>
	</div>

	<div id="container">
  	<?php if(get_field('links')): ?>
  		<?php while(the_repeater_field('links')): ?>
  			<?php $image = wp_get_attachment_image_src(get_sub_field('image'), 'full'); ?>
        <a class="tile_link" href="<?php echo get_sub_field( 'url' ); ?>"><img src="<?php echo $image[0]; ?>"/></a> 
      <?php endwhile; ?>
  	<?php endif; ?>
   	<div class="clearDiv50"></div>
  </div>

<div>
  
<?php get_footer(); ?>