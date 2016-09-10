<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Главная</title>
</head>
<body>
	<?php require_once('inc/header.php'); ?>
	<div class="mainBanner"></div>
	<section class="containerFixed">
		<h1 class="buyRakiHeader header">Купить раков в Самаре</h1>
	<div class="buyRakiContainer">
		<div class="buyRakiContainerBlock">
			<div class="buyRakiContainerBlockInfo">
				<div class="buyRakiContainerBlockImage">
					<img src="images/frontend/jivye_raki.jpg" alt="">
				</div>
				<div class="buyRakiContainerBlockHeader">
					Живые раки
				</div>
				<div class="buyRakiContainerBlockDescription">
					Выловлены исключительно в чистых водоемах
				</div>
			</div>
			<div class="buttonWrapper">
				<a href="katalog.php#jivye-raki" class="button">
					Подробнее
				</a>
			</div>
		</div>
		<div class="buyRakiContainerBlock">
			<div class="buyRakiContainerBlockInfo">
				<div class="buyRakiContainerBlockImage">
					<img src="images/frontend/varenye_raki.jpg" alt="">
				</div>
				<div class="buyRakiContainerBlockHeader">Вареные раки</div>
				<div class="buyRakiContainerBlockDescription">Наивкуснейшие вареные раки от нашего повара</div>
			</div>
			<div class="buttonWrapper">
				<a href="katalog.php#varenye-raki" class="button">
					Подробнее
				</a>
			</div>
		</div>
		<div class="buyRakiContainerBlock">
			<div class="buyRakiContainerBlockInfo">
				<div class="buyRakiContainerBlockImage">
					<img src="images/frontend/specii.jpg" alt="">
				</div>
				<div class="buyRakiContainerBlockHeader">Специи</div>
				<div class="buyRakiContainerBlockDescription">Ароматные специи для раков</div>
			</div>
			<div class="buttonWrapper">
				<a href="katalog.php#specii" class="button">
					Подробнее
				</a>
			</div>
		</div>
	</div>	
	</section>
	<a href="akcii.php"><div class="actionBanner"></div></a>
	<section class="containerFixed">
		<h1 class="dostavkaHeader header">
			Условия доставки
		</h1>
		<div class="dostavkaWrapper">
			<div class="dostavkaText">
				Любители пива всё чаще хотят видеть на своем столе вкуснейших вареных раков. Раки сочетают в себе превосходный и неповторимый вкус, а так же несут большую пользу для организма человека.Калорийность мяса варёного рака не высока, на сто граммов мяса приходиться не более 1% жиров.Любители пива всё чаще хотят видеть на своем столе вкуснейших вареных раков. Раки сочетают в себе превосходный и неповторимый вкус, а так же несут большую пользу для организма человека.
			</div>
		</div>
	</section>
	<section id="zakazatRaki" class="containerFluid zayavkaWrapper">
		<div class="zayavkaContainerWrap containerFixed">
			<div class="zayavkaContainer zayavkaContainerForm">
				<h1 class="zayavkaHeader">Заполните заявку</h1>
				<p>Заполните и Вам перезвонят в течении 15 минут !</p>
				<form action="" id="zayavka" class="zayavkaForm">
					<input type="text" id="itemScheduleFormName" name="name" placeholder="Ваше имя">
					<input type="text" id="itemScheduleFormPhone" name="phone" placeholder="Ваш телефон">
				</form>
				<div class="buttonWrapper">
					<a class="button submitZayavka">
						Заказать
					</a>
				</div>
			</div>
			<div class="zayavkaContainer">
				<h1 class="zayavkaHeader">Наши контакты</h1>
				<p class="zayavkaPhone">+7 (966) 33 740 88 / +7 (966) 33 740 88</p>
				<p class="zayavkaAdress">г. Самара, ул. Аврора, д.72</p>
				<p class="zayavkaMail">info@rakmoskva.ru</p>
			</div>
		</div>	
	</section>
	<section class="containerFixed">
		<h1 class="dostavkaHeader header">
			Лучшие рецепты
		</h1>
		<div class="bestReceptsMain">
		  <div><a href="luchshie-recepty.php" class="bestReceptsLink"><img class="bestReceptsImg" src="images/frontend/recept1.jpg" alt=""><span class="bestReceptsDesc">раки<br>в<br>пряном соусе</span></a></div>
		  <div><a href="luchshie-recepty.php" class="bestReceptsLink"><img class="bestReceptsImg" src="images/frontend/recept2.jpg" alt=""><span class="bestReceptsDesc">раки<br>в<br>пряном соусе</span></a></div>
		  <div><a href="luchshie-recepty.php" class="bestReceptsLink"><img class="bestReceptsImg" src="images/frontend/recept3.jpg" alt=""><span class="bestReceptsDesc">раки<br>в<br>пряном соусе</span></a></div>
		  <div><a href="luchshie-recepty.php" class="bestReceptsLink"><img class="bestReceptsImg" src="images/frontend/recept1.jpg" alt=""><span class="bestReceptsDesc">раки<br>в<br>пряном соусе</span></a></div>
		  <div><a href="luchshie-recepty.php" class="bestReceptsLink"><img class="bestReceptsImg" src="images/frontend/recept3.jpg" alt=""><span class="bestReceptsDesc">раки<br>в<br>пряном соусе</span></a></div>
		  <div><a href="luchshie-recepty.php" class="bestReceptsLink"><img class="bestReceptsImg" src="images/frontend/recept2.jpg" alt=""><span class="bestReceptsDesc">раки<br>в<br>пряном соусе</span></a></div>
		</div>
	</section>
	<section class="containerFixed">
		<h1 class="dostavkaHeader header">
			Полезные свойства раков
		</h1>
		<div class="usefulWrapper">
			<img src="images/frontend/useful.jpg" alt="" class="usefulImg">
			<p class="usefulPar">Мясо варёного рака содержит огромное количество витаминов: В1, В2, В6, В12, С, D, Е и К, необходимых человеку. В нем присутствует много органических кислот, сера, фосфор, железо, кобальт, йод, а также магний, кальций и калий. Все это ведет к улучшению работы желудка, печени, почек, поджелудочной железы, и сердца с сосудами. Вареные раки очень хорошо выводят из организма тяжелые металлы и радионуклиды. Так же они оказывают на организм укрепляющее действие и являются профилактикой болезней щитовидной железы. Поэтому мясо варёных раков являются полезным для употребления, как взрослым, так и детям. Вы можете прямо сейчас купить раков в Москве со скидкой 5%, позвонив нам по номеру 7(966)33-740-88 или оставить онлайн заявку на нашем сайте и мы доставим Вам раков на дом в ближайшее время. С уважением,rakmoskva.ru</p>
		</div>
	</section>	
	<?php require_once('inc/footer.php'); ?>
</body>
</html>