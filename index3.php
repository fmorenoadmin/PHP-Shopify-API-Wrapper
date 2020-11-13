<?php
	session_start();

	$shopUrl = 'https://antzara.myshopify.com/admin/api/2020-07/orders.json?status=any';
	$accessToken = '9318b7a455bd17c456cf48bc2d5a9330';
	$claveApi = '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';
	
	$params=['username'=>$accessToken, 'password'=>$claveApi];

	$defaults = array(
		CURLOPT_URL => $shopUrl,
		CURLOPT_POST => true,
		CURLOPT_POSTFIELDS => $params,
	);
	$ch = curl_init();

	$fp = fopen("example_homepage.json", "w");

	curl_setopt($ch, CURLOPT_FILE, $fp);

	curl_exec($ch);
	curl_close($ch);
	fclose($fp);