<?php
/**
 * Ternary Operator
 * $ouput = (condition) ? value if true : value if false;
 */

$score = 50;

$result = ( $score >= 80 ) ? 'A+' : "below A+";
echo $result;
echo "\n";

//! check user login
$is_loggged_in = true;

$user = ( ! empty( $is_loggged_in ) ) ? 'Welcome, User!' : 'Please login';

echo $user;
echo "\n";

//! Discout Calculation
$promo_code = "DISCOUNT10";
$discount = ( $promo_code = 'DISCOUNT10' ) ? 0.01 : 0.00;
$total_price = 1200;
$final_price = $total_price - ( $total_price * $discount );
echo "Your payable amount is $final_price";
echo "\n";

//! identity age group
$age = 17;
$age_group = ( $age > 18 ) ? "Adult" : "Minor";
echo " You are $age years old than means $age_group";
?>