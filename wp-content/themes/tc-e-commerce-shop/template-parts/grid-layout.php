<?php
/**
 * The template part for displaying single-post
 *
 * @package TC E-Commerce Shop
 * @subpackage tc_e_commerce_shop
 * @since TC E-Commerce Shop 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<div class="col-md-4 col-sm-4">
    <article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
        <div class="postbox p-3 mb-4"> 
            <?php if(has_post_thumbnail() && get_theme_mod( 'tc_e_commerce_shop_feature_image_hide',true) != '') { ?>
                <div class="box-image">
                    <?php the_post_thumbnail();  ?>
                </div>
            <?php }?>
            <div class="new-text">
                <div class="box-content">
                    <h2 class="pt-0"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
                    <?php if(get_the_excerpt()) { ?>
                        <div class="entry-content"><p class="m-0"><?php $excerpt = get_the_excerpt(); echo esc_html( tc_e_commerce_shop_string_limit_words( $excerpt, esc_attr(get_theme_mod('tc_e_commerce_shop_post_excerpt_length','20')))); ?><?php echo esc_html( get_theme_mod('tc_e_commerce_shop_button_excerpt_suffix','[...]') ); ?></p></div>
                    <?php }?>
                    <?php if ( get_theme_mod('tc_e_commerce_shop_post_button_text','Read Full') != '' ) {?>
                        <a href="<?php the_permalink(); ?>" class="blogbutton-small hvr-sweep-to-right mt-2"><?php echo esc_html( get_theme_mod('tc_e_commerce_shop_post_button_text',__( 'Read Full','tc-e-commerce-shop' )) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('tc_e_commerce_shop_post_button_text',__( 'Read Full','tc-e-commerce-shop' )) ); ?></span></a>
                    <?php }?>
                </div>
            </div>
            <div class="clearfix"></div> 
        </div> 
    </article>
</div>