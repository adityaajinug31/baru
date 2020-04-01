<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar php operator 2</title>
</head>
<body>
    <?php
        $a = 5;
        $b = 4;
        $c = ($a==$b);
        $d = ($a !=$b);
        $e = ($a > $b);
        $f = ($a < $b);
        $g = (($a != $b) && ($a > $b));
        $h = (($a != $b) || ($a > $b));
      

        echo "$a == $b : ".$c;
        echo "<br>$a != $b : ".$d;
        echo "<br>$a > $b : ".$e;
        echo "<br>$a a > $b : ".$f;
        echo "<br>($a == $b) && ($a > $b) : ".$g;
        echo "<br>($a == $b) || ($a > $b) : ".$g;
    ?>
    
</body>
</html>