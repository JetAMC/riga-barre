<?php

error_reporting(0);

$utm_source = $_GET['utm_source'];
$utm_medium = $_GET['utm_medium'];
$utm_term = $_GET['utm_term'];
$utm_campaign = $_GET['utm_campaign'];

// Если utm_source не пустой, ставим Куки
if (!empty($utm_source)) {

setcookie("utm_source",$utm_source,time()+3600*24*30*12, "/", ".rigabarre.lv");
setcookie("utm_medium",$utm_medium,time()+3600*24*30*12, "/", ".rigabarre.lv");
setcookie("utm_term",$utm_term,time()+3600*24*30*12, "/", ".rigabarre.lv");
setcookie("utm_campaign",$utm_campaign,time()+3600*24*30*12, "/", ".rigabarre.lv");

}

else {
$utm_source = $_COOKIE['utm_source'];
$utm_medium = $_COOKIE['utm_medium'];
$utm_term = $_COOKIE['utm_term'];
$utm_campaign = $_COOKIE['utm_campaign'];
}
?>


