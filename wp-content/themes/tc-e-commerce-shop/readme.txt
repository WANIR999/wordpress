=== TC E-Commerce Shop WordPress Theme ===
Contributors: Themescaliber
Tags: left-sidebar, right-sidebar, one-column, two-columns, three-columns, four-columns, grid-layout, block-styles, wide-blocks, custom-background, custom-logo, custom-menu, custom-header, editor-style, featured-images, footer-widgets, flexible-header, sticky-post, full-width-template, theme-options, threaded-comments, translation-ready, post-formats, rtl-language-support, blog, e-commerce, portfolio
Requires at least: 5.0
Tested up to: 5.9
Requires PHP: 7.2
Stable tag: 0.8.7
License: GNU General Public License v3.0
License URI: http://www.gnu.org/licenses/gpl.html

TC ECommerce Shop WordPress Theme is the ultimate solution to create multipurpose online stores such as online book store, sports store, electronic items store, mobile & tablet store, apparel store, baby store, fashion store, cosmetics shop, handbags store, medical stores, jewelry store, etc. 

== Description ==

TC ECommerce Shop WordPress Theme is the ultimate solution to create multipurpose online stores such as online book store, sports store, electronic items store, mobile & tablet store, apparel store,  baby store, departmental store, organic vegetables, eco friendly products, biking accessories,  Men’s Beauty Products, Home Exercise Equipment, dairy products, fashion store, cosmetics shop, handbags store, medical stores, Smart Speakers, Everyday Products, digital shop, Natural Feminine Care Products, hair products, affiliate website, Natural Pet Care, dropshipping, Disinfectant Products, Boutique Rugs, kids or women store, accessories store, luxury, jewelry store. It also covers different businesses including technology, digitals, shoe store, accessory store, organic tea, glass store, kitchen online shop design, product showcase, furniture, affiliate store, home appliances site, grocery, clothing, and decorative stores restaurant, corporate companies, storefront, grocery, e shopper platform, kids fashion, agencies, bloggers, etc. It’s built on Bootstrap which makes it a perfect base to sell out eCommerce items. This clean multipurpose WooCommerce WordPress Theme offers extensive functionality to sell different products in a fabulous manner. The mobile friendly nature of this theme gives an amazing viewing experience to the visitors. It is built up of awesome features such as banners, call to action buttons, sidebars, post formats,  testimonial section, shortcodes, and a lot more. The theme is developed using optimized codes that help in providing faster page load time each time a visitor browses your site. This customizable responsive WooCommerce WordPress theme offers various personalization options to ease the task of website development. The integrated social media features make this multipurpose theme highly interactive on social sites. Its SEO friendly nature gives enhanced performance and better ranking of your site on search engines. With dozens of customizable options, this user-friendly theme makes a perfect fit for your professional eCommerce website. TC multipurpose eCommerce WordPress theme is all that you need to leave your mark in the world of eCommerce!

== Changelog ==

= 0.1 =
* Initial Version Released

= 0.2 =
* Styling Done

= 0.3 =
* Error resolved.

