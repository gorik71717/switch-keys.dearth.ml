<?php
/*====================*\
|       U-01 CMS       |
|  Copyright (c) 2013  |
\*====================*/
include('config.php');

$db = mysql_connect($db_host,$db_user,$db_pass);
mysql_select_db($db_name,$db);

if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{   
    $query = mysql_query("SELECT * FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1",$db);
    $userdata = mysql_fetch_assoc($query);
	//echo 'DB: '.$userdata["user_hash"].'<br/>Cookie: '.$_COOKIE["hash"].'<br/>'.$userdata["user_id"].'<br/>'.$_COOKIE["id"];
    if(($userdata["user_hash"] !== $_COOKIE["hash"]) or ($userdata["user_id"] !== $_COOKIE["id"]))
    {
        setcookie("id", "", time() - 3600*24*30*12, "/");
        setcookie("hash", "", time() - 3600*24*30*12, "/");
        $USER_LOGGED_IN = '0';
    }
    else
    {
        $USER_LOGGED_IN = '1';
	$USERID = $userdata["user_id"];
	$USERNAME = $userdata["user_login"];
    }
}
else
{
    $USER_LOGGED_IN = '0';
    $ACCESS_DENIED_LABEL = "You don't have access to this page";
}
mysql_close($db);
function stripslashes_array($array) {
	return is_array($array) ?
		array_map('stripslashes_array',$array) : stripslashes($array);
}
if(get_magic_quotes_gpc()) {
	$_GET = stripslashes_array($_GET);
	$_POST = stripslashes_array($_POST);
	$_COOKIE = stripslashes_array($_COOKIE);
}
?>
