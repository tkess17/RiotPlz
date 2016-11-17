$("#searchButton").click(function(event) {

	event.preventDefault();

	$(".alert").hide();

	if ($("#summoner").val()!="") {

		$.get("home/home.php?summoner="+$("#summoner").val(), function(data) {	

		if (data =="") {

			$("#fail").fadeIn();

		} else {

			$("#success").html(data).fadeIn();
		}

	});
	} else {
		$("#noSummoner").fadeIn();
	}

});