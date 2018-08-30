<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];

		$to='onlinestudymaterial94@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Website Suggestions ';
		$message="Name :".$name."\n"."Wrote the following suggestion :"."\n".$msg;
		$headers="From: ".$email;
        $headers .= "Reply-To:\r\n".$to;
        $headers .= "Return-Path: onlinestudymaterial94@gmail\n".$to;
        $headers .= "CC: ".$email;
        $headers .= "BCC:".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.",ThankYou for Visiting</h1>";
		}
		else{
			echo "Something went wrong!";
		}
		$headers="From: ".$to;
		$to=$email;
		if(mail($to, 'feedback response', 'thanks for your valuable feedback we will surely try our best to end your problems ', $headers)){
			
		}
		else{
			echo "Something went wrong!";
		}
		$headers='';
         $to='';		
	}
?>