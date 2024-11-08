<?php

// Hide WhatsApp button on selected pages
add_action('wp_head', 'wa_order_display_options');
function wa_order_display_options()
{
	// Hide button on shop loop - desktop
	if (get_option(sanitize_text_field('wa_order_display_option_shop_loop_hide_desktop')) === 'yes') {
?>
		<style>
			@media only screen and (min-width: 768px) {
				.wa-shop-button {
					display: none !important;
				}
			}
		</style>
	<?php
	}
	// Hide button on shop loop - mobile
	if (get_option(sanitize_text_field('wa_order_display_option_shop_loop_hide_mobile')) === 'yes') {
	?>
		<style>
			@media only screen and (max-width: 767px) {
				.wa-shop-button {
					display: none !important;
				}
			}
		</style>
	<?php
	}
	// Hide button on cart page - desktop
	if (get_option(sanitize_text_field('wa_order_display_option_cart_hide_desktop')) === 'yes') {
	?>
		<style>
			@media only screen and (min-width: 767px) {
				.wc-proceed-to-checkout .wa-order-checkout {
					display: none !important;
				}
			}
		</style>
	<?php
	}
	// Hide button on cart page - mobile
	if (get_option(sanitize_text_field('wa_order_display_option_cart_hide_mobile')) === 'yes') {
	?>
		<style>
			@media only screen and (max-width: 767px) {
				.wc-proceed-to-checkout .wa-order-checkout {
					display: none !important;
				}
			}
		</style>
	<?php
	}
	// Hide button on thank you page - desktop
	if (get_option(sanitize_text_field('wa_order_display_option_checkout_hide_desktop')) === 'yes') {
	?>
		<style>
			@media only screen and (min-width: 767px) {
				a.wa-order-thankyou {
					display: none !important;
				}
			}
		</style>
	<?php
	}
	// Hide button on thank you page - mobile
	if (get_option(sanitize_text_field('wa_order_display_option_checkout_hide_mobile')) === 'yes') {
	?>
		<style>
			@media only screen and (max-width: 767px) {
				a.wa-order-thankyou {
					display: none !important;
				}
			}
		</style>
	<?php
	}
}

// Button Colors
add_action('wp_head', 'wa_order_display_options_button_colors');
function wa_order_display_options_button_colors()
{
	$bg 		= get_option(sanitize_text_field('wa_order_bg_color'));
	$txt 		= get_option(sanitize_text_field('wa_order_txt_color'));
	$bg_hover 	= get_option(sanitize_text_field('wa_order_bg_hover_color'));
	$txt_hover 	= get_option(sanitize_text_field('wa_order_txt_hover_color'));
	if (empty($bg) && empty($txt) && empty($bg_hover) && empty($txt_hover)) {
		return;
	} elseif (isset($bg) || isset($txt) || isset($bg_hover) || isset($txt_hover)) {
		// Set default colors
		if (empty($bg)) $bg = 'rgba(37, 211, 102, 1)';
		if (empty($txt)) $txt = 'rgba(255, 255, 255, 1)';
		if (empty($bg_hover)) $bg_hover = 'rgba(37, 211, 102, 1)';
		if (empty($txt_hover)) $txt_hover = 'rgba(255, 255, 255, 1)';
	?>
		<style>
			#sendbtn,
			#sendbtn2,
			.wa-order-button,
			.gdpr_wa_button_input {
				background-color: <?php echo esc_attr($bg); ?> !important;
				color: <?php echo esc_attr($txt); ?> !important;
			}

			#sendbtn:hover,
			#sendbtn2:hover,
			.wa-order-button:hover,
			.gdpr_wa_button_input:hover {
				background-color: <?php echo esc_attr($bg_hover); ?> !important;
				color: <?php echo esc_attr($txt_hover); ?> !important;
			}
		</style>
	<?php
	}
}

// Box Shadow
add_action('wp_head', 'wa_order_display_options_std_box_shadow');

