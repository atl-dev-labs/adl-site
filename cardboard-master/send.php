You typed in: <?php print $_POST['email'];?>
<?php
		$to = "betterjustin@gmail.com";
		$subject = "Email from my website";
		$body = "the user typed in ...";
		mail($to, $subject, $body);

?>