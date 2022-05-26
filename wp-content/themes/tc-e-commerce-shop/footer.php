<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package TC E-Commerce Shop
 */
?>
<footer role="contentinfo">
    <?php //Set widget areas classes based on user choice
        $tc_e_commerce_shop_widget_areas = get_theme_mod('tc_e_commerce_shop_footer_widget_layout', '4');
        if ($tc_e_commerce_shop_widget_areas == '3') {
            $cols = 'col-lg-4 col-md-4';
        } elseif ($tc_e_commerce_shop_widget_areas == '4') {
            $cols = 'col-lg-3 col-md-3';
        } elseif ($tc_e_commerce_shop_widget_areas == '2') {
            $cols = 'col-lg-6 col-md-6';
        } else {
            $cols = 'col-lg-12 col-md-12';
        }
    ?>
    <div class="footertown">
        <div class="container">
            <div class="row">
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                  <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
                    <?php dynamic_sidebar( 'footer-1'); ?>
                  </div>
                <?php endif; ?> 
                <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                  <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
                    <?php dynamic_sidebar( 'footer-2'); ?>
                  </div>
                <?php endif; ?> 
                <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                  <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
                    <?php dynamic_sidebar( 'footer-3'); ?>
                  </div>
                <?php endif; ?> 
                <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
                  <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
                    <?php dynamic_sidebar( 'footer-4'); ?>
                  </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div id="footer" class="copyright-wrapper">
    	<div class="container">
            <div class="copyright">
                <p><?php tc_e_commerce_shop_credit_link(); ?> <?php echo esc_html(get_theme_mod('tc_e_commerce_shop_footer_copy',__('By ThemesCaliber','tc-e-commerce-shop'))); ?></p>
            </div>
            <div class="clear"></div>  
        </div>
    </div>

    <?php if( get_theme_mod( 'tc_e_commerce_shop_show_back_to_top',true) != '' || get_theme_mod('tc_e_commerce_shop_responsive_show_back_to_top',true) != ''){ ?>
        <?php $tc_e_commerce_shop_scroll_lay = get_theme_mod( 'tc_e_commerce_shop_back_to_top_alignment','Right');
        if($tc_e_commerce_shop_scroll_lay == 'Left'){ ?>
            <a href="#" class="scrollup left"><span><?php echo esc_html( get_theme_mod('tc_e_commerce_shop_back_to_top_text',__('Back to Top', 'tc-e-commerce-shop' )) ); ?><?php if(get_theme_mod('tc_e_commerce_shop_back_to_top_icon') != 'None') {?><i class="<?php echo esc_html(get_theme_mod('tc_e_commerce_shop_back_to_top_icon','fas fa-arrow-up')); ?> ms-2"></i><?php }?></span><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('tc_e_commerce_shop_back_to_top_text',__('Back to Top', 'tc-e-commerce-shop' )) ); ?></span></a>
        <?php }else if($tc_e_commerce_shop_scroll_lay == 'Center'){ ?>
            <a href="#" class="scrollup center"><span><?php echo esc_html( get_theme_mod('tc_e_commerce_shop_back_to_top_text',__('Back to Top', 'tc-e-commerce-shop' )) ); ?><?php if(get_theme_mod('tc_e_commerce_shop_back_to_top_icon') != 'None') {?><i class="<?php echo esc_html(get_theme_mod('tc_e_commerce_shop_back_to_top_icon','fas fa-arrow-up')); ?> ms-2"></i><?php }?></span><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('tc_e_commerce_shop_back_to_top_text',__('Back to Top', 'tc-e-commerce-shop' )) ); ?></span></a>
        <?php }else{ ?>
            <a href="#" class="scrollup right"><span><?php echo esc_html( get_theme_mod('tc_e_commerce_shop_back_to_top_text',__('Back to Top', 'tc-e-commerce-shop' )) ); ?><?php if(get_theme_mod('tc_e_commerce_shop_back_to_top_icon') != 'None') {?><i class="<?php echo esc_html(get_theme_mod('tc_e_commerce_shop_back_to_top_icon','fas fa-arrow-up')); ?> ms-2"></i><?php }?></span><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('tc_e_commerce_shop_back_to_top_text',__('Back to Top', 'tc-e-commerce-shop' )) ); ?></span></a>
        <?php }?>
    <?php }?>
    <?php wp_footer(); ?>
</footer>
</body>
</html>