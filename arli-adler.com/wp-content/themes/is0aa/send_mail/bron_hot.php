<?
if(isset($_POST['bron_hot_name']) && isset($_POST['bron_hot_tel']) && isset($_POST['bron_hot_num']) && isset($_POST['bron_hot_cat']))
{
	$bron_name = htmlspecialchars(stripslashes(trim($_POST['bron_hot_name'])));
	$bron_tel = htmlspecialchars(stripslashes(trim($_POST['bron_hot_tel'])));
	/*$bron_date_start = htmlspecialchars(stripslashes(trim($_POST['bron_hot_date1'])));
	$bron_date_end = htmlspecialchars(stripslashes(trim($_POST['bron_hot_date2'])));*/
	$bron_hot_cat = htmlspecialchars(stripslashes(trim($_POST['bron_hot_cat'])));
	$bron_hot_num = htmlspecialchars(stripslashes(trim($_POST['bron_hot_num'])));
			
	$to  = "info@arli-adler.com"; 

	$subject = "Бронирование на сайте arli-adler.com"; 

	$message = "Бронирование горящего предложения<br /><br />
	<b>Имя: </b>".$bron_name.
	"<br /><b>Телефон: </b>".$bron_tel.
	"<br /><b>Забронирован номер: </b>".$bron_hot_num.
	"<br /><b>Категория номера: </b>".$bron_hot_cat;
	//"<br /><b>С </b>".$_POST['bron_hot_date1']." <b>по </b>".$bron_date_end;

	$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
	$headers .= "From: Arli-Adler <no-reply@arli-adler.com>\r\n"; 

	mail($to, $subject, $message, $headers);
}
?>