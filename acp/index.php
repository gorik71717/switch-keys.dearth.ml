<?require('../steamshop/core.php');?><!DOCTYPE html>
<html>
<head>
<title>Admin Control Panel</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" id="mainThemeFile" rel="Stylesheet" href="images/style.css">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?if($USER_LOGGED_IN == '1') {?>

<div id="sidebar">
<div class="sidebar-header"><div class="sidebar-header-r"><?echo $USERNAME;?></div></div>
<ul class="menu">
<li><a href="?cat=main">Главная</a></li>
<li><a href="?cat=categories">Категории товаров</a></li>
<li><a href="?cat=goods">Товар</a></li>
<li><a href="?cat=pages">Страницы сайта</a></li>
<li><a href="?cat=sidebar">Блоки сайта</a></li>
<li><a href="?cat=about">О движке</a></li>
<li><a href="?cat=settings">Настройки</a></li> // скрипт слил ru-skript.ru
<li><a href="/logout.php">Выход</a></li>
</ul>

<div style="position:fixed;left:0px;width:20%;text-align:center;bottom:10px;font:14px Arial;color:#888888;text-shadow:0 0 4px 

black;-moz-user-select:none;-webkit-user-select:none;cursor:default;">ru-skript.ru CMS v1.0</div>

</div>
<div id="page">
<div class="page-top">
  <div class="page-top-l">Панель администратора ru-skript.ru</div></div>
<div class="page-cont">
<?include('includes/admin.php');?>
</div>
</div>


<?}else{?>
<div id="left"><div id="logform"><p id="logtext">ADMIN PANEL by ru-skript.ru</p>
<form action="../login.php" method="POST">
<div id="loglogin"><input type="text" placeholder="Login" name="user"></div>
<div id="logpass"><input type="password" placeholder="Password" name="password"></div>
<div id="logbutton"><input type="submit" value="Sign In" name="submit"></div>
</form>
<p id="fpass"><a href="#">Forgot your password?</a></p>
</div><p id="u-01">ru-skript.ru Panel</p></div>
<div id="right"><p id="time"><time><script type="text/javascript">
function fulltime() {
var now=new Date();
var hh=now.getHours();
var mm=now.getMinutes();
var ss=now.getSeconds();

if(mm<10) mm="0"+mm;
if(hh<10) hh="0"+hh;
if(ss<10) ss="0"+ss;
 
document.getElementById("time").innerHTML=""+hh+":"+mm+":"+ss+"";
setTimeout('fulltime()',500);
}
</script><script language="JavaScript"
type="text/javascript">fulltime();</script></time>
</p><p id="data"> 
<data>
<script type="text/javascript">
var dt = new Date();
var month=new Array(12);
month[0]="Январь";
month[1]="Февраль";
month[2]="Март";
month[3]="Апрель";
month[4]="Май";
month[5]="Июнь";
month[6]="Июль";
month[7]="Августа";
month[8]="Сентября";
month[9]="Октябрь";
month[10]="Ноябрь";
month[11]="Декабрь";
// Display the month, day, and year. getMonth() returns a 0-based number.
var day = dt.getDate();
var year = dt.getFullYear();
document.write(day + ' ' + month[dt.getMonth()] + ' ' + year);

</script>
</data></p><div id="del"></div><div id="polosa"><div id="info"><p id="infot">IP: <?php 
echo $_SERVER['REMOTE_ADDR'];
?><br>
<?php
  $user_agent = $_SERVER["HTTP_USER_AGENT"];
  if (strpos($user_agent, "Firefox") !== false) $browser = " Mozilla Firefox";
  elseif (strpos($user_agent, "Opera") !== false) $browser = "Opera";
  elseif (strpos($user_agent, "Chrome") !== false) $browser = "Google Chrome";
  elseif (strpos($user_agent, "MSIE") !== false) $browser = "Internet Explorer";
  elseif (strpos($user_agent, "Safari") !== false) $browser = "Safari";
  else $browser = "Неизвестный";
  echo "$browser";
?>
<br>
<?php
function getOS($userAgent) {
  // Создадим список операционных систем в виде элементов массива
    $oses = array (
        'iPhone' => '(iPhone)',
        'Windows 3.11' => 'Win16',
        'Windows 95' => '(Windows 95)|(Win95)|(Windows_95)', // Используем регулярное выражение
        'Windows 98' => '(Windows 98)|(Win98)',
        'Windows 2000' => '(Windows NT 5.0)|(Windows 2000)',
        'Windows XP' => '(Windows NT 5.1)|(Windows XP)',
        'Windows 2003' => '(Windows NT 5.2)',
        'Windows Vista' => '(Windows NT 6.0)|(Windows Vista)',
        'Windows 7' => '(Windows NT 6.1)|(Windows 7)',
		'Windows 8' => '(Windows NT 6.2)|(Windows 8)',
		'Windows 8.1' => '(Windows NT 6.3)|(Windows 8.1)',
		'Windows 10' => '(Windows NT 10.0)|(Windows 10)',
        'Windows NT 4.0' => '(Windows NT 4.0)|(WinNT4.0)|(WinNT)|(Windows NT)',
        'Windows ME' => 'Windows ME',
        'Open BSD'=>'OpenBSD',
        'Sun OS'=>'SunOS',
        'Linux'=>'(Linux)|(X11)',
        'Safari' => '(Safari)',
        'Macintosh'=>'(Mac_PowerPC)|(Macintosh)',
        'QNX'=>'QNX',
        'BeOS'=>'BeOS',
        'OS/2'=>'OS/2',
        'Search Bot'=>'(nuhk)|(Googlebot)|(Yammybot)|(Openbot)|(Slurp/cat)|(msnbot)|(ia_archiver)'
    );
  
    foreach($oses as $os=>$pattern){
        if(eregi($pattern, $userAgent)) { // Пройдемся по массиву $oses для поиска соответствующей операционной системы.
            return $os;
        }
    }
    return 'Unknown'; // Хрен его знает, чего у него на десктопе стоит.
}
echo getOS($_SERVER['HTTP_USER_AGENT']);
?></p></div></div></div>
<?
$er_time=date("H:i:s d M Y"); // Записываем текущую дату обращения на сайт
$U=getenv("HTTP_USER_AGENT"); // Узнаем какой браузер использует посетитель
$H=getenv("HTTP_REFERER"); // Получаем адрес ulr откуда прищел посетитель
$R=getenv("REMOTE_ADDR"); // Получаем IP адрес посетителя
$W=getenv("REQUEST_URI"); // Получаем адрес страницы, которую запросил пользователь
$f=fopen("logs/users.log",'a'); // Указываем путь до лог-файла
flock ($f,2);
fwrite($f,"$er_time\n Br: $U\n Rf: $H\n IP: $R\n Rq: $W\r\n"); 
fclose($f); // Закрытие файла
?>
<?}?>
</body>
</html>
