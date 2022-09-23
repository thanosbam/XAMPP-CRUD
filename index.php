<?php


$pdo = new PDO('mysql:host=localhost;port=3306;dbname=music', 'root', ''); //connection with the database
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $pdo->prepare('SELECT * FROM ALBUM'); //record selection
$statement->execute();
$music = $statement->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
var_dump($music);
echo '</pre>';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Music crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet";>
</head>
  <body>
    <h1>Music crud</h1>

<p>
  <a href ='add.php' class='btn btn-success'>Add album</a>
</p>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">album_id</th>
        <th scope="col">title</th>
        <th scope="col">artist_id</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
    <?php 
      foreach ($music as $i => $song) { ?>
      <tr>
        <th scope="row"><?php echo $i + 1?></th>
        <td> <?php echo $song["album_id"]?> </td>
        <td> <?php echo $song["title"]?> </td>
        <td> <?php echo $song["artist_id"]?> </td>
        <td> 
          <button type="button" class="btn btn-sm btn-outline-primary">download</button>
          <button type="button" class="btn btn-sm btn-danger">delete</button>
        </td>
    <?php }
    ?>
    </tbody>
  </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>