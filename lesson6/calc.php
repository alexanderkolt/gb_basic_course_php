<?php
if(isset($_POST['x']))
    $x = (int)($_POST['x']);
else 
    $x=10;
if(isset($_POST['y']))
    $y = (int)($_POST['y']);
else 
    $y=10;
if(isset($_POST['activity']))
    $activity=htmlspecialchars($_POST['activity']);
else 
    $activity='+';


if(isset($x)&&isset($y))
    switch($activity){  
            case '+':
                $z=$x+$y;
                break;
            case '-':
                $z=$x-$y;
                break;
            case '*':
                $z=$x*$y;
                break;
            case '/':
                if ($y!=0) $z=$x/$y;
                else $z='infinity';
        }


?>





<form action="" name="calc" method="POST">
    <p>Калькулятор</p>
    <input type="number" name="x" value="<?= $x;?>">
    <select name="activity" >
        <option <?php if ($activity=="-") echo "selected"?> value="-">-</option>
        <option <?php if ($activity=="+") echo "selected"?> value="+">+</option>
        <option <?php if ($activity=="/") echo "selected"?> value="/">/</option>
        <option <?php if ($activity=="*") echo "selected"?> value="*">*</option>
    </select>
    <input type="number" name="y" value="<?= $y;?>">
    <input type="submit" name="=" value="=">
    <b><?php if (isset($z)) echo "$z"?></b>
    

 
</form>
