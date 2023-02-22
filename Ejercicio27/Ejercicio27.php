<?php

    function encabezado($Navegacion)
        {
        $encabezado ="<html><head><title>$Navegacion</title></head>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>

        <body>

            <ul class='nav justify-content-center'>
                <li class='nav-item'>
                    <a class='nav-link active' href='#' pointer>Inicio</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link ' href='#'>Producto</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link ' href='#'>Registro</a>
                </li>
            </ul>";
            
        print $encabezado;
        
    }

?>