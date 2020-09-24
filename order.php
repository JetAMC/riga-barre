<?php

error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

session_start();


// message
$name = isset($_POST["Editbox1"]) ? $_POST["Editbox1"] : "";
$name = iconv ('utf-8', 'windows-1251', $name);
$kod = isset($_POST["Editbox2"]) ? $_POST["Editbox2"] : "";
$email = isset($_POST["Editbox3"]) ? $_POST["Editbox3"] : "";
$source = isset($_POST["Editbox4"]) ? $_POST["Editbox4"] : "";
$medium = isset($_POST["Editbox5"]) ? $_POST["Editbox5"] : "";
$campaign = isset($_POST["Editbox6"]) ? $_POST["Editbox6"] : "";
$produkt = isset($_POST["Editbox7"]) ? $_POST["Editbox7"] : "";

        

// Sending
mail('info@rigabarre.lv', 'Заявка с Landing Page полировка LV', $name . "\n" . $kod . "\n" . $email . "\n" . $source . "\n" . $medium . "\n" . $campaign . "\n" . $produkt);
?>
<head>
	<title>Lukturu pulēšana | SIA Baltic Detailing</title>
    <meta charset=utf-8>
	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media-query.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:700&display=swap" rel="stylesheet"> 
</head>
<body>
<div class="header">
    <div class="header__container container">
        <div class="header__logo">
            <img alt="" src="images/logo.png">
        </div>
        <div class="header__contact">
            <div class="header__phone-number">
                <img alt="" src="images/icons/contact.png">
                    <a href="tel:+37125925977">+371 259-259-77</a>
            </div>
            <div class="header__address">
                <img alt="" src="images/icons/location.png">
                    <span>Rīga, Līzuma iela 1 k-12 (blakus T/C Alfa)</span>
            </div>
            <div class="header__languages">
                <a class="active" href="order.php"><span>LV</span></a>
                <a href="order_ru.php"><span>RU</span></a>
            </div>
        </div>
    </div>
</div>
<div class="thank-you">
	<div class="thank-you__container container">
		<div class="thank-you__text-area">
			<div class="thank-you__final-words">
				<h1>Paldies par pieteikumu!</h1>
			</div>
			<div class="thank-you__small-text">
				<p>Mēs ar Jums sazināsimies tuvākajā laikā.</p>
			</div>
		</div>
	</div>
</div>
<div class="footer">
    <div class="footer__container container">
        <div class="footer__left-side">
            <p>SIA Baltic Detailing &copy; 2014 - 2020</p>
        </div>
        <div class="footer__right-side">
            <p>Rīga, Līzuma iela 1 k-12 | www.bdauto.lv</p>
        </div>
    </div>
</div>
</body>
</html>