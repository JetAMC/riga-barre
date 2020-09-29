<?php
header('Content-Type: text/html; charset=utf-8');
include('1ncludes/functions.php');

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
mail('info@rigabarre.lv', 'Заявка с Landing Page LV', $name . "\n" . $kod . "\n" . $email . "\n" . $source . "\n" . $medium . "\n" . $campaign . "\n" . $produkt);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riga Barre - Barre un Stretching studija</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/simple-lightbox.css">
    <link rel="stylesheet" href="css/media-query.css">
    <script src="https://kit.fontawesome.com/b60c7bcec8.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(67741252, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/67741252" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
</head>
<body>
<div class="header">
        <div class="header__container container">
            <div class="header__materials">
                <div class="header__logo">
                    <img alt="" src="images/logo.jpg">
                </div>
                <div class="header__mobile-menu">
                    <div id="header__menu" class="overlay">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <div class="overlay-content">
                            <a href="mailto:info@rigabarre.lv">info@rigabarre.lv</a>
                            <a class="active language" href="index.php">LV</a>
                            <a class="language" href="ru.php">RU</a>
                        </div>
                    </div>
                    <span onclick="openNav()"><i class="fas fa-bars"></i></span>
                </div>
                <div class="header__right-side">
                    <div class="header__contacts">
                        <p><i class="fas fa-at"></i><a href="mailto:info@rigabarre.lv">info@rigabarre.lv</a></p>
                    </div>
                    <div class="header__language">
                        <a class="active" href="index.php">LV</a>
                        <a href="ru.php">RU</a>
                    </div>
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
            <div class="footer__company">
                <div class="footer__socials-title">
                    <span>Социальные сети</span>
                </div>
                <div class="footer__line"></div>
                <div class="footer__ig">
                    <p class="footer__icon"><i class="fab fa-instagram"></i></p>
                    <a href="https://www.instagram.com/riga_barre/" target="_blank" class="footer__text">Instagram</a>
                </div>
                <div class="footer__fb">
                    <p class="footer__icon"><i class="fab fa-facebook-f"></i></p>
                    <a href="https://www.facebook.com/RigaBarre-111457423911989/" target="_blank" class="footer__text">Facebook</a>
                </div>
            </div>
            <div class="footer__contact">
                <div class="footer__contact-title">
                    <span>Контакты</span>
                </div>
                <div class="footer__line"></div>
                <div class="footer__email">
                    <p class="footer__icon"><i class="fas fa-at"></i></p>
                    <a href="mailto:info@rigabarre.lv" class="footer__text">info@rigabarre.lv</a>
                </div>
                <div class="footer__address">
                    <p class="footer__icon"><i class="fas fa-map-pin"></i></p>
                    <p class="footer__text">Ieriķu iela 15, Turaidas iela 2A</p>
                </div>
            </div>
            <div class="footer__ask">
                <div class="footer__ask-title">
                    <span>У вас есть вопрос?</span>
                </div>
                <div class="footer__line"></div>
                <div class="footer__button">
                    <button class="primary-button question-form">Задать вопрос</button>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="copyright__container container">
            <div class="copyright__left-side">
                <p>Riga Barre &copy; 2020</p>
            </div>
            <div class="copyright__center-side">
                <a href="files/privatuma-politika.pdf" target="_blank">Политика конфиденциальности</a>
            </div>
            <div class="copyright__right-side">
                <p>Дизайн и разработка - www.skyjet.lv</p>
            </div>
        </div>
    </div>
    <!-- question pop up -->
<div class="bg" style="display: none;">
</div>
<div class="pop-up-question" style="display: none;">
    <span class="close">&times;</span>
    <form action="order.php" method="POST">
        <span class="form-title">Заполните форму</span>
        <P>Наш консультант свяжется с вами в ближайшее время</P>
        <input type="text" id="Editbox1" name="Editbox1" placeholder="Ваше Имя" required>
        <input type="text" id="Editbox2" name="Editbox2" placeholder="Номер телефона" required>
        <textarea id="Editbox3" name="Editbox3" placeholder="Напишите ваш вопрос" required></textarea>

        <input type="hidden" id="Editbox4" name ="Editbox4" value ="<?php echo $utm_source; ?>">
        <input type="hidden" id="Editbox5" name ="Editbox5" value ="<?php echo $utm_medium; ?>">
        <input type="hidden" id="Editbox6" name ="Editbox6" value ="<?php echo $utm_campaign; ?>">
        <input type="hidden" id="Editbox7" name ="Editbox7" value ="Question">
        <button class="primary-button" type="submit" name="submit">Отправить</button>

        <p class="pop-up__confidential">Гарантируем безопасность данных</p>
    </form>
</div>
<script>
    /************** Back to top button **************/

    $(window).scroll(function(){
        if ($(this).scrollTop() > 1) {
            $('#buttonTop').fadeIn();
            $(".header").css({"position": "fixed", "opacity": "0.9"});
            $(".header__logo img").css({"width": "150px"});
        } else {
            $('#buttonTop').fadeOut();
            $(".header").css({"position": "relative", "opacity": "1"});
            $(".header__logo img").css({"width": "200px"});
        }
    });


    /************** Pop up **************/
    $(".default-form").click( function() {
        $(".bg").fadeIn(500);
        $(".pop-up").fadeIn(500);
    });
    $(".question-form").click( function() {
        $(".bg").fadeIn(500);
        $(".pop-up-question").fadeIn(500);
    });
    $(".bg, .close").click( function() {
        $(".bg").fadeOut(400);
        $(".pop-up").fadeOut(400);
        $(".pop-up-question").fadeOut(400);
    });

    
    /************** Header mobile menu **************/
    function openNav() {
    document.getElementById("header__menu").style.width = "100%";
    }
    
    function closeNav() {
    document.getElementById("header__menu").style.width = "0%";
    } 
</script>
</body>
</html>