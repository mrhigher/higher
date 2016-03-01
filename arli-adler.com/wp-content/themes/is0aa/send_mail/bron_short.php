<?
if(isset($_POST['bron_short_name']) && isset($_POST['bron_short_tel']))
{
	$bron_name = htmlspecialchars(stripslashes(trim($_POST['bron_short_name'])));
	$bron_tel = htmlspecialchars(stripslashes(trim($_POST['bron_short_tel'])));
	$bron_title = htmlspecialchars(stripslashes(trim($_POST['bron_short_title'])));
	$bron_desc = htmlspecialchars(stripslashes(trim($_POST['bron_short_desc'])));
			
	$to  = "info@arli-adler.com"; 

	$subject = "Бронирование на сайте arli-adler.com"; 

	$message = "Бронирование номера из раздела Номера и цены.<br /><br />
	<b>Имя: </b>".$bron_name.
	"<br /><b>Телефон: </b>".$bron_tel.
	"<br /><b>Было выбран номер: </b><br />".
	$bron_title."<br />".
	$bron_desc; 

	$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
	$headers .= "From: Arli-Adler <no-reply@arli-adler.com>\r\n"; 

	mail($to, $subject, $message, $headers);
}
?>