<?php
if($USER_LOGGED_IN = '1') {

$db = mysql_connect($db_host,$db_user,$db_pass);
mysql_select_db($db_name,$db);
mysql_query('SET character_set_client="utf8"');
mysql_query('SET character_set_results="utf8"');
mysql_query('SET collation_connection="utf8_general_ci"');

if($_GET['action'] == NULL) {

$query1 = mysql_query('SELECT * FROM `goods`');
	if($query1!=NULL){
	echo '<table border="1"><tr class="head"><td align="center">Номер товара</td><td align="center">Название товара</td><td align="center">Управление</td></tr>';
		while($query1t = mysql_fetch_array($query1)) {
			echo '<tr><td align="center">'.$query1t['good_id'].'</td><td align="center">'.$query1t['good_name'].'</td><td><a class="button" href="?cat=goods&action=edit&entry='.$query1t['good_id'].'">Редактировать</a><a class="button" href="?cat=goods&action=remove&entry='.$query1t['good_id'].'">Удалить</a></td></tr>';
		}
	echo '</table>
	<div class="controlbox">
	<button type="button" onclick="top.location.href=\'?cat=goods&action=add\';">Добавить новый товар</button>
	</div>';
	}

}
// ADD NEW CAT
if($_GET['action'] == 'add' && $_POST['goodname'] == NULL) {
	echo '<form action="?cat=goods&action=add" method="post">
	<table>
	<tr><td>Название:</td><td><input type="text" name="goodname"/></td></tr>
	<tr><td>Категория:</td><td><input type="text" name="goodnamed"/></td></tr>
	<tr><td>Цена товара:</td><td><input type="text" name="goodprice"/></td></tr>
	<tr><td>Скидка:</td><td><input type="text" name="goodsale"/></td></tr>
	<tr><td>Номер категории:</td><td><input type="text" name="goodcatid"/></td></tr>
	<tr><td>Ссылка:</td><td><input type="text" name="goodlink"/></td></tr>
	<tr><td>URL Картинки:</td><td><input type="text" name="goodimage"/></td></tr>
	<tr><td>Ссылка на ютуб*:</td><td><textarea name="gooddesc1"></textarea></td></tr>
	<tr><td>Главное описание*:</td><td><textarea name="gooddesc2"></textarea></td></tr>
	<tr><td>Как это работает?*:</td><td><textarea name="gooddesc3"></textarea></td></tr>
	<tr><td>URL скриншота1:</td><td><input type="text" name="goodimage1"/></td></tr>
	<tr><td>URL скриншота2:</td><td><input type="text" name="goodimage2"/></td></tr>
	<tr><td>URL скриншота3:</td><td><input type="text" name="goodimage3"/></td></tr>
	<tr><td>URL скриншота4:</td><td><input type="text" name="goodimage4"/></td></tr>
	<tr><td>URL скриншота5:</td><td><input type="text" name="goodimage5"/></td></tr>
	<tr><td>URL скриншота6:</td><td><input type="text" name="goodimage6"/></td></tr>
	<tr><td>Позиция товара:</td><td><input type="text" name="goodposition"/></td></tr>
	</table>
		<br>
        <table border="1">		
        <tr><td>Поля с * не обязательны для заполнения.</td></tr>
        </table>
<br>
	<input type="checkbox" name="goodnew" value="1"/> Показывать в блоке новых товаров?
	<input type="submit" value="Добавить"/>
	</form>
	<br>
			<p>Загрузка изображения:</p>
		<form method="post" enctype="multipart/form-data">
			<input type="file" name="userfile">
			<input type="submit" name="upload" value="Загрузить">
		</form>';
$uploaddir = '../images/';
// это папка, в которую будет загружаться картинка
$apend=date('YmdHis').rand(100,1000).'.jpg'; 
// это имя, которое будет присвоенно изображению 
$uploadfile = "$uploaddir$apend"; 
//в переменную $uploadfile будет входить папка и имя изображения

// В данной строке самое важное - проверяем загружается ли изображение (а может вредоносный код?)
// И проходит ли изображение по весу. В нашем случае до 512 Кб
if(($_FILES['userfile']['type'] == 'image/gif' || $_FILES['userfile']['type'] == 'image/jpeg' || $_FILES['userfile']['type'] == 'image/png') && ($_FILES['userfile']['size'] != 0 and $_FILES['userfile']['size']<=512000)) 
{ 
// Указываем максимальный вес загружаемого файла. Сейчас до 512 Кб 
  if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) 
   { 
   //Здесь идет процесс загрузки изображения 
   $size = getimagesize($uploadfile); 
   // с помощью этой функции мы можем получить размер пикселей изображения 
     if ($size[0] < 501 && $size[1]<1501) 
     { 
     // если размер изображения не более 500 пикселей по ширине и не более 1500 по  высоте 
      echo "Файл загружен. Путь к файлу: <b>".$uploadfile."</b> ../images/ Первые две точки при ссылке не учитывать."; 
     } else {
     echo "Загружаемое изображение превышает допустимые нормы (ширина не более - 500; высота не более 1500)"; 
     unlink($uploadfile); 
     // удаление файла 
     } 
   } else {
   echo "Файл не загружен, вернитеcь и попробуйте еще раз";
   } 
} else { 
echo "Размер файла не должен превышать 512Кб";
} 
}
// ADD NEW CAT SCRIPT
if($_GET['action'] == 'add' && $_POST['goodname'] != NULL) {
	if($_POST['goodnew']==NULL) {$_POST['goodnew']='0';}
	$query2 = mysql_query("INSERT INTO `goods` SET `good_name` = '".$_POST['goodname']."',`good_name_d` = '".$_POST['goodnamed']."', `good_price` = '".$_POST['goodprice']."',`good_sale` = '".$_POST['goodsale']."', `good_image` = '".$_POST['goodimage']."',`good_image1` = '".$_POST['goodimage1']."',`good_image2` = '".$_POST['goodimage2']."', `good_image3` = '".$_POST['goodimage3']."',`good_image4` = '".$_POST['goodimage4']."', `good_image5` = '".$_POST['goodimage5']."',`good_image6` = '".$_POST['goodimage6']."', `good_catid` = '".$_POST['goodcatid']."', `good_link` = '".$_POST['goodlink']."', `good_desc1` = '".$_POST['gooddesc1']."', `good_desc2` = '".$_POST['gooddesc2']."', `good_desc3` = '".$_POST['gooddesc3']."', `good_desc4` = '".$_POST['gooddesc4']."', `good_desc5` = '".$_POST['gooddesc5']."', `good_new` = '".$_POST['goodnew']."', `good_position` = '".$_POST['goodposition']);
	if($query2 == true) {echo '<h2>Выполнено!</h2><p>Добавлен новый товар.</p>';}
	else {echo '<h2>Ошибка!</h2><p>Что то не так. Попробуйте снова.</p>';}
}
// EDIT CAT
if($_GET['action'] == 'edit' && $_GET['entry'] != NULL && $_POST['goodname'] == NULL) {
	$query3 = mysql_query("SELECT * FROM `goods` WHERE `good_id` = '".$_GET['entry']."'");
	$query3t = mysql_fetch_array($query3); 
	if($query3t['good_new']=='1') {$check=' checked';}
	echo '<form action="?cat=goods&action=edit" method="post">
	<table>	
	<tr><td>Название:</td><td><input type="text" value="'.$query3t['good_name'].'" name="goodname"/></td></tr>
	<tr><td>Категория:</td><td><input type="text" value="'.$query3t['good_name_d'].'" name="goodnamed"/></td></tr>
	<tr><td>Цена товара:</td><td><input type="text" value="'.$query3t['good_price'].'" name="goodprice"/></td></tr>
	<tr><td>Скидка:</td><td><input type="text" value="'.$query3t['good_sale'].'" name="goodsale"/></td></tr>
	<tr><td>Номер категории:</td><td><input type="text" value="'.$query3t['good_catid'].'" name="goodcatid"/></td></tr>
	<tr><td>Ссылка:</td><td><input type="text" value="'.$query3t['good_link'].'" name="goodlink"/></td></tr>
	<tr><td>URL Картинки:</td><td><input type="text" value="'.$query3t['good_image'].'" name="goodimage"/></td></tr>
	<tr><td>Ссылка на ютуб*:</td><td><textarea name="gooddesc1">'.$query3t['good_desc1'].'</textarea></td></tr>
	<tr><td>Главное описание*:</td><td><textarea name="gooddesc2">'.$query3t['good_desc2'].'</textarea></td></tr>
	<tr><td>Как это работает?*:</td><td><textarea name="gooddesc3">'.$query3t['good_desc3'].'</textarea></td></tr>
	<tr><td>URL скриншота1:</td><td><input type="text" value="'.$query3t['good_image1'].'" name="goodimage1"/></td></tr>
	<tr><td>URL скриншота2:</td><td><input type="text" value="'.$query3t['good_image2'].'" name="goodimage2"/></td></tr>
	<tr><td>URL скриншота3:</td><td><input type="text" value="'.$query3t['good_image3'].'"  name="goodimage3"/></td></tr>
	<tr><td>URL скриншота4:</td><td><input type="text" value="'.$query3t['good_image4'].'"  name="goodimage4"/></td></tr>
	<tr><td>URL скриншота5:</td><td><input type="text" value="'.$query3t['good_image5'].'" name="goodimage5"/></td></tr>
	<tr><td>URL скриншота6:</td><td><input type="text" value="'.$query3t['good_image6'].'"  name="goodimage6"/></td></tr>
	<tr><td>Позиция товара:</td><td><input type="text" value="'.$query3t['good_position'].'" name="goodposition"/></td></tr>
	
	</table>		
	<input type="checkbox"'.$check.' name="goodnew" value="1"/> Показывать в блоке новых товаров?
	<input type="submit" value="Обновить"/>
	<input type="hidden" name="goodid" value="'.$query3t['good_id'].'"/>
	</form>
	<br>
			<p>Загрузка изображения:</p>
		<form method="post" enctype="multipart/form-data">
			<input type="file" name="userfile">
			<input type="submit" name="upload" value="Загрузить">
		</form>
			<br>';
$uploaddir = '../images/';
// это папка, в которую будет загружаться картинка
$apend=date('YmdHis').rand(100,1000).'.jpg'; 
// это имя, которое будет присвоенно изображению 
$uploadfile = "$uploaddir$apend"; 
//в переменную $uploadfile будет входить папка и имя изображения

// В данной строке самое важное - проверяем загружается ли изображение (а может вредоносный код?)
// И проходит ли изображение по весу. В нашем случае до 512 Кб
if(($_FILES['userfile']['type'] == 'image/gif' || $_FILES['userfile']['type'] == 'image/jpeg' || $_FILES['userfile']['type'] == 'image/png') && ($_FILES['userfile']['size'] != 0 and $_FILES['userfile']['size']<=512000)) 
{ 
// Указываем максимальный вес загружаемого файла. Сейчас до 512 Кб 
  if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) 
   { 
   //Здесь идет процесс загрузки изображения 
   $size = getimagesize($uploadfile); 
   // с помощью этой функции мы можем получить размер пикселей изображения 
     if ($size[0] < 1000 && $size[1]<1500) 
     { 
     // если размер изображения не более 500 пикселей по ширине и не более 1500 по  высоте 
     echo "Файл загружен. Путь к файлу: <b>".$uploadfile."</b> ../images/ Первые две точки при ссылке не учитывать."; 
     } else {
     echo "Загружаемое изображение превышает допустимые нормы (ширина не более - 100; высота не более 1500)"; 
     unlink($uploadfile); 
     // удаление файла 
     } 
   } else {
   echo "Файл не загружен, вернитеcь и попробуйте еще раз";
   } 
} else { 
echo "Размер файла не должен превышать 512Кб";
} 

}
// EDIT CAT SCRIPT
if($_GET['action'] == 'edit' && $_GET['entry'] == NULL && $_POST['goodname'] != NULL) {
	if($_POST['goodnew']==NULL) {$_POST['goodnew']='0';}
	$query2 = mysql_query("UPDATE `goods` SET `good_name` = '".$_POST['goodname']."', `good_name_d` = '".$_POST['goodnamed']."', `good_price` = '".$_POST['goodprice']."',`good_sale` = '".$_POST['goodsale']."',`good_image` = '".$_POST['goodimage']."',`good_image1` = '".$_POST['goodimage1']."',`good_image2` = '".$_POST['goodimage2']."', `good_image3` = '".$_POST['goodimage3']."',`good_image4` = '".$_POST['goodimage4']."', `good_image5` = '".$_POST['goodimage5']."',`good_image6` = '".$_POST['goodimage6']."',`good_catid` = '".$_POST['goodcatid']."', `good_link` = '".$_POST['goodlink']."', `good_desc1` = '".$_POST['gooddesc1']."', `good_desc2` = '".$_POST['gooddesc2']."', `good_desc3` = '".$_POST['gooddesc3']."', `good_desc4` = '".$_POST['gooddesc4']."', `good_desc5` = '".$_POST['gooddesc5']."', `good_new` = '".$_POST['goodnew']."', `good_position` = '".$_POST['goodposition']."' WHERE `good_id` = '".$_POST['goodid']."'");
	if($query2 == true) {echo '<h2>Выполнено!</h2><p>Товар изменен.</p>';}
	else {echo '<h2>Ошибка!</h2><p>Что то не так. Попробуйте снова.</p>';}
}
// REMOVE CAT
if($_GET['action'] == 'remove' && $_GET['entry'] != NULL && $_POST['goodname'] == NULL) {
	$query3 = mysql_query("SELECT * FROM `goods` WHERE `good_id` = '".$_GET['entry']."'");
	$query3t = mysql_fetch_array($query3); 
	echo '<form action="?cat=goods&action=remove" method="post">
	Название товара: <input type="text" disabled value="'.$query3t['good_name'].'" name="goodname"/>
	<input type="hidden" value="'.$query3t['good_id'].'" name="goodid"/>
	<input type="submit" value="Удалить"/>
	</form>';
}
// REMOVE CAT SCRIPT
if($_GET['action'] == 'remove' && $_GET['entry'] == NULL && $_POST['goodid'] != NULL) {
	$query2 = mysql_query("DELETE FROM `goods` WHERE `good_id` = '".$_POST['goodid']."'");
	if($query2 == true) {echo '<h2>Выполнено!</h2><p>Товар удален.</p>';}
	else {echo '<h2>Ошибка!</h2><p>Что то не так. Попробуйте снова.</p>';}
}


mysql_close($db);
	
}
else {
echo 'Hacking attempt. Your IP was recorded.';
}
?>