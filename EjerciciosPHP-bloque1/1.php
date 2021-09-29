<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        class Ejercicio1{
            function mostrar(){
                for($i=1;$i<=10;$i++){
                    for($j=1;$j<=3;$j++){
                        echo "$i-$j <br>";
                    }
                }
            }
        }
        $objeto=new Ejercicio1();
        $objeto->mostrar();
        
    ?>
</body>
</html>