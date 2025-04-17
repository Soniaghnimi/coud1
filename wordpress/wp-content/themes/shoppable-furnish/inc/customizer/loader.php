<?php

function shoppable_furnish_default_styles(){

	// Begin Style
	$css = '<style>';

	# Responsive Top Deals
	if( !get_theme_mod( 'mobile_top_deal', true ) ){
		$css .= '
			@media screen and (max-width: 767px){
				.section-top-deal-area {
	    			display: none;
				}
			}
		';
	}

	# Responsive Feedbacks
	if( !get_theme_mod( 'mobile_feedbacks', true ) ){
		$css .= '
			@media screen and (max-width: 767px){
				.section-feedback-area {
	    			display: none;
				}
			}
		';
	}

	# Responsive Feedbacks
	if( !get_theme_mod( 'mobile_special_occasion', true ) ){
		$css .= '
			@media screen and (max-width: 767px){
				.section-occasion-area {
	    			display: none;
				}
			}
		';
	}

	// End Style
	$css .= '</style>';

	// return generated & compressed CSS
	echo str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}
add_action( 'wp_head', 'shoppable_furnish_default_styles', 99 );