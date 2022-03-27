<?php 
add_action( 'phpmailer_init', 'my_phpmailer_smtp' );
function my_phpmailer_smtp( $phpmailer ) {
    $phpmailer->isSMTP();     
    $phpmailer->Host = "smtp.yandex.com";  
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 587;
    $phpmailer->Username = "your@mail.com";
    $phpmailer->Password = "YourPassword";
    $phpmailer->SMTPSecure = "tls";
    $phpmailer->From = "your@mail.com";
    $phpmailer->FromName = "Your mail name";
}

// this settings are currently worked for yandex
