<!DOCTYPE html>
<html>
<head>
	<title>DVD Search</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<div class="searchBackDrop"></div>
	<div class="search-container">
		<form>
		  <input type="text" id="search" class="huge" name="artist">
		</form>
	</div>
	<div id="results"></div>

<script type="text/Handlebars" id="result-template">
	<div class="dvdBlock">
		<h3>
    		{{title}} <span class="label">by {{label}}</span>
  		</h3>
  		<p>Genre: {{genre}}</p>
  		<p>Format: {{format}}</p>
  		<p>Rating: <a class="Rating">{{rating}}</a></p>
	</div>
</script>	
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="handlebars-v2.0.0.js"></script>
<script src="index.js"></script>
</body>
</html>