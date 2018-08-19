<!DOCTYPE html>
<html>
<head>
<title>Install Process<?if($_GET['step']!=NULL){echo ' - Step '.$_GET['step'];}?></title>
<style>
button {
	border:2px outset #888;
	background:#aaa;
	color:#111;
	width:150px;
	height:30px;
	font:12px Tahoma;
}
button:active {
	border:2px inset #888;
}
</style>
</head>
<body>
<table align="center" style="position:fixed;top:0;left:0;width:100%;height:100%;background:black;" cellpadding="0" cellspacing="0"><tr><td align="center" valign="middle"><div style="background:#999999;color:black;border:1px solid #333; width:400px;margin:auto;border-radius:9px 9px 0 0;font:12px Tahoma;padding:10px;">
<?php
require('../steamshop/config.php');

$user='root';
$pass='rusk';

if($_GET['step']==NULL) {
?>
<p>This script will install by ru-skript.ru . Press Next to continue.</p>
<button onclick="top.location.href='index.php?step=1';">Next</button>
<?
}

$db = mysql_connect($db_host,$db_user,$db_pass) or die ("Cannot establish connection.");
mysql_select_db($db_name,$db) or die ("Cannot select DB");
if($_GET['step']=='1') {
$q1t="CREATE TABLE IF NOT EXISTS `users` (
	`user_id` int(11) unsigned NOT NULL auto_increment,
	`user_login` varchar(30) NOT NULL,
	`user_password` varchar(32) NOT NULL,
	`user_hash` varchar(32) NOT NULL,
	PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";
$q1=mysql_query($q1t,$db);

if($q1==true){echo '<p>Table `users` created</p><button onclick="top.location.href=\'index.php?step=2\';">Next</button>';} else {echo 'Table `users` NOT created<br/>Install process returned an error.<br/>Query string: '.nl2br($q1t);}
}
if($_GET['step']=='2') {
$pass = md5($pass);
$q2=mysql_query("INSERT INTO `users` SET `user_login` = '$user', `user_password` = '$pass'");
if($q2==true){echo '<p>User added.</p><button onclick="top.location.href=\'index.php?step=3\';">Next</button>';} else {echo 'User NOT added<br/>Install process returned an error.';}
}
if($_GET['step']=='3') {
$q3=mysql_query('CREATE TABLE IF NOT EXISTS `cats` (
`cat_id` int(11) unsigned NOT NULL auto_increment,
`cat_name` varchar(30) NOT NULL,
PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;',$db);
if($q3==true){echo '<p>Table `cats` created</p><button onclick="top.location.href=\'index.php?step=4\';">Next</button>';} else {echo 'Table `cats` NOT added<br/>Install process returned an error.';}
}
if($_GET['step']=='4') {
$q3=mysql_query('CREATE TABLE IF NOT EXISTS `settings` (
`setting_id` int(11) unsigned NOT NULL auto_increment,
`setting_name` varchar(30) NOT NULL,
`setting_value` TEXT NOT NULL,
PRIMARY KEY (`setting_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;',$db);
if($q3==true){echo '<p>Table `settings` created</p><button onclick="top.location.href=\'index.php?step=4\';">Next</button>';} else {echo 'Table `cats` NOT added<br/>Install process returned an error.';}
}
if($_GET['step']=='5') {
$q4=mysql_query('CREATE TABLE IF NOT EXISTS `goods` (
`good_id` int(11) UNSIGNED NOT NULL,
  `good_name` varchar(30) NOT NULL,
  `good_name_d` text NOT NULL,
  `good_price` varchar(30) NOT NULL,
  `good_sale` text NOT NULL,
  `good_link` text NOT NULL,
  `good_image` text NOT NULL,
  `good_image1` text NOT NULL,
  `good_image2` text NOT NULL,
  `good_image3` text NOT NULL,
  `good_image4` text NOT NULL,
  `good_image5` text NOT NULL,
  `good_image6` text NOT NULL,
  `good_catid` varchar(30) NOT NULL,
  `good_new` varchar(30) NOT NULL,
  `good_desc1` text NOT NULL,
  `good_desc2` text NOT NULL,
  `good_desc3` text NOT NULL,
  `good_desc4` text NOT NULL,
  `good_desc5` text NOT NULL,
  `good_position` int(10) UNSIGNED NOT NULL
PRIMARY KEY (`good_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;',$db);
if($q4==true){echo '<p>Table `goods` created</p>Install process ended. Close this page.';} else {echo 'Table `goods` NOT added<br/>Install process returned an error.';}
}
mysql_close($db);
?>
</div>
</td></tr></table>
</body>
</html>
