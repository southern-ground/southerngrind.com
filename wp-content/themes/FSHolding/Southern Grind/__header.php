<?php

/* 	Design Theme's Header
	Copyright: 2012-2013, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Design 1.0
*/

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title() ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://dev.southerngrind.com/wp-content/themes/d5-design/js/jquery.validate.pack.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function(){
	$("#myform").validate();
});
</script>

<?php wp_head(); ?>
<!-- Style for Emma embed -->
<style type="text/css">
iframe, .fb-like-box fb_iframe_widget{border: 0; border-color: transparent;}
.headerEmailForm{float: right; margin-top: 10px;z-index: 10; width:500px;}
input[type="email"]{height: 15px; width: 170px; margin: 8px; vertical-align: top;}
.inline{display:inline;}
#e2ma_signup_message, .e2ma_signup_form_label, .e2ma_signup_form_required_footnote, .e2ma_signup_form_button_row{display: none;}
.e2ma_signup_form_row{border:0;}
.e2ma_signup_form{float: right;}
/* .e2ma_signup_form_container{width:200px;} */
.e2ma_signup_form_element input{width:200px;}
</style>
<!-- End Style for Emma embed -->

<!--[if lt IE 9]>
   <script>
      document.createElement('nav');
   </script>
   <style>
   #design-main-menu li {
      background: #294152;	
    }
    </style>
<![endif]-->
</head>

<body <?php body_class(); ?> >
<!-- FB Loading and Init -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=113248342166051";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<!-- End FB Loading and Init -->

<!-- begin email capture + socials -->

     
      <div id ="header">
      <div id ="header-content">
	
	<div class="headerEmailForm">
	<img src="http://dev.southerngrind.com/wp-content/themes/d5-design/images/newsletter.png">
	<link href="https://app.e2ma.net/css/signup.lrg.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="https://app.e2ma.net/app2/audience/tts_signup/1736030/dfe0c474460985f24ad931dc0a05aeff/1721589/?v=a">
	</script>
	<div id="load_check" class="signup_form_message" >This form needs Javascript to display, which your browser doesn't support.<a href="https://app.e2ma.net/app2/audience/signup/1736030/1721589/?v=a"> Sign up here</a> instead </div>
	<script type="text/javascript">signupFormObj.drawForm();</script>
		
<!--
		<form class="inline" method="post" id="myForm" 
		name="myForm" action="http://dev.southerngrind.com/365-2/">
			<img src="http://dev.southerngrind.com/wp-content/themes/d5-design/images/newsletter.png">			
			<input id="emailSubmit" class="inline" type="email" name="email" placeholder="Enter Your Email Address" autocomplete="on"/>
			<input class="inline" type="image" value="submit" src="http://dev.southerngrind.com/wp-content/themes/d5-design/images/signUp.png"/>
			
		

	</form>
-->
	
	<a href="https://www.facebook.com/pages/Southern-Grind/321500161203398?fref=ts" target="_blank"><img src="http://dev.southerngrind.com/wp-content/themes/d5-design/images/socialFB.png" style="margin:0 15px;"></a>
</div>
<!-- End email capture + socials --> 
       <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="site-logo" src="<?php header_image(); ?>"/></a>

        <!-- Site Main Menu Goes Here -->
        <nav id="design-main-menu">
		<?php if ( has_nav_menu( 'main-menu' ) ) :  wp_nav_menu( array( 'theme_location' => 'main-menu' )); else: wp_page_menu(); endif; ?>
        </nav>
      </div><!-- header-content -->
      </div><!-- header -->
       
	         
       
       
      
	  
	 
	  