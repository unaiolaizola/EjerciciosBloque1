<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        class Ejercicio3{
            function mostrar($edad){
                if($edad<10){
                    echo "Se encuentra entre los 0 y 10 años";
                }
                else if($edad>=10 && $edad<20){
                    echo "Se encuentra entre los 10 y 30 años";
                }
                else if($edad>=20 && $edad<30){
                    echo "Se encuentra entre los 20 y 30 años";
                }
                else if($edad>=30 && $edad<40){
                    echo "Se encuentra entre los 30 y 40 años";
                }
                else if($edad>=40 && $edad<50){
                    echo "Se encuentra entre los 40 y 50 años";
                }
                else if($edad>=50 && $edad<60){
                    echo "Se encuentra entre los 50 y 60 años";
                }
                else if($edad>=60 && $edad<70){
                    echo "Se encuentra entre los 60 y 70 años";
                }
                else if($edad>=70 && $edad<80){
                    echo "Se encuentra entre los 70 y 80 años";
                }
                else if($edad>=80 && $edad<90){
                    echo "Se encuentra entre los 80 y 90 años";
                }
                else if($edad>=90 && $edad<100){
                    echo "Se encuentra entre los 90 y 100 años";
                }
            }
            
        }
        $objeto=new Ejercicio3();
        $objeto->mostrar(23);
        
    ?>
</body>
</html>