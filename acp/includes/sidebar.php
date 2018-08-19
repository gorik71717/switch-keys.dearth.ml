<?php
if($USER_LOGGED_IN = '1') {
	
	echo '<h2>Управление блоками сайта</h2>';

echo '<form action="?cat=sidebar" method="post"><table style="width:100%;border:1px solid #888888;"><tr>';

if($_POST['page1'] != NULL){
$fh1 = fopen('../blocks/about.php',"w");
fwrite($fh1,$_POST['page1']);
fclose($fh1);
}
$fh1 = file('../blocks/about.php');
$text1="";
for($i=0; $i < sizeof($fh1); $i++) {
	$text1 = $text1.$fh1[$i];
}
echo '<td>about.php</td></tr><tr><td><textarea style="width:99%;height:150px;resize:none;" name="page1">'.$text1.'</textarea></td></tr><tr><td><input type="submit" value="Save" /></td>';

echo '</tr></table></form>';

echo '<form action="?cat=sidebar" method="post"><table style="width:100%;border:1px solid #888888;"><tr>';

if($_POST['page2'] != NULL){
$fh2 = fopen('../blocks/contacts.php',"w");
fwrite($fh2,$_POST['page2']);
fclose($fh2);
}
$fh2 = file('../blocks/contacts.php');
$text2="";
for($i=0; $i < sizeof($fh2); $i++) {
	$text2 = $text2.$fh2[$i];
}
echo '<td>contacts.php</td></tr><tr><td><textarea style="width:99%;height:150px;resize:none;" name="page2">'.$text2.'</textarea></td></tr><tr><td><input type="submit" value="Save" /></td>';

echo '</tr></table></form>';

echo '<form action="?cat=sidebar" method="post"><table style="width:100%;border:1px solid #888888;"><tr>';

if($_POST['page3'] != NULL){
$fh3 = fopen('../blocks/info1.php',"w");
fwrite($fh3,$_POST['page3']);
fclose($fh3);
}
$fh3 = file('../blocks/info1.php');
$text3="";
for($i=0; $i < sizeof($fh3); $i++) {
	$text3 = $text3.$fh3[$i];
}
echo '<td>info1.php</td></tr><tr><td><textarea style="width:99%;height:150px;resize:none;" name="page3">'.$text3.'</textarea></td></tr><tr><td><input type="submit" value="Save" /></td>';

echo '</tr></table></form>';

echo '<form action="?cat=sidebar" method="post"><table style="width:100%;border:1px solid #888888;"><tr>';

if($_POST['page4'] != NULL){
$fh4 = fopen('../blocks/news.php',"w");
fwrite($fh4,$_POST['page4']);
fclose($fh4);
}
$fh4 = file('../blocks/news.php');
$text4="";
for($i=0; $i < sizeof($fh4); $i++) {
	$text4 = $text4.$fh4[$i];
}
echo '<td>news.php</td></tr><tr><td><textarea style="width:99%;height:150px;resize:none;" name="page4">'.$text4.'</textarea></td></tr><tr><td><input type="submit" value="Save" /></td>';

echo '</tr></table></form>';

echo '<form action="?cat=sidebar" method="post"><table style="width:100%;border:1px solid #888888;"><tr>';

if($_POST['page5'] != NULL){
$fh5 = fopen('../blocks/ads.php',"w");
fwrite($fh5,$_POST['page5']);
fclose($fh5);
}
$fh5 = file('../blocks/ads.php');
$text5="";
for($i=0; $i < sizeof($fh5); $i++) {
	$text5 = $text5.$fh5[$i];
}
echo '<td>ads.php</td></tr><tr><td><textarea style="width:99%;height:150px;resize:none;" name="page5">'.$text5.'</textarea></td></tr><tr><td><input type="submit" value="Save" /></td>';

echo '</tr></table></form>';


}
else {
echo 'Hacking attempt. Your IP was recorded.';
}
?>
