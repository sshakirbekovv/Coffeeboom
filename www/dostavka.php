<?php
header('Content-Type: text/html; charset=utf-8');
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css"/>
<meta charset="utf-8">
<title>Restaurant | Delivery</title>
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="logo.png" type="image/x-icon">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sarabun|Titillium+Web" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Ultra&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
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
          <li><a href="dostavka.php" class = "menu-link" style="background:black;color:white;">Доставка</a></li>
              <li><a href="otzyv.php" class = "menu-link">Оставить отзыв</a></li>
                  <li><a href="contacts.php" class = "menu-link">Контакты </a></li>
</ol>
<img src="visa.png" alt="Карта" class="cards" id="visa">
<img src="mc.png" alt="Карта" class="cards" id="mc">
<img src="maestro.png" alt="Карта" class="cards" id="maes">
</div>
<div class="cfboom" id="citysel">
			<div style="text-align: center; font-weight: 600; font-size: 24px;"><center>Выберите ваш город</center></div>
		</div>
    <div >
      <p class="cities"><a href="#" style="text-decoration: none; color:black" >Нур-Султан</a></p>
    </div>
    <div >
      <p class="cities" id="almaty"><a href="#" style="text-decoration: none; color:black" >Алматы</a></p>
    </div>
    <div >
      <p class="cities" id="pavlodar"><a href="#" style="text-decoration: none; color:black" >Павлодар</a></p>
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
