<?php
	session_start();
	require 'vendor/autoload.php';

	$shopUrl = 'antzara.myshopify.com';
	$accessToken = 'fc4d2b599ac03560713b87446c87b1d4';
	$claveApi = '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';

	$client = new \Shopify\Client([
	   "shopUrl" => $shopUrl,
	   "X-Shopify-Access-Token" => $accessToken,
	   "password" => $claveApi
	]);

	$client->getOrders();

	print_r($client);