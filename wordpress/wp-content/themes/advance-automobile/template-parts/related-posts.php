<?php 
$related_posts = advance_automobile_related_posts();

if(get_theme_mod('advance_automobile_show_related_post',true)==1){ ?>
<?php if ( $related_posts->have_posts() ): ?>
    <div class="related-posts">
        <?php if ( get_theme_mod('advance_automobile_related_post_title','Related Posts') != '' ) {?>
            <h3 class="mb-3"><?php echo esc_html( get_theme_mod('advance_automobile_related_post_title',__('Related Posts','advance-automobile')) ); ?></h3>
        <?php }?>
        <div class="row">
            <?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="related-box mb-3 p-2">
                        <?php if(has_post_thumbnail()) { ?>
                            <div class="box-image mb-3">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php }?>
                        <h4 class="text-center p-0"><?php the_title(); ?></h4>
                        <div class="entry-content"><p class="my-3 mx-0 text-center"><?php $excerpt = get_the_excerpt(); echo esc_html( advance_automobile_string_limit_words( $excerpt, esc_attr(get_theme_mod('advance_automobile_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('advance_automobile_post_suffix_option','...') ); ?></p></div>
                        <?php if( get_theme_mod('advance_automobile_button_text','READ MORE') != ''){ ?>
                            <div class="read-more-btn my-3 mx-0">
                                <a href="<?php the_permalink(); ?>" class="py-3 px-4"><?php echo esc_html(get_theme_mod('advance_automobile_button_text','READ MORE'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('advance_automobile_button_text','READ MORE'));?></span></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>
<?php wp_reset_postdata(); }?>