<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        class Ejercicio8{
            function mostrar($base){
                $asteriscos="*";
                $numEspacios=$base;
                for($i=0;$i<$base/2;$i++){
                    for($j=0;$j<$numEspacios/2;$j++){
                        echo "&nbsp;&nbsp";
                    }
                    echo "$asteriscos <br>";
                    $asteriscos.="**";
                    $numEspacios=$numEspacios-2;
                    
                }
            }
        }
        $objeto=new Ejercicio8();
        $objeto->mostrar(23);
    ?>
</body>
</html>