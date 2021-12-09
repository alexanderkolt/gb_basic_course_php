<?php
// // print_r($_FILES);
$path ="small/{$_FILES['photo']['name']}";
// if(move_uploaded_file($_FILES['photo']['tmp_name'],$path)){
//     echo "Файл {$_FILES['photo']['name']} был успешно сохранен!";
// }

function changeImage($h, $w, $scr, $newscr, $type){
    $newimg = imagecreatetruecolor($h, $w);
    switch($type){
        case 'jpeg':
            $img = imagecreatefromjpeg($scr);
            imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
            imagejpeg($newimg, $newscr);
            break;
        case 'png':
            $img = imagecreatefrompng($scr);
            imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
            imagepng($newimg, $newscr);
            break;
        case 'gif':
            $img = imagecreatefromgif($scr);
            imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
            imagegif($newimg, $newscr);
            break;
    }
}

if(isset($_FILES['photo'])) {
    $errors     = array();
    $maxsize    = 2097152;
    $acceptable = array(
        'image/jpeg',
        'image/jpg',
        'image/gif',
        'image/png'
    );

    if(($_FILES['photo']['size'] >= $maxsize) || ($_FILES["photo"]["size"] == 0)) {
        $errors[] = 'Файл очень большой. Файл должен быть меньше 2 мегабайт.';
    }

    if((!in_array($_FILES['photo']['type'], $acceptable)) && (!empty($_FILES["photo"]["type"]))) {
        $errors[] = 'Не допустимый формат файла. Только JPG, GIF и PNG форматы допустимы.';
    }

    if(count($errors) === 0) {
        move_uploaded_file($_FILES['photo']['tmp_name'], $path);
        copy($path, "big/{$_FILES['photo']['name']}");
        $type = explode('/',$_FILES['photo']['type'])[1];
        changeImage(100, 150, $path, $path, $type);
        echo "Файл {$_FILES['photo']['name']} был успешно сохранен!";
    } else {
        foreach($errors as $error) {
            echo "$error";
        }
    }
}