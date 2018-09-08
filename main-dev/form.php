<?php
/*
 *Template Name: Form
 *This is the theme for the Form page
 *This is a static page with simple information
 */

get_header();
?>

<div id="primary" class="content-area">
		<main id="main" class="site-main">
        <div class="gallery" style="padding-top: 8px">
        <?php echo do_shortcode('[foogallery id="570"]'); ?>
        </div>


            <?php
            get_footer();?>
		</main><!-- #main -->
	</div><!-- #primary -->
