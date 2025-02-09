<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
require_once( dirname( __FILE__ ) . '/Mapper.php' );
require_once( dirname( __FILE__ ) . '/Base.php' );
require_once( dirname( __FILE__ ) . '/Product.php' );
require_once( dirname( __FILE__ ) . '/ProductAttribute.php' );
require_once( dirname( __FILE__ ) . '/Category.php' );
require_once( dirname( __FILE__ ) . '/Order.php' );
require_once( dirname( __FILE__ ) . '/OrderItem.php' );
require_once( dirname( __FILE__ ) . '/OrderTaxItem.php' );
require_once( dirname( __FILE__ ) . '/OrderCouponItem.php' );
require_once( dirname( __FILE__ ) . '/Customer.php' );
require_once( dirname( __FILE__ ) . '/Comment.php' );
require_once( dirname( __FILE__ ) . '/Coupon.php' );
require_once( dirname( __FILE__ ) . '/Review.php' );
require_once( dirname( __FILE__ ) . '/Image.php' );
require_once( dirname( __FILE__ ) . '/ShippingClass.php' );
// don't use __ function prefixes outside of classes as it is reserved by woocommerce.
function Printaura_fixPHPNSGlobalStupidity() {
  global $wpdb,$post,$user_ID,$post_ID;
  \Printaura_WCAPI\Base::setAdapter( $wpdb );
}
Printaura_fixPHPNSGlobalStupidity();
