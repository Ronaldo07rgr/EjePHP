
<?php

$nom="Ronaldo Stiven";
$apel="Rosero Gutierrez";

$tdoc="C.C";
$ndoc="1081393893";
$nmovil="3154875304";


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

    <div class="container-sm">
        <h2 class="text-center">Formulario</h2>

        <form>

            <div class="mb-3">
                <label class="form-label">Nombre del aprendiz</label>
                <input class="form-control form-control p-3 text-dark  border-light bg-light rounded-3"  value="<?php echo $nom; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Apellido del aprendiz</label>
                <input class="form-control form-control p-3 text-dark  border-light bg-light rounded-3" value="<?php echo $apel; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo de documento</label>
                <input class="form-control form-control p-3 text-dark  border-light bg-light rounded-3" value="<?php echo $tdoc; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">numero de documento</label>
                <input class="form-control form-control p-3 text-dark  border-light bg-light rounded-3" value="<?php echo $ndoc; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Telefono</label>
                <input class="form-control form-control p-3 text-dark  border-light bg-light rounded-3" value="<?php echo $nmovil; ?>">
            </div>
                
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
   



