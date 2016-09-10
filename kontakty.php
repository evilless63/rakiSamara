<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Контакты</title>
</head>
<body>
	<?php require_once('inc/header.php'); ?>
	<section class="containerFixed">
		<div class="breadcrumbs"><a href="/">Главная</a>>Контакты</div>
		<h1 class="dostavkaHeader header">
			Контакты
		</h1>
		
		<div class="contactsWrapper">
			<div class="contactsBlock">
				<img src="images/frontend/phoneContacts.png" alt="">
				<p class="contactsPar">+ 7 917 067 35 35</p>
				<p class="contactsPar">+ 7 917 067 35 35</p>
			</div>
			<div class="contactsBlock">
				<img src="images/frontend/adresContacts.png" alt="">
				<p class="contactsPar">192171, Самара, ул. АВрора</p>
				<p class="contactsPar">192171, Самара, ул. АВрора</p>
			</div>
			<div class="contactsBlock">
				<img src="images/frontend/timeContacts.png" alt="">
				<p class="contactsPar">ПН-ПТ. 9:00-00.00</p>
			</div>
		</div>
		<div class="mapContacts">
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=LWfETLGmq-2-5Kc24683T3rXjU9okXRc&amp;width=920&amp;height=490&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
		</div>
	</section>	
	<?php require_once('inc/footer.php'); ?>
</body>
</html>