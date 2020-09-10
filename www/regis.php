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
<style>



.login-page {
  position: absolute;
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
  right:920px;
  bottom:100px;
  top:300px;

}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form .txt {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form .button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #DC143C;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form .button:hover,.form .button:active,.form .button:focus {
  background: #b01030;

}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #DC143C;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}


</style>
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

<a href="#top-box" class="topBox smoothscroll">
    <i id = "arrow" class="fas fa-arrow-alt-circle-up"></i>
</a>
<center>
<div class="login-page">
  <div class="form">
    <form class="login-form" action="vhod.php" method="post">
      <input type="text"  class="txt" placeholder="имя" name = "name"required/>
      <input type="password"  class="txt" placeholder="пароль" name = "password" required/>
      <input type="submit" class="button" value="войти"></input>
      <p class="message">Нет аккаунта?<a href="signup.php">Зарегистрироваться</a></p>
    </form>
  </div>
</div>
</center>


<div style="position:relative; background:white; width:30px;height:30px;top:1000px;left:400px;">
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
