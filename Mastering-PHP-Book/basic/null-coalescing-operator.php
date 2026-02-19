<?php
//! null coalescing opeerator ( value null check )
//? structure $result = $variable ?? $defult_value;

$user_name = $_POST['name'] ?? 'Student';
echo "Hello user name . $user_name";