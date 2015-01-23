<?php 

if (!isset($_GET['genre'])) {
  header('Location: index.php');
}

$host = 'itp460.usc.edu';
$dbname = 'dvd';
$user = 'student';
$pass = 'ttrojan';

$genre = $_GET['genre']; // $_REQUEST['genre']

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

$sql = "
  SELECT title, label_name as label, genre_name as genre, format_name as format, rating_name as rating
  FROM dvds
  INNER JOIN labels
  ON dvds.label_id = labels.id
  INNER JOIN genres
  ON dvds.genre_id = genres.id
  INNER JOIN formats
  ON dvds.format_id = formats.id
  INNER JOIN ratings
  ON dvds.rating_id = ratings.id
  WHERE rating_name = ?
  ORDER BY title ASC
";

$statement = $pdo->prepare($sql);
$statement->bindParam(1, $genre);
$statement->execute();
$dvds = $statement->fetchAll(PDO::FETCH_OBJ);
// echo "UTF8 causing json_encode(value) not to work for:";
foreach ($dvds as $key => $dvd){
    $temp = json_encode($dvd);
    if($temp == "" || $temp==NULL){
       // echo "* **".$key."**";
       // var_dump($dvd);
       // echo json_encode($dvd);
       // unset($dvds[$key]);
    }
    else{
      $dvds2[] = $dvd;
    }
}
echo json_encode($dvds2);
?>