<?php
include('steamshop/config.php');
$db = mysql_connect($db_host,$db_user,$db_pass);
mysql_select_db($db_name,$db);
mysql_query('SET character_set_client="utf8"');
mysql_query('SET character_set_results="utf8"');
mysql_query('SET collation_connection="utf8_general_ci"');
$query2 = mysql_query("SELECT * FROM `settings` WHERE `setting_id` = 1");
$qt2 = mysql_fetch_array($query2);
$title = $qt2['settings_title'];
$query3 = mysql_query("SELECT * FROM `goods` WHERE `good_id` = '".mysql_real_escape_string($_GET['idd'])."'");
if($query3 != NULL) { 
$qt3 = mysql_fetch_array($query3);
$title1 = $qt3['good_name'];
}
?>
<!DOCTYPE>
<html>
<head>
<meta charset="UTF-8" />
		<title><?if($_GET['idd'] !=NULL){echo $title1.' - '.$title;}else{echo $title;}?></title>
		<meta charset="utf-8" /> // скрипт слил сайт ru-skript.ru
		<link rel="shortcut icon" href="/theme/images/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="/theme/css/style.css" />
		<script type="text/javascript" src="/theme/js/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="/theme/js/jquery.smoothscroll.js"></script>
		<script type="text/javascript" src="/theme/js/jquery.arcticmodal-0.3.min.js"></script>
		<script type="text/javascript" src="/theme/js/script.js"></script>
		<SCRIPT type="text/javascript" src="/theme/js/img.js"></SCRIPT>
<meta name="description" content="Онлайн магазин лицензионных Steam аккаунтов и ключей активации. Лучшие цены в интернете! Скидки, акции, подарки! Своё игровое сообщество Steam." />
<meta name="keywords" content="купить steam, steam аккаунты,ru-skript, магазин steam аккаунтов, ключи активации, продажа steam, steam игры, купить стим, продать steam, продажа стим аккаунтов, origin, ea, магазн игр, counter strike." />
</head>

<body>
		<div style="display:none;">
			<div class="modal center" id="modal-1" style="width:1106px; font-weight:bold;">
				<div class="modal-close arcticmodal-close"></div>
					<?include('./pages/guarantees.php')?>
			</div>
			<div class="modal center" id="modal-2" style="width:1106px; font-weight:bold;">
				<div class="modal-close arcticmodal-close"></div>
<?include('./pages/contacts.php')?>
			</div>
			<div class="modal" id="modal-3" style="width:1106px; font-weight:bold;">
				<div class="modal-close arcticmodal-close"></div>
			<?include('./pages/howtobuy.php')?>
			</div>
		</div>
   		<div class="wrapper">
			<div class="bg" style="background-image: url(http://legolasshop.ru/theme/images/bg.jpg);"></div>
			<div class="header-panel">
				<div class="full">
				<?include('./theme/menu.php');?>
				</div>
			</div>