<?php include('header.php'); ?>


<section class="s-lk">
	<div class="container">

		<nav class="lk-nav">
			<a href="/lk-profile.php" class="active">Личные Данные</a>
			<a href="/lk-orders.php">Мои Заказы</a>
			<a href="/lk-gifts.php">Мои Подарки</a>
		</nav>

		<form action="#">
			<label class="input-group">
				<span class="input-group__label">Имя</span>
				<input type="text" placeholder="Имя" value="Игорь" class="input-text">
			</label>
			<label class="input-group">
				<span class="input-group__label">Телефон</span>
				<input type="tel" placeholder="Телефон" value="8 800 2000 600" class="input-text">
			</label>
			<label class="input-group">
				<span class="input-group__label">Email</span>
				<input type="email" placeholder="Email" value="igor_fox@gmail.com" class="input-text">
			</label>
			<div class="form-btnwrap">
				<button type="submit" class="btn">Сохранить</button>
			</div>

		</form>

	</div>
</section>



<?php include('footer.php'); ?>