function wa_order_display_options_std_box_shadow()
{
	// Retrieve box shadow settings
	$bshdw      = esc_attr(get_option('wa_order_btn_box_shdw', 'rgba(0,0,0,0.25)'));
	$bshdw_hz   = esc_attr(get_option('wa_order_bshdw_horizontal', '0'));
	$bshdw_v    = esc_attr(get_option('wa_order_bshdw_vertical', '4'));
	$bshdw_b    = esc_attr(get_option('wa_order_bshdw_blur', '7'));
	$bshdw_s    = esc_attr(get_option('wa_order_bshdw_spread', '0'));
	$bshdw_p    = esc_attr(get_option('wa_order_bshdw_position', ''));

	// Retrieve hover box shadow settings
	$bshdw_hov      = esc_attr(get_option('wa_order_btn_box_shdw_hover', 'rgba(0,0,0,0.25)'));
	$bshdw_hz_hov   = esc_attr(get_option('wa_order_bshdw_horizontal_hover', '0'));
	$bshdw_v_hov    = esc_attr(get_option('wa_order_bshdw_vertical_hover', '4'));
	$bshdw_b_hov    = esc_attr(get_option('wa_order_bshdw_blur_hover', '7'));
	$bshdw_s_hov    = esc_attr(get_option('wa_order_bshdw_spread_hover', '0'));
	$bshdw_p_hov    = esc_attr(get_option('wa_order_bshdw_position_hover', ''));

	// Determine the box shadow style
	$box_shadow_style = ($bshdw_p === 'outline') ? '' : 'inset';
	$box_shadow_style_hov = ($bshdw_p_hov === 'outline') ? '' : 'inset';

	// Output CSS for box shadow
	?>
	<style>
		#sendbtn,
		#sendbtn2,
		.wa-order-button,
		.gdpr_wa_button_input,
		a.wa-order-checkout,
		a.wa-order-thankyou,
		.shortcode_wa_button,
		.shortcode_wa_button_nt,
		.floating_button {
			-webkit-box-shadow: <?php echo esc_attr("{$box_shadow_style} {$bshdw_hz}px {$bshdw_v}px {$bshdw_b}px {$bshdw_s}px {$bshdw}"); ?> !important;
			-moz-box-shadow: <?php echo esc_attr("{$box_shadow_style} {$bshdw_hz}px {$bshdw_v}px {$bshdw_b}px {$bshdw_s}px {$bshdw}"); ?> !important;
			box-shadow: <?php echo esc_attr("{$box_shadow_style} {$bshdw_hz}px {$bshdw_v}px {$bshdw_b}px {$bshdw_s}px {$bshdw}"); ?> !important;
		}

		#sendbtn:hover,
		#sendbtn2:hover,
		.wa-order-button:hover,
		.gdpr_wa_button_input:hover,
		a.wa-order-checkout:hover,
		a.wa-order-thankyou:hover,
		.shortcode_wa_button:hover,
		.shortcode_wa_button_nt:hover,
		.floating_button:hover {
			-webkit-box-shadow: <?php echo esc_attr("{$box_shadow_style_hov} {$bshdw_hz_hov}px {$bshdw_v_hov}px {$bshdw_b_hov}px {$bshdw_s_hov}px {$bshdw_hov}"); ?> !important;
			-moz-box-shadow: <?php echo esc_attr("{$box_shadow_style_hov} {$bshdw_hz_hov}px {$bshdw_v_hov}px {$bshdw_b_hov}px {$bshdw_s_hov}px {$bshdw_hov}"); ?> !important;
			box-shadow: <?php echo esc_attr("{$box_shadow_style_hov} {$bshdw_hz_hov}px {$bshdw_v_hov}px {$bshdw_b_hov}px {$bshdw_s_hov}px {$bshdw_hov}"); ?> !important;
		}
	</style>
<?php
}

// Button Margin
add_action('wp_head', 'wa_order_display_options_button_margin');
function wa_order_display_options_button_margin()
{
	// Retrieve button margin settings
	$bm_top    = esc_attr(get_option('wa_order_single_button_margin_top', '0'));
	$bm_right  = esc_attr(get_option('wa_order_single_button_margin_right', '0'));
	$bm_bottom = esc_attr(get_option('wa_order_single_button_margin_bottom', '0'));
	$bm_left   = esc_attr(get_option('wa_order_single_button_margin_left', '0'));

	if ($bm_top !== '0' || $bm_right !== '0' || $bm_bottom !== '0' || $bm_left !== '0') {
		echo "<style>
            .wa-order-button-under-atc,
            .wa-order-button-shortdesc,
            .wa-order-button-after-atc {
                margin: " . esc_attr("{$bm_top}px {$bm_right}px {$bm_bottom}px {$bm_left}px") . " !important;
            }
        </style>";
	}
}

// Button Padding
add_action('wp_head', 'wa_order_display_options_button_padding');
function wa_order_display_options_button_padding()
{
	// Retrieve button padding settings
	$bp_top    = esc_attr(get_option('wa_order_single_button_padding_top', '0'));
	$bp_right  = esc_attr(get_option('wa_order_single_button_padding_right', '0'));
	$bp_bottom = esc_attr(get_option('wa_order_single_button_padding_bottom', '0'));
	$bp_left   = esc_attr(get_option('wa_order_single_button_padding_left', '0'));

	if ($bp_top !== '0' || $bp_right !== '0' || $bp_bottom !== '0' || $bp_left !== '0') {
		echo "<style>
            .wa-order-button-under-atc,
            .wa-order-button-shortdesc,
            .wa-order-button {
                padding: " . esc_attr("{$bp_top}px {$bp_right}px {$bp_bottom}px {$bp_left}px") . " !important;
            }
        </style>";
	}
}

// Hide Product Quantity
function wa_order_remove_quantity($return, $product)
{
	global $product;

	$hide_quantity = get_option('wa_order_option_remove_quantity');
	if ($hide_quantity === 'yes' || is_a($product, 'WC_Product') && get_post_meta($product->get_id(), '_sold_individually', true) === 'yes') {
		return true;
	}
}
add_filter('woocommerce_is_sold_individually', 'wa_order_remove_quantity', 10, 2);

// Add CSS for Hiding Product Quantity & Add to Cart Button
function wa_order_remove_quantity_atc_css()
{
	// Only run on single product pages
	if (!is_product()) {
		return;
	}

	// Get the product
	global $product;
	if (!is_a($product, 'WC_Product')) {
		$product = wc_get_product(get_the_ID());
		if (!$product) {
			return;
		}
	}

	$hide_quantity = get_option('wa_order_option_remove_quantity');
	$sold_individually = $product->get_sold_individually();
	$hide_atc_button = get_post_meta($product->get_id(), '_hide_atc_button', true);
	// Global options
	$globa_hide_atc = get_option('wa_order_option_remove_cart_btn');
	// Collect CSS rules in a variable
	$custom_css = "";
	if ($hide_quantity === 'yes' && $hide_atc_button === 'yes' || $sold_individually && $hide_atc_button === 'yes' || $hide_quantity === 'yes' && $globa_hide_atc === 'yes') {
		$custom_css .= " .woocommerce-js .sold-individually .button.wa-order-button { margin-left: -1em!important; }";
	}

	// Echo the CSS if it's not empty
	if (!empty($custom_css)) {
		echo "<style>" . esc_html($custom_css) . "</style>";
	}
}

// Change the hook to wp_print_styles which runs later
remove_action('wp_head', 'wa_order_remove_quantity_atc_css');
add_action('wp_print_styles', 'wa_order_remove_quantity_atc_css');
