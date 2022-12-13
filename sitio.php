<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algoritmo </title>
</head>
<body>
    <center><big>INGRESE LOS DATOS SOLICITADOS</center></big>
    <form name="datos"method="post" actions="">
        <div>
            Ingrese un digito:
            <input type="number" name="uno" value="">
        </div>
        
        <div>
            Ingrese un digito:
           <input type="number" name="dos" value="">
        </div>

        <div>
            Ingrese cuatro digitos:
            <input type="number" name="tres" value="">
        </div>

        <div>
            Ingrese cuatro digitos:
            <input type="number" name="cuatro" value="">
        </div>

        <div>
            <input type="submit" name="calcular" value="Calcular">
        </div>

    </form>
</body>
</html>

<?php
error_reporting(0);

if(isset ($_POST['calcular'])){
    $num1=$_POST['uno'];
    $num2=$_POST['dos'];
    $num3=$_POST['tres'];
    $num4=$_POST['cuatro'];

    if ($num1<$num2){
        $min=$num1;
    }else
        $min=$num2;
        echo "El minimo es: $min ";  
    
    if ($num3>$num4){
        $max=$num3;
    }else
        $max=$num4;
        echo "El maximo es: $max ";
}

for ($i=$min; $i<=$max; $i++){
    $suma=$suma + $i;
}
echo "La suma es: $suma";