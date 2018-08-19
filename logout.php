<?php
/*Copyright by UbiFox (c) 2012*/
// Скрипт проверки

# Соединямся с БД
	require("steamshop/core.php");

if($USER_LOGGED_IN == '1') {
// <HTML>
        setcookie("id", "", 0, $_SERVER["HTTP_HOST"]);
        setcookie("hash", "", 0, $_SERVER["HTTP_HOST"]);
	header("Location: http://".$_SERVER["HTTP_HOST"]."/acp/index.php?s=1"); 
	exit();
// </HTML>
}
if($USER_LOGGED_IN == False) {echo "You have already logout.";}
?>
