<?php

/* Design Theme's Footer

	Copyright: 2012-2013, D5 Creation, www.d5creation.com

	Based on the Simplest D5 Framework for WordPress

	Since Design 1.0

*/

?>









</div> <!-- conttainer -->



<div id="creditline"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footerImage.jpg"/></div>



<div id="footer">

<?php if ( has_nav_menu( 'footer-1' ) ) { wp_nav_menu( array( 'container_class' => 'footer_menu', 'theme_location' => 'footer-1' )); } ?>

<?php if ( has_nav_menu( 'footer-2' ) ) { wp_nav_menu( array( 'container_class' => 'footer_menu', 'theme_location' => 'footer-2' )); } ?>

<?php if ( has_nav_menu( 'footer-3' ) ) { wp_nav_menu( array( 'container_class' => 'footer_menu', 'theme_location' => 'footer-3' )); } ?>

<?php if ( has_nav_menu( 'footer-4' ) ) { wp_nav_menu( array( 'container_class' => 'footer_menu', 'theme_location' => 'footer-4' )); } ?>

</div> <!-- footer -->



<div id="footerTwo">

  <div class="badgeWrap">

    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/trust_badge.png"/>

  </div>

  <div class="copyrightWrap">

    © <?php echo Date( "Y" ); ?> Southern Grind

    </br>

    This website is protected by data encryption technology to ensure a safe and secure online experience.

  </div>

</div>





<?php wp_footer(); ?>

</body>

</html>