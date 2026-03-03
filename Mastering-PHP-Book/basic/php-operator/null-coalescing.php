<?php
/**
 * Null Coalesing Operator
 * Check null value
 * 
 * $result = $variable ?? "Default Value";
 */

//! collect user data form input
$user_name = $_POST['name'] ?? 'Guest';
$user_email = $_POST['email'] ?? '';
echo " Hello $user_name, your email is $user_email";
echo "\n";

//! Check settings
$config_value = $config['setting'] ?? 'default_value';
echo $config_value;
?>