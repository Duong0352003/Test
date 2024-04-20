<?php
    set_error_handler(function(int $errno, string $errstr) {
        if ((strpos($errstr, 'Undefined array key') === false) && (strpos($errstr, 'Undefined variable') === false)) {
            return false;
        } else {
            return true;
        }
    }, E_WARNING);
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $x=$_POST['soX'];
        $y=$_POST['soY'];
        if(isset($_POST['tong'])){
            $tong=$x+$y;
        }
        if(isset($_POST['hieu'])){
            $hieu=$x-$y;
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Calculation</title>
    </head>
    <body>
        <form action="Cal.php" method="Post">
            Nhap x: <input type='text' name="soX" value=<?php echo $x?>><br><br>
            Nhap y: <input type='text' name="soY" value=<?php echo $y?>><br><br>
            <input type="submit" value="Add" name='tong'>
            <input type="submit" value="Minus" name='hieu'>
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD']=='POST'){
                ?>
                <p>Result:</p>
                <p>Tong: <?php echo $tong?></p>
                <p>Hieu: <?php echo $hieu?></p>
            <?php
            }
            ?>
    </body>
</html>
