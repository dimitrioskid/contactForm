<?php
	if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['comments'])) {
		echo "Error";
		
	} else {
	
		$to = "my mail";
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$comments = trim($_POST['comments']);
		
		$subject = "Contact Form";
		$headers = "From: $email";
		$messages = "Name: $name \\r\
        Email: $email \\r\
        Comments: $comments";
		$mailsent = mail($to, $subject, $messages, $headers);
		
		if($mailsent) {
			echo "Mail sent successfuly";
		} else {
            echo "Problem with server, your message coulnd\'t be sent - please try again!";
        }
	}
?>