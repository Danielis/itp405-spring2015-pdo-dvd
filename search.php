<?php 

if (!isset($_GET['artist'])) {
  header('Location: index.php');
}

$host = 'itp460.usc.edu';
$dbname = 'music';
$user = 'student';
$pass = 'ttrojan';

$artist = $_GET['artist']; // $_REQUEST['artist']

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

// $sql = "
//   SELECT title, price, play_count, artist_name
//   FROM songs
//   INNER JOIN artists
//   ON songs.artist_id = artists.id
//   WHERE artist_name = ?
//   ORDER BY play_count DESC
// ";
// $statement = $pdo->prepare($sql);
// $statement->bindParam(1, $artist);


$sql = "
  SELECT title, price, play_count, artist_name, genre
  FROM songs
  INNER JOIN artists
  ON songs.artist_id = artists.id
  INNER JOIN genres
  ON songs.genre_id = genres.id
  WHERE artist_name LIKE ?
  ORDER BY play_count DESC
";
// $sql = "
//   SELECT title, price, play_count, artist_name
//   FROM songs, artists
//   WHERE songs.artist_id = artists.id
//   AND artist_name LIKE ?
//   ORDER BY play_count DESC
// ";
$statement = $pdo->prepare($sql);
$like = '%'.$artist.'%';
$statement->bindParam(1, $like);
$statement->execute();
$songs = $statement->fetchAll(PDO::FETCH_OBJ);
echo json_encode($songs);
?>