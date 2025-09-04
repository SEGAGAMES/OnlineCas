<?php

error_reporting(E_ALL);

function softdie($txt, $ret = false){
	$array = array();
	$array['result'] = $txt;
	$array['ret'] = $ret;
	echo '<aefer>'.base64_encode(serialize($array)).'</aefer>';die();
}

// First Delete yourself !
@unlink(__FILE__); // More has to be done here !

// CHMOD
$paths = unserialize(base64_decode('[[[paths]]]'));

if(!function_exists('symlink')){
	softdie('NO_FUNC');
}

$ret = symlink($paths['target'], $paths['link']);

softdie('DONE', $ret);

