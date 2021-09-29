<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        class Ejercicio4{
            function mostrar($texto){
                $textoSinEspacios=str_replace(' ', '', $texto);
                $textoDelReves=strrev($texto);
                
                if($textoDelReves==$texto){
                    echo "Es un palindromo";
                }
                else{
                    echo "No es un palindromo";
                }
            }
        }
        $objeto=new Ejercicio4();
        $objeto->mostrar("oso oso");
        
    ?>
</body>
</html>