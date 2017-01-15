<?php
	if ($_POST['Name'] != '' && $_POST['Surname'] != '' && $_POST['Email'] != '' && $_POST['Subject'] != '' && $_POST['Message'] != '') {
		$headers = 'From: sender@email.com' . "\r\n" . 
					'Reply-To: email@email.com' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();
		mail('email@email.com', $_POST['Subject'], $_POST['Message'], $headers);
		print '<p>Hvala na mailu</p>';
	}
?>