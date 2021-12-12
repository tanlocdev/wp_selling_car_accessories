<?php
/**
 * Template Name: Right Sidebar
 */

get_header(); ?>

<main id="skip_content" role="main">
    <?php do_action( 'automobile_car_dealer_pageright_top' ); ?>

    <div class="container">
        <div class="main-wrapper row my-3">       
    		<div class="col-lg-8 col-md-8 background-img-skin">
                <div class="content_box">
                    <h1><?php the_title(); ?></h1> 
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_post_thumbnail(); ?>
                        <div class="new-text"><?php the_content(); ?></div>
                    <?php endwhile; // end of the loop. ?>
                    <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || '0' != get_comments_number() ) {
                            comments_template();
                        }
                    ?>
                </div>
            </div>
            <div id="sidebar" class="col-lg-4 col-lg-4">
    			<?php dynamic_sidebar('sidebar-2'); ?>
    		</div>
            <div class="clear"></div>    
        </div>
    </div>

    <?php do_action( 'automobile_car_dealer_pageright_bottom' ); ?>
</main>

<?php get_footer(); ?>