<?
if(isset($_POST['bron_name']) && isset($_POST['bron_fam']) && isset($_POST['bron_date_start']) && isset($_POST['bron_date_end']) && isset($_POST['bron_tel']) && isset($_POST['bron_email']))
{
	$bron_name = htmlspecialchars(stripslashes(trim($_POST['bron_name'])));
	$bron_fam = htmlspecialchars(stripslashes(trim($_POST['bron_fam'])));
	$bron_date_start = htmlspecialchars(stripslashes(trim($_POST['bron_date_start'])));
	$bron_date_end = htmlspecialchars(stripslashes(trim($_POST['bron_date_end'])));
	$bron_quant_vzros = htmlspecialchars(stripslashes(trim($_POST['bron_quant_vzros'])));
	$bron_quant_detei = htmlspecialchars(stripslashes(trim($_POST['bron_quant_detei'])));
	$bron_tel = htmlspecialchars(stripslashes(trim($_POST['bron_tel'])));
	$bron_email = htmlspecialchars(stripslashes(trim($_POST['bron_email'])));
			
	$to  = "info@arli-adler.com"; 

	$subject = "Бронирование на сайте arli-adler.com"; 

	$message = "<b>Имя: </b>".$bron_name.
	"<br /><b>Фамилия: </b>".$bron_fam.
	"<br /><b>Дата заезда: </b>".$bron_date_start.
	"<br /><b>Дата выезда: </b>".$bron_date_end.
	"<br /><b>Количество взрослых: </b>".$bron_quant_vzros.
	"<br /><b>Количество детей: </b>".$bron_quant_detei.
	"<br /><b>Телефон: </b>".$bron_tel.
	"<br /><b>E-mail: </b>".$bron_email; 

	$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
	$headers .= "From: Arli-Adler <no-reply@arli-adler.com>\r\n"; 

	mail($to, $subject, $message, $headers);
}
?>