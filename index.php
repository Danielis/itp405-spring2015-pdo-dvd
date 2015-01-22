<!DOCTYPE html>
<html>
<head>
	<title>Music Search</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<div class="search-container">
		<form>
		  <!-- Artist: --> <input type="text" id="search" class="huge" name="artist">
		  <!-- <input type="submit" value="Search"> -->
		</form>
	</div>
	<div id="results"></div>

<script type="text/Handlebars" id="result-template">
	<div class="artistBlock">
		<h3>
    		{{title}} by {{artist_name}}
  		</h3>
  		<p>Genre: <a href="genres.php?genre={{genre}}">{{genre}}</a></p>
  		<p>Play Count: {{play_count}}</p>
  		<p>{{price}}</p>
	</div>
</script>	
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="handlebars-v2.0.0.js"></script>
<script src="index.js"></script>
</body>
</html>