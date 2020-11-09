<?php
function validateAccount($str)
{
    $regexp = '/^[_a-z0-9]{6,}$/';
    if (preg_match_all($regexp, $str)) {
        echo ("Account hợp lệ");
    } else {
        echo ("Account ko hợp lệ");
    }
}
validateAccount('12345');