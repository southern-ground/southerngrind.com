<?php
/*
	Template Name: Locations Page
*/
?>
<?php get_header(); ?>

    <div class="pagenev">
        <div class="conwidth-resources">
            <div class="floatleft">
                <br/>
                <span class="subNavBig highlight">RETAIL LOCATIONS&nbsp;&nbsp;</span>
                <span class="subNavBig"><a href="<?php echo get_permalink(get_page_by_title('Dealers')->ID); ?>">/BECOME A DEALER</a></span>
            </div>
            <div class="clearDiv50"></div>
        </div>
    </div>

    <div id="container" class="locations">

        <!-- Updated 2017-04-27 -->

        <h2>Back Soon</h2>

<?PHP

    // echo do_shortcode('[locatoraid layout="map" where-state="AK"]');

    get_footer();

?>