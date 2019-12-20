<?php include('header.php'); ?>


<section class="s-rest-order">
	<div class="container">

		<div class="rest-order-header">
			<img src="/img/rest/slider.jpg" alt="1" class="rest-order-header__photo">
			<div class="rest-order-header__info">
				<a href="/rest.php"><div class="rest__sup">Ресторан</div></a>
				<a href="/rest.php"><div class="h2 rest__title">Burdj al Arab</div></a>
				<div class="stars">
					<i class="i-star i-star--full"></i>
					<i class="i-star i-star--full"></i>
					<i class="i-star i-star--full"></i>
					<i class="i-star i-star--full"></i>
					<i class="i-star"></i>
				</div>
			</div>
		</div>

		<form action="#" class="rest-order-form">
			<label class="input-group">
				<span class="input-group__label">Имя</span>
				<input type="text" placeholder="Введите Ваше имя" class="input-text">
			</label>
			<label class="input-group">
				<span class="input-group__label">Телефон</span>
				<input type="tel" placeholder="+0 (00) 000 00 00" class="input-text">
			</label>
			<label class="input-group">
				<span class="input-group__label">Дата бронирования</span>
				<input type="date" placeholder="20.12" class="input-text" value="2019-12-20">
			</label>
			<label class="input-group">
				<span class="input-group__label">Время бронирования</span>
				<input type="time" placeholder="13.00" class="input-text" value="13:42">
			</label>
			<label class="input-group">
				<span class="input-group__label">Количество Персон</span>
				<input type="number" placeholder="2" class="input-text">
			</label>
			<div class="input-group">
				<label class="style-checkbox">
					<input type="checkbox" value="yes" name="has-transfer">
					<span>Трансфер</span>
				</label>
				<div class="transfer-toggle-block">
					<div class="transfer-note">Для того чтобы узнать стоимость трансфера укажите отель и вы получите смс уведомление</div>
					<label class="input-group">
						<span class="input-group__label">Название Отеля</span>
						<input type="text" placeholder="Введите название отеля" class="input-text">
					</label>
				</div>
			</div>
			<label class="input-group">
				<span class="input-group__label">Комментарий</span>
				<textarea placeholder="Введите комментарий к заказу" class="input-text" rows="3"></textarea>
			</label>
			<div class="form-btnwrap">
				<!--<button type="submit" class="btn">Забронировать</button>-->
				<a href="#" class="btn fancy-modal" data-src="#modal-rest-order-confirm">Забронировать</a>
			</div>

		</form>
	</div>
</section>


<div id="modal-rest-order-confirm" class="modal modal-confirm">
	<img src="/img/rest/order-confirm.svg" alt="1" class="modal-confirm__icon">
	<div class="h2 modal-confirm__title">Спасибо за Заявку!</div>
	<div class="modal-confirm__descr">Ожидайте СМС с подтверждением заказа</div>
	<div class="modal-confirm__btns">
		<a href="/category-food.php" class="btn">Заказать Еду на Дом</a>
		<a href="/benefits.php" class="btn btn--outline">Вернуться на Главную</a>
	</div>
</div>



<?php include('footer.php'); ?>
