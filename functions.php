<?php
function generate_password($pwd_length) {
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $symbols = '!?&%$<>^+-*/()[]{}@#_=';
    $full_chars= $alphabet . $numbers . $symbols;
    $passwd = '';

    while(strlen($passwd) < $pwd_length) {
        $index = rand(0, strlen($full_chars));
        $passwd .= $full_chars[$index];
    }

    return $passwd;
}
?>