<?php
$WeatherSource = "https://api.forecast.io/forecast/24a14bcfe258e40e42521327d4632887/" . $_GET["lat"] . "," . $_GET["lng"];
header("Content-Type: application/json");
header("Cache-Control: no-cache");
readfile($WeatherSource);
?>