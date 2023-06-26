<?php
try {

	$host='localhost';
	$db = 'meu_banco';
	$username = 'root';
	$password = 'ifsp';
	$dbh = new PDO('mysql:host='.$host.';dbname='.$db.'', $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	print "Error!: " . $e->getMessage();
	die();
}

	
?>