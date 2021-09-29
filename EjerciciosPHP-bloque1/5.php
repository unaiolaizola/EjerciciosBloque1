<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        class Ejercicio5{

            function mostrar($edad,$altura,$acompañado){
                if($edad>10 || $altura>120 || $acompañado==true){
                    echo "Se puede subir";
                }
                else{
                    echo "No se puede subir";
                }
            }
        }
        $objeto=new Ejercicio5();
        $objeto->mostrar(9,118,false)
        
    ?>
</body>
</html>