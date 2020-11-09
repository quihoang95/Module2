<?php
function validatePhoneNumber($str)
{
    $regexp = '/^[(]+[0-9]{2,}+[)]+[-]+[(]+[0]+[0-9]{9,}+[)]$/';
    if (preg_match_all($regexp, $str)) {
        echo ("Số điện thoại hợp lệ");
    } else {
        echo ("Số điện thoại ko hợp lệ");
    }
}
validatePhoneNumber('(a8)-(22222222)');