<?php

$summoner=$_GET['summoner'];

$summoner=str_replace(" ", "", $summoner);

$contents=@file_get_contents("https://na.api.pvp.net/api/lol/na/v1.4/summoner/by-name/".$summoner."?api_key=5e256fa9-68a1-427f-835f-46ce7e1d428e");

//$decodedContents=json_decode($contents);

print_r($contents);

?>