<?php
header('Content-Type: text/html; charset=utf-8');
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css"/>
<meta charset="utf-8">
<title>Restaurant | Contacts</title>
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="logo.png" type="image/x-icon">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sarabun|Titillium+Web" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Ultra&display=swap" rel="stylesheet">
</head>
<body style='overflow-x:hidden;'>
  <div class="preloader" id="preloader">
    <div class="overlay-loader">
    <div class="loader">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
    </div>
  <div id="top-box"></div>
<div id="header">
  <a href="index.php"><img src="icon.png" alt="Добро пожаловать в Coffeboom" id="iconcoffee"></a>
<ol class="rounded">
  <li><a href="onas.php" class = "menu-link">О нас</a></li>
    <li><a href="coffee.php" class = "menu-link">Наши кофейни</a></li>
      <li><a href="Menu.php" class = "menu-link">Меню</a></li>
        <li><a href="zakaz.php" class = "menu-link">Заказать торт</a></li>
          <li><a href="dostavka.php" class = "menu-link">Доставка</a></li>
              <li><a href="otzyv.php" class = "menu-link">Оставить отзыв</a></li>
                  <li><a href="contacts.php" class = "menu-link" style="background:black;color:white;">Контакты </a></li>
</ol>
<img src="visa.png" alt="Карта" class="cards" id="visa">
<img src="mc.png" alt="Карта" class="cards" id="mc">
<img src="maestro.png" alt="Карта" class="cards" id="maes">
</div>
<h1 id="contact">Контакты</h1>
<div class="cfboom" id="poscont">
			<p class="title1">офис:</p>
<p>info_coffeeboom2010@mail.ru</p>
<p class="title1">ДЕПАРТАМЕНТ ЗАКУПОК:</p>
<p>zakup@coffeeboom.kz</p>
<p class="title1">отдел кадров:</p>
<p>hr@coffeeboom.kz</p>
<p class="title1">Отдел доставки:</p>
<p>delivery@coffeeboom.kz</p>
<p class="title1">Отдел маркетинга:</p>
<p>marketing@coffeeboom.kz</p>
<p class="title1">франшиза:</p>
<p>franshiza_coffeeboom2010@mail.ru</p>
<p class="title1">бухгалтерия:</p>
<p>accounting@coffeeboom.kz</p>
		</div>
    <a href="#top-box" class="topBox smoothscroll">
        <i id = "arrow" class="fas fa-arrow-alt-circle-up"></i>
    </a>
    <div style="position:relative; background:white; width:30px;height:30px;top:1000px;left:400px;">
    </div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
