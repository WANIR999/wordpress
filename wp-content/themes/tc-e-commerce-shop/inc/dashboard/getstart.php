<?php
//about theme info
add_action( 'admin_menu', 'tc_e_commerce_shop_gettingstarted' );
function tc_e_commerce_shop_gettingstarted() {    	
	add_theme_page( esc_html__('Get Started', 'tc-e-commerce-shop'), esc_html__('Get Started', 'tc-e-commerce-shop'), 'edit_theme_options', 'tc_e_commerce_shop_guide', 'tc_e_commerce_shop_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function tc_e_commerce_shop_admin_theme_style() {
   wp_enqueue_style('tc-e-commerce-shop-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/getstart.css');
   wp_enqueue_script('tabs', esc_url(get_template_directory_uri()) . '/inc/dashboard/js/tab.js');
}
add_action('admin_enqueue_scripts', 'tc_e_commerce_shop_admin_theme_style');

//guidline for about theme
function tc_e_commerce_shop_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'tc-e-commerce-shop' );
?>

<div class="wrapper-info">  
    <div class="tab-sec">
		<div class="tab">
			<div class="logo">
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/logo.png" alt="" />
			</div>
			<button role="tab" class="tablinks home" onclick="tc_e_commerce_shop_openCity(event, 'tc_index')"><?php esc_html_e( 'Free Theme Information', 'tc-e-commerce-shop' ); ?></button>
		  	<button role="tab" class="tablinks" onclick="tc_e_commerce_shop_openCity(event, 'tc_pro')"><?php esc_html_e( 'Click to Premium Theme', 'tc-e-commerce-shop' ); ?></button>		  	
		</div>

		<div  id="tc_index" class="tabcontent">
			<h2><?php esc_html_e( 'Welcome to Ecommerce Theme', 'tc-e-commerce-shop' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
			<hr>
			<div class="info-link">
				<a href="<?php echo esc_url( TC_E_COMMERCE_SHOP_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'tc-e-commerce-shop' ); ?></a>
				<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'tc-e-commerce-shop'); ?></a>
				<a href="<?php echo esc_url( TC_E_COMMERCE_SHOP_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support Forum', 'tc-e-commerce-shop' ); ?></a>
				<a class="get-pro" href="<?php echo esc_url( TC_E_COMMERCE_SHOP_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'tc-e-commerce-shop'); ?></a>
			</div>
			<div class="col-tc-6">
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/screen.png" alt="" />
			</div>
			<div class="col-tc-6">
				<P><?php esc_html_e( 'TC ECommerce Shop WordPress Theme is the ultimate solution to create multipurpose online stores such as online book store, sports store, electronic items store, mobile & tablet store, apparel store, fashion store, cosmetics shop, handbags store, medical stores, jewelry store, etc. It also covers different businesses including travel, technology, construction, digitals, design, product showcase, furniture, restaurant, corporate companies, agencies, bloggers, etc. Its built on Bootstrap which makes it a perfect base to sell out eCommerce items. It is built up of awesome features such as banners, call to action buttons, sidebars, testimonial section, shortcodes, and a lot more. The theme is developed using optimized codes that help in providing faster page load time each time a visitor browses your site. This customizable responsive WooCommerce WordPress theme offers various personalization options to ease the task of website development. The integrated social media features make this multipurpose theme highly interactive on social sites.', 'tc-e-commerce-shop' ); ?></P>
			</div>
			<div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'tc-e-commerce-shop' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'tc-e-commerce-shop'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'tc-e-commerce-shop'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'tc-e-commerce-shop'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'tc-e-commerce-shop'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'tc-e-commerce-shop'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Contact us Page Template', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'tc-e-commerce-shop'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Blog Templates & Layout', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'tc-e-commerce-shop'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Page Templates & Layout', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'tc-e-commerce-shop'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
							</tr>							
							<tr class="odd">
								<td><?php esc_html_e('Full Documentation', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Latest WordPress Compatibility', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support 3rd Party Plugins', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Secure and Optimized Code', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Exclusive Functionalities', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Enable / Disable', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Google Font Choices', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Gallery', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Simple & Mega Menu Option', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Shortcodes', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Premium Membership', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('All Access Theme Pass', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Seamless Customer Support', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Budget Friendly Value', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Priority Error Fixing', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Custom Feature Addition', 'tc-e-commerce-shop'); ?></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/right-arrow.png" alt="" /></td>
							</tr>					
						</tbody>
					</table>
					<div class="info-link">
						<a href="<?php echo esc_url( TC_E_COMMERCE_SHOP_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Buy Now', 'tc-e-commerce-shop' ); ?></a>
					</div>
				</div>
			</div>
    	</div>

		<div id="tc_pro" class="tabcontent">
			<h3><?php esc_html_e( 'TC Ecommerce Theme Information', 'tc-e-commerce-shop' ); ?></h3>
			<hr>
			<div class="pro-image">
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/resize.png" alt="" />
			</div>
			<div class="info-link-pro">
				<p><a href="<?php echo esc_url( TC_E_COMMERCE_SHOP_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Buy Now', 'tc-e-commerce-shop' ); ?></a></p>
				<p><a href="<?php echo esc_url( TC_E_COMMERCE_SHOP_LIVE_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Live Demo', 'tc-e-commerce-shop' ); ?></a></p>
				<p><a href="<?php echo esc_url( TC_E_COMMERCE_SHOP_PRO_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Pro Documentation', 'tc-e-commerce-shop' ); ?></a></p>
			</div>
			<div class="col-pro-5">
				<h4><?php esc_html_e( 'TC Ecommerce Pro Theme', 'tc-e-commerce-shop' ); ?></h4>
				<P><?php esc_html_e( 'Premium eCommerce WordPress Themes are phenomenal in terms of practicality, uniqueness, flexibility, versatility, and usability. You can use these multipurpose WordPress eCommerce Themes to build a diverse range of business stores. The niche specific layout of the themes reduces much of your time and efforts in building an online store. These user-friendly themes provide easy account management, user-friendly payment options, pop-ups, view cart and add to cart functionality, and so on. Furthermore, the versatile design displays every item in a distinct and impressive way. Also, the theme is updated on a regular basis with a multitude of advanced features that keeps you nowhere behind the emerging market trends. The best eCommerce ready WordPress themes have inbuilt WordPress Customizer so that you get full control to manage the different theme areas by utilizing ample of customization options. You can change almost everything from colors, fonts, banners, background, featured images, texts, sidebars, links, etc. You will find different custom shortcodes that are well packed in the WordPress woo-commerce Themes to display multiple elements on posts and pages. The WordPress eCommerce templates are user-friendly due to the in-built features such as advanced filters, pop-ups, social sharing options, responsive elements, well-sorted product pages, and various other exclusive features.', 'tc-e-commerce-shop' ); ?></P>		
			</div>
			<div class="col-pro-6">				
				<h4><?php esc_html_e( 'Product Description', 'tc-e-commerce-shop' ); ?></h4>
				<ul>
					<li><?php esc_html_e( 'Theme Options using Customizer API', 'tc-e-commerce-shop' ); ?></li>
					<li><?php esc_html_e( 'Responsive design', 'tc-e-commerce-shop' ); ?></li>
					<li><?php esc_html_e( 'Favicon, Logo, title and tagline customization', 'tc-e-commerce-shop' ); ?></li>
					<li><?php esc_html_e( 'Advanced Color options', 'tc-e-commerce-shop' ); ?></li>
					<li><?php esc_html_e( '100+ Font Family Options', 'tc-e-commerce-shop' ); ?></li>
					<li><?php esc_html_e( 'Background Image Option', 'tc-e-commerce-shop' ); ?></li>
					<li><?php esc_html_e( 'Simple and Mega Menu Option', 'tc-e-commerce-shop' ); ?></li>
					<li><?php esc_html_e( 'Enable-Disable options on All sections', 'tc-e-commerce-shop' ); ?></li>
					<li><?php esc_html_e( 'Home Page setting for different sections', 'tc-e-commerce-shop' ); ?></li>
					<li><?php esc_html_e( 'Advance Slider with multiple effects and control options', 'tc-e-commerce-shop' ); ?></li>
					<li><?php esc_html_e( 'Pagination option', 'tc-e-commerce-shop' ); ?></li>
					<li><?php esc_html_e( 'Custom CSS option', 'tc-e-commerce-shop' ); ?></li>
					<li><?php esc_html_e( 'Translations Ready', 'tc-e-commerce-shop' ); ?></li>
					<li><?php esc_html_e( 'Parallax Image-Background Section', 'tc-e-commerce-shop' ); ?></li>
					<li><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'tc-e-commerce-shop' ); ?></li>
					<li><?php esc_html_e( 'Customizable Home Page', 'tc-e-commerce-shop' ); ?></li>
					<li><?php esc_html_e( 'Full-Width Template', 'tc-e-commerce-shop' ); ?></li>
					<li><?php esc_html_e( 'Footer Widgets & Editor Style', 'tc-e-commerce-shop' ); ?></li>
					<li><?php esc_html_e( 'Gallery, Banner & Post Type Plugin Functionality', 'tc-e-commerce-shop' ); ?></li>
					<li><?php esc_html_e( 'Woo Commerce Compatible', 'tc-e-commerce-shop' ); ?></li>
					<li><?php esc_html_e( 'Multiple Inner Page Templates', 'tc-e-commerce-shop' ); ?></li>
					<li><?php esc_html_e( 'Advance Social Media Feature', 'tc-e-commerce-shop' ); ?></li>
				</ul>				
			</div>
		</div>
	</div>
</div>
<?php } ?>