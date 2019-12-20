<?php include('header.php'); ?>

<div class="rest-slider">
	<div class="rest-slider__item">
		<img src="/img/rest/slider.jpg" alt="1">
	</div>
	<div class="rest-slider__item">
		<img src="/img/rest/slider.jpg" alt="1">
	</div>
	<div class="rest-slider__item">
		<img src="/img/rest/slider.jpg" alt="1">
	</div>
	<div class="rest-slider__item">
		<img src="/img/rest/slider.jpg" alt="1">
	</div>
</div>


<section class="s-rest">
	<div class="container rest">
		<div class="rest__header">
			<div class="rest__header-left">
				<a href="/rest.php"><div class="rest__sup">Ресторан</div></a>
				<a href="/rest.php"><div class="h2 rest__title">Burdj al Arab</div></a>
				<div class="stars">
					<i class="i-star i-star--full"></i>
					<i class="i-star i-star--full"></i>
					<i class="i-star i-star--full"></i>
					<i class="i-star i-star--full"></i>
					<i class="i-star"></i>
				</div>
				<div class="rest__descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</div>
			</div>
			<div class="rest__header-right">
				<nav class="rest__nav">
					<a href="#contacts" class="active">Контакты</a>
					<a href="#menu">Меню</a>
					<a href="#reviews">Отзывы</a>
				</nav>
			</div>
		</div>

		<div class="rest__tabs">
			<div class="rest__tab active" id="contacts">

				<div class="rest-contacts">
					<div id="restmap" class="rest-contacts__map" data-coords="25.098017, 55.156646"></div>
					<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcJmQPRvQYWhFM5L84TOD-OsIxJAd67gU&callback=initRestMap" defer></script>
					<address class="rest-contacts__address">г. Москва, ул. Чехова 15</address>
					<div class="rest-contacts__phone">
						<a href="tel:8 800 2000 600">8 800 2000 600</a>
					</div>
					<div class="rest-contacts__worktime">10:00 - 23:00</div>
					<a href="www.abdurahman.com" class="link rest-contacts__site" target="_blank">www.abdurahman.com</a>
				</div>
			</div>

			<div class="rest__tab" id="menu">
				<img src="/img/rest/menu.jpg" alt="1" class="rest__menu-photo">
				<a href="#" class="rest__menu-link"><i class="i-pdf"></i>Скачать меню</a>
			</div>

			<div class="rest__tab" id="reviews">
				<div class="rest-reviews-list">
					<div class="rest-review">
						<img src="/img/rest/review.jpg" alt="1" class="rest-review__photo">
						<div class="rest-review__content">
							<div class="h4 rest-review__name">София</div>
							<time datetime="2019-09-10" class="rest-review__time">10.09.2019</time>
							<div class="rest-review__text">Отличный сервис и очень вкусные блюда. Рекомендую!</div>
						</div>
					</div>
					<div class="rest-review">
						<img src="/img/rest/review-2.jpg" alt="1" class="rest-review__photo">
						<div class="rest-review__content">
							<div class="h4 rest-review__name">Марк</div>
							<time datetime="2019-09-10" class="rest-review__time">10.09.2019</time>
							<div class="rest-review__text">Отличный сервис и очень вкусные блюда. Рекомендую! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi beatae dicta expedita, facere hic id impedit iste iure laudantium magni maiores non odio officia provident reprehenderit saepe sunt tenetur!</div>
						</div>
					</div>
					<div class="rest-review">
						<img src="/img/rest/review.jpg" alt="1" class="rest-review__photo">
						<div class="rest-review__content">
							<div class="h4 rest-review__name">София</div>
							<time datetime="2019-09-10" class="rest-review__time">10.09.2019</time>
							<div class="rest-review__text">Отличный сервис и очень вкусные блюда. Рекомендую! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi beatae dicta expedita.</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="rest-btnwrap">
			<a href="#" class="btn">Забронировать</a>
		</div>

	</div>
</section>


<?php include('footer.php'); ?>
