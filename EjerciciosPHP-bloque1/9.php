<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>
    <?php
        class Ejercicio9{
            function mostrar($cantidad){
                $comision=0;
                if($cantidad<10000){
                    $comision=$cantidad*0.05;
                    echo "La comison es $comision";
                }
                else if($cantidad>10000 && $cantidad<20000){
                    $comision=$cantidad*0.08;
                    echo "La comison es $comision";
                }
                else if($cantidad>20000 && $cantidad<40000){
                    $comision=$cantidad*0.1;
                    echo "La comison es $comision";
                }
                else{
                    $comision=$cantidad*0.13;
                    echo "La comison es $comision";
                }
            }
        }
        $objeto=new Ejercicio9();
        $objeto->mostrar(42000);
    ?>
</body>
</html>