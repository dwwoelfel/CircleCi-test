<?php
	$dsn = 'mysql:host=localhost;port=3306;dbname=circle_test';
	$login = 'ubuntu';
	$password = '';
	$options = [
		PDO::ATTR_PERSISTENT => true,
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	];

	try {
		$connection = new PDO($dsn, $login, $password, $options);
		echo '<pre>' . print_r($connection, true) . '</pre>';
	} catch (Exception $e) {
		echo 'MESSAGE: ' . $e->getMessage();
		echo PHP_EOL . PHP_EOL;
		echo 'CODE: ' . $e->getCode();
	}
?>