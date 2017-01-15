<?php
$server="localhost";
$username="root";
$password="";
$database  = 'newsletter';

$db = mysql_connect($server, $username, $password);

if ($db) {
	if (mysql_select_db($database, $db)) {
		//echo 'Baza uspjesno odabrana';
		mysql_query("SET NAMES utf8");
	} else {
		header( "refresh:5;url=http://localhost/php-web-programming/index.html" );
		echo '<p>Doslo je do pogreske kod odabira baze</p>';
		echo 'Preusmjeravanje na glavnu stranicu za otprilike 5 sekundi. U slučaju greške kliknite na <a href="index.html">link</a>.';
		exit();
	}
} else {
	header( "refresh:5;url=http://localhost/php-web-programming/index.html" );
	echo '<p>Doslo je do pogreske kod spajanja na bazu</p>';
	echo 'Preusmjeravanje na glavnu stranicu za otprilike 5 sekundi. U slučaju greške kliknite na <a href="index.html">link</a>.';
	exit();
}

if (isset($_POST['btn_subscribe'])) {
	$email=$_POST["Email"];
	
	mysql_query("insert into subscribers values('','$email')");
	header( "refresh:5;url=http://localhost/php-web-programming/index.html" );
	echo '<p>Hvala na prijavi!</p>';
	echo 'Preusmjeravanje na glavnu stranicu za otprilike 5 sekundi. U slučaju greške kliknite na <a href="index.html">link</a>.';
	exit();
}
?>