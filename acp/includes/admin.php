<?php
if($USER_LOGGED_IN = '1') {
	
	if($_GET['cat'] == NULL or $_GET['cat'] == 'main') {
	echo '
	<h2>Добро пожаловать в панель администратора NetShop v1.1</h2>
	<p>Чтобы добавить новые категории товара выберите пункт "Категории Товаров" в меню.</p>
	<p>Чтобы добавить новый товар выберите пункт "Товар" в меню.</p>
	<p>Чтобы настроить пароль для профиля <?echo $USERNAME;?> выберите пункт "Настройки" в меню.</p>';
	}
	elseif($_GET['cat'] == 'about') {
	echo '<h2>Панель администратора NetShop</h2><p>Версия: 1.1</p><p>Автор: NetLast Studio</p><p>Skype: evilcat-ru</p>';
	}
	elseif($_GET['cat'] == 'categories') {
	include('categories.php');
	}
	elseif($_GET['cat'] == 'goods') {
	include('goods.php');
	}
	elseif($_GET['cat'] == 'settings') {
	include('settings.php');
	}
	elseif($_GET['cat'] == 'pages') {
	include('pages.php');
	}
	elseif($_GET['cat'] == 'sidebar') {
	include('sidebar.php');
	}
}
else {
echo 'Hacking attempt. Your IP was recorded.';
}
?>