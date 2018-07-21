<?php
/*
 *Template Name: Contact Us
 *This is the theme for the Contact us Page
 *This is a static page with simple information
 */

get_header();
?>

<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div id="container-contact">
                <center><h1 id="Main-Heading">Contact</h1></center>
                
                <div class="contact-map">
                    <?php echo do_shortcode('[metaslider id="338"]'); ?>
                    <?php [gmap-embed id="390"]; ?>
                </div>
                
                <p class="contact-info">
                    Phone: (215) 887-6131 <br>
                    Address: 8215 Old York Rd, Elkins Park, PA 19027
                </p>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

