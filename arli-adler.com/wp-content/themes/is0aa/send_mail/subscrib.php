<?
if(isset($_POST['subscrib_email']))
{
	$subscrib_email = htmlspecialchars(stripslashes(trim($_POST['subscrib_email'])));
			
	$to  = "info@arli-adler.com"; 

	$subject = "Подписка на горящие туры  на сайте arli-adler.com"; 

	$message = "Подписка на горящие туры:<br /><b>E-mail: </b>".$subscrib_email; 
	
	$message_user = "Спасибо, ваша заявка принята. 
	<br /><br />
	--<br />
	Вы можете с нами связаться:<br />
	Горячая линия 8(800) 333-61-69 (Звонок по России бесплатный, круглосуточно)<br />
	+7 (918) 307-47-48, с 10:00 до 19:00<br />
	E-mail: info@arli-adler.com";

	$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
	$headers .= "From: Arli-Adler <no-reply@arli-adler.com>\r\n"; 

	mail($to, $subject, $message, $headers);
	mail($subscrib_email, $subject, $message_user, $headers);
}
?>