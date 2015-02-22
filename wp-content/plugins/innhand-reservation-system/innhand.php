<?php
/*
Plugin Name: innhand
Plugin URI: http://innhand.com
Description: [innhand account=1 lang=de] shortcode
Version: 1.2
Author: innHand
Author URI: http://innhand.com
License: GPLv2 or later
*/

if ( !function_exists( 'innhand_embed_shortcode' ) ) :
	
	function innhand_embed_shortcode($atts, $content = null) {
		$html .= '
					<script type="text/javascript" src="http://app.innhand.com/wbe/accounts/'.$atts["account"].'/integration.js?wbe_lang='.$atts["lang"].'"></script>
				';
		return $html;
	}
	add_shortcode('innhand', 'innhand_embed_shortcode');
	
endif;