<?php
		
		$userName		= $_POST['name'];
		$userPhone		= $_POST['phone'];
		$userEmail		= $_POST['email'];
		$userMessage	= $_POST['message'];


		$to 			= "atldevlabs@gmail.com";
		$subject 		= "Email from atldevlabs.com";
		$body 			= "Information submitted";
		
		$body .= "\r\n Name: " . $userName;
		$body .= "\r\n Phone: " . $userPhone;
		$body .= "\r\n Email: " . $userEmail;
		$body .= "\r\n Message: " . $userMessage;

		mail($to, $subject, $body);
		echo '<script>window.location = "thanks.html" </script>';
		exit();

?>