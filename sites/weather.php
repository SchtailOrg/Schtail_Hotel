<?php
$xml = simplexml_load_file("https://kilianp:1234@wetter.ws.siag.it/Weather_V1.svc/web/getLastProvBulletin?lang=de");
$today = $xml->today->weather;
$todayPic = $xml->today->imageURL;
$tomorrow = $xml->tomorrow->weather;
$tomorrowPic = $xml->tomorrow->imageURL;
$evolution = $xml->evolution;
$evolutionTitle = $xml->evolutionTitle;

echo "<h2>Heute</h2>";
echo "<p>$today</p>";
echo "<img class='singel_img' src='" . $todayPic . "' alt='Wetter Bild heute' />";
echo "<h2>Morgen</h2>";
echo "<p>$tomorrow</p>";
echo "<img class='singel_img' src='" . $tomorrowPic . "' alt='Wetter Bild morgen' />";
echo "<h2>$evolutionTitle</h2>";
echo "<p>$evolution</p>";
?>
