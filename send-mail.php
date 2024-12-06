<?php
	{
		$name		=	$_POST['name'];
		$email		=	$_POST['email'];
		$phone		=	$_POST['phone'];
		$message	=	$_POST['message'];
		
		
		$to		=	"realworldwithnitin@gmail.com";
		
		$mainsubject	= "Real World With Nitin Website Query";
		$headers = 'From: '.$name.' <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;
		$body		=	"Name : $name\n\nEmail ID : $email \n\nNumber : $phone  \n\nMessage : $message";
		mail($to,$mainsubject,$body,$headers);
		header('location: index.html');
		}
?>