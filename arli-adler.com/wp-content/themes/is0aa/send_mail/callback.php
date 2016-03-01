<?
if(isset($_POST['callback_name']) && isset($_POST['callback_tel']))
{
	$callback_name = htmlspecialchars(stripslashes(trim($_POST['callback_name'])));
	$callback_tel = htmlspecialchars(stripslashes(trim($_POST['callback_tel'])));
			
	$to  = "info@arli-adler.com"; 

	$subject = "Заказ обратного звонка на сайте arli-adler.com"; 

	$message = "Посетитель сайта заполнил форму заказа обратного звонка.<br /><br />
	<b>Имя: </b>".$callback_name.
	"<br /><b>Телефон: </b>".$callback_tel; 

	$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
	$headers .= "From: Arli-Adler <no-reply@arli-adler.com>\r\n"; 

	mail($to, $subject, $message, $headers);
}
?>