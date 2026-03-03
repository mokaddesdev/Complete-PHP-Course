<?php

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $name = htmlspecialchars( $_POST['name']) ?? '';
    $email = htmlspecialchars( $_POST['email'] ) ?? '';
    $message = htmlspecialchars( $_POST['message'] ) ?? '';

    if ( ! empty( $name ) && !empty( $email) && ! empty( $message) ) {
        echo "Thank you, $name! We have received your message.";
    } else {
        echo "All fields are required!";
    }
}
?>