-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 31 2022 г., 10:56
-- Версия сервера: 5.7.33
-- Версия PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dashboard`
--

-- --------------------------------------------------------

--
-- Структура таблицы `nav`
--

CREATE TABLE `nav` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `visible` tinyint(4) NOT NULL,
  `url` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `nav`
--

INSERT INTO `nav` (`id`, `title`, `visible`, `url`) VALUES
(1, 'Главная', 1, '/'),
(2, 'О нас', 1, '/?page=about'),
(3, 'Блог', 1, '/?page=blog'),
(4, 'Контакты', 1, '/?page=contacts');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `intro` varchar(255) CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `quotes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `intro`, `text`, `img`, `quotes`, `date`) VALUES
(1, 'Ozon Express провёл ребрендинг: сменил название на Ozon fresh и обновил цвета', 'Сервис быстрой доставки Ozon Express провёл ребрендинг, чтобы больше ассоциироваться с доставкой продуктов и еды.', '<p>Кроме названия и визуального стиля, сервис изменит концепцию работы: теперь он будет предлагать продукты, еду и товары повседневного спроса. Упор в ассортименте будут делать на продукцию &laquo;российских крафтовых производителей&raquo; и фермеров.</p>\r\n\r\n<p>Также Ozon fresh будет продавать продукты под собственной маркой fresh. В ассортименте уже более 170 наименований, в 2022 году направление будут развивать.</p>\r\n\r\n<p><img src=\"https://leonardo.osnova.io/9b4ba771-3b17-5cd6-8213-fb1fe7822ac3/-/preview/2000/-/format/webp/\" /></p>\r\n\r\n<p>Быстрая доставка других товаров, которые продавались на Ozon Express, станет частью &laquo;большого&raquo; Ozon. Они получат пометку Express, их будут доставлять за час или в удобное время. Это, например, электроника и бытовая техника, книги, товары для красоты и здоровья.</p>\r\n\r\n<p><img src=\"https://leonardo.osnova.io/4d07475e-40ae-59e4-a4be-84d62e758c7d/-/preview/2000/-/format/webp/\" /></p>\r\n\r\n<p>Старый логотип</p>\r\n\r\n<p>Новый фирменный стиль разработала команда Ozon во главе с директором бренда Марией Кутузовой.</p>\r\n\r\n<ul>\r\n	<li>Сервис Ozon Express&nbsp;<a href=\"https://vc.ru/trade/88394-ozon-zapustil-bystruyu-dostavku-produktov-i-povsednevnyh-tovarov-v-moskve-ot-40-minut-do-chetyreh-chasov\" target=\"_blank\">начал</a>&nbsp;работать в Москве осенью 2019 года. Он доставлял заказы в течение нескольких часов. Сначала он предлагал продукты и повседневные товары, а затем расширил ассортимент до электроники, книг и другого.</li>\r\n	<li>В июне 2021 года Ozon Express&nbsp;<a href=\"https://vc.ru/trade/264076\" target=\"_blank\">начал</a>&nbsp;продавать продукты под собственной маркой. В октябре сервис&nbsp;<a href=\"https://vc.ru/trade/307630\" target=\"_blank\">открыл</a>&nbsp;первую фабрику-кухню в Москве для доставки готовых блюд под своим брендом. В декабре &mdash;&nbsp;<a href=\"https://vc.ru/trade/333921-ozon-express-zapustil-v-moskve-dostavku-produktov-za-15-minut\" target=\"_blank\">запустил</a>&nbsp;в Москве доставку продуктов за 15 минут.</li>\r\n</ul>\r\n', './public/images/Без названия.webp', '', '2022-03-16 15:52:09'),
(2, 'Фестиваль Белый Квадрат: льготный дедлайн до 28 февраля', 'В 2022 году конкурсные работы фестиваля Белый Квадрат оценит 7 составов международного жюри, в числе которых - обладатели многочисленных наград самых престижных фестивалей креативности и опытом судейства ведущих креативных фестивалей мира.', '<p>Международный фестиваль Белый Квадрат / White Square &ndash;&ndash; один из крупнейших фестивалей креативности в Европе продолжает прием конкурсных работ. В этом году фестиваль пройдет в начале июня в 14-й раз. За эти годы Фестиваль получил &nbsp;широкое признание &nbsp;за профессионализм и экспертность составов жюри, насыщенность деловой программы и особенную атмосферу Фестиваля. Белый Квадрат проводится при поддержке и партнерстве с European Association of Communications Agencies (EACA) и активно поддерживается региональными и мировыми СМИ о маркетинге и рекламе. Работы-победители, призеры и финалисты Белого Квадрата ежегодно опубликовываются &nbsp;в индустриальных СМИ более 35 стран мира.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>В 2022 году конкурсные работы фестиваля Белый Квадрат оценит 7 составов международного жюри, в числе которых - обладатели многочисленных наград самых престижных фестивалей креативности и опытом судейства ведущих креативных фестивалей мира. При оценке работ прежде всего учитывается креативная идея и ее воплощение. &nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Конкурсная программа фестиваля в сезоне 2022 включает 32 конкурса:</p>\r\n', './public/images/wt_sq22.jpg', '', '2022-03-23 09:43:01'),
(3, 'Серия светодиодных декоративных светильников бренда Maytoni', 'Светильник состоит из стеклянных выдувных элементов, акриловых матовых рассеивателей и светодиодной ленты.', '<p>Светильник состоит из стеклянных выдувных элементов, акриловых матовых рассеивателей и светодиодной ленты. С помощью тросов можно регулировать высоту подвесных светильников.</p>\r\n\r\n<p><strong>Светильники являются победителями наград:&nbsp;</strong></p>\r\n\r\n<p>LIT Light Design Awards 2021 (США) .A&#39; Design Award and Competition 2020 (Италия), &nbsp;German Design Awards 2022(Германия), Good Design Awards 2020-2021 (США), &nbsp;European Product Design Award 2021 (Евросоюз), Muse Design Awards 2021(США), &nbsp;ICONIC AWARDS: Innovative Interior 2022 (Германия), IDA International Design Awards 2021(США), &nbsp;Российский светодизайн 2021, и вошел в лонглист &nbsp;Arhiproduct Awards 2021 (Италия)</p>\r\n\r\n<p><img alt=\"Серия светильников Amulet\" src=\"https://designnews.ru/images/designnews/amulet/amulet02.jpg\" /></p>\r\n\r\n<p>Вдохновением для дизайна светильников послужили доисторические украшения, которые появились десятки тысяч лет до нашей эры в южной Африке. В то время ожерелья и браслеты делали из ракушек и других натуральных материалов, но они были не только украшением. Люди прошлого считали, что эти предметы обладают магическими свойствами. Именно поэтому серия светильников получила название &laquo;Амулет&raquo;.</p>\r\n\r\n<p><img alt=\"Серия светильников Amulet\" src=\"https://designnews.ru/images/designnews/amulet/amulet03.jpg\" /></p>\r\n', './public/images/amulet.jpg', '', '2022-03-23 09:45:05'),
(4, '10 главных трендов UI-дизайна в 2022 году', '2021 год был захватывающим для дизайнеров — появление метавселенных вызвало довольно серьезные потрясения в отрасли. Многие предположения 2021 года стали больше чем просто тенденцией — и многие из них переросли в нечто совершенно новое.', '<h2>1. Минимализм и упрощение</h2>\r\n\r\n<p>Самые известные ведущие технологические компании отдают предпочтение простым, информативным, минималистичным интерфейсам (Revolut, Meta, Oculus и так далее). Год от года эта тенденция становится все шире, и к ней обращаются все больше брендов.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://media.rbcdn.ru/media/upload_tmp/2021/1_ygecnu-j2etvenxmxkdh0w.png\" target=\"_blank\"><img alt=\"минимализм\" src=\"https://media.rbcdn.ru/media/thumb_h/e6/3b/e63b5898366c74875c8633af5036b92a/1_ygecnu-j2etvenxmxkdh0w.png.700x140_q95.jpg\" style=\"height:140px; width:700px\" /></a></p>\r\n\r\n<p>Скриншот: Revolut, Meta/Oculus, MoRas, AR Shakir, Clari</p>\r\n\r\n<h2>2. Брутализм (и возвращение плоскости)</h2>\r\n\r\n<p>Еще один растущий тренд 2021 года.&nbsp;Кажется, брутализм стал популярен как альтернатива дизайнам, которые полны градиентов, теней и улыбающихся 3D-персонажей.</p>\r\n\r\n<p>Брутализм &mdash; это плоский дизайн, четкие контуры, контрастные цвета, смелая типографика и реальные/живые фотографии. Однако эта новая итерация брутализма отказывается от одного из его главных определяющих факторов &mdash; кажущегося отсутствия сетки. В настоящее время он использует все остальные черты, но соответствует более стандартной схеме, часто встречающейся в других стилях дизайна.</p>\r\n\r\n<p>Один из последних примеров брутализма &mdash; дизайн итогов 2021 года Spotify Wrapped.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://media.rbcdn.ru/media/upload_tmp/2021/2_UMNB5Eq.png\" target=\"_blank\"><img alt=\"брутализм\" src=\"https://media.rbcdn.ru/media/thumb_h/cf/03/cf03f38822e19eb1c27194781273308e/2_UMNB5Eq.png.700x140_q95.jpg\" style=\"height:140px; width:700px\" /></a></p>\r\n\r\n<p>Скриншот:&nbsp;Gumroad.com, Figma.com, Spotify Wrapped, Michal Skvarenina, Tomasz Mazurczak</p>\r\n\r\n<h2>3. Стекломорфизм и элементы, вдохновленные стеклом</h2>\r\n\r\n<p>Дизайны с эффектом матового стекла (стекломорфизм или глассморфизм, от англ. glassmorphism) повсюду &mdash; это факт. Здесь и размытие фона, и полупрозрачные объекты вроде открыток, и &laquo;акварель&raquo;, и похожие на стекло сферы, и многое другое. От встроенных элементов в Mac OS Big Sur и Windows 11 до приложений &mdash; эффект явно будет актуален.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://media.rbcdn.ru/media/upload_tmp/2021/3_O8TopZb.png\" target=\"_blank\"><img alt=\"стекломорфизм\" src=\"https://media.rbcdn.ru/media/thumb_h/4d/9b/4d9b3b2e14b8da8e932c3440004d499f/3_O8TopZb.png.700x140_q95.png\" style=\"height:140px; width:700px\" /></a></p>\r\n\r\n<p>Скриншот: iOS &ldquo;Hello&rdquo; welcome screen, M Wildan Cahya Syarief, Heydar Hasanov, Gleb Kuznetsov</p>\r\n\r\n<p>Стань профессиональным дизайнером &mdash; большой выбор программ обучения можно найти в каталоге&nbsp;<a href=\"https://rb.ru/kursy/courses-category/dizain/\" target=\"_blank\">курсов дизайна</a>.</p>\r\n\r\n<h2>4. Северное сияние (Aurora)</h2>\r\n\r\n<p>Вы наверняка помните этот яркий тренд прошлого года.</p>\r\n\r\n<p>Тонкие, красочные, размытые всполохи цвета выглядят очень приветливо и органично &mdash; и определенно более привлекательны визуально. Их можно использовать в качестве полноценного фона или просто сделать акцент на некоторых важных элементах пользовательского интерфейса.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://media.rbcdn.ru/media/upload_tmp/2021/4_TEjgeOW.png\" target=\"_blank\"><img alt=\"северное сияние\" src=\"https://media.rbcdn.ru/media/thumb_h/9d/ca/9dca325003a0effeee41bec50eec955b/4_TEjgeOW.png.700x140_q95.png\" style=\"height:140px; width:700px\" /></a></p>\r\n\r\n<p>Скриншот: Afterglow, Emy Lascan, Daniel Sun, Lukas Horak, Layo</p>\r\n\r\n<h2>5. Голография и неон</h2>\r\n\r\n<p>Эта цифровая голографическая/неоновая тенденция, кажется, хорошо вписывается в эпоху метавселенной, VR и голограммных интерфейсов. Дизайнеры вдохновляются всеми новыми возможностями, которые предлагают виртуальные миры. Для тенденции характерны яркие, светящиеся цвета, абстрактные округлые формы, текстуры, похожие на голограммы.</p>\r\n\r\n<p>Она также широко используется в криптопространстве, чтобы подчеркнуть футуристичность интерфейсов.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://media.rbcdn.ru/media/upload_tmp/2021/5_iI5QwFy.png\" target=\"_blank\"><img alt=\"голография и неон\" src=\"https://media.rbcdn.ru/media/thumb_h/ac/00/ac00a2076daad0bb45909499f89df330/5_iI5QwFy.png.700x140_q95.jpg\" style=\"height:140px; width:700px\" /></a></p>\r\n\r\n<p>Скриншот: Meta (Facebook) Horizon Worlds trailer, Fauzi Akmal, Baten, Vasjen Katro, Virtual desktop by Cosmin Capitanu</p>\r\n\r\n<h2>6. Экологичный &laquo;картонный&raquo; стиль</h2>\r\n\r\n<p>Мы, потребители, с каждым годом все больше заботимся об окружающей среде. Большинство из нас готовы выбирать экологичные решения на каждый день. Похоже, &laquo;экологичный&raquo; визуал можно привнести и в цифровые продукты.</p>\r\n\r\n<p>Тренд подхватывают все больше брендов. Фоны обычно сероватые и напоминают перерабатываемый картон. Типографика минимальна по стилю. Контрастность высокая. Цвета довольно строгие и кажутся приглушенными. На этот раз никаких милых 3D-объектов &mdash; в этом стиле используются фотографии реальной жизни, текстуры реальной жизни и грифонаж.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://media.rbcdn.ru/media/upload_tmp/2021/6_hoDMKRv.png\" target=\"_blank\"><img alt=\"картонный стиль\" src=\"https://media.rbcdn.ru/media/thumb_h/ff/d8/ffd8521c527d8963df6ef9a05f649acb/6_hoDMKRv.png.700x140_q95.jpg\" style=\"height:140px; width:700px\" /></a></p>\r\n\r\n<p>Скриншот: Halo Mobile, Vladimir Gruev, WeTransfer, Afterglow</p>\r\n\r\n<h2>7. Дикая типографика</h2>\r\n\r\n<p>10 лет назад правила типографики были гораздо более строгими, но сейчас, похоже, с заголовками и абзацами можно делать что угодно &mdash; все зависит только от воображения. Можно смешивать шрифты с фигурами, фотографиями и эмодзи, накладывать текстуру, выбирать сложный по форме шрифт и экспериментировать с сеткой, как заблагорассудится.</p>\r\n\r\n<p>Это может дать интригующий, притягательный эффект, но может оказаться и совершенно нечитабельным и раздражающим &mdash; при разработке дизайна в первую очередь все-таки рекомендуется помнить о комфорте пользователя.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://media.rbcdn.ru/media/upload_tmp/2021/7_J6xGfhl.png\" target=\"_blank\"><img alt=\"дикая типографика\" src=\"https://media.rbcdn.ru/media/thumb_h/be/13/be13fad0d621beda81206b952e3a7511/7_J6xGfhl.png.700x140_q95.jpg\" style=\"height:140px; width:700px\" /></a></p>\r\n\r\n<p>Скриншот: Tran Mau Tri Tam, Rron Berisha, Layo, Tomasz Mazurczak, Imran Molla</p>\r\n\r\n<h2>8. Глиноморфизм-3D</h2>\r\n\r\n<p>3D эволюционирует в более упрощенную версию себя. Новейшим, модным стилем в 3D-иллюстрации и 3D-элементах пользовательского интерфейса является глиноморфизм (также claymorphism, от англ. clay &mdash; глина). 3D-объекты будто слеплены &mdash; они имеют простую, цилиндрическую или овальную форму Глубина создается с помощью внутренних и внешних теней, но они выглядят мягче, чем в технике нейморфизма.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://media.rbcdn.ru/media/upload_tmp/2021/8_ATR4LNK.png\" target=\"_blank\"><img alt=\"глиноморфизм\" src=\"https://media.rbcdn.ru/media/thumb_h/21/3b/213be6e12a95f90173126c157f996848/8_ATR4LNK.png.700x140_q95.jpg\" style=\"height:140px; width:700px\" /></a></p>\r\n\r\n<p>Скриншот: Aneesh, Amrit Pal Singh&rsquo;s Toy Faces, Nathan Riley, Hype4.com, Reijo Palmiste</p>\r\n\r\n<h2>9. NFT и демократизация искусства</h2>\r\n\r\n<p>Вне зависимости от того, насколько понятна концепция NFT, это, вероятно, самое повальное увлечение в сети на данный момент.</p>\r\n\r\n<p>NFT дали почти каждому новую возможность зарабатывать деньги &mdash; создав что-то визуальное онлайн, можно просто продать это как произведение искусства. Демократизация означает, что абсолютно каждый может выставить свое творчество на продажу и что почти все может быть идентифицировано как искусство &mdash; будь то пиксельные кенгуру или 3D-аватары.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://media.rbcdn.ru/media/upload_tmp/2021/9_bmdDKii.png\" target=\"_blank\"><img alt=\"NFT и демократизация искусства\" src=\"https://media.rbcdn.ru/media/thumb_h/58/1f/581f45c58f73a01ea1d87d7f05a78334/9_bmdDKii.png.700x140_q95.jpg\" style=\"height:140px; width:700px\" /></a></p>\r\n\r\n<p>Скриншот: Gal Shir, Asal Design, WantLine, Anatoliy, Outcrowd</p>\r\n\r\n<h2>10. Взгляд на VR и метавселенные</h2>\r\n\r\n<p>Виртуальная реальность перешла от громоздких, неудобных и низкокачественных гарнитур к мейнстриму благодаря новым устройствам от Meta и широкому спектру приложений для этой платформы.</p>\r\n\r\n<p>Хотя сама идея метавселенной &mdash; это более романтическая концепция, основанная на Web3, в реальности, скорее всего, крупные игроки будут контролировать весь этот &laquo;пирог&raquo; с помощью средств, относящихся к Web2.</p>\r\n\r\n<p>Дата выхода Apple Glasses пока не анонсирована, но кажется, что стиль для VR и AR уже появился &mdash; с управлением окнами с помощью жестов, отслеживанием глаз и голографическими 3D-формами.</p>\r\n\r\n<p>Хотя гарнитурам еще нужно развивать вычислительную мощность, большинство визуальных образов намеренно представлены в виде более простых для визуализации, низкополигональных моделей, что придает им немного</p>\r\n', './public/images/shutterstock1950547489-min.jpg.895x400_q95_crop_darken_upscale.jpg', '', '2022-05-18 18:15:52');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `roles_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `roles_name`) VALUES
(1, 'Администратор'),
(2, 'Модератор'),
(3, 'Пользователь'),
(4, 'Заблокирован');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admins` int(11) DEFAULT NULL,
  `id_roles` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `admins`, `id_roles`) VALUES
