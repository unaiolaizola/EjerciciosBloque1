<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        class Ejercicio6{
            function mostrar($potencia,$cantidad){
                $respuesta=0;
                for($i=1;$i<$cantidad;$i++){
                    $respuesta=pow($i,$potencia);
                    if($respuesta<$cantidad){
                        echo "$i-$respuesta <br>";
                    }
                }
            }
        }
        $objeto=new Ejercicio6();
        $objeto->mostrar(3,100);
    ?>
</body>
</html>