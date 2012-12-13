<?php

define( 'WPSC_MERCHANT_V3_PATH', dirname( __FILE__ ) );

add_action( 'wpsc_includes', '_wpsc_merchant_v3_includes' );

function _wpsc_merchant_v3_includes() {
	require_once( WPSC_MERCHANT_V3_PATH . '/helpers/common.php' );
	require_once( WPSC_MERCHANT_V3_PATH . '/classes/payment-gateway.php' );
	require_once( WPSC_MERCHANT_V3_PATH . '/helpers/payment-gateway.php' );
	require_once( WPSC_MERCHANT_V3_PATH . '/helpers/checkout.php' );

	if ( is_admin() ) {
		require_once( WPSC_MERCHANT_V3_PATH . '/helpers/admin.php' );
	}
}