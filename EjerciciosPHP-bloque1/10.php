<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        class Ejercicio10{
            function mostrar($total_compra,$tipo_compra){
                $precio_final=0;
                if($total_compra<19){
                    if($tipo_compra="mascotas"){
                        echo "No se ha podido realizar el envio";
                    }
                    else{
                        echo "Los gastos de envio son 9 euros <br>";
                        $precio_final+=($total_compra+9)*0.21;
                        echo "Precio final: $precio_final";
                    }
                }
                else if($total_compra>19 && $total_compra<40){
                    echo "Los gastos de envio son 9 euros <br>";
                    $precio_final=$total_compra+9;
                    if($tipo_compra=="mascotas"){
                        $precio_final+=$precio_final*0.1;
                        echo "Precio final: $precio_final";
                    }
                    else{
                        $precio_final+=$precio_final*0.21;
                        echo "Precio final: $precio_final";
                    }
                }
                else if($total_compra>80){
                    echo "Los portes de envio son gratis <br>";
                    $precio_final=$total_compra;
                    if($tipo_compra=="mascotas"){
                        $precio_final+=$precio_final*0.1;
                        echo "Precio final: $precio_final";
                    }
                    else{
                        $precio_final+=$precio_final*0.21;
                        echo "Precio final: $precio_final";
                    }
                }
            }
        }
        $objeto=new Ejercicio10();
        $objeto->mostrar(81.55,"mascotas");
    ?>
</body>
</html>