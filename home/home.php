<?php

require_once("../core/APIKey.php");

$summoner=$_GET['summoner'];

$summoner=str_replace(" ", "", $summoner);

$contents=@file_get_contents("https://na.api.pvp.net/api/lol/na/v1.4/summoner/by-name/" .$summoner."?api_key=" .apiKey);

//$decodedContents=json_decode($contents);

print_r($contents);

?>