<?php
include('smtp/PHPMailerAutoload.php');
echo smtp_mailer('Brajeshmishra825@gmail.com','Testing My SMTP','Testing Testing');
function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	//$mail->SMTPDebug=3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'type'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = "587"; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "tes27769@gmail.com";
	$mail->Password = 'Test@277.in';
	$mail->SetFrom("tes27769@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		echo 'Sent';
	}
}
?>