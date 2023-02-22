<?php

//Variacion utilizando strlen//

    $i = 0;
    $array="Tecnologo en ADSO";

    while($i <= strlen($array) -1)

    {
        
        print $array[$i]. "";
        $i++;
       
    }

    //Variacion utilizando substr//

    $i = 0;
    $array="Tecnologo en ADSO";

    while($i <= strlen($array) -1)

    {
        echo "[".substr($array, $i)."]<br>";
        $i++;
    }

?>



