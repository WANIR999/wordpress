<?php 
	$tc_e_commerce_shop_custom_css ='';

	if(get_theme_mod('tc_e_commerce_shop_topbar_hide') == false){
		$tc_e_commerce_shop_custom_css .=' #header .logo{';
			$tc_e_commerce_shop_custom_css .='margin: 0; position:static;';
		$tc_e_commerce_shop_custom_css .='}';
	}	

	/*----------------- Width Layout ----------------*/
	$tc_e_commerce_shop_theme_lay = get_theme_mod( 'tc_e_commerce_shop_width_options','Full Layout');
    if($tc_e_commerce_shop_theme_lay == 'Full Layout'){
		$tc_e_commerce_shop_custom_css .='body{';
			$tc_e_commerce_shop_custom_css .='max-width: 100%;';
		$tc_e_commerce_shop_custom_css .='}';
	}else if($tc_e_commerce_shop_theme_lay == 'Contained Layout'){
		$tc_e_commerce_shop_custom_css .='body{';
			$tc_e_commerce_shop_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$tc_e_commerce_shop_custom_css .='}';
	}else if($tc_e_commerce_shop_theme_lay == 'Boxed Layout'){
		$tc_e_commerce_shop_custom_css .='body{';
			$tc_e_commerce_shop_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$tc_e_commerce_shop_custom_css .='}';
		$tc_e_commerce_shop_custom_css .='.baricon{';
			$tc_e_commerce_shop_custom_css .='margin-left: 35%; padding: 8px 13px; font-size: 10px;';
		$tc_e_commerce_shop_custom_css .='}';
		$tc_e_commerce_shop_custom_css .='.email, .call{';
			$tc_e_commerce_shop_custom_css .='margin-right: 0; ';
		$tc_e_commerce_shop_custom_css .='}';
	}

	/*------------- Slider Opacity -------------------*/
	$tc_e_commerce_shop_slider_layout = get_theme_mod( 'tc_e_commerce_shop_slider_opacity','0.6');
	if($tc_e_commerce_shop_slider_layout == '0'){
		$tc_e_commerce_shop_custom_css .='#slider img{';
			$tc_e_commerce_shop_custom_css .='opacity:0';
		$tc_e_commerce_shop_custom_css .='}';
	}else if($tc_e_commerce_shop_slider_layout == '0.1'){
		$tc_e_commerce_shop_custom_css .='#slider img{';
			$tc_e_commerce_shop_custom_css .='opacity:0.1';
		$tc_e_commerce_shop_custom_css .='}';
	}else if($tc_e_commerce_shop_slider_layout == '0.2'){
		$tc_e_commerce_shop_custom_css .='#slider img{';
			$tc_e_commerce_shop_custom_css .='opacity:0.2';
		$tc_e_commerce_shop_custom_css .='}';
	}else if($tc_e_commerce_shop_slider_layout == '0.3'){
		$tc_e_commerce_shop_custom_css .='#slider img{';
			$tc_e_commerce_shop_custom_css .='opacity:0.3';
		$tc_e_commerce_shop_custom_css .='}';
	}else if($tc_e_commerce_shop_slider_layout == '0.4'){
		$tc_e_commerce_shop_custom_css .='#slider img{';
			$tc_e_commerce_shop_custom_css .='opacity:0.4';
		$tc_e_commerce_shop_custom_css .='}';
	}else if($tc_e_commerce_shop_slider_layout == '0.5'){
		$tc_e_commerce_shop_custom_css .='#slider img{';
			$tc_e_commerce_shop_custom_css .='opacity:0.5';
		$tc_e_commerce_shop_custom_css .='}';
	}else if($tc_e_commerce_shop_slider_layout == '0.6'){
		$tc_e_commerce_shop_custom_css .='#slider img{';
			$tc_e_commerce_shop_custom_css .='opacity:0.6';
		$tc_e_commerce_shop_custom_css .='}';
	}else if($tc_e_commerce_shop_slider_layout == '0.7'){
		$tc_e_commerce_shop_custom_css .='#slider img{';
			$tc_e_commerce_shop_custom_css .='opacity:0.7';
		$tc_e_commerce_shop_custom_css .='}';
	}else if($tc_e_commerce_shop_slider_layout == '0.8'){
		$tc_e_commerce_shop_custom_css .='#slider img{';
			$tc_e_commerce_shop_custom_css .='opacity:0.8';
		$tc_e_commerce_shop_custom_css .='}';
	}else if($tc_e_commerce_shop_slider_layout == '0.9'){
		$tc_e_commerce_shop_custom_css .='#slider img{';
			$tc_e_commerce_shop_custom_css .='opacity:0.9';
		$tc_e_commerce_shop_custom_css .='}';
	}

	/*-------------Slider Content Layout ------------*/
	$tc_e_commerce_shop_slider_layout = get_theme_mod( 'tc_e_commerce_shop_slider_content_option','Left');
    if($tc_e_commerce_shop_slider_layout == 'Left'){
		$tc_e_commerce_shop_custom_css .='#slider .carousel-caption{';
		$tc_e_commerce_shop_custom_css .='left:15%; right:40%;';
		$tc_e_commerce_shop_custom_css .='}';
	}else if($tc_e_commerce_shop_slider_layout == 'Center'){
		$tc_e_commerce_shop_custom_css .='#slider .carousel-caption{';
		$tc_e_commerce_shop_custom_css .='left:25%; right:25%;';
		$tc_e_commerce_shop_custom_css .='}';
	}else if($tc_e_commerce_shop_slider_layout == 'Right'){
		$tc_e_commerce_shop_custom_css .='#slider .carousel-caption{';
		$tc_e_commerce_shop_custom_css .='left:40%; right:15%;';
		$tc_e_commerce_shop_custom_css .='}';
	}


	/* Slider content spacing */
	$tc_e_commerce_shop_top_spacing = get_theme_mod('tc_e_commerce_shop_slider_top_spacing');
	$tc_e_commerce_shop_bottom_spacing = get_theme_mod('tc_e_commerce_shop_slider_bottom_spacing');
	$tc_e_commerce_shop_left_spacing = get_theme_mod('tc_e_commerce_shop_slider_left_spacing');
	$tc_e_commerce_shop_right_spacing = get_theme_mod('tc_e_commerce_shop_slider_right_spacing');
	if($tc_e_commerce_shop_top_spacing != false || $tc_e_commerce_shop_bottom_spacing != false || $tc_e_commerce_shop_left_spacing != false || $tc_e_commerce_shop_right_spacing != false){
		$tc_e_commerce_shop_custom_css .='#slider .carousel-caption{';
			$tc_e_commerce_shop_custom_css .='top: '.esc_attr($tc_e_commerce_shop_top_spacing).'%; bottom: '.esc_attr($tc_e_commerce_shop_bottom_spacing).'%; left: '.esc_attr($tc_e_commerce_shop_left_spacing).'%; right: '.esc_attr($tc_e_commerce_shop_right_spacing).'%;';
		$tc_e_commerce_shop_custom_css .='}';
	}

	/*------Slider height ---------*/
	$tc_e_commerce_shop_slider_height = get_theme_mod('tc_e_commerce_shop_slider_height');
	if($tc_e_commerce_shop_slider_height != false){
		$tc_e_commerce_shop_custom_css .='#slider img  {';
			$tc_e_commerce_shop_custom_css .='height: '.esc_attr($tc_e_commerce_shop_slider_height).'px;';
		$tc_e_commerce_shop_custom_css .='}';
		$tc_e_commerce_shop_custom_css .='@media screen and (max-width: 575px){		
			#slider img  {';
			$tc_e_commerce_shop_custom_css .='height: auto;';
		$tc_e_commerce_shop_custom_css .='} }';
	}
	
	/*------Shop page pagination ---------*/
	$tc_e_commerce_shop_shop_page_pagination = get_theme_mod('tc_e_commerce_shop_shop_page_pagination', true);
	if($tc_e_commerce_shop_shop_page_pagination == false){
		$tc_e_commerce_shop_custom_css .= '.woocommerce nav.woocommerce-pagination {';
			$tc_e_commerce_shop_custom_css .='display: none;';
		$tc_e_commerce_shop_custom_css .='}';
	}

	/*------- Post into blocks ------*/
	$tc_e_commerce_shop_post_blocks = get_theme_mod('tc_e_commerce_shop_post_blocks', 'Within box');
	if($tc_e_commerce_shop_post_blocks == 'Without box' ){
		$tc_e_commerce_shop_custom_css .='.postbox{';
			$tc_e_commerce_shop_custom_css .=' background: transparent;';
		$tc_e_commerce_shop_custom_css .='}';
	}
	
	/*------ Button Style -------*/
	$tc_e_commerce_shop_top_buttom_padding = get_theme_mod('tc_e_commerce_shop_top_button_padding');
	$tc_e_commerce_shop_left_right_padding = get_theme_mod('tc_e_commerce_shop_left_button_padding');
	if($tc_e_commerce_shop_top_buttom_padding != false || $tc_e_commerce_shop_left_right_padding != false ){
		$tc_e_commerce_shop_custom_css .='.more-btn a, .blogbutton-small, #comments input[type="submit"].submit{';
			$tc_e_commerce_shop_custom_css .='padding-top: '.esc_attr($tc_e_commerce_shop_top_buttom_padding).'px; padding-bottom: '.esc_attr($tc_e_commerce_shop_top_buttom_padding).'px; padding-left: '.esc_attr($tc_e_commerce_shop_left_right_padding).'px; padding-right: '.esc_attr($tc_e_commerce_shop_left_right_padding).'px;';
		$tc_e_commerce_shop_custom_css .='}';
	}

	$tc_e_commerce_shop_button_border_radius = get_theme_mod('tc_e_commerce_shop_button_border_radius');
	$tc_e_commerce_shop_custom_css .='.more-btn a, .blogbutton-small, #comments input[type="submit"].submit, .hvr-sweep-to-right:before{';
		$tc_e_commerce_shop_custom_css .='border-radius: '.esc_attr($tc_e_commerce_shop_button_border_radius).'px;';
	$tc_e_commerce_shop_custom_css .='}';

	/*-------------- Woocommerce Button  -------------------*/
	$tc_e_commerce_shop_woocommerce_button_padding_top = get_theme_mod('tc_e_commerce_shop_woocommerce_button_padding_top');
	if($tc_e_commerce_shop_woocommerce_button_padding_top != false){
		$tc_e_commerce_shop_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
			$tc_e_commerce_shop_custom_css .='padding-top: '.esc_attr($tc_e_commerce_shop_woocommerce_button_padding_top).'px; padding-bottom: '.esc_attr($tc_e_commerce_shop_woocommerce_button_padding_top).'px;';
		$tc_e_commerce_shop_custom_css .='}';
	}

	$tc_e_commerce_shop_woocommerce_button_padding_right = get_theme_mod('tc_e_commerce_shop_woocommerce_button_padding_right');
	if($tc_e_commerce_shop_woocommerce_button_padding_right != false){
		$tc_e_commerce_shop_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
			$tc_e_commerce_shop_custom_css .='padding-left: '.esc_attr($tc_e_commerce_shop_woocommerce_button_padding_right).'px; padding-right: '.esc_attr($tc_e_commerce_shop_woocommerce_button_padding_right).'px;';
		$tc_e_commerce_shop_custom_css .='}';
	}

	$tc_e_commerce_shop_woocommerce_button_border_radius = get_theme_mod('tc_e_commerce_shop_woocommerce_button_border_radius');
	if($tc_e_commerce_shop_woocommerce_button_border_radius != false){
		$tc_e_commerce_shop_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
			$tc_e_commerce_shop_custom_css .='border-radius: '.esc_attr($tc_e_commerce_shop_woocommerce_button_border_radius).'px;';
		$tc_e_commerce_shop_custom_css .='}';
	}

	$tc_e_commerce_shop_related_product = get_theme_mod('tc_e_commerce_shop_related_product',true);

	if($tc_e_commerce_shop_related_product == false){
		$tc_e_commerce_shop_custom_css .='.related.products{';
			$tc_e_commerce_shop_custom_css .='display: none;';
		$tc_e_commerce_shop_custom_css .='}';
	}

	$tc_e_commerce_shop_woocommerce_product_border = get_theme_mod('tc_e_commerce_shop_woocommerce_product_border',true);

	if($tc_e_commerce_shop_woocommerce_product_border == false){
		$tc_e_commerce_shop_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$tc_e_commerce_shop_custom_css .='border: none;';
		$tc_e_commerce_shop_custom_css .='}';
	}

	$tc_e_commerce_shop_woocommerce_product_padding_top = get_theme_mod('tc_e_commerce_shop_woocommerce_product_padding_top',10);
	{
		$tc_e_commerce_shop_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$tc_e_commerce_shop_custom_css .='padding-top: '.esc_attr($tc_e_commerce_shop_woocommerce_product_padding_top).'px !important; padding-bottom: '.esc_attr($tc_e_commerce_shop_woocommerce_product_padding_top).'px !important;';
		$tc_e_commerce_shop_custom_css .='}';
	}

	$tc_e_commerce_shop_woocommerce_product_padding_right = get_theme_mod('tc_e_commerce_shop_woocommerce_product_padding_right',10);
	{
		$tc_e_commerce_shop_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$tc_e_commerce_shop_custom_css .='padding-left: '.esc_attr($tc_e_commerce_shop_woocommerce_product_padding_right).'px !important; padding-right: '.esc_attr($tc_e_commerce_shop_woocommerce_product_padding_right).'px !important;';
		$tc_e_commerce_shop_custom_css .='}';
	}

	$tc_e_commerce_shop_woocommerce_product_border_radius = get_theme_mod('tc_e_commerce_shop_woocommerce_product_border_radius');
	if($tc_e_commerce_shop_woocommerce_product_border_radius != false){
		$tc_e_commerce_shop_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$tc_e_commerce_shop_custom_css .='border-radius: '.esc_attr($tc_e_commerce_shop_woocommerce_product_border_radius).'px;';
		$tc_e_commerce_shop_custom_css .='}';
	}

	$tc_e_commerce_shop_woocommerce_product_box_shadow = get_theme_mod('tc_e_commerce_shop_woocommerce_product_box_shadow');
	if($tc_e_commerce_shop_woocommerce_product_box_shadow != false){
		$tc_e_commerce_shop_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$tc_e_commerce_shop_custom_css .='box-shadow: '.esc_attr($tc_e_commerce_shop_woocommerce_product_box_shadow).'px '.esc_attr($tc_e_commerce_shop_woocommerce_product_box_shadow).'px '.esc_attr($tc_e_commerce_shop_woocommerce_product_box_shadow).'px #aaa;';
		$tc_e_commerce_shop_custom_css .='}';
	}

	/*---- Preloader Color ----*/
	$tc_e_commerce_shop_preloader_color = get_theme_mod('tc_e_commerce_shop_preloader_color');
	$tc_e_commerce_shop_preloader_bg_color = get_theme_mod('tc_e_commerce_shop_preloader_bg_color');

	if($tc_e_commerce_shop_preloader_color != false){
		$tc_e_commerce_shop_custom_css .='.preloader-squares .square, .preloader-chasing-squares .square{';
			$tc_e_commerce_shop_custom_css .='background-color: '.esc_attr($tc_e_commerce_shop_preloader_color).';';
		$tc_e_commerce_shop_custom_css .='}';
	}
	if($tc_e_commerce_shop_preloader_bg_color != false){
		$tc_e_commerce_shop_custom_css .='.preloader{';
			$tc_e_commerce_shop_custom_css .='background-color: '.esc_attr($tc_e_commerce_shop_preloader_bg_color).';';
		$tc_e_commerce_shop_custom_css .='}';
	}

	/*---- Copyright css ----*/
	$tc_e_commerce_shop_copyright_fontsize = get_theme_mod('tc_e_commerce_shop_copyright_fontsize',16);
	if($tc_e_commerce_shop_copyright_fontsize != false){
		$tc_e_commerce_shop_custom_css .='#footer p{';
			$tc_e_commerce_shop_custom_css .='font-size: '.esc_attr($tc_e_commerce_shop_copyright_fontsize).'px; ';
		$tc_e_commerce_shop_custom_css .='}';
	}

	$tc_e_commerce_shop_copyright_top_bottom_padding = get_theme_mod('tc_e_commerce_shop_copyright_top_bottom_padding',15);
	if($tc_e_commerce_shop_copyright_top_bottom_padding != false){
		$tc_e_commerce_shop_custom_css .='#footer {';
			$tc_e_commerce_shop_custom_css .='padding-top:'.esc_attr($tc_e_commerce_shop_copyright_top_bottom_padding).'px; padding-bottom: '.esc_attr($tc_e_commerce_shop_copyright_top_bottom_padding).'px; ';
		$tc_e_commerce_shop_custom_css .='}';
	}

	$tc_e_commerce_shop_copyright_alignment = get_theme_mod( 'tc_e_commerce_shop_copyright_alignment','Center');
    if($tc_e_commerce_shop_copyright_alignment == 'Left'){
		$tc_e_commerce_shop_custom_css .='#footer p{';
			$tc_e_commerce_shop_custom_css .='text-align:start;';
		$tc_e_commerce_shop_custom_css .='}';
	}else if($tc_e_commerce_shop_copyright_alignment == 'Center'){
		$tc_e_commerce_shop_custom_css .='#footer p{';
			$tc_e_commerce_shop_custom_css .='text-align:center;';
		$tc_e_commerce_shop_custom_css .='}';
	}else if($tc_e_commerce_shop_copyright_alignment == 'Right'){
		$tc_e_commerce_shop_custom_css .='#footer p{';
			$tc_e_commerce_shop_custom_css .='text-align:end;';
		$tc_e_commerce_shop_custom_css .='}';
	}

	/*------- Wocommerce sale css -----*/
	$tc_e_commerce_shop_woocommerce_sale_top_padding = get_theme_mod('tc_e_commerce_shop_woocommerce_sale_top_padding');
	$tc_e_commerce_shop_woocommerce_sale_left_padding = get_theme_mod('tc_e_commerce_shop_woocommerce_sale_left_padding');
	$tc_e_commerce_shop_custom_css .=' .woocommerce span.onsale{';
		$tc_e_commerce_shop_custom_css .='padding-top: '.esc_attr($tc_e_commerce_shop_woocommerce_sale_top_padding).'px; padding-bottom: '.esc_attr($tc_e_commerce_shop_woocommerce_sale_top_padding).'px; padding-left: '.esc_attr($tc_e_commerce_shop_woocommerce_sale_left_padding).'px; padding-right: '.esc_attr($tc_e_commerce_shop_woocommerce_sale_left_padding).'px;';
	$tc_e_commerce_shop_custom_css .='}';

	$tc_e_commerce_shop_woocommerce_sale_border_radius = get_theme_mod('tc_e_commerce_shop_woocommerce_sale_border_radius', 50);
	$tc_e_commerce_shop_custom_css .='.woocommerce span.onsale{';
		$tc_e_commerce_shop_custom_css .='border-radius: '.esc_attr($tc_e_commerce_shop_woocommerce_sale_border_radius).'px;';
	$tc_e_commerce_shop_custom_css .='}';

	$tc_e_commerce_shop_sale_position = get_theme_mod( 'tc_e_commerce_shop_sale_position','right');
    if($tc_e_commerce_shop_sale_position == 'left'){
		$tc_e_commerce_shop_custom_css .='.woocommerce ul.products li.product .onsale{';
			$tc_e_commerce_shop_custom_css .='left: -10px; right: auto;';
		$tc_e_commerce_shop_custom_css .='}';
	}else if($tc_e_commerce_shop_sale_position == 'right'){
		$tc_e_commerce_shop_custom_css .='.woocommerce ul.products li.product .onsale{';
			$tc_e_commerce_shop_custom_css .='left: auto; right: 0;';
		$tc_e_commerce_shop_custom_css .='}';
	}

	$tc_e_commerce_shop_product_sale_font_size = get_theme_mod('tc_e_commerce_shop_product_sale_font_size', 16);
	$tc_e_commerce_shop_custom_css .='.woocommerce span.onsale {';
		$tc_e_commerce_shop_custom_css .='font-size: '.esc_attr($tc_e_commerce_shop_product_sale_font_size).'px;';
	$tc_e_commerce_shop_custom_css .='}';

	// footer background css
	$tc_e_commerce_shop_footer_background_color = get_theme_mod('tc_e_commerce_shop_footer_background_color');
	$tc_e_commerce_shop_custom_css .='.footertown{';
		$tc_e_commerce_shop_custom_css .='background-color: '.esc_attr($tc_e_commerce_shop_footer_background_color).';';
	$tc_e_commerce_shop_custom_css .='}';

	$tc_e_commerce_shop_footer_background_img = get_theme_mod('tc_e_commerce_shop_footer_background_img');
	if($tc_e_commerce_shop_footer_background_img != false){
		$tc_e_commerce_shop_custom_css .='.footertown{';
			$tc_e_commerce_shop_custom_css .='background: url('.esc_attr($tc_e_commerce_shop_footer_background_img).') no-repeat; background-size: cover; background-attachment: fixed;';
		$tc_e_commerce_shop_custom_css .='}';
	}

	/*---- Comment form ----*/
	$tc_e_commerce_shop_comment_width = get_theme_mod('tc_e_commerce_shop_comment_width', '100');
	$tc_e_commerce_shop_custom_css .='#comments textarea{';
		$tc_e_commerce_shop_custom_css .=' width:'.esc_attr($tc_e_commerce_shop_comment_width).'%;';
	$tc_e_commerce_shop_custom_css .='}';

	$tc_e_commerce_shop_comment_submit_text = get_theme_mod('tc_e_commerce_shop_comment_submit_text', 'Post Comment');
	if($tc_e_commerce_shop_comment_submit_text == ''){
		$tc_e_commerce_shop_custom_css .='#comments p.form-submit {';
			$tc_e_commerce_shop_custom_css .='display: none;';
		$tc_e_commerce_shop_custom_css .='}';
	}

	$tc_e_commerce_shop_comment_title = get_theme_mod('tc_e_commerce_shop_comment_title', 'Leave a Reply');
	if($tc_e_commerce_shop_comment_title == ''){
		$tc_e_commerce_shop_custom_css .='#comments h2#reply-title {';
			$tc_e_commerce_shop_custom_css .='display: none;';
		$tc_e_commerce_shop_custom_css .='}';
	}

	// Topbar padding
	$tc_e_commerce_shop_topbar_top_bottom = get_theme_mod('tc_e_commerce_shop_topbar_top_bottom');
	$tc_e_commerce_shop_custom_css .='.topbar{';
		$tc_e_commerce_shop_custom_css .=' padding-top:'.esc_attr($tc_e_commerce_shop_topbar_top_bottom).'px; padding-bottom:'.esc_attr($tc_e_commerce_shop_topbar_top_bottom).'px;';
	$tc_e_commerce_shop_custom_css .='}';

	// Sticky Header padding
	$tc_e_commerce_shop_sticky_header_padding = get_theme_mod('tc_e_commerce_shop_sticky_header_padding');
	$tc_e_commerce_shop_custom_css .='.fixed-header{';
		$tc_e_commerce_shop_custom_css .=' padding-top:'.esc_attr($tc_e_commerce_shop_sticky_header_padding).'px; padding-bottom:'.esc_attr($tc_e_commerce_shop_sticky_header_padding).'px;';
	$tc_e_commerce_shop_custom_css .='}';

	// Navigation Font Size 
	$tc_e_commerce_shop_nav_font_size = get_theme_mod('tc_e_commerce_shop_nav_font_size');
	if($tc_e_commerce_shop_nav_font_size != false){
		$tc_e_commerce_shop_custom_css .='.primary-navigation ul li a{';
			$tc_e_commerce_shop_custom_css .='font-size: '.esc_attr($tc_e_commerce_shop_nav_font_size).'px;';
		$tc_e_commerce_shop_custom_css .='}';
	}

	$tc_e_commerce_shop_navigation_case = get_theme_mod('tc_e_commerce_shop_navigation_case', 'capitalize');
	if($tc_e_commerce_shop_navigation_case == 'uppercase' ){
		$tc_e_commerce_shop_custom_css .='.primary-navigation ul li a{';
			$tc_e_commerce_shop_custom_css .=' text-transform: uppercase;';
		$tc_e_commerce_shop_custom_css .='}';
	}elseif($tc_e_commerce_shop_navigation_case == 'capitalize' ){
		$tc_e_commerce_shop_custom_css .='.primary-navigation ul li a{';
			$tc_e_commerce_shop_custom_css .=' text-transform: capitalize;';
		$tc_e_commerce_shop_custom_css .='}';
	}
	
	//Site title Font size
	$tc_e_commerce_shop_site_title_fontsize = get_theme_mod('tc_e_commerce_shop_site_title_fontsize');
	$tc_e_commerce_shop_custom_css .='.logo h1, .logo p.site-title{';
		$tc_e_commerce_shop_custom_css .='font-size: '.esc_attr($tc_e_commerce_shop_site_title_fontsize).'px;';
	$tc_e_commerce_shop_custom_css .='}';

	$tc_e_commerce_shop_site_description_fontsize = get_theme_mod('tc_e_commerce_shop_site_description_fontsize');
	$tc_e_commerce_shop_custom_css .='.logo p.site-description{';
		$tc_e_commerce_shop_custom_css .='font-size: '.esc_attr($tc_e_commerce_shop_site_description_fontsize).'px;';
	$tc_e_commerce_shop_custom_css .='}';

	/*----- Featured image css -----*/
	$tc_e_commerce_shop_featured_image_border_radius = get_theme_mod('tc_e_commerce_shop_featured_image_border_radius');
	if($tc_e_commerce_shop_featured_image_border_radius != false){
		$tc_e_commerce_shop_custom_css .='.inner-service .service-image img{';
			$tc_e_commerce_shop_custom_css .='border-radius: '.esc_attr($tc_e_commerce_shop_featured_image_border_radius).'px;';
		$tc_e_commerce_shop_custom_css .='}';
	}

	$tc_e_commerce_shop_featured_image_box_shadow = get_theme_mod('tc_e_commerce_shop_featured_image_box_shadow');
	if($tc_e_commerce_shop_featured_image_box_shadow != false){
		$tc_e_commerce_shop_custom_css .='.inner-service .service-image img{';
			$tc_e_commerce_shop_custom_css .='box-shadow: 8px 8px '.esc_attr($tc_e_commerce_shop_featured_image_box_shadow).'px #aaa;';
		$tc_e_commerce_shop_custom_css .='}';
	}

	//  ------------ Mobile Media Options ----------
	$tc_e_commerce_shop_responsive_topbar_hide = get_theme_mod('tc_e_commerce_shop_responsive_topbar_hide',false);
	if($tc_e_commerce_shop_responsive_topbar_hide == true && get_theme_mod('tc_e_commerce_shop_topbar_hide',false) == false){
		$tc_e_commerce_shop_custom_css .='@media screen and (min-width:575px){
			.topbar{';
			$tc_e_commerce_shop_custom_css .='display:none;';
		$tc_e_commerce_shop_custom_css .='} }';
	}

	if($tc_e_commerce_shop_responsive_topbar_hide == false){
		$tc_e_commerce_shop_custom_css .='@media screen and (max-width:575px){
			.topbar{';
			$tc_e_commerce_shop_custom_css .='display:none;';
		$tc_e_commerce_shop_custom_css .='} }';
	}

	$tc_e_commerce_shop_responsive_show_back_to_top = get_theme_mod('tc_e_commerce_shop_responsive_show_back_to_top',true);
	if($tc_e_commerce_shop_responsive_show_back_to_top == true && get_theme_mod('tc_e_commerce_shop_show_back_to_top',true) == false){
		$tc_e_commerce_shop_custom_css .='@media screen and (min-width:575px){
			.scrollup{';
			$tc_e_commerce_shop_custom_css .='visibility:hidden;';
		$tc_e_commerce_shop_custom_css .='} }';
	}

	if($tc_e_commerce_shop_responsive_show_back_to_top == false){
		$tc_e_commerce_shop_custom_css .='@media screen and (max-width:575px){
			.scrollup{';
			$tc_e_commerce_shop_custom_css .='visibility:hidden;';
		$tc_e_commerce_shop_custom_css .='} }';
	}

	$tc_e_commerce_shop_responsive_preloader_hide = get_theme_mod('tc_e_commerce_shop_responsive_preloader_hide',false);
	if($tc_e_commerce_shop_responsive_preloader_hide == true && get_theme_mod('tc_e_commerce_shop_preloader_hide',false) == false){
		$tc_e_commerce_shop_custom_css .='@media screen and (min-width:575px){
			.preloader{';
			$tc_e_commerce_shop_custom_css .='display:none !important;';
		$tc_e_commerce_shop_custom_css .='} }';
	}

	if($tc_e_commerce_shop_responsive_preloader_hide == false){
		$tc_e_commerce_shop_custom_css .='@media screen and (max-width:575px){
			.preloader{';
			$tc_e_commerce_shop_custom_css .='display:none !important;';
		$tc_e_commerce_shop_custom_css .='} }';
	}

	$tc_e_commerce_shop_responsive_sticky_header = get_theme_mod('tc_e_commerce_shop_responsive_sticky_header',false);
	if($tc_e_commerce_shop_responsive_sticky_header == true && get_theme_mod('tc_e_commerce_shop_sticky_header',false) == false){
		$tc_e_commerce_shop_custom_css .='@media screen and (min-width:575px){
			.fixed-header{';
			$tc_e_commerce_shop_custom_css .='position:static !important;';
		$tc_e_commerce_shop_custom_css .='} }';
	}

	if($tc_e_commerce_shop_responsive_sticky_header == false){
		$tc_e_commerce_shop_custom_css .='@media screen and (max-width:575px){
			.fixed-header{';
			$tc_e_commerce_shop_custom_css .='position:static !important;';
		$tc_e_commerce_shop_custom_css .='} }';
	}

	$tc_e_commerce_shop_slider = get_theme_mod( 'tc_e_commerce_shop_mobile_media_slider',false);
	if($tc_e_commerce_shop_slider == true && get_theme_mod( 'tc_e_commerce_shop_slider_hide', false) == false){
    	$tc_e_commerce_shop_custom_css .='#slider{';
			$tc_e_commerce_shop_custom_css .='display:none;';
		$tc_e_commerce_shop_custom_css .='} ';
	}
    if($tc_e_commerce_shop_slider == true){
    	$tc_e_commerce_shop_custom_css .='@media screen and (max-width:575px) {';
		$tc_e_commerce_shop_custom_css .='#slider{';
			$tc_e_commerce_shop_custom_css .='display:block;';
		$tc_e_commerce_shop_custom_css .='} }';
	}else if($tc_e_commerce_shop_slider == false){
		$tc_e_commerce_shop_custom_css .='@media screen and (max-width:575px) {';
		$tc_e_commerce_shop_custom_css .='#slider{';
			$tc_e_commerce_shop_custom_css .='display:none;';
		$tc_e_commerce_shop_custom_css .='} }';
	}

	// slider overlay
	$tc_e_commerce_shop_home_slider_overlay = get_theme_mod('tc_e_commerce_shop_home_slider_overlay', true);
	if($tc_e_commerce_shop_home_slider_overlay == false){
		$tc_e_commerce_shop_custom_css .='#slider img{';
			$tc_e_commerce_shop_custom_css .='opacity:1;';
		$tc_e_commerce_shop_custom_css .='}';
	} 
	$tc_e_commerce_shop_home_slider_overlay_color = get_theme_mod('tc_e_commerce_shop_home_slider_overlay_color', true);
	if($tc_e_commerce_shop_home_slider_overlay != false){
		$tc_e_commerce_shop_custom_css .='#slider{';
			$tc_e_commerce_shop_custom_css .='background-color: '.esc_attr($tc_e_commerce_shop_home_slider_overlay_color).';';
		$tc_e_commerce_shop_custom_css .='}';
	}

	// menu font weight
	$tc_e_commerce_shop_theme_lay = get_theme_mod( 'tc_e_commerce_shop_font_weight_menu_option','Default');
    if($tc_e_commerce_shop_theme_lay == '100'){
		$tc_e_commerce_shop_custom_css .='.primary-navigation ul li a{';
			$tc_e_commerce_shop_custom_css .='font-weight: 100;';
		$tc_e_commerce_shop_custom_css .='}';
	}else if($tc_e_commerce_shop_theme_lay == '200'){
		$tc_e_commerce_shop_custom_css .='.primary-navigation ul li a{';
			$tc_e_commerce_shop_custom_css .='font-weight: 200;';
		$tc_e_commerce_shop_custom_css .='}';
	}else if($tc_e_commerce_shop_theme_lay == '300'){
		$tc_e_commerce_shop_custom_css .='.primary-navigation ul li a{';
			$tc_e_commerce_shop_custom_css .='font-weight: 300;';
		$tc_e_commerce_shop_custom_css .='}';
	}else if($tc_e_commerce_shop_theme_lay == '400'){
		$tc_e_commerce_shop_custom_css .='.primary-navigation ul li a{';
			$tc_e_commerce_shop_custom_css .='font-weight: 400;';
		$tc_e_commerce_shop_custom_css .='}';
	}else if($tc_e_commerce_shop_theme_lay == '500'){
		$tc_e_commerce_shop_custom_css .='.primary-navigation ul li a{';
			$tc_e_commerce_shop_custom_css .='font-weight: 500;';
		$tc_e_commerce_shop_custom_css .='}';
	}else if($tc_e_commerce_shop_theme_lay == 'Default'){
		$tc_e_commerce_shop_custom_css .='.primary-navigation ul li a{';
			$tc_e_commerce_shop_custom_css .='font-weight: 600;';
		$tc_e_commerce_shop_custom_css .='}';
	}else if($tc_e_commerce_shop_theme_lay == '700'){
		$tc_e_commerce_shop_custom_css .='.primary-navigation ul li a{';
			$tc_e_commerce_shop_custom_css .='font-weight: 700;';
		$tc_e_commerce_shop_custom_css .='}';
	}else if($tc_e_commerce_shop_theme_lay == '800'){
		$tc_e_commerce_shop_custom_css .='.primary-navigation ul li a{';
			$tc_e_commerce_shop_custom_css .='font-weight: 800;';
		$tc_e_commerce_shop_custom_css .='}';
	}else if($tc_e_commerce_shop_theme_lay == '900'){
		$tc_e_commerce_shop_custom_css .='.primary-navigation ul li a{';
			$tc_e_commerce_shop_custom_css .='font-weight: 900;';
		$tc_e_commerce_shop_custom_css .='}';
	}
 
    //Social icon Font size
	 $tc_e_commerce_shop_social_icon_fontsize = get_theme_mod('tc_e_commerce_shop_social_icon_fontsize');
	$tc_e_commerce_shop_custom_css .='.baricon i{';
		$tc_e_commerce_shop_custom_css .='font-size: '.esc_attr($tc_e_commerce_shop_social_icon_fontsize).'px;';
	$tc_e_commerce_shop_custom_css .='}';