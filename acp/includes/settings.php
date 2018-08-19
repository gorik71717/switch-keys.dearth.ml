<?php
if($USER_LOGGED_IN = '1') {

$db = mysql_connect($db_host,$db_user,$db_pass);
mysql_select_db($db_name,$db);
mysql_query('SET character_set_client="utf8"');
mysql_query('SET character_set_results="utf8"');
mysql_query('SET collation_connection="utf8_general_ci"');
if($_POST['marquee'] != NULL) {
$val1 = $_POST['marquee'];
$q4t = 'UPDATE `settings` SET `setting_value` = "'.htmlspecialchars($val1).'" WHERE `setting_id` = 1';
$q4 = mysql_query($q4t);
}
if($_POST['title'] != NULL) {
$val14 = $_POST['title'];
$q4t4 = 'UPDATE `settings` SET `settings_title` = "'.$val14.'" WHERE `setting_id` = 1';
$q44 = mysql_query($q4t4);
}

if($q4==false){echo $q4t;}
$querym = mysql_query('SELECT * FROM `settings` WHERE `setting_name` = "1"');
$querymt = mysql_fetch_array($querym);
$val1 = $querymt['setting_value'];

if($_POST['password'] != NULL) {

	$pass = md5($_POST['password']);
	$passq = mysql_query('UPDATE `users` SET `user_password`="'.$pass.'" WHERE `user_login` = "'.$USERNAME.'"');
	if($passq==true){echo '<p>Password changed</p>';}
}

mysql_close($db);

?>
<h2>Настройки by рускрипт</h2>
<fieldset><legend>title</legend>
<?php echo htmlspecialchars_decode($val14);?>
<form action="?cat=settings" method="post">
<input type="text" name="title" style="width:500px;" value="<?php echo $val14;?>"/>
<input type="submit" value="Сохранить"/>
</form>
</fieldset><br/>
<fieldset><legend>Бегущая строка</legend>
<?php echo htmlspecialchars_decode($val1);?>
<form action="?cat=settings" method="post">
<input type="text" name="marquee" style="width:500px;" value="<?php echo $val1;?>"/>
<input type="submit" value="Сохранить"/>
</form>
</fieldset><br/>
<fieldset><legend>Изменить пароль для <?echo $USERNAME;?></legend>
Введите новый пароль:
<form action="?cat=settings" method="post">
<input type="text" name="password" style="width:500px;" value=""/>
<input type="submit" value="Изменить"/>
</form>
</fieldset>
<?
}
else {
echo 'Hacking attempt. Your IP was recorded.';
}
