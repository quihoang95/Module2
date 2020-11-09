<?php
function validateClass($str)
{
    $regexp = '/^[A,C,P]+[0-9]{4,}+[G,H,I,K,L,M]$/';
    if (preg_match_all($regexp, $str)) {
        echo ("Lớp hợp lệ");
    } else {
        echo ("Lớp ko hợp lệ");
    }
}
validateClass('M0318G');
