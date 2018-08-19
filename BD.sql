-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Хост: -----
-- Время создания: -----
-- Версия сервера: 5.6.36-82.0-log
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `--------`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cats`
--

CREATE TABLE `cats` (
  `cat_id` int(11) UNSIGNED NOT NULL,
  `cat_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cats`
--

INSERT INTO `cats` (`cat_id`, `cat_name`) VALUES
(1, 'Игровой Аккаунт'),
(4, 'Игровой ключ');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`good_id`, `good_name`, `good_name_d`, `good_price`, `good_sale`, `good_link`, `good_image`, `good_image1`, `good_image2`, `good_image3`, `good_image4`, `good_image5`, `good_image6`, `good_catid`, `good_new`, `good_desc1`, `good_desc2`, `good_desc3`, `good_desc4`, `good_desc5`, `good_position`) VALUES
(4, 'MAFIA 3/Random Key', 'Игровой ключ', '99', '-45%', 'http://www.oplata.info/asp/pay_wm.asp?id_d=2227212&lang=ru-RU', 'http://legolasshop.ru/theme/images/goods/11.png', 'https://i.ytimg.com/vi/PCNlCbfW-r8/maxresdefault.jpg', 'https://i.ytimg.com/vi/y9TyoJhQ28E/maxresdefault.jpg', 'https://4.bp.blogspot.com/-9pT2-YhYMjE/V18XDzWxRhI/AAAAAAAABDQ/bNX0gqPEaHglEKqbXIT_YoKJMH0xbyUOQCLcB/s1600/Mafia_3_4.jpg', 'http://i.imgur.com/9PkkHak.jpg', 'http://1.bp.blogspot.com/-OpybM4rkOEs/VpoSogBks7I/AAAAAAAAEUw/uGsnhl7Xs34/s1600/Screenshot%2B3.jpg', 'http://static4.gamespot.com/uploads/original/1197/11970954/3081657-2k_mafia3_e3_lincoln_burke.png', '4', '1', 'https://www.youtube.com/embed/yvd35Nd8i0I', 'Во Вьетнаме Линкольн Клей понял одно: семья - это не те, с кем ты вырос, а те, за кого ты готов умереть. Но когда итальянская мафия наносит удар в спину черной преступной группировке, когда-то заменившей Линкольну семью, он создает новую семью на руинах старой и принимается мстить, жестоко и умело. Если собрать правильных людей и не бояться замарать руки, можно подняться на самый верх городского криминального подполья. Вас ждут яростные перестрелки, жестокие рукопашные схватки, головокружительные гонки и непростые решения. ', '           <p style=\"font-size:17px; color:#fd2457;\">Как Работает MAFIA 3/Random Key?</p> \r\n<br />\r\n<br />\r\n1. При покупки появляется возможность стать обладателем ключа MAFIA 3 или любого другого РАНДОМНОГО ключа. \r\n<br />\r\n<br />\r\n2. Никто не может решить что вам покупать поэтому решайте и помните: \"Кто не рискует - Тот не пьет шампанское\"\r\n<br />\r\n<br />\r\n3. КТО ПОСЛЕ ПОКУПКИ ОСТАВИТ ПОЛОЖИТЕЛЬНЫЙ ОТЗЫВ ПОЛУЧИТ ШАНС ПОЛУЧИТ ВТОРОЙ РАНДОМНЫЙ КЛЮЧ БЕСПЛАТНО!!!\r\n<br />\r\n<br />\r\nВнимание! Замена товара производится только в том случае, если ключ от игры не рабочий, при этом нужно иметь видео с момента покупки и до того как вы убедитесь что товар не рабочий!Без видео мы не сможем вам заменить товар!', '', '', 11),
(5, 'Tom Clancys The Division', 'Игровой ключ', '99', '-40%', 'http://www.oplata.info/asp/pay_wm.asp?id_d=2227213&lang=ru-RU', 'http://legolasshop.ru/theme/images/goods/12.png', 'http://screenrant.com/wp-content/uploads/Tom-Clancy-The-Division-Wallpaper.jpg', 'http://virtualgameinfo.ru/wp-content/uploads/2016/02/tom_clancys_the_division_wiki_guide_location.jpg', 'http://gearnuke.com/wp-content/uploads/2016/01/the-division-xbox-one-beta-6.jpg', 'http://gallery.pub.goha.ru/gals/news/2013/06/10/tctd/tctd/orig/2086c9d609f6ea41887759f597db6952.jpg', 'https://s-media-cache-ak0.pinimg.com/originals/a3/d6/c2/a3d6c20e091c5c05463dcca70797c231.jpg', 'https://ubistatic9-a.akamaihd.net/ubicomstatic/en-GB/global/media/E315_TCTD_Final_screenshot_Macys_213016.jpg', '4', '1', 'https://www.youtube.com/embed/WdJub3Kz2wI', 'Современный мир развивается с невероятной скоростью, однако в то же время становится все более хрупким. Представьте себе карточный домик: достаточно убрать один элемент – и конструкция рухнет. \r\n<br />\r\n<br />\r\nНезадолго до Рождества Нью-Йорк охватывает чудовищная пандемия. Общественные и государственные службы одна за другой перестают функционировать, начинаются перебои с водой, едой и электричеством. Всего за несколько дней улицы города охватывает хаос. И тогда в дело вступает Спецотряд – особое подразделение оперативных агентов. В мирное время они ведут самую обычную жизнь, но когда приходит беда, они начинают действовать. Задача Спецотряда – спасти общество. \r\n<br />\r\n<br />\r\nКогда рушится мир, мы его опора.', '           <p style=\"font-size:17px; color:#fd2457;\">Как Работает Tom Clancys The Division/Random key?</p> \r\n<br />\r\n<br />\r\n1. При покупки появляется возможность стать обладателем ключа Tom Clancys The Division или любого другого РАНДОМНОГО ключа. \r\n<br />\r\n<br />\r\n2. Никто не может решить что вам покупать поэтому решайте и помните: \"Кто не рискует - Тот не пьет шампанское\"\r\n<br />\r\n<br />\r\n3. КТО ПОСЛЕ ПОКУПКИ ОСТАВИТ ПОЛОЖИТЕЛЬНЫЙ ОТЗЫВ ПОЛУЧИТ ШАНС ПОЛУЧИТ ВТОРОЙ РАНДОМНЫЙ КЛЮЧ БЕСПЛАТНО!!!\r\n<br />\r\n<br />\r\nВнимание! Замена товара производится только в том случае, если ключ от игры не рабочий, при этом нужно иметь видео с момента покупки и до того как вы убедитесь что товар не рабочий!Без видео мы не сможем вам заменить товар!', '', '', 12),
(6, 'Ключ CS:GO', 'Игровой ключ', '79', '-35%', 'http://www.oplata.info/asp/pay_wm.asp?id_d=2227211&lang=ru-RU', 'http://legolasshop.ru/theme/images/goods/9.jpg', 'http://etocsdetka.ru/wp-content/uploads/2015/10/%D0%9A%D0%BE%D0%BD%D1%82%D1%80-%D1%82%D0%B5%D1%80%D1%80%D0%BE%D1%80%D0%B8%D1%81%D1%82-%D1%81%D0%BA%D1%83%D1%87%D0%B0%D0%B5%D1%82-%D1%81-%D0%BA%D1%83%D1%80%D0%B8%D1%86%D0%B5%D0%B9-CS-GO-%D0%9E%D0%B1%D0%BE%D0%B8-1920x1080.jpg', 'http://gplaytv.bg/wp-content/uploads/2015/08/qnchostream.jpg', 'http://cdn.wallpapersafari.com/64/21/sGKPTo.png', 'https://i.ytimg.com/vi/UrSFGsnfyLg/maxresdefault.jpg', 'http://wallpapers-and-backgrounds.net/wp-content/uploads/2016/06/cs-go-ultra-hd-wallpaper_1_1920x1080.jpg', 'http://files.gamebanana.com/img/ss/skins/522f73a7968d5.jpg', '4', '1', 'https://www.youtube.com/embed/edYCtaNueQY', 'Counter-Strike: Global Offensive (CS: GO) возродит тот ураганный командный игровой процесс, впервые представленный еще 12 лет назад.\r\nCS: GO включает в себя новые карты, персонажей и оружие, а также улучшенную версию классической составляющей CS (de_dust и т.п.). Кроме того, CS: GO содержит новые игровые режимы, систему организации матчей, списки лучших игроков и многое другое.\r\n<br />\r\n<br />\r\n«Counter-Strike была сюрпризом для игровой индустрии, когда не особо удачный мод стал одним из самых популярных шутеров в мире сразу же после его релиза в Августе 1999 года, — говорит Даг Ломбарди из Valve, — за прошедшие 12 лет, она все еще одна из самых популярных в мире игр, часто появляется на игровых соревнованиях и продана в количестве более 25 миллионов копий по всему миру. CS: GO обещает возродить знаменитый игровой процесс Counter-Strike и предложить его игрокам не только на ПК, но и на консолях следующего поколения и компьютерах Mac».', '           <p style=\"font-size:17px; color:#fd2457;\">Как Работает CS:GO/Random Key?</p> \r\n<br />\r\n<br />\r\n1. При покупки появляется возможность стать обладателем ключа CS:GO или любого другого РАНДОМНОГО ключа. \r\n<br />\r\n<br />\r\n2. Никто не может решить что вам покупать поэтому решайте и помните: \"Кто не рискует - Тот не пьет шампанское\"\r\n<br />\r\n<br />\r\n3. КТО ПОСЛЕ ПОКУПКИ ОСТАВИТ ПОЛОЖИТЕЛЬНЫЙ ОТЗЫВ ПОЛУЧИТ ШАНС ПОЛУЧИТ ВТОРОЙ РАНДОМНЫЙ КЛЮЧ БЕСПЛАТНО!!!\r\n<br />\r\n<br />\r\nВнимание! Замена товара производится только в том случае, если ключ от игры не рабочий, при этом нужно иметь видео с момента покупки и до того как вы убедитесь что товар не рабочий!Без видео мы не сможем вам заменить товар!', '', '', 9),
(7, 'Ключ GTA 5', 'Игровой ключ', '79', '-50%', 'http://www.oplata.info/asp/pay_wm.asp?id_d=2227210&lang=ru-RU', 'http://legolasshop.ru/theme/images/goods/10.jpg', 'http://www.v3wall.com/wallpaper/1920_1080/1303/1920_1080_20130309044145753698.jpg', 'http://shushi168.com/data/out/98/37260686-gta-5-wallpaper.jpg', 'http://www.zastavki.com/pictures/originals/2014/_Bandit_with_the_bat_in_the_GTA_5_088722_.jpg', 'https://i.ytimg.com/vi/XDkJWf6UCIw/maxresdefault.jpg', 'https://i.ytimg.com/vi/gK2G7yfxasE/maxresdefault.jpg', 'http://www.zastavki.com/pictures/originals/2014/_The_protagonist_of_the_GTA_5_video_game__088720_.jpg', '4', '1', 'https://www.youtube.com/embed/QkkoHAzjnUs', 'Когда молодой уличный жулик, отставной грабитель банков и опасный для общества психопат оказываются втянуты в разборки с самыми пугающими и сумасшедшими представителями криминального мира, правительства США и индустрии развлечений, им приходится выполнить серию рискованных налетов, чтобы выжить в безжалостном городе, где они не могут доверять никому – и в первую очередь друг другу.\r\n<br />\r\n<br />\r\nGrand Theft Auto V для PC позволяет игрокам исследовать знаменитый мир Лос-Сантоса и округа Блэйн в разрешении до 4k и выше с частотой 60 кадров в секунду.\r\n<br />\r\n<br />\r\nИгра предлагает множество уникальных для компьютера настроек, в том числе более 25 отдельных параметров для настройки качества текстур, шейдеров, тесселяции, сглаживания и не только, а также поддержку и настройку управления с помощью клавиатуры и мыши. Из дополнительных возможностей можно отметить ползунок населенности города, управляющий плотностью потока машин и пешеходов, поддержку двух и трех мониторов, поддержку 3D и функцию «plug-and-play» для геймпадов.', '           <p style=\"font-size:17px; color:#fd2457;\">Как Работает Ключ GTA 5/Random Key?</p> \r\n<br />\r\n<br />\r\n1. При покупки появляется возможность стать обладателем ключа GTA 5 или любого другого РАНДОМНОГО ключа. \r\n<br />\r\n<br />\r\n2. Никто не может решить что вам покупать поэтому решайте и помните: \"Кто не рискует - Тот не пьет шампанское\"\r\n<br />\r\n<br />\r\n3. КТО ПОСЛЕ ПОКУПКИ ОСТАВИТ ПОЛОЖИТЕЛЬНЫЙ ОТЗЫВ ПОЛУЧИТ ШАНС ПОЛУЧИТ ВТОРОЙ РАНДОМНЫЙ КЛЮЧ БЕСПЛАТНО!!!\r\n<br />\r\n<br />\r\nВнимание! Замена товара производится только в том случае, если ключ от игры не рабочий, при этом нужно иметь видео с момента покупки и до того как вы убедитесь что товар не рабочий!Без видео мы не сможем вам заменить товар!', '', '', 10),
(8, 'Silver Random Steam Key', 'Игровой ключ', '39', '-20%', 'http://www.oplata.info/asp/pay_wm.asp?id_d=2227218&lang=ru-RU', 'http://legolasshop.ru/theme/images/goods/5.jpg', 'http://vistanews.ru/uploads/posts/2016-11/1478155402_b8d726b293fbc3db187deb2de75523cb.jpg', 'http://cdn.idigitaltimes.com/sites/idigitaltimes.com/files/2016/08/14/final-fantasy.jpg', 'http://battlefield-company.ru/_ph/12/841342161.jpg', 'http://orig07.deviantart.net/d172/f/2016/169/6/a/tloz__breath_of_the_wild_by_eternalegend-da6qrf5.jpg', 'https://i.ytimg.com/vi/GauAr4lWjyw/maxresdefault.jpg', 'http://media.moddb.com/images/members/1/414/413573/profile/6786056-dead-island-wallpaper.jpg', '4', '1', 'https://www.youtube.com/embed/9daN2mpWvzk', 'Silver Random Steam Key – это товар, оплачивая который Вы гарантированно получаете выбранный случайным образом рабочий ключ для активации игры в сервисе Steam.', '           <p style=\"font-size:17px; color:#fd2457;\">Как Работает Silver Random Steam Key?</p> \r\n<br />\r\n<br />\r\n1. При покупки появляется возможность стать обладателем СЕРЕБРЕННОГО КЛЮЧА, который позволяет активировать любую случайную игру.\r\n<br />\r\n<br />\r\n2. Никто не может решить что вам покупать поэтому решайте и помните: \"Кто не рискует - Тот не пьет шампанское\"\r\n<br />\r\n<br />\r\n3. КТО ПОСЛЕ ПОКУПКИ ОСТАВИТ ПОЛОЖИТЕЛЬНЫЙ ОТЗЫВ ПОЛУЧИТ ШАНС ПОЛУЧИТ ВТОРОЙ РАНДОМНЫЙ КЛЮЧ БЕСПЛАТНО!!!\r\n<br />\r\n<br />\r\nВнимание! Замена товара производится только в том случае, если ключ от игры не рабочий, при этом нужно иметь видео с момента покупки и до того как вы убедитесь что товар не рабочий!Без видео мы не сможем вам заменить товар!', '', '', 5),
(9, 'Platinum Random Steam Key', 'Игровой ключ', '69', '-20%', 'http://www.oplata.info/asp/pay_wm.asp?id_d=2227216&lang=ru-RU', 'http://legolasshop.ru/theme/images/goods/7.jpg', 'http://static1.gamespot.com/uploads/original/1365/13658182/3079327-horizonzerodawn_e32016_snapmaw_render_1465873638.jpg', 'https://i.ytimg.com/vi/n_mA0qXcqYs/maxresdefault.jpg', 'https://assets.vg247.com/current//2016/08/battlefield_1_rain_fog_1.jpg', 'http://orig11.deviantart.net/bd69/f/2013/157/0/d/lightning_returns__final_fantasy_xiii___snow_by_uxianxiii-d680ekt.jpg', 'http://static3.gamespot.com/uploads/original/1365/13658182/2627003-20140811_di2_gamescom_screen_03.jpg', 'http://i1.wp.com/dailytechnologee.com/wp-content/uploads/2015/12/uncharted-4.jpg', '4', '1', 'https://www.youtube.com/embed/qnZLclonwME', 'Platinum Random Steam Key – это товар, оплачивая который Вы гарантированно получаете выбранный случайным образом рабочий ключ для активации игры в сервисе Steam.', '           <p style=\"font-size:17px; color:#fd2457;\">Как Работает Platinum Random Steam Key?</p> \r\n<br />\r\n<br />\r\n1. При покупки появляется возможность стать обладателем ПЛАТИННОГО КЛЮЧА, который позволяет активировать любую случайную игру.\r\n<br />\r\n<br />\r\n2. Никто не может решить что вам покупать поэтому решайте и помните: \"Кто не рискует - Тот не пьет шампанское\"\r\n<br />\r\n<br />\r\n3. КТО ПОСЛЕ ПОКУПКИ ОСТАВИТ ПОЛОЖИТЕЛЬНЫЙ ОТЗЫВ ПОЛУЧИТ ШАНС ПОЛУЧИТ ВТОРОЙ РАНДОМНЫЙ КЛЮЧ БЕСПЛАТНО!!!\r\n<br />\r\n<br />\r\nВнимание! Замена товара производится только в том случае, если ключ от игры не рабочий, при этом нужно иметь видео с момента покупки и до того как вы убедитесь что товар не рабочий!Без видео мы не сможем вам заменить товар!', '', '', 7),
(10, 'Super Random Steam Key', 'Игровой ключ', '119', '-20%', 'http://www.oplata.info/asp/pay_wm.asp?id_d=2227214&lang=ru-RU', 'http://legolasshop.ru/theme/images/goods/8.jpg', 'http://images.coolestwallpapers.com/user-content/uploads/wall/o/72/for_honor_2016_game-wide.jpg', 'http://assets.squarefaction.ru/files/game/5341/gallery/20140610225005_e2566fc0.jpg', 'https://content.pulse.ea.com/content/battlefield-portal/ru_RU/news/battlefield-1/bf1-ea-play/_jcr_content/body/image/renditions/rendition1.img.jpg', 'http://disgustingmen.com/wp-content/uploads/2016/09/final-fantasy-xv.jpg', 'http://static3.gamespot.com/uploads/original/1365/13658182/2627004-20140811_di2_gamescom_screen_04.jpg', 'https://i.ytimg.com/vi/88xS3RdFB80/maxresdefault.jpg', '4', '1', 'https://www.youtube.com/embed/NdnZ-IevfDE', 'Super Random Steam Key – это товар, оплачивая который Вы гарантированно получаете выбранный случайным образом рабочий ключ для активации игры в сервисе Steam.', '           <p style=\"font-size:17px; color:#fd2457;\">Как Работает Super Random Steam Key?</p> \r\n<br />\r\n<br />\r\n1. При покупки появляется возможность стать обладателем СУПЕР КЛЮЧА, который позволяет активировать любую случайную игру.\r\n<br />\r\n<br />\r\n2. Никто не может решить что вам покупать поэтому решайте и помните: \"Кто не рискует - Тот не пьет шампанское\"\r\n<br />\r\n<br />\r\n3. КТО ПОСЛЕ ПОКУПКИ ОСТАВИТ ПОЛОЖИТЕЛЬНЫЙ ОТЗЫВ ПОЛУЧИТ ШАНС ПОЛУЧИТ ВТОРОЙ РАНДОМНЫЙ КЛЮЧ БЕСПЛАТНО!!!\r\n<br />\r\n<br />\r\nВнимание! Замена товара производится только в том случае, если ключ от игры не рабочий, при этом нужно иметь видео с момента покупки и до того как вы убедитесь что товар не рабочий!Без видео мы не сможем вам заменить товар!', '', '', 8),
(11, 'Gold Random Steam Key', 'Игровой ключ', '49', '-20%', 'http://www.oplata.info/asp/pay_wm.asp?id_d=2227217&lang=ru-RU', 'http://legolasshop.ru/theme/images/goods/6.jpg', 'http://i11d.3djuegos.com/juegos/11373/horizon__nombre_provisional_/fotos/set/horizon__nombre_provisional_-3495584.jpg', 'http://cdn02.nintendo-europe.com/media/images/10_share_images/games_15/wiiu_14/SI_WiiU_TheLegendOfZeldaBreathOfTheWild.jpg', 'https://i.ytimg.com/vi/ymwXbF1VTKU/maxresdefault.jpg', 'http://i.imgur.com/qZV2AuL.jpg', 'http://orig07.deviantart.net/e3d1/f/2013/301/c/c/dead_island__riptide__postcard__background__by_cursedblade1337-d6s4vqq.png', 'https://i.ytimg.com/vi/APNbJeaFor4/maxresdefault.jpg', '4', '1', 'https://www.youtube.com/embed/MgRIyFed9mE', 'Gold Random Steam Key – это товар, оплачивая который Вы гарантированно получаете выбранный случайным образом рабочий ключ для активации игры в сервисе Steam.', '           <p style=\"font-size:17px; color:#fd2457;\">Как Работает Gold Random Steam Key?</p> \r\n<br />\r\n<br />\r\n1. При покупки появляется возможность стать обладателем ЗОЛОТОГО КЛЮЧА, который позволяет активировать любую случайную игру.\r\n<br />\r\n<br />\r\n2. Никто не может решить что вам покупать поэтому решайте и помните: \"Кто не рискует - Тот не пьет шампанское\"\r\n<br />\r\n<br />\r\n3. КТО ПОСЛЕ ПОКУПКИ ОСТАВИТ ПОЛОЖИТЕЛЬНЫЙ ОТЗЫВ ПОЛУЧИТ ШАНС ПОЛУЧИТ ВТОРОЙ РАНДОМНЫЙ КЛЮЧ БЕСПЛАТНО!!!\r\n<br />\r\n<br />\r\nВнимание! Замена товара производится только в том случае, если ключ от игры не рабочий, при этом нужно иметь видео с момента покупки и до того как вы убедитесь что товар не рабочий!Без видео мы не сможем вам заменить товар!', '', '', 6),
(12, 'Рандомный Аккаунт Minecraft', '', '29', '-65%', 'http://www.oplata.info/asp/pay_wm.asp?id_d=2227205&lang=ru-RU', 'http://legolasshop.ru/theme/images/goods/2.jpg', 'http://raynfall.com/wp-content/uploads/2013/03/minecraft_2.jpg', 'http://riftinfo.com/wp-content/uploads/2015/01/2nd-Pic13.jpg', 'https://i.ytimg.com/vi/1X4ux0EdZvI/hqdefault.jpg', 'http://www.chip.de/ii/522822077_4ea22274d7.jpg', 'https://i.ytimg.com/vi/d8L_TGWV7uY/maxresdefault.jpg', 'http://s3.amazonaws.com/gameplay-production/virtual_controllers/meta_images/000/006/626/original/Minecraft_screen.jpg?1407876683', '1', '1', 'https://www.youtube.com/embed/MmB9b5njVbA', '<p style=\"font-size:17px; color:#fd2457;\">Вход через лаунчер</p>\r\n<br />\r\nАккаунты вида: Логин:Пароль. Двоеточие не вводится.\r\n<br />\r\nПосле покупки Вы моментально получите лицензионный аккаунт Minecraft, что позволит Вам:\r\n<br />\r\nАвторизация через лаунчер!\r\n<br />\r\nПри смерти Вы не теряете инвентарь!\r\n<br />\r\nКоннект к официальным серверам без задержек!\r\n<br />\r\nВозможность зайти на полный сервер!\r\n<br />\r\nДоступ к почте не предоставляется.', '           <p style=\"font-size:17px; color:#fd2457;\">Как Работает Рандомный Аккаунт Minecraft?</p> \r\n<br />\r\n<br />\r\n1. При покупке вы получаете шанс стать обладателем Minecraft аккаунта С ПОЛНЫМ ДОСТУПОМ или обычного.\r\n<br />\r\n<br />\r\n2. Никто не может решить что вам покупать поэтому решайте и помните: \"Кто не рискует - Тот не пьет шампанское\"\r\n<br />\r\n<br />\r\n3. КТО ПОСЛЕ ПОКУПКИ ОСТАВИТ ПОЛОЖИТЕЛЬНЫЙ ОТЗЫВ ПОЛУЧИТ ШАНС ПОЛУЧИТ ВТОРОЙ РАНДОМНЫЙ КЛЮЧ БЕСПЛАТНО!!!\r\n<br />\r\n<br />\r\nВнимание! Замена товара производится только в том случае, если ключ от игры не рабочий, при этом нужно иметь видео с момента покупки и до того как вы убедитесь что товар не рабочий!Без видео мы не сможем вам заменить товар!', '', '', 2),
(13, 'Ключ Minecraft', 'Игровой ключ', '199', '-65%', 'http://www.oplata.info/asp/pay_wm.asp?id_d=2227219&lang=ru-RU', 'http://legolasshop.ru/theme/images/goods/4.jpg', 'http://raynfall.com/wp-content/uploads/2013/03/minecraft_2.jpg', 'http://s3.amazonaws.com/gameplay-production/virtual_controllers/meta_images/000/006/626/original/Minecraft_screen.jpg?1407876683', 'http://www.chip.de/ii/522822077_4ea22274d7.jpg', 'https://i.ytimg.com/vi/d8L_TGWV7uY/maxresdefault.jpg', 'https://i.ytimg.com/vi/1X4ux0EdZvI/hqdefault.jpg', 'http://riftinfo.com/wp-content/uploads/2015/01/2nd-Pic13.jpg', '4', '1', 'https://www.youtube.com/embed/MmB9b5njVbA', '<p style=\"font-size:17px; color:#fd2457;\">Вход через лаунчер</p>\r\n<br />\r\nТовар вида: Ключ.\r\n<br />\r\nПосле покупки Вы моментально получите лицензионный аккаунт Minecraft, что позволит Вам:\r\n<br />\r\nАвторизация через лаунчер!\r\n<br />\r\nПри смерти Вы не теряете инвентарь!\r\n<br />\r\nКоннект к официальным серверам без задержек!\r\n<br />\r\nВозможность зайти на полный сервер!\r\n<br />\r\nДоступ к почте не предоставляется.', '           <p style=\"font-size:17px; color:#fd2457;\">Как Работает Ключ Minecraft/Random Steam ?</p> \r\n<br />\r\n<br />\r\n1. При покупке вы получаете шанс стать обладателем КЛЮЧА АКТИВАЦИИ MINECRAFT или СЛУЧАЙНОГО КЛЮЧА игры из Steam.\r\n<br />\r\n<br />\r\n2. Никто не может решить что вам покупать поэтому решайте и помните: \"Кто не рискует - Тот не пьет шампанское\"\r\n<br />\r\n<br />\r\n3. КТО ПОСЛЕ ПОКУПКИ ОСТАВИТ ПОЛОЖИТЕЛЬНЫЙ ОТЗЫВ ПОЛУЧИТ ШАНС ПОЛУЧИТ ВТОРОЙ РАНДОМНЫЙ КЛЮЧ БЕСПЛАТНО!!!\r\n<br />\r\n<br />\r\nВнимание! Замена товара производится только в том случае, если ключ от игры не рабочий, при этом нужно иметь видео с момента покупки и до того как вы убедитесь что товар не рабочий!Без видео мы не сможем вам заменить товар!', '', '', 4),
(14, 'Аккаунт Minecraft', 'Игровой Аккаунт', '14', '-65%', 'http://www.oplata.info/asp/pay_wm.asp?id_d=2227203&lang=ru-RU', 'http://legolasshop.ru/theme/images/goods/1.jpg', 'http://www.chip.de/ii/522822077_4ea22274d7.jpg', 'http://riftinfo.com/wp-content/uploads/2015/01/2nd-Pic13.jpg', 'https://i.ytimg.com/vi/1X4ux0EdZvI/hqdefault.jpg', 'https://i.ytimg.com/vi/d8L_TGWV7uY/maxresdefault.jpg', 'http://raynfall.com/wp-content/uploads/2013/03/minecraft_2.jpg', 'http://s3.amazonaws.com/gameplay-production/virtual_controllers/meta_images/000/006/626/original/Minecraft_screen.jpg?1407876683', '1', '1', 'https://www.youtube.com/embed/MmB9b5njVbA', '<p style=\"font-size:17px; color:#fd2457;\">Вход через лаунчер</p>\r\n<br />\r\nАккаунты вида: Логин:Пароль. Двоеточие не вводится.\r\n<br />\r\nПосле покупки Вы моментально получите лицензионный аккаунт Minecraft, что позволит Вам:\r\n<br />\r\nАвторизация через лаунчер!\r\n<br />\r\nПри смерти Вы не теряете инвентарь!\r\n<br />\r\nКоннект к официальным серверам без задержек!\r\n<br />\r\nВозможность зайти на полный сервер!\r\n<br />\r\nДоступ к почте не предоставляется.', '           <p style=\"font-size:17px; color:#fd2457;\">Как Работает Аккаунт Minecraft?</p> \r\n<br />\r\n<br />\r\n1. При покупке вы получаете шанс стать обладателем Minecraft АККАУНТА.\r\n<br />\r\n<br />\r\n2. Никто не может решить что вам покупать поэтому решайте и помните: \"Кто не рискует - Тот не пьет шампанское\"\r\n<br />\r\n<br />\r\n3. КТО ПОСЛЕ ПОКУПКИ ОСТАВИТ ПОЛОЖИТЕЛЬНЫЙ ОТЗЫВ ПОЛУЧИТ ШАНС ПОЛУЧИТ ВТОРОЙ РАНДОМНЫЙ КЛЮЧ БЕСПЛАТНО!!!\r\n<br />\r\n<br />\r\nВнимание! Замена товара производится только в том случае, если ключ от игры не рабочий, при этом нужно иметь видео с момента покупки и до того как вы убедитесь что товар не рабочий!Без видео мы не сможем вам заменить товар!', '', '', 1),
(15, 'Полный доступ Minecraft', '', '39', '-65%', 'http://www.oplata.info/asp/pay_wm.asp?id_d=2123177&lang=ru-RU', 'http://legolasshop.ru/theme/images/goods/3.jpg', 'http://riftinfo.com/wp-content/uploads/2015/01/2nd-Pic13.jpg', 'http://s3.amazonaws.com/gameplay-production/virtual_controllers/meta_images/000/006/626/original/Minecraft_screen.jpg?1407876683', 'http://raynfall.com/wp-content/uploads/2013/03/minecraft_2.jpg', 'https://i.ytimg.com/vi/1X4ux0EdZvI/hqdefault.jpg', 'https://i.ytimg.com/vi/d8L_TGWV7uY/maxresdefault.jpg', 'http://www.chip.de/ii/522822077_4ea22274d7.jpg', '1', '1', 'https://www.youtube.com/embed/MmB9b5njVbA', '<p style=\"font-size:17px; color:#fd2457;\">Вход через лаунчер</p>\r\n<br />\r\nАккаунты вида: Логин:Пароль. Двоеточие не вводится.\r\n<br />\r\nПосле покупки Вы моментально получите лицензионный аккаунт Minecraft, что позволит Вам:\r\n<br />\r\nАвторизация через лаунчер!\r\n<br />\r\nПри смерти Вы не теряете инвентарь!\r\n<br />\r\nКоннект к официальным серверам без задержек!\r\n<br />\r\nВозможность зайти на полный сервер!\r\n<br />\r\nДоступ к почте не предоставляется.', '           <p style=\"font-size:17px; color:#fd2457;\">Как Работает Полный доступ Minecraft?</p> \r\n<br />\r\n<br />\r\n1. При покупке вы получаете шанс стать обладателем Minecraft аккаунта С ПОЛНЫМ ДОСТУПОМ.\r\n<br />\r\n<br />\r\n2. Никто не может решить что вам покупать поэтому решайте и помните: \"Кто не рискует - Тот не пьет шампанское\"\r\n<br />\r\n<br />\r\n3. КТО ПОСЛЕ ПОКУПКИ ОСТАВИТ ПОЛОЖИТЕЛЬНЫЙ ОТЗЫВ ПОЛУЧИТ ШАНС ПОЛУЧИТ ВТОРОЙ РАНДОМНЫЙ КЛЮЧ БЕСПЛАТНО!!!\r\n<br />\r\n<br />\r\nВнимание! Замена товара производится только в том случае, если ключ от игры не рабочий, при этом нужно иметь видео с момента покупки и до того как вы убедитесь что товар не рабочий!Без видео мы не сможем вам заменить товар!', '', '', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `setting_id` int(11) UNSIGNED NOT NULL,
  `setting_name` varchar(30) NOT NULL,
  `setting_value` text NOT NULL,
  `settings_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`setting_id`, `setting_name`, `setting_value`, `settings_title`) VALUES
(1, '2', '3', 'LegolasShop');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `user_login` varchar(30) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_hash` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_login`, `user_password`, `user_hash`) VALUES
(1, 'root', '7b24afc8bc80e548d66c4e7ff72171c5', '1f9e9c2e903133d5f3db62144937bee0');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`cat_id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`good_id`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`setting_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cats`
--
ALTER TABLE `cats`
  MODIFY `cat_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `good_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `setting_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
