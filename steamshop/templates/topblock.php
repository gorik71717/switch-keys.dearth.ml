<!-- <TOPBLOCK> -->
<section id="top-a" class="grid-block">
	<div class="grid-box width100 grid-h">
		<div class="module mod-box  deepest">
			<div class="badge badge-new"></div>		
				<div class="goods-wrap">			
<div style="padding:6px 0 0 0px;">				
	<div class="goods-wrap">					
		<div style="padding:6px 0 0 0px;">
<?php
$db = mysql_connect($db_host,$db_user,$db_pass);
mysql_select_db($db_name,$db);
mysql_query('SET character_set_client="utf8"');
mysql_query('SET character_set_results="utf8"');
mysql_query('SET collation_connection="utf8_general_ci"');

$query1 = mysql_query("SELECT * FROM `goods` WHERE `good_new` = '1'");
if($query1 != NULL) {
while($qt1 = mysql_fetch_array($query1)) {
echo '<a href="/good.php?idd='.$qt1['good_id'].'" class="goods-mini" title="'.$qt1['good_name'].'">
<img src="'.$qt1['good_image'].'" alt="'.$qt1['good_name'].'"/>
</a>';
}
}
mysql_close($db);
?>
	
					</div>					
				</div>		
			</div>
		</div>		
	</div>
</div>
</section><!-- </TOPBLOCK> -->
