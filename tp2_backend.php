<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tp 2</h1>
    <?php
    $n=2;
    $n2=11;

    if ($n>0) {
      echo "la variable es un numero positivo";
      echo "<br>";
    }
    if ($n<10 & $n>1) {
        echo "la variable es un número mayor a 1 y menor a 10.";
        echo "<br>";
    } 
    if ($n2>10 || $n2>2) {
        echo "la variable es un número mayor a 10 o menor a 2.";
        echo"<br>";
    }

    $numero1=10;
    $numero2=5;

    if ($numero1>$numero2) {
        echo "el numero 1 es mayor a numero 2";
        echo "<br>";
        echo $numero1-$numero2;
        echo "<br>";
        echo $numero1+$numero2;
        echo "<br>";
        
    } elseif ($numero1<$numero2) {
        echo "el numero 1 es menor a numero 2";
        echo "<br>";
        echo $numero1*$numero2;
        echo "<br>";
        echo $numero1/$numero2;
        echo "<br>";
        echo $numero1%$numero2;
        echo "<br>";
    }
    if ($numero1==$numero2) {
        echo "los numeros ingresados son iguales";
    }


    ?>
    
</body>
</html>