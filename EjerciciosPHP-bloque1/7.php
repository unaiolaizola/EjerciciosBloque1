<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        class Ejercicio7{
            
            function mostrar($num){
                while($num!=1){
                    if($num%2==0){
                        $num=$num/2;
                        echo "$num ";
                    }
                    else{
                        $num=$num*3+1;
                        echo "$num ";
                    }
                }
            }
        }
        $objeto=new Ejercicio7();
        $objeto->mostrar(26);
    ?>
</body>
</html>