(1, 'admin', 'Вопольский. В.В', 'admin@admin.com', '$2y$10$zoPq7rR9z574/szDK/yjfenitQqeIneDsgWKV055tbjacvk78W5D6', 1, 1),
(2, 'Evools', 'Evools', 'jefr.p@yandex.ru', '$2y$10$LMmmwq7BsqAv3LmDQ7YQfuxskq4ovvEnVqH6Tssv/mWZDQSO3EDoG', NULL, 2),
(3, 'test', 'Фалеев Виктор', 'faleevviktor@gmail.com', '$2y$10$wMb5uxLnbahbUHYhhpwm2.trIbOpb.RxaWHlGFwiuNKEYh2Z3tQ4.', NULL, 3),
(4, 'Syrgak', 'Келишбеков Сыргак', 'syrgak@gmail.com', '$2y$10$U7fb3yAOqPnapCsPI9kNFuoHmncHzTthL8B6WpUNZzqylUWWLcYTi', NULL, 3),
(5, 'aziz', 'Казыкбаев Ази', 'azizjon@gmail.ru', '$2y$10$QTL31BLwq9/d8meQ7psByuswWnncJLjYJy.aMk/pvdObDUMouJGKa', NULL, 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `admins` (`admins`),
  ADD KEY `id_roles` (`id_roles`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `nav`
--
ALTER TABLE `nav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