= 0.3.1 =
* Below are following resolved points:-
	-- On the all_the_cool_cats issue, the problem wasn't with the name of the variables, but with the name of the transient itself(sorry if I wasn't clear enough on it). Variables inside of your functions you can name however you like, but since the transient will be stored in the database, just like post meta, it needs to have a custom prefix. So the name of your transient(what you pass to get_transient() and set_transient()) should be tc_e_commerce_shop_all_the_cool_cats.

    --It seems like you accidentally removed the template-parts folder, so now I can't check the sticky post fix :)

    --The fix for the IE style is to simply remove the dependency(as that's what preventing the style from being enqueued). Here's the updated code: wp_enqueue_style('tc-e-commerce-shop-ie', get_template_directory_uri().'/css/ie.css');

    --On the screenshot and image licensing, you need to declare all images that are part of the screenshot. So not just the background image, but also the camera image, the woman, shoes, watch and sunglasses.

    --Also on the screenshot - I don't feel like it follows the requirement of being a reasonable representation of what the theme can look like. I'm going to highlight the specific issues that I'm seeing in terms of the screenshot vs the theme installed locally:

    --There's no way in the theme to hide the site title
    --There's no way to change any of the content over the slider background. The title and "Learn More" are automatically inserted over the featured image and centered.
    --The arrows are still not exactly like in the screenshot.
    --The styling of the products is not the same as in the screenshot
    --The red border(left, right and bottom), as well as the black bar on the bottom do not exist in the actual theme

= 0.3.2 =
* 	Below are following resolved points:-
	-- In template-tags.php, you're still calling delete_transient( 'all_the_cool_cats' ); instead of delete_transient( 'tc_e_commerce_shop_all_the_cool_cats' );

	-- The instructions on how to setup the home page should be part of the readme, or otherwise implemented for the end-user to see(you can add descriptions to the Customizer sections for example). Adding the instructions to the readme will be enough in general.

= 0.3.3 =
* Tested Upto WordPress Version 4.9.1.
* Done Styling Changes.
* Remove Unwanted css code.
* Added Hooks In Theme.
	
= 0.3.4 =
* Long Site Title and Site Description are handling properly. 
* Removed the archive template part form index.php , search.php and archive.php.
* Removed wp_reset_postdata(); form template-tag.php ex wp_get_attachment_image( $post->ID, $attachment_size ).
* Removed in-line style code from custom-header.php.

= 0.3.5 =
* Woocommerce files updated.
* Fontawesome files updated.
* Font code update in function.php file.
* Done the css customization. 

= 0.3.6 =
* Update bootstrap.
* Added post format files and done the changes in template-part folder.
* Removed the unused css.
* Removed all the font family and add new font in theme.
* update the translation file in language folder.
* Added js code in custom.js and delete the other js files.

= 0.3.7 =
* Added color and font pallete.
* Resolved theme errors.

= 0.3.8 =
* Changed the slider.
* Resolved theme errors.
* Updated woocommerce.
* Changed theme screenshot.
* Changed image urls.
* Updated POT file.

= 0.3.9 =
* Changed Screenshot.
* Updated readme file.

= 0.4 =
* Added theme color option.
* Updated POT file.
* Resolved theme issue.

= 0.4.1 =
* Changed the notice design in dashboard.
* Added skip to content part in the theme.

= 0.4.2 =
* Resolved contrast errors.
* Added new menu style.
* Added new search style.
* Updated pot file.
* Added Show/hide option for topbar in customizer.
* Added sticky header option in customizer.
* Changed some theme code.

= 0.4.3 =
* Added Logo Width option in customizer.
* Updated pot file.

= 0.4.4 =
* Added Width layout option in customizer.
* Updated Woocommerce widgets css.
* Updated POT file.

= 0.4.5 =
* Added enable / disable option for post date, post author & post comments.
* Updated POT file.

= 0.4.6 =
* Added footer widget layout setting in customizer.

= 0.4.7 =
* Added show/hide Back to Top button and its alignment.
* Starter content is added in theme.
* Selective Refresh is added in theme.
* Updated .pot file.

= 0.4.8 =
* Added Slider content spacing option.
* Added Show/hide option for slider title & Button.
* Added slider content alignement option.
* Added slider image opacity option and slider speed option.
* Added Show/hide option for site title & site description.
* Updated .pot file.

= 0.4.9 =
* Added Post excerpt length and excerpt suffix settings.
* Added Post Content type setting.
* Added Post button text, border radius and Button padding settings.
* Added Enable / Disable option for Related post and its title setting.
* Added Related posts order by setting and its count setting.
* Updated .pot file.

= 0.5 =
* Added Show/Hide Shop page and Single Product page sidebar options.
* Added Show/hide Related products option in single product page.
* Added Products per row and Products per page options.
* Added Woocommerce button padding and border radius options.
* Added Show/Hide Product border and Product border radius option.
* Added Products padding and product box shadow options.
* Updated .pot file.

= 0.5.1 =
* Added Enable/ Disable Single post feature image and Tags options.
* Added Enable/ Disable Single post comment and nav links options.
* Added Single post Previous navigation text option.
* Added Single post Next navigation text option.
* Added 404 page setttings.
* Updated .pot file.

= 0.5.2 =
* Added preloader & its show/hide option.
* Added preloader type option.
* Added preloader background color options.
* Added copyright padding & font size options.
* Added copyright alignment option.
* Resolved theme errors.
* Updated .pot file.

= 0.5.3 =
* Resolved within menu focus issue.
* Resolved some theme errors.

= 0.5.4 =
* Added Sale badge position option.
* Added Sale badge top bottom padding option.
* Added Sale badge left right padding option.
* Added Sale badge border radius option.
* Added footer background color option.
* Added footer background image option.
* Added Back to Top Button Text option.
* Added sanitize_callback function input type.
* Prefixing done in custom.js
* Removed "esc_html" from echoing function
* Added triple license of Font Awesome.
* Removed stable tag from readme.txt
* Updated .pot file.

= 0.6 =
* Added Comment Form Width option.
* Added Comment title option.
* Added Comment button text option.
* Added No Result Page Title option.
* Added No Result Page text option.
* Added Show/Hide Search Form option.
* Updated .pot file.

= 0.6.1 =
* Added Post Navigation type option.
* Added Enable / Disable Post Navigation option.
* Added Topbar top bottom padding option.
* Added Sticky Header Padding option.
* Make clickable phone number and email.
* Updated .pot file.

= 0.6.2 =
* Changed menu focus code.
* Changed License & License URI in style.css
* Added has_nav_menu() condition in header.php.
* Changed header images dimensions.

= 0.6.3 =
* Added FontAwesome icon changer option for every icons.
* Added stable tag in readme.txt file.
* Added flexible header tag in theme.
* Added .mo and .po files of Arabic, German, Spanish, French, Italian, Russian, Turkish and Chinese languages.

= 0.6.4 =
* Added Wide Block tag in theme.
* Resolved some errors.

= 0.6.5 =
* Error Resolved.

= 0.6.6 =
* Reduced css by adding padding margin classes of bootstrap.

= 0.6.7 =
* Added escaping to get_template_directory_uri().
* Changed outline type in css.
* Done some prefixing.

= 0.6.8 =
* Added navigation case option.
* Added navigation font size option.
* Removed jquery.min.js file & its enqueued code.
* Removed effects.css file & its enqueued code.
* Done some changes in customizer.
* Updated all .po files.

= 0.6.9 =
* Changed email sanitization.
* Changed some function.php code.
* Added some classes in global color css.
* Added site title and description font size option.
* Updated all .po files.

= 0.7 =
* Added Enable/Disable Featured image option for blog page.
* Added Featured image border radius option.
* Added Featured image box shadow option.
* Added linkedin social media settings.
* Updated all .po files.

= 0.7.1 =
* Added option to Slider Height.
* Updated .pot file.

= 0.7.2 =
* Added Enable/Disable Shop page pagination option.
* Added Post blocks option.
* Updated .pot file.

= 0.7.3 =
* Updated bootstrap version 5.0.1.
* Changed preloader js.

= 0.7.4 =
* Added post navigation position option.
* Changed responsive media css.
* Updated .pot file.

= 0.7.5 =
* Resolved css error.
* Added theme support function for html5.
* Added theme support function for responsive embeds.
* Updated .pot file.

= 0.7.6 =
* Added Open Menu Icon option in Mobile Media.
* Added Close Menu Icon option in Mobile Media.
* Added Show / Hide Topbar option in Mobile Media.
* Added Show / Hide Back to Top Button option in Mobile Media.
* Updated .pot file.

= 0.7.7 =
* Added Show / Hide Preloader option in Mobile Media.
* Updated .pot file.

= 0.7.8 =
* Added show/hide slider overlay settings.
* Added slider overlay color settings.
* Updated .pot file.

= 0.7.9 =
* Added show/hide Slider option in Mobile Media.
* Updated .pot file.

= 0.8 =
* Added width and margin for search widget in style.css.
* Added width for login box in style.css file.
* Resolved search widget css error.
* Changed title of sidebar options for theme layout setting in customizer.php file.
* Added hover effect on anchor tag in style.css file.
* Resolved theme check errors. 

= 0.8.1 =
* Added option to change product sale font size.
* Updated .pot file.

= 0.8.2 =
* Added enable / disable option for post time.
* Updated all .po files.

= 0.8.3 =
* Added navigation font weight option.
* Updated .pot file.

= 0.8.4 =
* Added Social icon font size option.
* Updated .pot file.

= 0.8.5 =
* Added Copyright Background Color.
* Added free theme Documentation link in customizer and get started.
* Added premium theme Documentation link in get started.
* Updated .pot file.

= 0.8.6 =
* Added Enable / Disable Single Post Time.
* Updated .pot file.

= 0.8.7 =
* Added Show/Hide Sticky header for mobile media options.
* Updated .pot file.

== Resources ==

TC E-Commerce Shop WordPress Theme, Copyright 2017 Themescaliber
TC E-Commerce Shop is distributed under the terms of the GNU GPL

Theme is Built using the following resource bundles.

- Bootstrap 
	-- Mark Otto
	-- copyright 2011-2021, Mark Otto
	-- https://github.com/twbs/bootstrap/releases/download/v5.0.1/bootstrap-5.0.1-dist.zip
	-- License: Code released under the MIT License. v5.0.1
	-- https://github.com/twbs/bootstrap/blob/main/LICENSE

- Font-Awesome 
	-- Davegandy
	-- copyright July 12, 2018, Davegandy
	-- https://github.com/FortAwesome/Font-Awesome.git
	-- License: Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License
	-- https://github.com/FortAwesome/Font-Awesome/blob/master/LICENSE.txt

- Customizer Pro 
	-- Justin Tadlock
	-- Copyright 2016, Justin Tadlock
	-- https://github.com/justintadlock/trt-customizer-pro.git
	-- License: GNU General Public License v2.0
	-- http://www.gnu.org/licenses/old-licenses/gpl-2.0.html

- Superfish 
	-- Joeldbirch
	-- Copyright 2013, Justin Tadlock
	-- https://github.com/joeldbirch/superfish.git
	-- License: Free to use and abuse under the MIT license. v1.7.9
	-- https://github.com/joeldbirch/superfish/blob/master/MIT-LICENSE.txt

- Screenshot Images.
	License: CC0 1.0 Universal (CC0 1.0) 
	Source: https://stocksnap.io/license

	Slider image, Copyright Lisa Fotios
	License: CC0 1.0 Universal (CC0 1.0)
	Source: https://stocksnap.io/photo/ELZU79WHYI

	Product image, Copyright EVG Photos
	License: CC0 1.0 Universal (CC0 1.0)
	Source: https://stocksnap.io/photo/UHAQDIYT6X

	Product image, Copyright Jess Watters
	License: CC0 1.0 Universal (CC0 1.0)
	Source: https://stocksnap.io/photo/KFMR70XLYS

	Product image, Copyright Burst
	License: CC0 1.0 Universal (CC0 1.0)
	Source: https://stocksnap.io/photo/IVZDQN85VY

	Product image, Copyright Jess Watters
	License: CC0 1.0 Universal (CC0 1.0)
	Source: https://stocksnap.io/photo/LSOVUF5JEA