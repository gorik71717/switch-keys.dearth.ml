<?php
include('./theme/header.php');
include('steamshop/core.php');
$db = mysql_connect($db_host,$db_user,$db_pass);
mysql_select_db($db_name,$db);
mysql_query('SET character_set_client="utf8"');
mysql_query('SET character_set_results="utf8"');
mysql_query('SET collation_connection="utf8_general_ci"');

$query2 = mysql_query("SELECT * FROM `goods` WHERE `good_id` = '".mysql_real_escape_string($_GET['idd'])."'");
if($query2 != NULL) { 
$qt2 = mysql_fetch_array($query2);

$GOOD_ID = $qt2['good_id'];
$GOOD_NAME = $qt2['good_name'];
$GOOD_NAME_D = $qt2['good_name_d'];
$GOOD_IMAGE = $qt2['good_image'];
$GOOD_IMAGE1 = $qt2['good_image1'];
$GOOD_IMAGE2 = $qt2['good_image2'];
$GOOD_IMAGE3 = $qt2['good_image3'];
$GOOD_IMAGE4 = $qt2['good_image4'];
$GOOD_IMAGE5 = $qt2['good_image5'];
$GOOD_IMAGE6 = $qt2['good_image6'];
$GOOD_LINK = $qt2['good_link'];
$GOOD_PRICE = $qt2['good_price'];
$GOOD_SALE = $qt2['good_sale'];
$GOOD_DESC1 = $qt2['good_desc1'];
$GOOD_DESC2 = $qt2['good_desc2'];
$GOOD_DESC3 = $qt2['good_desc3'];
$GOOD_DESC4 = $qt2['good_desc4'];
$GOOD_DESC5 = $qt2['good_desc5'];
}
else {
$GOOD_ID = '0';
$GOOD_NAME = 'N/A';
$GOOD_IMAGE = '/images/noimage.png';
$GOOD_LINK = '0';
$GOOD_PRICE = 'N/A';
$GOOD_DESC1 = 'N/A';
$GOOD_DESC2 = 'N/A';
$GOOD_DESC3 = 'N/A';
$GOOD_DESC4 = 'N/A';
$GOOD_DESC5 = 'N/A';
}

mysql_close($db);
?>
<div class="container full" style="padding:26px;">
		<div class="item item-full" style="background-image:url(<?echo $GOOD_IMAGE;?>);">
						<?if($GOOD_SALE != NULL){?><span class="item-proc"><?echo $GOOD_SALE;?></span><?}?>
					
				</div>
				<div class="item-full-bg">
					<div class="item-full-panel">
						<div class="item-full-name"><b><?echo $GOOD_NAME;?></b> <?echo $GOOD_NAME_D;?></div>
						<a href="<?echo $GOOD_LINK;?>" class="item-full-link">
							<b>КУПИТЬ ТОВАР</b>
							<b><?echo $GOOD_PRICE;?>руб.</b>
						</a>
					</div>
					<div class="video"><iframe width="359" height="194" src="<?echo $GOOD_DESC1;?>" frameborder="0" allowfullscreen></iframe></div>
					<div class="screen">
						<?if($GOOD_IMAGE1 != NULL){?><a href="#"><img src="<?echo $GOOD_IMAGE1;?>" alt="" class="image" /></a><?}?>
						<?if($GOOD_IMAGE2 != NULL){?><a href="#"><img src="<?echo $GOOD_IMAGE2;?>" alt="" class="image"  /></a><?}?>
						<?if($GOOD_IMAGE3 != NULL){?><a href="#"><img src="<?echo $GOOD_IMAGE3;?>" alt="" class="image"  /></a><?}?>
						<?if($GOOD_IMAGE4 != NULL){?><a href="#"><img src="<?echo $GOOD_IMAGE4;?>" alt="" class="image" /></a><?}?>
						<?if($GOOD_IMAGE5 != NULL){?><a href="#"><img src="<?echo $GOOD_IMAGE5;?>" alt="" class="image" /></a><?}?>
						<?if($GOOD_IMAGE6 != NULL){?><a href="#"><img src="<?echo $GOOD_IMAGE6;?>" alt="" class="image" /></a><?}?> 
					</div>
				</div>
				<div class="clear"></div>
				<div class="tabs">
					<ul class="tabs-nav">
						<li class="active">Описание</li>
					<?if($GOOD_DESC3 != NULL){?>	<li>Как это работает?</li><?}?>
					</ul>
					<div class="tabs-content active">
					<?echo $GOOD_DESC2;?>
					</div>
					<div class="tabs-content">
					<?echo $GOOD_DESC3;?>
					</div>
				</div>
			</div>
<?php include('theme/footer.php');?>
