<?php

/*

	Template Name: Build A Bad Monkey

*/

?>

<?php get_header(); ?>

<div class="pagenev bad_monkey_page">

	<div class="conwidth-resources">	

		<div class="floatleft">

			<br/>

			<span class="subNavBig">/ BAD MONKEY</span>

      <span class="subNavBig highlight">BUILD YOUR OWN BAD MONKEY</span>

		</div>

   	<div class="clearDiv50"></div>

	</div>



	<div id="container">

    <div class="bad_monkey_hero"></div>

  

    <div class="section_heading">CHOOSE YOUR BLADE TYPE:</div>

    <div class="blade_options options_container" data-type="blade">

    	<?php if(get_field('blade_options')): ?>

    		<?php while(the_repeater_field('blade_options')): ?>

    			<?php $image = wp_get_attachment_image_src(get_sub_field('image'), 'full'); ?>

  	    	<img class="option" data-name="<?php echo str_replace( " ", "-", get_sub_field( 'title' ) ); ?>" data-price-change="<?php  the_sub_field('price_change');?>" src="<?php echo $image[0]; ?>" alt="<?php the_sub_field('title');?>" />

  	    <?php endwhile; ?>

    	<?php endif; ?>

    </div>

  

    <div class="section_heading">HANDLE STYLE:</div>

    <div class="handle_options options_container" data-type="handle">

    	<?php if(get_field('handle_options')): ?>

    		<?php while(the_repeater_field('handle_options')): ?>

    			<?php $image = wp_get_attachment_image_src(get_sub_field('image'), 'full'); ?>

  	    	<img class="option" data-name="<?php echo str_replace( " ", "-", get_sub_field( 'title' ) ); ?>" data-price-change="<?php  the_sub_field('price_change');?>" src="<?php echo $image[0]; ?>" alt="<?php the_sub_field('title');?>" />

  	    <?php endwhile; ?>

    	<?php endif; ?>

    </div>

    

    <div class="section_heading">BLADE FINISH:</div>

    <div class="finish_options options_container" data-type="finish">

    	<?php if(get_field('finish_options')): ?>

    		<?php while(the_repeater_field('finish_options')): ?>

    			<?php $image = wp_get_attachment_image_src(get_sub_field('image'), 'full'); ?>

  	    	<img class="option" data-name="<?php echo str_replace( " ", "-", get_sub_field( 'title' ) ); ?>" data-price-change="<?php  the_sub_field('price_change');?>" src="<?php echo $image[0]; ?>" alt="<?php the_sub_field('title');?>" />

  	    <?php endwhile; ?>

    	<?php endif; ?>

    </div>

    

    <div class="bad_monkey_separator"></div>

    

    <div class="bad_monkey_buttons">

      <a href="Javascript:void(0);" class="build_blade"></a>

      <a href="Javascript:void(0);" class="reset_blade"></a>

      <a href="<?php echo get_stylesheet_directory_uri(); ?>/bad_monkey_form.pdf" target="_blank" class="download_blade"></a>

    </div>

    

    <p class="bad_monkey_bottom">

      <span class="total">YOUR ESTIMATED TOTAL: <strong data-base="<?php echo floatval( get_field('base_price') ) + floatval( get_field('shipping') ); ?>" class="total_price">$</strong></span>

      <br/>

      <br/>

      Here is your custom Bad Monkey! Above is your estimated total. 

      <br/>

      <br/>

      <strong>Please allow 5-10 business days for production and 5 business days for shipping.</strong>

    </p>

    

    <div class="finished_knife">

      <div class="share_button"></div>

      <?php foreach( bm_get_combos( $post->ID ) as $input_name ) { ?>

        <?php $knife_img = wp_get_attachment_image_src( get_post_meta( $post->ID, $input_name, true ), 'full-size' ); 

        if( $knife_img ) {?>

          <img data-url="<?php echo get_post_meta( $post->ID, $input_name."_link", true ); ?>" class="final_image <?php echo $input_name; ?>" width="960" src="<?php echo $knife_img[0]; ?>"/>

        <?php } ?>      

      <?php } ?>

    </div>

   	<div class="clearDiv50"></div>

  </div>



<div>

  

<?php get_footer(); ?>