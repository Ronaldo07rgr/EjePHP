
<?php

$var1=2030;
$var2=125;

$resultado1=($var1 + $var2);
$resultado2=($var1 - $var2);
$resultado3=($var1 * $var2);
$resultado4=($var1 / $var2);

echo "<br>La suma de los valores es:" .$resultado1;
echo "<br> La resta de los valores es:" .$resultado2;
echo "<br> La multiplicación de los valores es:" .$resultado3;
echo "<br> La divicion de los valores es:" .$resultado4;  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2>Formulario</h2>
        <div class="container-sm">
            <form>

                <label>Valor 1:</label>
                <input  value= "<?php echo $var1; ?>"> 

                <label>Valor 2:</label>
                <input  value= "<?php echo $var2; ?>"> 

                <input type="submit">
                
            </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
   



