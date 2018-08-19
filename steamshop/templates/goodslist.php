<?php 
$db = mysql_connect($db_host,$db_user,$db_pass);
mysql_select_db($db_name,$db);
mysql_query('SET character_set_client="utf8"');
mysql_query('SET character_set_results="utf8"');
mysql_query('SET collation_connection="utf8_general_ci"');

//$query1 = mysql_query("SELECT * FROM `goods` ORDER BY `good_name` LIMIT 60");
$query1 = mysql_query("SELECT * FROM `goods` INNER JOIN `cats` ON goods.good_catid = cats.cat_id ORDER BY `good_position` ASC LIMIT 60");
	if($query1 != NULL) {
		while($qt1 = mysql_fetch_array($query1)) {
			echo '<a href="/good.html?idd='.$qt1['good_id'].'" class="item" style="background-image:url('.$qt1['good_image'].');" title="'.$qt1['good_name'].'">
							<span class="item-panel">';
							if($qt1['good_sale'] !=NULL){echo '<span class="item-proc">'.$qt1['good_sale'].'</span>';}
							echo '<span class="item-name-1">'.$qt1['good_name'].'</span>
							<span class="item-name-2">'.$qt1['cat_name'].'</span>
						</span>
						<span class="item-rub">Стоимость: <b>'.$qt1['good_price'].'руб.</b></span>
		</a>';
		}
	}
mysql_close($db);
?>
