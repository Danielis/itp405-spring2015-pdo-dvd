<?php 

$host = 'itp460.usc.edu';
$dbname = 'music';
$user = 'student';
$pass = 'ttrojan';

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

$genre = $_GET['genre'];

echo $genre;

$sql = "
	SELECT title, artist_name
	FROM songs
	INNER JOIN genres
	ON genres.id = songs.genre_id
	INNER JOIN artists
	ON artists.id = songs.artist_id
	WHERE genres.genre = ?
";

$statement = $pdo->prepare($sql);
$statement->bindParam(1, $genre);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_OBJ);

var_dump($results);