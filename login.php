<?php
function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;  
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];  
    }
    return $code;
}

# Соединямся с БД
	require('steamshop/config.php');
	$db = mysql_connect($db_host,$db_user,$db_pass) or die ("Unable connect to DB Host");
	mysql_select_db($db_name) or die ("Unable connect to DataBase");

	if(isset($_POST['submit']))
	{
    		# Вытаскиваем из БД запись, у которой логин равняеться введенному
    $query = mysql_query("SELECT user_id, user_password FROM users WHERE user_login='".mysql_real_escape_string($_POST['user'])."' LIMIT 1");
    $data = mysql_fetch_assoc($query);
    //echo $data['user_password'].'<br/>'.md5($_POST['password']);
    # Соавниваем пароли
    if($data['user_password'] === md5($_POST['password']))
    {
        # Генерируем случайное число и шифруем его
        $hash = md5(generateCode(10));
        
        # Записываем в БД новый хеш авторизации и IP
        mysql_query("UPDATE users SET user_hash='".$hash."' WHERE user_id='".$data['user_id']."'");
        # Ставим куки
        setcookie("id", $data['user_id'], time()+60*60*24*30);
        setcookie("hash", $hash, time()+60*60*24*30);
        # Переадресовываем браузер на страницу проверки нашего скрипта
	$USERNAME = $_POST['usr'];
	mysql_close($db);
        header("Location: http://".$_SERVER['HTTP_HOST']."/acp/index.php"); exit();
    }
    else
    {
mysql_close($db);
        header("Location: http://".$_SERVER['HTTP_HOST']."/acp/index.php?e=1"); exit();
    }
}
?> 
