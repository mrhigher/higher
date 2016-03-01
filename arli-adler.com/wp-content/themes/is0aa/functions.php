<?php

add_theme_support( 'post-thumbnails' );
// add_image_size( 'g1_big', 606, 999999); // 404
// add_image_size( 'g1_small', 147, 999999); // 98


add_theme_support('menus');

add_action( 'wp_ajax_screase', 'screase' );
add_action( 'wp_ajax_nopriv_screase', 'screase' );

function j4get_sub_field_value($field, $line, $subfield, $pid){
	if(get_field($field, $pid)){
		$count = 1;
		$r = false;
		while( has_sub_field($field, $pid) ){
			if($count == $line)$r = get_sub_field($subfield);
			$count++;
		}
	}
	return $r;
}

function j4update_sub_field_value($field, $line, $subfield, $pid, $old, $new){
	if(0 && get_field($field, $pid) && have_rows($field, $pid)){
		$count = 1;
		$r = false;
		while( has_sub_field($field, $pid) ){
			// if($count == $line)$r = update_sub_field($subfield, 999);
			echo '<br>'.$count.'-'.$line;
			$count++;
		}
	}
	$r = update_post_meta( $pid, $field.'_'.$line.'_'.$subfield, $new, $old );
	return $r;
}

function screase() {
	$postid = 380;
	$old_value = j4get_sub_field_value('hdr_table', $_GET[line], 'quantity', $_GET[pid]);
	$old = get_post_meta( $postid, 'hdr_table_'.($_GET[line]-1).'_quantity', true);
	echo $old_value."(".$old.")";
	echo j4update_sub_field_value('hdr_table', $_GET[line]-1, 'quantity', $_GET[pid], $old, $old-1);
	$new_value = j4get_sub_field_value('hdr_table', $_GET[line], 'quantity', $_GET[pid]);
	echo ' --> '.$new_value;
	echo "(".get_post_meta( $postid, 'hdr_table_'.($_GET[line]-1).'_quantity', true).")";
exit;
}

function sizef($field, $size){
	thumbn(get_field($field), $size);
}
function sizesf($field, $size){
	thumbn(get_sub_field($field), $size);
}

function thumbn($o,$s){echo $o['sizes'][$s];}
function thu($s){thumbn(get_sub_field($s),'thumbnail');}
function med($s){thumbn(get_sub_field($s),'medium');}
function lar($s){thumbn(get_sub_field($s),'large');}
function ful($s){thumbn(get_sub_field($s),'full');}

/*BGN j4Referals v44jc */
function referals(){
$referer = isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'';
$phrase = '';
$crawler = '';
// ищем в referer адреса поисковиков и присваиваем переменным
// $search и $crawler соответствующие значения
if (stristr($referer, 'yandex.ru')) { $search = 'text='; $crawler = 'Yandex'; }
if (stristr($referer, 'rambler.ru')) { $search = 'words='; $crawler = 'Rambler'; }
if (stristr($referer, 'google.ru')) { $search = 'q='; $crawler = 'Google'; }
if (stristr($referer, 'google.com')) { $search = 'q='; $crawler = 'Google'; }
if (stristr($referer, 'mail.ru')) { $search = 'q='; $crawler = 'Mail.Ru'; }
if (stristr($referer, 'bing.com')) { $search = 'q='; $crawler = 'Bing'; }
if (stristr($referer, 'qip.ru')) { $search = 'query='; $crawler = 'QIP'; }
// если посетитель пришел с поисковика то выполняем следующий код
if ($crawler!=''){
	$phrase = urldecode($referer);
	// ищем ключевое слово в referer
	$phrase2 = explode($search,$phrase);
	$phrase2 = explode('&',$phrase2[1]);
	$phrase = $phrase2[0];
	$result = "Пользователь попал на ваш сайт из поисковика $crawler";
	if($phrase)$result.=" по поисковому запросу: $phrase";
}else{
	if($referer!='')$result = "Пользователь попал на ваш сайт с адреса: $referer";
}
$key_word = $phrase==''? '-нет-' : $phrase;
$ref_eral = $referer==''? '-нет-' : ($crawler=='' ? $referer : $crawler);

?><script>
$(function(){
	if(typeof localStorage.ref_eral === 'undefined'||localStorage.ref_eral=='-нет-')localStorage.ref_eral='<?=$ref_eral?>';
	if(typeof localStorage.key_word === 'undefined'||localStorage.key_word=='-нет-')localStorage.key_word='<?=$key_word?>';
	$('input[name=key-word]').val(localStorage.key_word);
	$('input[name=ref-eral]').val(localStorage.ref_eral);
	$('input[name=page-name]').val(document.URL.replace('http://',''));
	console.log('<?=$referer?>');
	console.log(document.referrer);
});
</script><?php
}
/*END j4Referals */

/*BGN j4YoutubeId v46oc */
function youtube_id($code){
	echo preg_replace('/.*(\.be\/)(.*)$/', "$2", $code);
}
function youtube_idF($field){youtube_id(get_field($field));}
function youtube_idSF($subfield){youtube_id(get_sub_field($subfield));}
/*END j4YoutubeId */

/*BGN j4YoutubeImg v46oc */
function youtube_img($code,$n=0){
	echo "http://img.youtube.com/vi/".preg_replace('/.*(\.be\/)(.*)$/', "$2", $code)."/".$n.".jpg";
}
function youtube_imgF($field,$n=0){youtube_img(get_field($field),$n);}
function youtube_imgSF($subfield,$n=0){youtube_img(get_sub_field($subfield),$n);}
/*END j4YoutubeImg */

function wp_corenavi() {
	global $wp_query;
	$pages = '';
	$max = $wp_query->max_num_pages;
	if (!$current = get_query_var('paged')) $current = 1;
	$a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
	$a['total'] = $max;
	$a['current'] = $current;

	$total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
	$a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
	$a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
	$a['prev_text'] = '&laquo;'; //текст ссылки "Предыдущая страница"
	$a['next_text'] = '&raquo;'; //текст ссылки "Следующая страница"

	if ($max > 1) echo '<div class="navigation">';
	if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
	echo $pages . paginate_links($a);
	if ($max > 1) echo '</div>';
}

?>