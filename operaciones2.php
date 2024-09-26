<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Document</title>
   
</head>
<body>
    <div class="Contenedor">
        <h1>Funciones y estructuras de control en PHP</h1>
        <div class="izquierda">
            <?php
        
        function operaciones($var1, $var2, $var3){
            
            $resultado = 0;
            if($var2 == "+"){
                $resultado = $var1 + $var3;
                echo  "El resultado de: $var1 + $var3 = ";
                
            }else if($var2 == "-"){
                $resultado = $var1 - $var3;
                echo  "El resultado de: $var1 - $var3 = ";
                
            }else if($var2 == "/"){
                $resultado = $var1 / $var3;
                echo  "El resultado de: $var1 / $var3 = ";
            }
        return $resultado;    
        }
        
        $r = operaciones(12, "/", 3);
        echo "$r </br></br>";        
        echo "La tabla de multiplicar del número $r es: </br></br>";
        
        for($conta = 1; $conta < 11; $conta++){
             
            echo $r.'X'.$conta.'='.$r*$conta.'</br>';
        };

        ?>
        </div>
        <div class="centro">
            <?php
                $r2 = operaciones(20, "-", 4);
                echo "$r2 </br></br>";     
                echo "Los numeros pares entre el 0 y el $r2 son:</br></br>";
                
                $conta = 0;
                while($conta <= $r2){
                    if($conta % 2 == 0){ 
                        echo $conta.'</br>';
                    }
                        $conta++;                    
                }       

            ?>
        </div>

        <div class="derecha">
            <?php
                $r3 = operaciones($r, "+", $r2);
                echo "$r3 </br></br>";
                echo "Los numeros impares entre el 0 y el $r3 son:</br></br>";

                $conta = 0;
                do{
                    if($conta%2 != 0){
                    echo $conta.'</br>';
                    }
                    $conta++;
                    
                }while($conta < $r3);

            ?>          
                           
          
        </div>
    </div>
</body>

</html>