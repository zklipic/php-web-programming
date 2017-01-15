<?php
	if ($_POST['Name'] != '' && $_POST['Surname'] != '' && $_POST['Email'] != '' && $_POST['Subject'] != '' && $_POST['Message'] != '') {
		$headers = 'From: zeljko.klipic@gmail.com' . "\r\n" . 
					'Reply-To: zeljko.klipic@gmail.com' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();
		mail('zeljko.klipic@gmail.com', $_POST['Subject'], $_POST['Message'], $headers);
		print '<p>Hvala na mailu</p>';
	}
?>