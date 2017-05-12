<?php

	//$apiKey = '5e256fa9-68a1-427f-835f-46ce7e1d428e';
	//$summonerName = 'tkess';
	
	//$result = file_get_contents('https://na.api.pvp.net/api/lol/na/v1.4/summoner/by-name/' . $summonerName . '?api_key=' . $apiKey);
	//$summoner = json_decode($result)->$summonerName;
	
?>

<!doctype html>
<html>
<head>
	<title>Lol Search</title>

	<meta charset="utf-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width", initial=scale=1 />

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link href = "css/styles.css" rel = "stylesheet">

</head>

<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
		
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand">LoL Search</a>
			</div>
			
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#home">Home</a></li>
					<li><a href="statistics/champions">Statistics</a></li>
					<li><a href="http://na.leagueoflegends.com/en/news/game-updates/patch/patch-622-notes" target="_blank">Patch Notes</a></li>
				</ul>
				<form class="navbar-form navbar-right">
					<div class="form-group">
						<input type="email" placeholder="Email" class="form-control" />
					</div>
					<div class="form-group">
						<input type="password" placeholder="Password" class="form-control" />
					</div>
					<button type="submit" class="btn btn-success">Log In</button>
					<button type="submit" class="btn btn-success">Register</button>
				</form>
				
			</div>
		</div>
	</div>

	<div class="container contentContainer" id="home">
	
		<div class="row">
			<p class="center"><img src="images/teemo.jpg" class="teemoImage"/>
			<div class="col-md-6 col-md-offset-3 center">
				<form>
					<div class="input-group">
				
					<input type="text" class="form-control" name="summoner" id="summoner" placeholder="Summoner Name">
					
					<span class="input-group-btn">
					
					<button class="btn btn-default glyphicon glyphicon-search" id="searchButton"></button>
					
					</span>
					
					</div><!-- /input-group -->
				</form>
				<div id="success" class="alert alert-success">Success!</div>
				<div id="fail" class="alert alert-danger">Could not find this summoner name.</div>
				<div id="noSummoner" class="alert alert-danger">Please enter a summoner name.</div>
			</div><!-- /.col-lg-6 -->
		</div><!-- /.row -->

	</div>




<script src="//code.jquery.com/jquery-3.1.1.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>

	$(".contentContainer").css("min-height", $(window).height());
	
</script>

<script src="home/home.js"></script>

</body>
</html>