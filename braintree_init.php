<?php 
	session_start();
	require_once("lib/autoload.php");
	// if(file_exists(__DIR__ . "/../.env"));
	// {
	// 	$dotenv= new Dotenv\Dotenv(__DIR__ . "/../");
	// 	$dotenv->load();
	// }
	Braintree \ Configuration::environment("sandbox");
	Braintree \ Configuration::merchantId("jbtyjw8tt7cjvnpk");
	Braintree \ Configuration::publicKey("bwfn59c2c484b87d");
	Braintree \ Configuration::privateKey("839da2397840437a9523a470f57860c8");
 ?>