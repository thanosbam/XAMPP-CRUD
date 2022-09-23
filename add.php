<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=music', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//title = $_POST['title'];
//$statement = $pdo-> prepare("INSERT INTO album(title) VALUES(:title)");
//$statement->bindValue(':title', $title);

//$statement->execute();

$title = '';
    

if (isset($_POST['title']))
{
    $title = $_POST['title'];
}

$pdo->exec("INSERT INTO album(title) VALUES ('$title')");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Music crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="app.css" rel="stylesheet";>
</head>
<body>
    <h1>Add a new album</h1>

    <form action="add.php" method="post">
        <div class="mb-3">
            <label>Album title</label>
                <br>
            <input type="text" name="title">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>
</html>