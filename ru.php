<?php 
include('1ncludes/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riga Barre - Barre и Stretching студия</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/simple-lightbox.css">
    <link rel="stylesheet" href="css/media-query.css">
    <script src="https://kit.fontawesome.com/b60c7bcec8.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="header">
        <div class="header__container container">
            <div class="header__materials">
                <div class="header__logo">
                    <img alt="" src="images/logo.jpg">
                </div>
                <div class="header__menu">
                    <div class="header__menu-item">
                        <a href="#trainings">Услуги</a>
                    </div>
                    <div class="header__menu-item">
                        <a href="#price">Цены</a>
                    </div>
                    <div class="header__menu-item">
                        <a href="#main_benefits">Преимущества</a>
                    </div>
                    <div class="header__menu-item">
                        <a href="#teachers">Педагоги</a>
                    </div>
                    <div class="header__menu-item">
                        <a href="#main_gal">Галерея</a>
                    </div>
                </div>
                <div class="header__mobile-menu">
                    <div id="header__menu" class="overlay">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <div class="overlay-content">
                            <a href="tel:+37122222222">+37122222222</a>
                            <a href="index.php">LV</a>
                            <a class="active" href="ru.php">RU</a>
                        </div>
                    </div>
                    <span onclick="openNav()"><i class="fas fa-bars"></i></span>
                </div>
                <div class="header__right-side">
                    <div class="header__contacts">
                        <p><i class="fas fa-phone-square-alt"></i><a href="tel:+37122222222">22222222</a></p>
                    </div>
                    <div class="header__language">
                        <a href="index.php">LV</a>
                        <a class="active" href="ru.php">RU</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-screen">
        <div class="main-screen__container container">
            <div class="main-screen__title">
                <h1>Занятия Barre и Stretching с профессиональными<br> педагогами в Риге</h1>
                <h2>Усовершенствуйте красоту тела, развивайте гибкость и пластичность!</h2>
            </div>
            <div class="main-screen__button">
                <button class="primary-button default-form">Записаться на занятие</button>
            </div>
        </div>
    </div>
    <div class="services" id="trainings">
        <div class="services__container container">
            <div class="services__title">
                <span>Что такое Barre и Stretching</span>
            </div>
            <div class="services__main-card">
                <div class="services__barre-card card">
                    <div class="services__barre-square"></div>
                    <div class="services__barre-image">
                    </div>
                    <div class="services__barre-text">
                        <div class="services__barre-title">
                            <span class="title">Barre</span>
                            <div class="services__line"></div>
                            <p>Комбинация элементов из йоги, пилатеса, фитнеса, растяжки и балетных упражнений. Barre сочетает разные амплитуды движений, а также длительное удержание определенных поз, что всесторонне развивает ваше тело.</p>
                        </div>
                    </div>
                </div>
                <div class="services__stretching-card card">
                    <div class="services__stretching-square"></div>
                    <div class="services__stretching-image">
                    </div>
                    <div class="services__stretching-text">
                        <div class="services__stretching-title">
                            <span class="title">Stretching</span>
                            <div class="services__line"></div>
                            <!-- <p>Предает красивую и здоровую осанку, легкость во всем теле, комфортный тонус мышц, а также, грациозность и пластичность.</p> -->
                            <p>Сочетание упражнений для улучшения растяжки и проработки зажимов в теле. Упражнения поперечного и продольного шпагата, растяжка мышц рук, спины и шеи. Улучшение пластичности суставов и растяжка глубоких мышц.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="schedule" id="price">
        <div class="schedule__container container">
            <div class="schedule__offer">
                <div class="schedule__title">
                    <span>Стоимость и расписание занятий</span>
                </div>
            </div>
            <div class="schedule__pricelist">
                <div class="schedule__left-side">
                    <div class="schedule__single" id="single">
                        <div class="schedule__small-title">
                            <span>1 занятие - Barre / Stretching</span>
                        </div>
                        <div class="schedule__small-text">
                            <p class="schedule__price">7 <i class="fas fa-euro-sign"></i> / 10 <i class="fas fa-euro-sign"></i></p>
                        </div>
                    </div>
                    <div class="schedule__four" id="four">
                        <div class="schedule__small-title">
                            <span>4 занятия</span>
                        </div>
                        <div class="schedule__small-text">
                            <p class="schedule__price">30 <i class="fas fa-euro-sign"></i></p>
                        </div>
                    </div>
                    <div class="schedule__eight" id="eight">
                        <div class="schedule__small-title">
                            <span>8 занятий</span>
                        </div>
                        <div class="schedule__small-text">
                            <p class="schedule__price">50 <i class="fas fa-euro-sign"></i></p>
                        </div>
                    </div>
                    <div class="schedule__twelve" id="twelve">
                        <div class="schedule__small-title">
                            <span>12 занятий</span>
                        </div>
                        <div class="schedule__small-text">
                            <p class="schedule__price">70 <i class="fas fa-euro-sign"></i></p>
                        </div>
                    </div>
                    <div class="schedule__private" id="private">
                        <div class="schedule__small-title">
                            <span>Индивидуальные - 60 мин. / 90 мин.</span>
                        </div>
                        <div class="schedule__small-text">
                            <p class="schedule__price">25 <i class="fas fa-euro-sign"></i> / 30 <i class="fas fa-euro-sign"></i></p>
                        </div>
                    </div>
                </div>
                <div class="schedule__right-side">
                    <div class="schedule__form-area" id="single-form">
                        <form action="order_ru.php" method="POST">
                            <span class="form-title">Заполните форму</span>
                            <P>Наш консультант свяжется с вами в ближайшее время</P>
                            <input type="text" name="Editbox1" id="Editbox1" placeholder="Ваше Имя" required>
                            <label class="custom-select">
                                <select id="main" name="Editbox2" required>
                                    <option value="" selected>Выберете занятие</option>
                                    <option value="Single training">1 занятие: Barre 7 €, Stretching 10 €</option>
                                    <option value="Four trainings">4 занятия: 30 €</option>
                                    <option value="Eight trainings">8 занятий: 50 €</option>
                                    <option value="Twelve trainings">12 занятий: 70 €</option>
                                    <option value="Private training">Индивидуальное: 60 мин. 25 €, 90 мин. 30 €</option>
                                </select>
                                <i class="fas fa-angle-down"></i>
                            </label>
                            <input type="text" name="Editbox3" id="Editbox3" placeholder="Номер телефона" required>

                            <input type="hidden" id="Editbox4" name ="Editbox4" value ="<?php echo $utm_source; ?>">
                            <input type="hidden" id="Editbox5" name ="Editbox5" value ="<?php echo $utm_medium; ?>">
                            <input type="hidden" id="Editbox6" name ="Editbox6" value ="<?php echo $utm_campaign; ?>">
                            <input type="hidden" id="Editbox7" name ="Editbox7" value ="New order">

                            <button type="submit" name="submit" class="primary-button">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="schedule__week">
                <div class="schedule__monday">
                    <span class="schedule__week-title">Понедельник</span>
                    <i class="fas fa-calendar-alt"></i>
                    <p class="schedule__week-text">Barre <br>19:00 - 20:00</p>
                    <i class="fas fa-map-pin"></i>
                    <p class="schedule__week-address">Turaidas iela 2A</p>
                </div>
                <div class="schedule__tuesday">
                    <span class="schedule__week-title">Вторник</span>
                    <i class="fas fa-calendar-alt"></i>
                    <p class="schedule__week-text">Barre 12:00 - 13:00</p>
                    <p class="schedule__week-text">Stretching 19:30 - 20:30</p>
                    <i class="fas fa-map-pin"></i>
                    <p class="schedule__week-address">Ieriķu iela 15</p>
                </div>
                <div class="schedule__wednesday">
                    <span class="schedule__week-title">Среда</span>
                    <i class="fas fa-calendar-alt"></i>
                    <p class="schedule__week-text">Barre <br>19:00 - 20:00</p>
                    <i class="fas fa-map-pin"></i>
                    <p class="schedule__week-address">Turaidas iela 2A</p>
                </div>
                <div class="schedule__thursday">
                    <span class="schedule__week-title">Четверг</span>
                    <i class="fas fa-calendar-alt"></i>
                    <p class="schedule__week-text">Stretching <br>19:30 - 20:30</p>
                    <i class="fas fa-map-pin"></i>
                    <p class="schedule__week-address">Ieriķu iela 15</p>
                </div>
                <div class="schedule__friday">
                    <span class="schedule__week-title">Пятница</span>
                    <i class="fas fa-calendar-alt"></i>
                    <p class="schedule__week-text">Barre <br>12:00 - 13:00</p>
                    <i class="fas fa-map-pin"></i>
                    <p class="schedule__week-address">Ieriķu iela 15</p>
                </div>
            </div>
        </div>
    </div>
    <div class="cta">
        <div class="cta__container container">
            <div class="cta__figure">
            </div>
            <div class="cta__offer">
                <div class="cta__title">
                    <p>АКЦИЯ! Запишись на занятие и получи 50% скидку</p>
                </div>
                <div class="cta__description">
                    <p>Только в сентябре, запишись на занятие и приходи вместе с подругой чтобы получить скидку 50% на любое занятие!</p>
                </div>
                <div class="cta__button">
                    <button class="primary-button default-form">Записаться на занятие</button>
                </div>
            </div>
        </div>
    </div>
    <div class="benefits" id="main_benefits">
        <div class="benefits__container container">
            <div class="benefits__title">
                <span>Почему каждой девушке стоит придти к нам на занятие</span>
            </div>
            <div class="benefits__all-items">
                <div class="benefits__first-area">
                    <div class="benefits__first">
                    </div>
                    <div class="benefits__text-area">
                        <div class="benefits__text">
                            <span>Riga Barre - это волшебное место</span>
                            <i class="fas fa-star"></i>
                            <p>В нашей студии каждая женщина уделяет время себе любимой. Опытные педагоги превращают тренировки в удовольствие и приглашают наслаждаться процессом!</p>
                        </div>
                    </div>
                </div>
                <div class="benefits__second-area">
                    <div class="benefits__second">
                    </div>
                    <div class="benefits__text-area">
                        <div class="benefits__text">
                            <span>Занятия снимают стресс и напряжение</span>
                            <i class="fas fa-heartbeat"></i>
                            <p>Современные тренировки Stretching и Barre убирают мышечные зажимы, омолаживают организм, а также расслабляют нервную систему. Уже в первые дни вы почувствуете результат</p>
                        </div>
                    </div>
                </div>
                <div class="benefits__third-area">
                    <div class="benefits__third">
                    </div>
                    <div class="benefits__text-area">
                        <div class="benefits__text">
                            <span>Обретете новое хобби, почувствуете себя живой</span>
                            <i class="fas fa-dove"></i>
                            <p>Не бойтесь пробовать новый вид занятий, это помогает вам развиваться физически и духовно. Занятия которые приносят удовольствие также наполняют вашу жизнь радостью, вы почувствуете приток энергии и будете в восторге</p>
                        </div>
                    </div>
                </div>
                <div class="benefits__fourth-area">
                    <div class="benefits__fourth">
                    </div>
                    <div class="benefits__text-area">
                        <div class="benefits__text">
                            <span>Простой способ обрести чудесную фигуру</span>
                            <i class="fab fa-envira"></i>
                            <p>Наши педагоги создают тренировки где для обретения прекрасного тела вовсе не нужно таскать железо. У вас есть возможность создать чудесную форму выполняя эстетически красивые, женственные упражнения. Быть женщиной - главная цель для нас!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="our-team" id="teachers">
        <div class="our-team__container container">
            <div class="our-team__title">
                <span>Наши педагоги - профессионалы своего дела!</span>
            </div>
            <div class="our-team__all">
                <div class="our-team__first">
                    <div class="our-team__square"></div>
                    <div class="our-team__image">
                        <img alt="" src="images/first-member.jpg">   
                    </div>
                    <div class="our-team__info">
                        <div class="our-team__name">
                            <span>Карина Просвирякова</span>
                        </div>
                        <div class="our-team__education">
                            <p><i class="fas fa-graduation-cap"></i><br> Выпускница Латвийской Музыкальной академии им. Язепа Витола по программе «Педагог по танцам».</p>
                        </div>
                        <div class="our-team__line"></div>
                        <div class="our-team__quote">
                            <p>Карина поможет каждой из вас усовершенствовать красоту тела, развить гибкость и пластичность с помощью тренировок Barre.</p>
                        </div>
                    </div>
                </div>
                <div class="our-team__second">
                    <div class="our-team__second-square"></div>
                    <div class="our-team__image">
                        <img alt="" src="images/second-member.jpg">  
                    </div>
                    <div class="our-team__info">
                        <div class="our-team__name">
                            <span>Полина Литвинова</span>
                        </div>
                        <div class="our-team__education">
                            <p><i class="fas fa-graduation-cap"></i><br> Выпускница Киевского Национального университета Культуры и Искусства.</p>
                        </div>
                        <div class="our-team__line"></div>
                        <div class="our-team__quote">
                            <p>Педагог, который заряжает всех вокруг себя и никого не оставит грустным во время и после тренировки. Стремиться, чтобы каждый достиг результатов.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cta">
        <div class="cta__container container">
            <div class="cta__figure">
            </div>
            <div class="cta__offer">
                <div class="cta__title">
                    <p>АКЦИЯ! Запишись на занятие и получи 50% скидку</p>
                </div>
                <div class="cta__description">
                    <p>Только в сентябре, запишись на занятие и приходи вместе с подругой чтобы получить скидку 50% на любое занятие!</p>
                </div>
                <div class="cta__button">
                    <button class="primary-button default-form">Записаться на занятие</button>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery" id="main_gal">
        <div class="gallery__container container">
            <div class="gallery__title">
                <span>Галерея</span>
            </div>
            <div class="gallery__area">
                <div class="gallery__first-line">
                    <a href="images/gallery/image1.jpg"><img alt="" src="images/gallery/thumbs/thumb1.jpg" alt="" /></a><a href="images/gallery/image2.jpg"><img alt="" src="images/gallery/thumbs/thumb2.jpg" alt="" /></a><a href="images/gallery/image3.jpg"><img src="images/gallery/thumbs/thumb3.jpg" alt="" /></a>
                </div>
                <div class="gallery__next-line">
                    <a href="images/gallery/image4.jpg"><img alt="" src="images/gallery/thumbs/thumb4.jpg" alt="" /></a><a href="images/gallery/image5.jpg"><img alt="" src="images/gallery/thumbs/thumb5.jpg" alt="" /></a><a href="images/gallery/image6.jpg"><img src="images/gallery/thumbs/thumb6.jpg" alt="" /></a>
                </div>
                <div class="gallery__next-line">
                    <a href="images/gallery/image7.jpg"><img alt="" src="images/gallery/thumbs/thumb7.jpg" alt="" /></a><a href="images/gallery/image8.jpg"><img alt="" src="images/gallery/thumbs/thumb8.jpg" alt="" /></a><a href="images/gallery/image9.jpg"><img src="images/gallery/thumbs/thumb9.jpg" alt="" /></a>
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
                <div class="footer__phone">
                    <p class="footer__icon"><i class="fas fa-phone-square-alt"></i></p>
                    <a href="tel:+37122222222" class="footer__text">22222222</a>
                </div>
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
    <a href="#" id="buttonTop"><i class="fas fa-arrow-up"></i></a>



<!-- default pop up -->
<div class="bg" style="display: none;">
</div>
<div class="pop-up" style="display: none;">
    <span class="close">&times;</span>
    <form action="order_ru.php" method="POST">
        <span class="form-title">Заполните форму</span>
        <P>Наш консультант свяжется с вами в ближайшее время</P>
        <input type="text" id="Editbox1" name="Editbox1" placeholder="Ваше Имя" required>
        <label class="custom-select">
            <select id="main" name="Editbox2" required>
                <option value="" selected>Выберете занятие</option>
                <option value="Single training">1 занятие: Barre 7 €, Stretching 10 €</option>
                <option value="Four trainings">4 занятия: 30 €</option>
                <option value="Eight trainings">8 занятий: 50 €</option>
                <option value="Twelve trainings">12 занятий: 70 €</option>
                <option value="Private training">Индивидуальное: 60 мин. 25 €, 90 мин. 30 €</option>
            </select>
            <i class="fas fa-angle-down"></i>
        </label>
        <input type="text" id="Editbox3" name="Editbox3" placeholder="Номер телефона" required>

        <input type="hidden" id="Editbox4" name ="Editbox4" value ="<?php echo $utm_source; ?>">
        <input type="hidden" id="Editbox5" name ="Editbox5" value ="<?php echo $utm_medium; ?>">
        <input type="hidden" id="Editbox6" name ="Editbox6" value ="<?php echo $utm_campaign; ?>">
        <input type="hidden" id="Editbox7" name ="Editbox7" value ="New order">
        <button class="primary-button" type="submit" name="submit">Отправить</button>

        <p class="pop-up__confidential">Гарантируем безопасность данных</p>
    </form>
</div>

<!-- question pop up -->
<div class="bg" style="display: none;">
</div>
<div class="pop-up-question" style="display: none;">
    <span class="close">&times;</span>
    <form action="order_ru.php" method="POST">
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


<script src="js/theme.js"></script>
<script src="js/simple-lightbox.js"></script>
<script>
    var bigGallery = new SimpleLightbox('.gallery__area a', {
        showCounter: false,
        captions: false
    });
</script>

</body>
</html>