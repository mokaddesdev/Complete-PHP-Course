<?php
/**
 * Ternary Operator
 */
//! syntax of ternary operator
 $variable = ('condition') ? 'yes' : 'false';
//? check score
 $score = 55;
 $result = ( $score > 40 ) ? 'pass' : 'failed';
 echo $result . ' ';
 //? check login user
 $is_logged_in = true;
 $message =  ($is_logged_in) ? 'Welcome user!' : 'Please login.';
 echo $message;

 //? discount calculation
 $promo_code = 'DISCOUT10';
 $discount = ( $promo_code == 'DISCOUT10') ? 0.10 : 0.00;
 $total_price = 1000;
 $final_price = $total_price - ( $total_price * $discount );
 echo 'final price: ' . $final_price;

 //? user age group identity
 $age = 17;
 $age_group =  ( $age > 18 ) ? 'Adult Group' : 'Child Group';
 echo 'You are added ' . $age_group;
?>