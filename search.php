<?php 

if (!isset($_GET['searchTerm'])) {
  header('Location: index.php');
}

$host = 'itp460.usc.edu';
$dbname = 'dvd';
$user = 'student';
$pass = 'ttrojan';

$searchTerm = $_GET['searchTerm']; // $_REQUEST['searchTerm']

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
  WHERE title LIKE ?
  ORDER BY title ASC
";

$statement = $pdo->prepare($sql);
$like = '%'.$searchTerm.'%';
$statement->bindParam(1, $like);
$statement->execute();
$dvds = $statement->fetchAll(PDO::FETCH_OBJ);
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