<?php
/**
 * php constant
 * 
 *  Two way call constanrt in php
 * 1. define()
 * 2. const key word. add 5.3 php version
 */
define( 'CONSTANT_NAME', 'value' );
const CONSTANT_NAME1 = 'value';

//! day define in week
define( 'DAYS_IN_WEEK', 7 );
echo 'There are ' . DAYS_IN_WEEK . ' days in a week.';
echo "\n";

//! Vat percent(%)
define( 'VAT_RATE', 0.15 );
$product_price = 100;
$total_price = $product_price + ( $product_price * VAT_RATE );
echo 'Please pay total price including VAT:' . $total_price;
echo "\n";

//! pie value store
define( 'PI', 3.1416 );
$redius = 5;
$circumference = 2 * PI * $redius; 
echo 'Circumference of the circle: ' . $circumference;