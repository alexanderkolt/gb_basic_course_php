<?php
include_once 'server.php';
$sql = "SELECT * FROM images";
$table = mysqli_query($connect,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 style="text-align:center">Моя галерея.</h2>
<div style="display:flex; flex-wrap:wrap; justify-content: space-evenly">
<?php

while ($data = mysqli_fetch_assoc($table)): ?>
    <a href="fullimage.php?img=<?= $data['images']?>"><img width="calc( 100vw/ 3 )" height="calc( 100vw / 3 )" src="small/<?= $data['images']?>" alt=""></a>
<?php endwhile;
?>
<form action="" method="post" enctype="multipart/form-data">
    <p>Загрузите файл</p>
    <input type="file" name="photo" accept="image/*"><br><br>
    <input type="submit" value="Сохранить">
</form>
</div>
</body>
</html>