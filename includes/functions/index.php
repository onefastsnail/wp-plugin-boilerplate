<?php

function get_current_timestamp(){
	return time();
}

function get_tiny_url($url) {

	$timeout = 5;

	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,'http://tinyurl.com/api-create.php?url='.$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
	$data = curl_exec($ch);

	//if we have an error revert to the original url
	if(curl_error($ch)){
		$data = $url;
	}

	curl_close($ch);

	return $data;
}