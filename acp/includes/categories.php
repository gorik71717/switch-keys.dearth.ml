<?php
if($USER_LOGGED_IN = '1') {

$db = mysql_connect($db_host,$db_user,$db_pass);
mysql_select_db($db_name,$db);
mysql_query('SET character_set_client="utf8"');
mysql_query('SET character_set_results="utf8"');
mysql_query('SET collation_connection="utf8_general_ci"');

if($_GET['action'] == NULL) {

$query1 = mysql_query('SELECT * FROM `cats`');
	if($query1!=NULL){
	echo '<table border="1"><tr class="head"><td align="center">Номер категории</td><td align="center">Название категории</td><td align="center">Управление</td></tr>';
		while($query1t = mysql_fetch_array($query1)) {
			echo '<tr><td align="center">'.$query1t['cat_id'].'</td><td align="center" width="300">'.$query1t['cat_name'].'</td><td><a class="button" href="?cat=categories&action=edit&entry='.$query1t['cat_id'].'">Редактировать</a><a class="button" href="?cat=categories&action=remove&entry='.$query1t['cat_id'].'">Удалить</a></td></tr>';
		}
	echo '</table>
	<div class="controlbox">
	<button type="button" onclick="top.location.href=\'?cat=categories&action=add\';">Добавить новую категорию</button>
	</div>';
	}

}
// ADD NEW CAT
if($_GET['action'] == 'add' && $_POST['catname'] == NULL) {
	echo '<form action="?cat=categories&action=add" method="post">
	Название категории: <input type="text" name="catname"/>
	<input type="submit" value="Добавить"/>
	</form>';
}
// ADD NEW CAT SCRIPT
if($_GET['action'] == 'add' && $_POST['catname'] != NULL) {
	$query2 = mysql_query("INSERT INTO `cats` SET `cat_name` = '".$_POST['catname']."'");
	if($query2 == true) {echo '<h2>Выполнено!</h2><p>Добавлена новая категория.</p>';}
	else {echo '<h2>Ошибка!</h2><p>Что то не так. Попробуйте снова.</p>';}
}
// EDIT CAT
if($_GET['action'] == 'edit' && $_GET['entry'] != NULL && $_POST['catname'] == NULL) {
	$query3 = mysql_query("SELECT * FROM `cats` WHERE `cat_id` = '".$_GET['entry']."'");
	$query3t = mysql_fetch_array($query3); 
	echo '<form action="?cat=categories&action=edit" method="post">
	Название категории: <input type="text" value="'.$query3t['cat_name'].'" name="catname"/>
	<input type="hidden" value="'.$query3t['cat_id'].'" name="catid"/>
	<input type="submit" value="Изменить"/>
	</form>';
}
// EDIT CAT SCRIPT
if($_GET['action'] == 'edit' && $_GET['entry'] == NULL && $_POST['catname'] != NULL) {
	$query2 = mysql_query("UPDATE `cats` SET `cat_name` = '".$_POST['catname']."' WHERE `cat_id` = '".$_POST['catid']."'");
	if($query2 == true) {echo '<h2>Выполнено!</h2><p>Название категории изменено.</p>';}
	else {echo '<h2>Ошибка!</h2><p>Что то не так. Попробуйте снова.</p>';}
}
// REMOVE CAT
if($_GET['action'] == 'remove' && $_GET['entry'] != NULL && $_POST['catname'] == NULL) {
	$query3 = mysql_query("SELECT * FROM `cats` WHERE `cat_id` = '".$_GET['entry']."'");
	$query3t = mysql_fetch_array($query3); 
	echo '<form action="?cat=categories&action=remove" method="post">
	Название категории: <input type="text" disabled value="'.$query3t['cat_name'].'" name="catname"/>
	<input type="hidden" value="'.$query3t['cat_id'].'" name="catid"/>
	<input type="submit" value="Удалить"/>
	</form>';
}
// REMOVE CAT SCRIPT
if($_GET['action'] == 'remove' && $_GET['entry'] == NULL && $_POST['catid'] != NULL) {
	$query2 = mysql_query("DELETE FROM `cats` WHERE `cat_id` = '".$_POST['catid']."'");
	$query3 = mysql_query("DELETE FROM `goods` WHERE `good_catid` = '".$_POST['catid']."'");
	if($query2 == true) {echo '<h2>Выполнено!</h2><p>Категория удалена.</p>';}
	else {echo '<h2>Ошибка!</h2><p>Что то не так. Попробуйте снова.</p>';}
}


mysql_close($db);
	
}
else {
echo 'Hacking attempt. Your IP was recorded.';
}
?>