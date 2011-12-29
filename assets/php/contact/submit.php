<?
	$message		=		$_REQUEST['message'];
	$name			=		$_REQUEST['name'];
	$email			=		$_REQUEST['email'];
	
	if(isset($message) && isset($name) && isset($email)){
		
		// Mail
		$to      = 'mlwelford@gmail.com';
		$subject = 'Contact Form Submission';
		$message = 'Message from meghanwelford.com: '. "\r\n" . $message;
		$headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n" .
		    'Reply-To: ' . $name . ' <' . $email . '>' . "\r\n" .
			'CC: '  . $name . ' <' . $email . '>' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers);
		
		?>
		<h1 class="mw">Thank You for contacting me!</h1>
		<?
	}
?>