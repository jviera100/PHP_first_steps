<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php        
        $norte= 5;
        $centro= 5;
        $sur= 6;
        $total_regiones= $norte+$centro+$sur;
        $texto= "Chile esta dividido en: ";

        echo "$texto $total_regiones regiones
        </br></br>";
        echo "$norte en el norte. </br> $centro en el centro. </br> $sur en el sur.";
    ?>    
</body>
</html>