<?php
header('Content-Type: text/html; charset=utf-8');
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css"/>
<meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
<title>Restaurant | Main</title>
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
              <li><a href="regis.php" class = "menu-link">Регситрация</a></li>
                  <li><a href="contacts.php" class = "menu-link">Контакты </a></li>
</ol>
<img src="visa.png" alt="Карта" class="cards" id="visa">
<img src="mc.png" alt="Карта" class="cards" id="mc">
<img src="maestro.png" alt="Карта" class="cards" id="maes">
</div>
<div id="photodiv">
  <a href = "#"><img src="img1.jpg" alt="Карта" class="photos" ></a>
  <a href = "#"><img src="img2.jpg" alt="Карта" class="photos" ></a>
  <a href = "Menu.php"><img src="img3.jpg" alt="Карта" class="photos" ></a>
  <a href = "onas.php"><img src="img4.jpg" alt="Карта" class="photos" ></a>
  <a href = "#"><img src="img5.jpg" alt="Карта" class="photos" ></a>
    <div><p style="font-size: 30px; letter-spacing: 2px; font-weight: 400;" id="cofeinya"><a href="" class="submenu">КОФЕЙНИ</a></p></div>
      <div class="submenu1"><p style="font-size: 30px; letter-spacing: 2px; font-weight: 400;" id="dostavka"><a href="dostavka.php" class="submenu">ДОСТАВКА</a></p></div>
        <div class="submenu1"><p style="font-size: 30px; letter-spacing: 2px; font-weight: 400;" id="menu"><a href="Menu.php" class="submenu">МЕНЮ</a></p></div>
          <div class="submenu1"><p style="font-size: 30px; letter-spacing: 2px; font-weight: 400;" id="onas"><a href="onas.php" class="submenu">О НАС</a></p></div>
            <div class="submenu1"><p style="font-size: 30px; letter-spacing: 2px; font-weight: 400;" id="franshiza"><a href="" class="submenu">ФРАНШИЗА</a></p></div>
</div>
<h1 id="zagalovok">Новости</h1>

<img src="News.PNG" id="newsspng">
<h1 id="zagalovokcofein">Кофейни</h1>
<div class="premium-title">COFFEE BOOM PREMIUM</div>
<div class="since-title">COFFEE BOOM SINCE 2010</div>
<div class="express-title">COFFEE BOOM EXPRESS</div>
<div class="adresses">
<img src="adresses1.PNG" id="address1">
<img src="adresses2.PNG" id="address2">
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
