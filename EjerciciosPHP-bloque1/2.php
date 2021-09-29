<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        class Ejercicio2{

            function numeroMasGrande($num1,$num2,$num3){
                if(($num1>$num2) && ($num1>$num3)){
                    echo $num1;
                }
                else if(($num2>$num1) && ($num2>$num3)){
                    echo $num2;
                }
                else{
                    echo $num3;
                }
            }
        }
        $objeto=new Ejercicio2();
        $objeto->numeroMasGrande(1,2,3);
        
    ?>
</body>
</html>