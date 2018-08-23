<?php
require '../vendor/autoload.php';
$api = new Binance\API("<api key>","<secret>");
try{
	$market = $api->miniTicker(function($api, $ticker) {
		print_r($ticker);
	});
}
catch(\Error $e){
	echo $e->getMessage();
}
