<?php
/**
 * The template part for displaying audio post
 * @package Automobile Car Dealer
 * @subpackage automobile_car_dealer
 * @since 1.0
 */
?>
<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $audio   = false;

  // Only get audio from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $audio = get_media_embedded_in_content( $content, array( 'audio' ) );
  }
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <h2 class="section-title text-start pb-3"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>  
  <div class="box-image">
    <?php
      if ( ! is_single() ) {
        // If not a single post, highlight the audio file.
        if ( ! empty( $audio ) ) {
          foreach ( $audio as $audio_html ) {
            echo '<div class="entry-audio">';
              echo $audio_html;
            echo '</div><!-- .entry-audio -->';
          }
        };
      };
    ?>
  </div>
  <div class="new-text">
    <?php $automobile_car_dealer_theme_lay = get_theme_mod( 'automobile_car_dealer_content_settings','Excerpt');
    if($automobile_car_dealer_theme_lay == 'Content'){ ?>
      <?php the_content(); ?>
    <?php }
    if($automobile_car_dealer_theme_lay == 'Excerpt'){ ?>
      <?php if(get_the_excerpt()) { ?>
        <?php $excerpt = get_the_excerpt(); echo esc_html( automobile_car_dealer_string_limit_words( $excerpt, esc_attr(get_theme_mod('automobile_car_dealer_post_excerpt_number','30')))); ?> <?php echo esc_html( get_theme_mod('automobile_car_dealer_post_discription_suffix','[...]') ); ?>
      <?php }?>
    <?php }?>
  </div>
  <?php if( get_theme_mod('automobile_car_dealer_button_text','View More') != ''){ ?>
    <div class="postbtn">
      <a class="read-more" href="<?php the_permalink(); ?>"><i class="<?php echo esc_attr(get_theme_mod('automobile_car_dealer_button_icon','fas fa-long-arrow-alt-right')); ?> p-3 me-2"></i><?php echo esc_html(get_theme_mod('automobile_car_dealer_button_text',__('View More','automobile-car-dealer' )));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('automobile_car_dealer_button_text',__('View More','automobile-car-dealer' )));?></span></a>
    </div>
  <?php }?>
</article>