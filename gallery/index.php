<?php
include_once 'server.php'
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
$files = scandir("small");
// print_r($files);
for($i=2; $i < count($files); $i++){?>
    <a href="fullimage.php?img=<?= $files[$i]?>"><img width="calc( 100vw/ 3 )" height="calc( 100vw / 3 )" src="small/<?=$files[$i]?>" alt=""></a>
<?php }
?>
<form action="" method="post" enctype="multipart/form-data">
    <p>Загрузите файл</p>
    <input type="file" name="photo" accept="image/*"><br><br>
    <input type="submit" value="Сохранить">
</form>
</div>
</body>
</html>