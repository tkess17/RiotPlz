<?php

require_once("../core/APIKey.php");

$summoner=$_GET['summoner'];

$summoner=str_replace(" ", "", $summoner);

$contents=@file_get_contents("https://na1.api.riotgames.com/lol/summoner/v3/summoners/by-name/" .$summoner."?api_key=" .apiKey);

$decodedContents=json_decode($contents);

print_r($contents);

//echo $decodedContents->profileIconId;

?>