<?php
	if ($_POST['Name'] != '' && $_POST['Surname'] != '' && $_POST['Email'] != '' && $_POST['Subject'] != '' && $_POST['Message'] != '') {
		$headers = 'From: ' . $_POST['Email'] . "\r\n" . 
					'Reply-To: email@email.com' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();
					
		if (mail('email@email.com', $_POST['Subject'], $_POST['Message'], $headers)) {
			header( "refresh:5;url=http://localhost/php-web-programming/index.html" );
			echo '<p>Email uspješno poslan!</p>';
			echo 'Preusmjeravanje na glavnu stranicu za otprilike 5 sekundi. U slučaju greške kliknite na <a href="index.html">link</a>.';
			exit();
		} else {
			header( "refresh:5;url=http://localhost/php-web-programming/index.html" );
			echo '<p>Email nije poslan. Potrebno konfigurirati mail server</p>';
			echo '<p>Upute za konfiguraciju mail servera nalaze se na 
				<a href="http://stackoverflow.com/questions/15965376/how-to-configure-xampp-to-send-mail-from-localhost/18185233#18185233">linku</a></p>';
			echo 'Preusmjeravanje na glavnu stranicu za otprilike 5 sekundi. U slučaju greške kliknite na <a href="index.html">link</a>.'; 
			exit();
		}
	}
?>