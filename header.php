<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Olla</title>

	<!-- favicons -->
	<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
	<link rel="manifest" href="/favicons/manifest.json">
	<link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-config" content="/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- favicons -->

	<!-- og -->
	<meta property="og:title" content="Olla">
	<meta property="og:description" content="Olla">
	<meta property="og:type" content="website">
	<meta property="og:image" content="/img/og.jpg">
	<!-- og -->

	<link href="css/main.css?v=<?=rand(0, 99999)?>" rel="stylesheet">
</head>

<body>

<div class="site-overlay"></div>

<div class="olla-header">
	<div class="container olla-header__top">
		<a href="/" class="olla-header__logo"><img src="/img/logo.png" alt="Logotype"></a>
		<div class="burger">
			<figure class="burger__dot"></figure>
			<figure class="burger__dot"></figure>
			<figure class="burger__dot"></figure>
			<figure class="burger__dot"></figure>
		</div>
	</div>

	<div class="main-menu">
		<div class="container">
			<div class="main-menu__group">
				<a href="/lk-profile.php" class="main-menu__link">Личные Данные</a>
				<a href="/lk-orders.php" class="main-menu__link active">Мои Заказы</a>
				<a href="/lk-gifts.php" class="main-menu__link">Мои Подарки</a>
			</div>
			<div class="main-menu__group">
				<a href="/categories.php" class="main-menu__link">Заказать Доставку</a>
				<a href="/rests.php" class="main-menu__link">Лучшие Заведения Города</a>
				<a href="#" class="main-menu__link">Отменить Заказ</a>
				<a href="#" class="main-menu__link">Впечатления</a>
			</div>
			<div class="main-menu__actions">
				<div class="link-icon">Выйти <i class="i-logout"></i></div>
				<div class="link-icon">Войти <i class="i-login"></i></div>
			</div>
		</div>
	</div>

</div>



<main class="site-main">

